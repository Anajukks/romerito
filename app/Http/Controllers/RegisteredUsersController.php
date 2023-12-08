<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Hash;
use Auth;

class RegisteredUsersController extends Controller
{
    //
    public function create () {
        return view('auth.register');
    }

    public function store (Request $request) {

        $name = $request->name;
        $email = $request->email;
        $password = $request->password;

        $user = new User;
        $user->name = $name;
        $user->email = $email;
        $user->password = Hash::make($password);
        $user->save();
        
        //tenta logar o usuário
        Auth::login($user);
        
        return redirect('/dashboard');
    }
}
