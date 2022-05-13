<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pesan;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class pesanController extends Controller
{
    //
    public function simpanpesan(Request $request)
    {
        pesan::create([
        'namleng'=>$request->namleng,
        'kls'=>$request->kls,
        'email'=>$request->email,
        'pesan'=>$request->pesan,
        ]);
        return redirect('contact');
    }
}
