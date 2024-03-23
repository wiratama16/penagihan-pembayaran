<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin_Teknik extends Model
{
    use HasFactory;

    //menentukan nama table
    protected $table = "admin_teknik";

    // menentukan primary key
    protected $primaryKey = "id_admin_teknik";

    // melindungi agar kolom tidak dapat diisi
    protected $guard = "id_admin_teknik";

    // untuk menyembunyikan sebuah kolom
    protected $hidden = "kata_sandi";

    
}
