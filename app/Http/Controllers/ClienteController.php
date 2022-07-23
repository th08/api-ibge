<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClienteRequest;
use App\Cliente;
use App\Estado;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    public function index(){
        $registro = DB::table('clientes')
        ->join('estados', 'estados.id', 'clientes.estado_id')
        ->select('clientes.id','clientes.nome','clientes.email','estados.nomeEstado','clientes.cidade')->get();
        return view('index', compact('registro'));
        
    }

    public function adicionar(){
        $estados = Estado::all();
        return view('adicionar',compact('estados'));
    }

    public function salvar(ClienteRequest $req){
        $req->validate([]);
        $registro = $req->all();
        Cliente::create($registro);
        return redirect()->route('home');
    }

    public function editar($id){
        $registro = Cliente::find($id);
        $estados = Estado::all();
        return view('editar',compact('estados', 'registro'));
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
