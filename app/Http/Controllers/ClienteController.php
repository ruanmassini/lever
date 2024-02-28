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
}
