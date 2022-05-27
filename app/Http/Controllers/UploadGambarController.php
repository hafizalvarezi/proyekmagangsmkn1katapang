<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UploadGambar;

class UploadGambarController extends Controller
{
    public function guru()
    {
        $dataGambar=UploadGambar::simplePaginate(3);
        return view('layout.guru',compact('dataGambar'));
    }

    public function buat()
    {
        return view('buat');
    }

    public function gurued()
    {
        $dataGambar=UploadGambar::all();
        return view('gurued',compact('dataGambar'));
    }
    public function simpangambar(Request $request)
    {

        // dd($request->all());
       $nm = $request->gambar;
       $namafile = $nm->getClientOriginalName();

       $dtupload = new UploadGambar;
       $dtupload->nama = $request->nama;
       $dtupload->nuptk = $request->nuptk;
       $dtupload->mapel = $request->mapel;

       $dtupload->gambar = $namafile;

       $nm->move(public_path().'/image',$namafile);
       $dtupload->save();

       return redirect('gurued');
    }

    function delete($no)
    {
        $dataGambar=uploadgambar::find($no);
        $dataGambar->delete();
        return redirect('gurued');
    }
}
