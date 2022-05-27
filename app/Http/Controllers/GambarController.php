<?php

namespace App\Http\Controllers;

use App\Models\Uploadgambar;
use Illuminate\Http\Request;

class GambarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtGambar = Uploadgambar::simplePaginate(4);
        return view('admin.UploadGambar',compact('dtGambar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create_gambar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nm = $request->gambar;
        $namaFile = $nm->getClientOriginalName();

        $dtUpload = new Uploadgambar;
        $dtUpload->nama = $request->nama;
        $dtUpload->harga = $request->harga;
        $dtUpload->gambar = $namaFile;

        $nm->move(public_path().'/img', $namaFile);
        $dtUpload->save();

        return redirect('data_gambar');

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
        $gambar   = Uploadgambar::find($id);
        return view('admin.edit_gambar',compact('gambar'));
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
        $gambar  = Uploadgambar::findorfail($id);
        $gambar->update($request->all());
        return redirect('data_gambar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $gambar   = Uploadgambar::find($id);
        $gambar->delete();
        return back();
    }
}
