<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClienteRequest;
use App\Cliente;

class ClienteController extends Controller
{
    public function index(){
        $registro = Cliente::all();
        return view('index', compact('registro'));
    }

    public function adicionar(){
        return view('adicionar');
    }

    public function salvar(ClienteRequest $req){
        $req->validate([]);
        $registro = $req->all();
        Cliente::create($registro);
        return redirect()->route('home');
    }

    public function editar($id){
        $registro = Cliente::find($id);
        return view('editar',compact('registro'));
    }

    public function atualizar(ClienteRequest $req, $id){
        $registro = $req->all();
        $req->validate([]);
        
        Cliente::find($id)->update($registro);

        return redirect()->route('home');
        
    }

    public function deletar($id){
        $registro = Cliente::find($id);
        $registro->delete();
        return redirect()->route('home');
    }
}
