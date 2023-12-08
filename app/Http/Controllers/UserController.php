<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class UserController extends Controller
{
    public function create () {
        return view('auth.login');
    }

    public function destroy (Request $request) {

        Auth::logout();
        $request->session()->invalidate();
        // $request->tokenRegenerate();
        return redirect(url('/'));

    }

    public function store (Request $request) {
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
        
            $request->session()->regenerate();
 
            return redirect('/dashboard');
        }
        
 
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        }
}