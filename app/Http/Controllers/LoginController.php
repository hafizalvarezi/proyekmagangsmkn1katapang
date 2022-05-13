<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
public function login(){
    return view('login');
}

public function home(){
    return view('member');       
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
    return view('login');
}
}
