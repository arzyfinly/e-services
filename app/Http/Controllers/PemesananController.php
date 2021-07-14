<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pemesanan;

class PemesananController extends Controller 
{
    //
    public function finish(Request $request){
        $time_now = Carbon::now();

        DB::table('pemesanan')->insert([
            'nama_customer' => $request -> nama,
            'barang_customer' => $request -> barang,
            'gejala_kerusakan' => $request -> kerusakan,
            'alamat' => $request -> alamat,
            'tgl_pesan' =>  $time_now
        ]);
        return view('pesan');
    }

    public function tampil(){
        $pemesanan = Pemesanan::all();
        return view('admin', compact(
            'pemesanan'
        ));
    }

    public function delete($id_customer){
        $pemesanan = Pemesanan::find($id_customer);
        $pemesanan->delete();
        return view('admin/done', compact(
            'pemesanan'
        ));
    }
}