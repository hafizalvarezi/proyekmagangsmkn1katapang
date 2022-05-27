<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use App\Models\pesan;
use App\Models\User;
use App\Models\murid;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class siswacontroller extends Controller
{
    //
    public function index(){
        $dtsiswa = pesan::all();
        return view('admin',compact('dtsiswa'));
    }
    public function dashboard(){
        $dtsiswa = siswa::all();
        return view('layout.dashboard',compact('dtsiswa'));
    }
    public function about(){
        $dtsiswa = siswa::all();
        return view('layout.about');
    }
    public function mur(){  
         $dtsiswa = siswa::simplePaginate(2);
        return view('layout.mur', compact('dtsiswa'));
    }
    public function eg(){
        $dtsiswa = siswa::all();
        return view('eg', compact('dtsiswa'));
    }
    public function daftar(){
        return view('layout.daftar');
    }
    public function contact(){
        return view('layout.contact');
    }
    public function galeri(){
        return view('layout.galeri');
    }
    
// Murid //
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

    public function simpandaftar(Request $request)
    {
        //dd($request->all());
        siswa::create([
        'nis'=>$request->nis,
        'nama'=>$request->nama,
        'jkel'=>$request->jkel,
        'jrs'=>$request->jrs,
        'ttg'=>$request->ttg,
        'bulan'=>$request->bulan,
        'tahun'=>$request->tahun,
        ]);
        return redirect('list');
    }
    function delete($no)
    {
        $data=siswa::find($no);
        $data->delete();
        return redirect('list');
    }

    // function galeri1()
    // {
    //     return view('layout.galeri1');
    // }

    // function galeri2()
    // {
    //     return view('layout.galeri2');
    // }

    function showData($id)
    {
        $data= siswa::find($id);
        return view('edit',['data'=>$data]);
    }
    function update(Request $req)
    {
        $data=siswa::find($req->id);
        $data->nis=$req->nis;
        $data->nama=$req->nama;
        $data->jrs=$req->jrs;
        $data->ttg=$req->ttg;
        $data->bulan=$req->bulan;
        $data->tahun=$req->tahun;
        $data->save();
        return redirect('list');
    }

    //ADMIN//

    public function store(Request $request){

        $validatedData = $request->validate([
            'name' => ['required','min:4','max:255','unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|unique:users',
        ]);
 
        $validatedData['password'] = Hash::make($validatedData['password']);
        
        User::create($validatedData);
 
        return redirect('/loginad');
     }
     public function authenticate(Request $request)
     {
         $credentials = $request->validate([
             'name' => 'required',
             'email' => 'required|email:dns',
             'password' => 'required'
         ]);
 
         if(Auth::attempt($credentials)){
             $request->session()->regenerate();
             return redirect()->intended('/admin');
         }
 
         return back()->with('loginError','Login Failed!');
     }
     public function list(){
        $dtsiswa = siswa::simplePaginate(20);
        return view('list',compact('dtsiswa'));
     }
     public function komentar(){
        $dtsiswa = pesan::Paginate(10);
        return view('komentar',compact('dtsiswa'));
     }
     public function logout(Request $request){

         Auth::logout();

         $request->session()->invalidate();

         $request->session()->regenerateToken();

         return redirect('/loginad');
     }
}
