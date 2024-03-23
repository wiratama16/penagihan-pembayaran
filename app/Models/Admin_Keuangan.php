<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin_Keuangan extends Model
{
    use HasFactory;
    //menentukan nama table
    protected $table = "admin_keuangan";

    // menentukan primary key
    protected $primaryKey = "id_admin_keuangan";

    // melindungi agar kolom tidak dapat diisi
    protected $guard = "id_admin_keuangan";

    // untuk menyembunyikan sebuah kolom
    protected $hidden = "kata_sandi";
}
