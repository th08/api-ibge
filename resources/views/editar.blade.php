@extends('layouts.app')

@section('content')

    <h1>Editar</h1>
    <form action="{{route('atualizar', $registro->id)}}" method="POST">
        @include('layouts._inc.form-edit')
        <div class="row">
            <div class="col-md-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary btn-lg">Editar</button>
            </div>
        </div>
    </form>
    
@endsection