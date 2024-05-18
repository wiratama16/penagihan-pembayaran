<?php

namespace App\Http\Controllers;

use App\Models\Tagihan;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TransaksiController extends Controller
{
    public function riwayat(){
        return view("admin.transaksi.riwayat_tagihan");
    }

    public function tagihan(){
        $transaksi = Tagihan::all();
        return view("admin.transaksi.tagihan", compact('transaksi'));
    }
    public function tambah(){
        $pelanggan = Pelanggan::all();
        return view("admin.transaksi.tambah_tagihan",compact('pelanggan'));
    }
    
    public function edit($id){ 
        $transaksi = Tagihan::find($id);
        $pelanggan = Pelanggan::all();
        return view("admin.transaksi.edit_tagihan", compact("transaksi","pelanggan"));
    }

    public function store(Request $request) {
        // dd($request);
        $validasi = $request->validate([
            "id_pelanggan" =>"required|string",
            "jenis_tagihan" =>"required|string",
            "tanggal_tagihan" =>"required|date",
            "jumlah_tagihan" =>"required|numeric",
            "tanggal_jatuh_tempo" =>"required|date",
            "rincian_tagihan" =>"required|string",
            "no_rekening" =>"required|numeric",
            "bukti_transfer" =>"file|mimes:jpg,png",
            "status" =>"required|in:lunas,belum_lunas,sedang_divalidasi",
        ]);
        Tagihan::create($validasi);
        Alert::success('sukses',"data pelanggan berhasil ditambahkan");

        return redirect()->back();
        
    }
    public function update(Request $request) {
        $validasi = $request->validate([
            "nama_pelanggan" =>"required|string",
            "username" =>"required|string",
            "email" =>"required|email",
            "no_telepon" =>"required",
            "alamat" =>"required|string",
            "bukti_transfer" =>"file|mimes:jpg, png",
            "kata_sandi" =>"required|string",
        ]);
        
        Pelanggan::where('id_pelanggan',$request->id_pelanggan)->update($validasi);
        Alert::success('sukses',"data pelanggan berhasil diupdate");

        return redirect()->back();
        
    }
    public function delete($id){
        $pelanggan = Pelanggan::find($id);
        $pelanggan->delete();
        Alert::success('sukses',"data pelanggan berhasil dihapus");
        return redirect()->back();


    }
}
