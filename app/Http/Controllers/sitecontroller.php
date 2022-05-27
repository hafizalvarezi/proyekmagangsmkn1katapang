<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Pembelian;
use App\Models\Uploadgambar;
use Illuminate\Http\Request;

class sitecontroller extends Controller
{
    public function index()
    {
        $dtmenu = menu::paginate(5);
        return view('site.index',compact('dtmenu'));
    }
    public function home(){
        return view('member');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function shop(){
        $dtGambar = Uploadgambar::Paginate(1);
        return view('Shop.shop',compact('dtGambar'));
    }
    public function beli($id)
    {
        // $beli = Uploadgambar::all();
        $menu = Uploadgambar::findorfail($id);
        return view('pembelian.beli',compact('menu'));
    }
    public function store(Request $request)
    {
        //dd($request->all());
        Pembelian::create([
            'uploadgambar_id'=>$request->uploadgambar_id,
            'nama_pembeli'=>$request->nama_pembeli,
            'alamat'=>$request->alamat,
        ]);
        return redirect('shop');
    }

    public function delete($id)
    {
        $beli   = Pembelian::findorfail($id);
        $beli->delete();
        return back();
    }
}
