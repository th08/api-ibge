@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                  <tr class="text-center">
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Ação</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($registro as $reg)               
                    <tr class="text-center">
                      <th scope="row">{{$reg->nome}}</th>
                      <td>{{$reg->email}}</td>
                      <td>{{$reg->nomeEstado}}</td>
                      <td>{{$reg->cidade}}</td>
                      <td>
                          <a href="{{route('editar', $reg->id)}}" class="btn btn-primary">Editar</a>
                          <a href="{{route('deletar', $reg->id)}}" class="btn btn-danger" onclick="return confirm('Deseja realmente excluir esse registro? ')">Apagar</a>
                      </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 d-flex justify-content-end">
            <a class="btn btn-success btn-lg" href="{{route('adicionar')}}">Adicionar</a>
        </div>
    </div>
@endsection