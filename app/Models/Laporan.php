<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;
    //menentukan nama table
    protected $table = "laporan";

    // menentukan primary key
    protected $primaryKey = "kode_laporan";

    // melindungi agar kolom tidak dapat diisi
    protected $guard = "kode_laporan";

    // // untuk menyembunyikan sebuah kolom
    // protected $hidden = "kata_sandi";
}
