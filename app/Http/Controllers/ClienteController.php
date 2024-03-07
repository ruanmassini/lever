<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\View\View; 

class ClienteController extends Controller
{
    // Listagem
    public function index(): View
    {
        $findCliente = Cliente::all(); // findCliente[] = SELECT * FROM cliente

        foreach($findCliente as $cliente){
            if($cliente->tipo_pessoa == "pf"){
                $cliente->tipo_pessoa = "Pessoa Física";
            }elseif($cliente->tipo_pessoa == "pj"){
                $cliente->tipo_pessoa = "Pessoa Jurídica";
            }
        }

        return view('cliente.index', compact('findCliente'));
    }
    
    // CRUD
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
            $cliente = Cliente::find($id); // $cliente = SELECT * FROM cliente WHERE id = $id
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
        $cliente = Cliente::find($id); // $cliente = SELECT * FROM cliente WHERE id = $id
        $cliente->delete();
        return redirect()->route('cliente.index');
    }
    // End CRUD
}
