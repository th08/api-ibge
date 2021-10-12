@extends('layouts.app')

@section('content')

    <h1>Adicionar</h1>
    <form action="{{route('salvar')}}" method="POST">
        @include('layouts._inc.form')
        <div class="row">
            <div class="col-md-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-success btn-lg">Salvar</button>
            </div>
        </div>
    </form>
    
@endsection