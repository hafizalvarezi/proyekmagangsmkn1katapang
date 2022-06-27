<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pet=Pet::all();
        return response()->json($pet);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request,[
            'jenis' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required | image',
        ]);

        if ($request->file('foto')) {
            $name = $request->file('foto')->getClientOriginalName();

            $request->file('foto')->move('upload',$name);

            $jenis = $request->jenis;
            $harga = $request->harga;
            $deskripsi = $request->deskripsi;
            $foto = $name;
        }else{
            $jenis = $request->jenis;
            $harga = $request->harga;
            $deskripsi = $request->deskripsi;
            $foto = 'default.png';
        }

        $data = Pet::create([
            'jenis' => $jenis,
            'harga' => $harga,
            'deskripsi' => $deskripsi,
            'foto' => $foto,
        ]);

        return response()->json($data);
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
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function show(Pet $pet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function edit(Pet $pet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Pet::where('id',$id)->update($request->all());

        return response()->json("Berhasil Di Update");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $data = Pet::where('id',$id)->delete();
        return response()->json("Berhasil Di Hapus");
    }
}