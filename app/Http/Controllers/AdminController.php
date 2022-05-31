<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Pembelian;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtmenu = Menu::paginate(5);
        return view('admin.data',compact('dtmenu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        Menu::create([
            'Menu'=>$request->Menu,
            'Harga'=>$request->Harga,
        ]);
        return redirect('dtmenu');
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
        $menu   = Menu::find($id);
        return view('admin.edit',compact('menu'));
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
        $menu  = Menu::findorfail($id);
        $menu->update($request->all());
        return redirect('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $menu   = Menu::find($id);
        $menu->delete();
        return back();
    }

    public function pesanan()
    {
        $dtbeli = Pembelian::latest()->get();
        return view('admin.pemesanan',compact('dtbeli'));
    }

    public function status($id)
    {
        $dtbeli = Pembelian::find($id);

        $status_sekarang = $dtbeli->status;

        if ($status_sekarang == 1) {
            Pembelian::find($id)->update([
                'status' =>0
            ]);
        }else{
            Pembelian::find($id)->update([
                'status' =>1 
            ]);
        }
        return redirect('dtpesanan');
    }

}
