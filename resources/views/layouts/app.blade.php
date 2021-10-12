<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>

    <div class="container my-5">
        
        @yield('content')

    </div>


    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        loadStates();

        function loadStates(){
            let idState;
            $.get('https://servicodados.ibge.gov.br/api/v1/localidades/estados', function(response){       
                if(response !== '' ){
                    
                    $('#select-state option:not(:selected)').remove();
                    $('#select-city option:not(:selected)').remove();
                    
                    $.each(response, ((index, item) => {
                        
                        let opt =  `<option value="${item.nome}" data-estado="${item.id}" class="option">${item.nome}</option>`
                        $('#select-state').append(opt);
                    }));
                    
                    idState = ($('#select-state :selected').data('estado'));
                    
                    $.get(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${idState}/distritos`, function(cidade){
                        if(cidade !== '' ){
                            $.each(cidade, ((index, item) => {
                                let optCity =  `<option value="${item.nome}" data-city="${item.id}" class="option">${item.nome}</option>`
                                $('#select-city').append(optCity);
                            }));
                        }
                    })
                    
                }
            })
        }

        $('#select-state').select2();
        $('#select-city').select2();

        $('#select-state').on('change', e => {
            loadStates();
            $('#select-city').val('');
        });
    </script>
</body>
</html>