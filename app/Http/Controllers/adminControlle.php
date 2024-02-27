<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;

class adminControlle extends Controller
{
    public function index(){
        return view("dass.dass");
    }
    public function dass(){
        return view("dass.dass");
    }
    
    public function login(){
        return view("login.login");
    }
    public function ceklogin(Request $request){
        $s = new admin();
        if($s->where('username',$request->input('username'))->where('password',$request->input('password'))->exists()){
            return redirect('admin/dass');
        }
        return back()->with('pesan','Username dan Password tidak terdaftar');
        }
    }   

