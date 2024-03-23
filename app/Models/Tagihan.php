<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{
    use HasFactory;
    //menentukan nama table
   protected $table = "tagihan";

   // menentukan primary key
   protected $primaryKey = "kode_tagihan";

   // melindungi agar kolom tidak dapat diisi
   protected $guard = "kode_tagihan";

//    // untuk menyembunyikan sebuah kolom
//    protected $hidden = "kata_sandi";
}
