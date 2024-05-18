<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class pelangganController extends Controller
{
    public function data_pelanggan(){
        $pelanggan = Pelanggan::all();
        return view("admin.pelanggan.data_pelanggan", compact("pelanggan"));
    }
    public function tambah(){
        return view("admin.pelanggan.tambah_pelanggan");
    }

    public function edit($id){ 
        $pelanggan = Pelanggan::find($id);
        return view("admin.pelanggan.edit_pelanggan", compact("pelanggan"));
    }

    public function store(Request $request) {
        $validasi = $request->validate([
            "nama_pelanggan" =>"required|string",
            "username" =>"required|string",
            "email" =>"required|email",
            "no_telepon" =>"required",
            "alamat" =>"required|string",
            "bukti_transfer" =>"file|mimes:jpg, png",
            "kata_sandi" =>"required|string",
        ]);
        
        Pelanggan::create($validasi);
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
