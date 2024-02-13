<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(): View
    {
        return view('base.navbar', [
            'product' => DB::table('product')->paginate(15)
        ]);
    }
}
