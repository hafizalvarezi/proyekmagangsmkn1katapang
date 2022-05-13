<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
public function login(){
    return view('login');  
}

public function actionlogin(Request $request)
{
    $data = [
        'email' => $request->input('email'),
        'password' => $request->input('password'),
    ];

    if (Auth::Attempt($data)) {
        return redirect('home');
    }else{
        return back()->with('toast_error', 'Email / Password Salah!');
    }
}


public function registrasi(){
    return view('registrasi');
}

public function simpanregistrasi(Request $request){
    //dd($request->all());
    User::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password' => bcrypt($request->password),
        'remember_token'=>Str::random(60),             
    ]);
    return redirect('login')->with('success', 'Akun Berhasil Ditambahkan!');
}
}
