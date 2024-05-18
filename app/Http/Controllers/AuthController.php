<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    public function login(Request $request){
        $validate = Validator::make($request->all(),[
            'username' => 'string|required',
            'kata_sandi' => 'string|required',
        ]);
    
        if ($validate->fails()) {
            return redirect('/login')->with('gagal','validasi gagal');
        }
    
        $username = $request->input('username');
        $password = $request->input('kata_sandi'); // Corrected field name
        
        $admin = Admin::attemptLogin($username, $password);
        
        if ($admin){
            if($admin->role == "admin_teknik"){ // Access role through $admin variable
                return redirect()->route('admin.dashboard');
            } elseif ($admin->role == "admin_keuangan"){ // Access role through $admin variable
                return redirect('/dashboard-admin_keuangan');
            }
            return redirect('/dashboard');
        } else {
            return back()->with('gagal', 'username atau kata sandi salah');
        }
    }
    
}
