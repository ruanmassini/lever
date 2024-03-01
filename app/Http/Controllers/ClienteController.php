<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\View\View; 

class ClienteController extends Controller
{
    public function index(): View
    {
        $findCliente = Cliente::all(); // Get all Cliente
        return view('cliente.index', compact('findCliente'));
    }
    
    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $cliente = new Cliente();
            $cliente->nome = $request->nome;
            $cliente->cpf_cnpj = $request->cpf_cnpj;
            $cliente->tipo_pessoa = $request->tipo_pessoa;
            $cliente->cidade = $request->cidade;
            $cliente->save();
            return redirect()->route('cliente.index');
        }
        return view('cliente.create');
    }

    public function update(Request $request, $id)
    {
        if ($request->isMethod('put')) {
            $cliente = Cliente::find($id);
            $cliente->nome = $request->nome;
            $cliente->cpf_cnpj = $request->cpf_cnpj;
            $cliente->tipo_pessoa = $request->tipo_pessoa;
            $cliente->cidade = $request->cidade;
            $cliente->save();
            return redirect()->route('cliente.index');
        }
        $cliente = Cliente::find($id);
        return view('cliente.update', compact('cliente'));
    }

    public function delete($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect()->route('cliente.index');
    }
}
