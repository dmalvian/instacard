<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Tag;
use App\Voucher;
use App\transaksi;
use Carbon\Carbon;

class TransaksiController extends Controller
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

    public function InsertTransaksi(Request $request, $idtag,$kode,$user){

        // Get Transtype
        // ===================================================================================
        if ($request->is('apps/voucher/*')) {
            $type = 1;
        }elseif($request->is('apps/top-up/*')){
            $type = 0;
        }
        // ===================================================================================

        //Get Baris Voucher
        // ===================================================================================
        if ($request->is('apps/voucher/*')) {
            $nominal = DB::table('voucher')->where('kode',$kode)->first();
            $jumlah = $nominal->harga; 
        }elseif($request->is('apps/top-up/*')){
            $nominal = DB::table('topup')->where('id',$kode)->first();
            $jumlah = $nominal->nominal;  
        }
        // ===================================================================================

        $transaksi = new transaksi();
        $transaksi->transtype = $type;
        $transaksi->waktu = now();
        $transaksi->refno = $kode; 
        $transaksi->fromtag = $user;
        $transaksi->totag = $idtag;
        $transaksi->nominal = $jumlah;

        $saldo = Tag::where('tagid',$user)->first();

        if($saldo != null)
        {
            if($saldo->balance < $jumlah && $type == 1){
                return redirect()->route('apps.index')->with('alert','Saldo anda tidak cukup');
            }else{
                $transaksi->save();
                return view('apps.sukses');
            }   
        }else
        {
            return redirect()->route('apps.user.profile')->with('profile','Lengkapi Data Terlebih Dahulu');
        }

    }
    public function hasilTransaksi()
    {
        $transaksi = transaksi::
                        join('tag','transaksi.totag','=','tag.tagid')
                        ->where('fromtag', Auth::user()->username)
                        ->select('transaksi.*','tag.tagname')
                        ->orderBy('waktu','desc')
                        ->get();
        

        return view('apps.riwayat',compact('transaksi'));
    }

    public function generateVoucher($id) {
        $transaksi = transaksi::join('voucher','transaksi.refno','=','voucher.kode')
                                ->where('transaksi.id', $id)
                                ->get()->first();
        
        $voucher = new Voucher();
        $voucher->id_transaksi = $id;
        $voucher->id_voucher = $transaksi->refno;
        $voucher->username = str_random(8);
        $voucher->password = str_random(8);
        $voucher->sisa_durasi = Carbon::createFromTime(0, 0, 0)->addMinutes($transaksi->durasi);
        $voucher->kadaluarsa = Carbon::now()->addHours(12);

        $voucher->save();

        return redirect()->route('apps.index');
    }
}
