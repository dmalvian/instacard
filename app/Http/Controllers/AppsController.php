<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AppsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'room', 'menu');
    }

    public function index()
    {
        $Cabang = DB::table('tag')
                ->select('tagid','tagname')
                ->where('tagtype','=','1')
                ->where('gender','=','0')
                ->orderBy('tagid')
                ->get();
    
        return view('apps.index', ['cabang'=>$Cabang]);
    }

    public function room($id)
    {
        $room = DB::table('roomgroup')
                ->select('*')
                ->orderBy('idroom')
                ->get();

        $tag = DB::table('tag')
                ->where('tagid','=',$id)
                ->select('tagname','tagid')
                ->first();
        
        $voucher = DB::table('voucher')
                ->join('roomgroup','voucher.roomid','=','roomgroup.idroom')
                ->where('voucher.cnid','=',$id)
                ->select('voucher.*','roomgroup.namagroup')
                ->get();

        return view('apps.room', ['room'=>$room, 'voucher' => $voucher, 'tag' => $tag ,'id'=> $id]);
    }
    public function konfirmasi($idtag,$kode)
    {
        $voucher = DB::table('voucher')
                ->join('roomgroup','voucher.roomid','=','roomgroup.idroom')
                ->where('voucher.kode','=',$kode)
                ->select('voucher.*','roomgroup.namagroup')
                ->first();
        
        return view('apps.konfirmasi',['voucher'=>$voucher, 'tag' => $idtag]);
    }

    public function menu($id)
    {
        $id = DB::table('tag')
                ->where('tagid','=',$id)
                ->select('tagid','tagname')
                ->first();
        return view('apps.menu',compact('id'));
    }
    public function topup_konfirmasi($idtag,$kode)
    {
        $topup = DB::table('topup')
                    ->where('id',$kode)
                    ->first();

        return view('apps.konf_topup', compact('topup','idtag'));
    }
    public function nominal($id)
    {
        $topup = DB::table('topup')
                    ->select('id','nominal')
                    ->get();

        return view('apps.topup',compact('id','topup'));
    }
}
