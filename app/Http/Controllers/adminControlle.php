<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;

class adminControlle extends Controller
{
     public function dassadmin(){
        return view("dass.dassadmin");
     }
    public function regis(){
        return view("login.regisadmin");
    }
    public function simpanregis(Request $request){
       
        $cek = $request->validate([
            'email' => 'required',
            'username' => 'required|min:3',
            'password' => 'required|min:4',
            'nama_lengkap' => 'required',
            'status' => 'required'
        ]);
        $c = new admin();
        $c->create([
            'email'=>$request->email,
            'username'=>$request->username,
            'password'=>$request->password,
            'nama_lengkap'=>$request->nama_lengkap,
            'status'=>$request->status
        ]);
        return back()->with('Pesan', 'anda berasil registrasi');
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

        public function admin(){
            $cek = new admin;
        return view("admin.index",['data'=>$cek->all()]);
        }

        public function tambahadmin(){
            return view("admin.tambahadmin");
        }
        public function tambahad(Request $request){
            $k =new admin;
            $k->create([
                'email'=>$request->input('email'),
                'username'=>$request->input('username'),
                'password'=>$request->input('password'),
                'nama_lengkap'=>$request->input('nama_lengkap'),
                'status'=>$request->input('status')
                
                
            ]);
            return redirect('admin/admin');
            
        }
        public function editadmin($id){
            $e = admin::select('*')->where('id',$id)->get();
                return view('admin.editadmin',['data'=>$e]);
            
        }  
        public function editad(Request $request ,$id){
            $e = admin::where('id',$id)->update([
                'email'=>$request->email,
                'username'=>$request->username,
                'password'=>$request->password,
                'nama_lengkap'=>$request->nama_lengkap,
                'status'=>$request->status

            ]);
            return redirect('admin/admin');
        }
        public function hapusadmin($id){
            $e = admin::where('id',$id)->delete();
            return back();
        }
    }   

