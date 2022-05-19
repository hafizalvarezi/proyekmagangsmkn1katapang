<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\murid;
use Illuminate\Support\Facades\Hash;

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
    public function profiledata2($id)
    {
        $data= murid::find($id);
        return view('layout.profile', compact('data'));
    }
// Murid //
}
