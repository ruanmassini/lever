<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        $findProducts = Product::all(); // Get all products
        return view('products.pagination', compact('findProducts'));
    }
}
