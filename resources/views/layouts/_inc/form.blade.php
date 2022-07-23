@csrf
<div class="row">
    <div class="col-6">

        <div class="form-group">
            <label for="">Nome</label>
            <input type="text" name="nome" id="" class="form-control" value="{{isset($registro->nome) ? $registro->nome:old('nome')}}">
        </div>

    </div>
    <div class="col-6">

        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" id="" class="form-control" value="{{isset($registro->email) ? $registro->email:old('email')}}">
        </div>

    </div>
</div>

<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label for="">Selecione seu estado</label>
            <select name="estado_id" id="select-state" class="form-control">
                @foreach ($estados as $estado)                          
                <option value="{{isset($estado->id ) ? $estado->id : old('estado_id')}}" {{ old('estado_id') == $estado->id ? "selected" :""}}>{{isset($estado->nomeEstado) ? $estado->nomeEstado : ''}}</option>                        
                @endforeach                      
            </select>
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <label for="">Selecione sua cidade</label>
            <select name="cidade" id="select-city" class="form-control" data-live-search="true">
                <option value="{{!isset($registro->cidade) ? old('cidade') : $registro->cidade }}">{{!isset($registro->cidade) ? old('cidade') : $registro->cidade }}</option>
            </select>
        </div>
    </div>
</div>
