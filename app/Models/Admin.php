<?php

namespace App\Models;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;

    //menentukan nama table
    protected $table = "admin";

    // menentukan primary key
    protected $primaryKey = "id_admin";

    // melindungi agar kolom tidak dapat diisi
    protected $guard = "id_admin";

    // untuk menyembunyikan sebuah kolom
    protected $hidden = "kata_sandi";

    public static function attemptLogin($username, $kata_sandi){
        $admin = self::where('username', $username)->first();

        if ($admin && Hash::check($kata_sandi, $admin->kata_sandi)){
            return $admin;
        }

        return null;


    }
}
