<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(): View
    {
        $findProducts = Product::all(); // Get all products
        return view('product.index', compact('findProducts'));
    }
    
    public function create(): View
    {
        return view('products.create');
    }
}
