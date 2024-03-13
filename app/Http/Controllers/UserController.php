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

    public function update(Request $request, $id)
    {
        if ($request->isMethod('put')) {
            $user = User::find($id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->save();
            return redirect()->route('user.index');
        }
        $user = User::find($id);
        return view('user.update', compact('user'));
    }
}
