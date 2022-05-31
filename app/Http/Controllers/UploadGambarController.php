<?php

namespace App\Http\Controllers;
use App\Models\UploadGambar;
use Illuminate\Http\Request;

class UploadGambarController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function uru()
    {
        $dataGambar=UploadGambar::simplePaginate(2);
        return view('layout.uru',compact('dataGambar'));
    }
    
    public function gambar()
    {
        $dataGambar=UploadGambar::simplePaginate(5);
        return view('kas.gambar',compact('dataGambar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

       return redirect('gambar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    function delete($no)
    {
        $dataGambar=uploadgambar::find($no);
        $dataGambar->delete();
        return redirect('gambar');
    }
}
