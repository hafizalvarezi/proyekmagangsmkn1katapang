<?php

namespace App\Http\Controllers;

use App\Models\Menu;
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
        return view('shop');
    }
}
