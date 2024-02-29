<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\View\View; 

class ClienteController extends Controller
{
    public function index(): View
    {
        $findProducts = Product::all(); // Get all products
        return view('product.index', compact('findProducts'));
    }
    
    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $product = new Product();
            $product->nome = $request->nome;
            $product->valor = $request->valor;
            $product->save();
            return redirect()->route('cliente.index');
        }
        return view('product.create');
    }

    public function update(Request $request, $id)
    {
        if ($request->isMethod('put')) {
            $product = Product::find($id);
            $product->nome = $request->nome;
            $product->valor = $request->valor;
            $product->save();
            return redirect()->route('cliente.index');
        }
        $product = Product::find($id);
        return view('product.update', compact('product'));
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('cliente.index');
    }
}
