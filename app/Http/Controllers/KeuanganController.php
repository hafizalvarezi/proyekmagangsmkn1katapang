<?php

namespace App\Http\Controllers;

use App\Models\Keuangan;
use App\Models\murid;
use App\Models\Siswa;
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
    public function set(){
        $data = Keuangan::simplePaginate(10);
        return view('set',compact('data'));
    }
    public function uang(){
        $nis = Siswa::all();
        return view('kas.uang',compact('nis'));
    }
    public function loginmur(){
        return view('layout.loginmur');
    }
    public function regismur(){
        return view('layout.regismur');
    }
    public function create()
    {
        $nis = Nis::all();
        return view('set',compact('nis'));
    }
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

    // Data //

    function profiledata2($id)
    {
        $data= murid::find($id);
        return view('layout.profile')->with('data',$data);
    }
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
    //Data//

        public function simpankas(Request $request){
            //dd($request->all());
            Keuangan::create([
                'nis_id'=>$request->nis_id,
                'harga'=>$request->harga,
                'keterangan'=>$request->keterangan,
                ]);
            return redirect('/set');
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
