<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\murid;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use function GuzzleHttp\Promise\all;

class akuncontroller extends Controller
{
// Murid //
    public function dashboard(){
        $dtsiswa = murid::all();
        return view('layout.dashboard',compact('dtsiswa'));
    }
    public function about1(){
        $dtsiswa = murid::all();
        return view('layout.about',compact('dtsiswa'));
    }
    public function contact1(){
        $dtsiswa = murid::all();
        return view('layout.contact',compact('dtsiswa'));
    }
    public function galeridata(){
        $dtsiswa = murid::all();
        return view('layout.galeri',compact('dtsiswa'));
    }
    public function galeri1(){
        $dtsiswa = murid::all();
        return view('layout.galeri1',compact('dtsiswa'));
    }
    public function galeri2(){
        $dtsiswa = murid::all();
        return view('layout.galeri2',compact('dtsiswa'));
    }
// Murid //

//     +      //

// \/ Register System//
    public function daftarsiswa(Request $request)
    {
        //dd($request->all());
        murid::create([
        'nama'=>$request->nama,
        'email'=>$request->email,
        'pass'=>$request->pass,
        ]);
        return redirect('/loginmur');
    }

    public function simpanmur(Request $request){

        $validatedData = $request->validate([
            'nama' => ['required','min:4','max:255','unique:users'],
            'email' => 'required',
            'pass' => 'required|min:5|unique:users',
        ]);
        $validatedData['pass'] = Hash::make($validatedData['pass']);
        
        murid::create($validatedData);
 
        return redirect('/loginmur');
    }
    // /\ Register System//

    //     +      //

    // \/ Login System //
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'pass' => 'required'
        ]);
        
        return redirect('/dashboard');
    }
// /\ Login System //

//     +      //

//akun//
public function loginmur(){
    return view('layout.loginmur');
}
public function regismur(){
    return view('layout.regismur');
}
public function keluar(Request $request){

    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/loginmur');
}
//akun//

//     +      //

// Profile//
    public function profile(){
        $dtsiswa = murid::all();
        return view('layout.profile');
    }
//Profile//
}
