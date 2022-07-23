$(() => {

    function loadStates(){
        let idState;
        $.get('https://servicodados.ibge.gov.br/api/v1/localidades/estados', function(response){       
            if(response !== '' ){
                $('#select-state option:not(:selected)').remove();
                $.each(response, ((index, item) => {
                    let opt =  `<option data-tokens="${item.nome}" value="${item.id}" data-estado="${item.id}" class="option">${item.nome}</option>`
                    $('#select-state').append(opt);
                }));
            
                idState = ($('#select-state').val());

                $.get(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${idState}/distritos`, function(cidade){
                    if(cidade !== '' ){
                        $.each(cidade, ((index, item) => {
                            let optCity =  `<option data-tokens="${item.nome}" value="${item.nome}" data-city="${item.id}" class="option">${item.nome}</option>`
                            $('#select-city').append(optCity);
                        }));
                    }
                })
            }
        })
    }

    $('#select-state').on('change', e => {
        $('#select-city option').remove();
        loadStates();
    });
    loadStates();

    $('#select-state').select2({
        placeholder: "Selecione o estado",
        allowClear: true,
        formatNoMatches: function(term) {       
            return "<h6 style='color:red'>Nenhum registro encontrado<h6>";
        }
    });
    $('#select-city').select2({
        placeholder: "Selecione a cidade",
        allowClear: true,
        formatNoMatches: function(term) {       
            return "<h6 style='color:red'>Nenhum registro encontrado<h6>";
        }
    });
    
});