<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;
use App\Models\Kontak;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $dtupload = Pet::all();
        return view('home',compact('dtupload'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('create');
    }
    public function simpan(Request $request)
    {
        // dd($request->all());
       $nm = $request->foto;
       $namafile = $nm->getClientOriginalName();

       $dtupload = new Pet;
       $dtupload->jenis = $request->jenis;
       $dtupload->deskripsi = $request->deskripsi;
       $dtupload->harga = $request->harga;

       $dtupload->foto = $namafile;

       $nm->move(public_path().'/image',$namafile);
       $dtupload->save();

       return redirect('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $contact  = Kontak::all();
        $dtupload = Pet::all();
        return view('dashboard',compact('dtupload','contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    function edit($id)
    {
        $dtupload= Pet::find($id);
        return view('edit',compact('dtupload'));
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
        $nm = $request->foto;
        $namaFile = $nm->getClientOriginalName();

        $dtUpload = Pet::findorfail($id);
        $dtUpload->jenis = $request->jenis;
        $dtUpload->deskripsi= $request->deskripsi;
        $dtUpload->harga= $request->harga;
        $dtUpload->foto = $namaFile;


        $nm->move(public_path().'/image', $namaFile);
        $dtUpload->update();

        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    function delete($id)
    {
        $dtupload=Pet::find($id);
        $dtupload->delete();
        return redirect('home');
    }

    public function contact(){
         $contact = Kontak::all();
         return view('contact',compact('contact'));
    }

    public function maps(){
        return view('maps');
   }
}
