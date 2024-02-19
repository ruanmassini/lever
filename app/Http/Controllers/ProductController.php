<?php

namespace App\Http\Controllers;
use App\Models\Product; // Add the import statement for the Product model
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        $findProducts = Product::all(); // Get all products
        return view('products.index', compact('findProducts'));
    }
    
    public function create(): View
    {
        return view('products.create');
    }
}
