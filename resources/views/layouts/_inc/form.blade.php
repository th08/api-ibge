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
                    <select name="estado" id="select-state" class="form-control">
                        <option value="{{!isset($registro->estado) ? old('estado') : $registro->estado }}">{{!isset($registro->estado) ? old('estado') : $registro->estado }}</option>
                    </select>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="">Selecione sua cidade</label>
                    <select name="cidade" id="select-city" class="form-control">
                        <option value="{{!isset($registro->cidade) ? old('cidade') : $registro->cidade }}">{{!isset($registro->cidade) ? old('cidade') : $registro->cidade }}</option>
                    </select>
                </div>
            </div>
        </div>
