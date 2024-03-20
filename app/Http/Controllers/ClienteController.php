<?php

namespace App\Http\Controllers;
use Spatie\RouteAttributes\Attributes\Get;
use Spatie\RouteAttributes\Attributes\Post;
use Spatie\RouteAttributes\Attributes\Put;
use Spatie\RouteAttributes\Attributes\Delete;
use Spatie\RouteAttributes\Attributes\Prefix;
use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\View\View; 

#[Prefix('cliente')]
class ClienteController extends Controller
{
    // Listagem
    #[Get('index', name: 'cliente.index')]
    public function index(): View
    {
        $findCliente = Cliente::all();

        foreach($findCliente as $cliente){
            if($cliente->tipo_pessoa == "pf"){
                $cliente->tipo_pessoa = "Pessoa Física";
            }elseif($cliente->tipo_pessoa == "pj"){
                $cliente->tipo_pessoa = "Pessoa Jurídica";
            }
        }

        return view('cliente.index', compact('findCliente'));
    }
    
    #[Get('create', name: 'cliente.create')]
    #[Post('create', name: 'cliente.create')]
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

    #[Get('update/{id}', name: 'cliente.update')]
    #[Put('update/{id}', name: 'cliente.update')]
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

    #[Delete('delete', name: 'cliente.delete')]
    public function delete($id)
    {
        $cliente = Cliente::find($id); // $cliente = SELECT * FROM cliente WHERE id = $id
        $cliente->delete();
        return redirect()->route('cliente.index');
    }
}
