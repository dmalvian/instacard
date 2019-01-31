<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Cabang = DB::table('tag')
                ->select('tag.*')
                ->where('tagtype','=','1')
                ->where('gender','=','0')
                ->orderBy('tagid')
                ->get();
    
        return view('home', ['cabang'=> $Cabang]);
    }

    public function index_topup()
    {
        $Cabang = DB::table('tag')
                ->select('tag.*')
                ->where('tagtype','=','1')
                ->where('gender','=','0')
                ->orderBy('tagid')
                ->get();
    
        return view('top-up.index', ['cabang'=> $Cabang]);
    }

    public function index_voucher()
    {
        $Cabang = DB::table('tag')
                ->select('tag.*')
                ->where('tagtype','=','1')
                ->where('gender','=','0')
                ->orderBy('tagid')
                ->get();
    
        return view('voucher.index', ['cabang'=> $Cabang]);
    }
    public function isi_voucher()
    {
       return view('voucher.isi');
    }
    public function isi_topup()
    {
        return view('top-up.isi');
    }
}
