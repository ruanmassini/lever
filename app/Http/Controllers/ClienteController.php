<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(): View
    {
        $findProducts = Product::all(); // Get all products
        return view('products.index', compact('findProducts'));
    }
}
