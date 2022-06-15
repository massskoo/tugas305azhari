<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function simpanuser(Request $request) 
    { 
        $user = User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return redirect('/register');
    }

    public function login()
    {
        return view('login');
    }

    public function cekmasuk(Request $request)
    {
        if (!Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]))
        {
             return redirect('/');
        }
        else
        {
            $blog = DB::table('users')->where('email', $request->email)->first();

            return redirect('/home');
        }
    }
}