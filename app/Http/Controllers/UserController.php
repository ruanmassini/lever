<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(): View
    {
        $findUser = User::all();

        return view('user.index', compact('findUser'));
    }

    public function create(Request $request): View 
    {
        if($request->isMethod('post')){
            $user = new User();
            $user->name = $request->nome;
        }else{
            return view('user.create');
        }
    }
}
