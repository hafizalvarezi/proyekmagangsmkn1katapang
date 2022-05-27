<?php

namespace App\Http\Controllers;

use App\Models\Keuangan;
use App\Models\murid;
use App\Models\siswa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class KeuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function kas(){
        $data = Keuangan::simplePaginate(10);
        return view('layout.kas',compact('data'));
    }
    public function kasad(){
        $data = Keuangan::simplePaginate(10);
        return view('kasad',compact('data'));
    }
    public function editkas(){
        $data = Keuangan::simplePaginate(10);
        return view('editkas',compact('data'));
    }
    public function uang(){
        $nis = siswa::simplePaginate(10);
        return view('kas.uang',compact('nis'));
    }

    public function simpankas(Request $request){
        //dd($request->all());
        Keuangan::create([
            
            'siswa_id'=>$request->siswa_id,
            'harga'=>$request->harga,
            'keterangan'=>$request->keterangan,
            ]);
        return redirect('/kas');
    }
    public function siswa(){
        $siswa = siswa::all();
        return view('layout.kas',['siswa'=>$siswa]);
    }
    function hapus($no)
    {
        $data=keuangan::find($no);
        $data->delete();
        return redirect('kasad');
    }


//////////////////////////////////////////////////////////////////////////////////////////////////////////
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Keuangan  $keuangan
     * @return \Illuminate\Http\Response
     */
    public function show(Keuangan $keuangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Keuangan  $keuangan
     * @return \Illuminate\Http\Response
     */
    public function edit(Keuangan $keuangan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Keuangan  $keuangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Keuangan $keuangan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Keuangan  $keuangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Keuangan $keuangan)
    {
        //
    }
}
