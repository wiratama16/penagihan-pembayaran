<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
   //menentukan nama table
   protected $table = "pelanggan";

   // menentukan primary key
   protected $primaryKey = "id_pelanggan";

   // melindungi agar kolom tidak dapat diisi
   protected $guard = "id_pelanggan";

   // untuk menyembunyikan sebuah kolom
   protected $hidden = "kata_sandi";
}
