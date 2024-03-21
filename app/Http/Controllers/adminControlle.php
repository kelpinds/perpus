<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Models\buku;
use App\Models\kategori;
use Illuminate\Http\Request;

class adminControlle extends Controller
{
    public function dassadmin()
    {
        return view("dass.dassadmin");
    }
    public function logout(){
        session()->flush();
        return  redirect('admin/login');
    }
    // login admin
    public function login()
    {
        return view("login.login");
    }
    public function ceklogin(Request $request)
    {
        $s = new admin();
        if ($s->where('username', $request->input('username'))->where('password', $request->input('password'))->exists()) {
            return redirect('admin/layoutadmin');
        }
        return back()->with('pesan','Masukan Username dan Password');
    }
    // end login admin

    // data admin
    public function admin()
    {
        $cek = new admin;
        return view("admin.index", ['data' => $cek->all()]);
    }
    // end tada admin        

    // tambah admin
    public function tambahadmin()
    {
        return view("admin.tambahadmin");
    }
    public function tambahad(Request $request)
    {
        $k = new admin;
        $k->create([
            'email' => $request->input('email'),
            'username' => $request->input('username'),
            'password' => $request->input('password'),
            'nama_lengkap' => $request->input('nama_lengkap'),
            'status' => $request->input('status')
        ]);
        return redirect('admin/admin');
    }
    // end tambah admin

    // edit admin
    public function editadmin($id)
    {
        $e = admin::select('*')->where('id', $id)->get();
        return view('admin.editadmin', ['data' => $e]);

    }
    public function editad(Request $request, $id)
    {
        $e = admin::where('id', $id)->update([
            'email' => $request->email,
            'username' => $request->username,
            'password' => $request->password,
            'nama_lengkap' => $request->nama_lengkap,
            'status' => $request->status

        ]);
        return redirect('admin/admin');
    }
    // end edit admin

    // hapus admin
    public function hapusadmin($id)
    {
        $e = admin::where('id', $id)->delete();
        return back();
    }
    // end hapus admin

    // data buku
    public function buku()
    {
        $cek = new buku;
        return view("buku.index", ['data' => $cek->all()]);
    }
    // end tada buku        

    // tambah buku
    public function tambahbuku()
    {
        return view("buku.tambahbuku");
    }
    public function tambahbu(Request $request)
    {
        $k = new buku;
        $k->create([
            'judul' => $request->input('judul'),
            'penulis' => $request->input('penulis'),
            'penerbit' => $request->input('penerbit'),
            'tahun_terbit' => $request->input('tahun_terbit'),
            'stok' => $request->input('stok')
        ]);
        return redirect('admin/buku')->with('pesan','data berhasil ditambahkan');
    }
    // end tambah buku

    // edit buku
    public function editbuku($id)
    {
        $e = buku::select('*')->where('bukuid', $id)->get();
        return view('buku.editbuku', ['data' => $e]);

    }
    public function editbu(Request $request, $id)
    {
        $e = buku::where('bukuid', $id)->update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'stok' => $request->stok

        ]);
        return redirect('admin/buku');
    }
    // end edit buku

    // hapus buku
    public function hapusbuku($id)
    {
        $e = buku::where('bukuid', $id)->delete();
        return back();
    }
    // end hapus buku

    // data kategori
    public function kategori()
    {
        $cek = new kategori;
        return view("kategori.index", ['data' => $cek->all()]);
    }
    // end tada kategori     

    // tambah kategori
    public function tambahkategori()
    {
        return view("kategori.tambahkategori");
    }
    public function tambahka(Request $request)
    {
        $k = new kategori;
        $k->create([
            'nama_kategori' => $request->input('nama_kategori')
        ]);
        return redirect('admin/kategori');
    }
    // end tambah kategori

    // edit kategori
    public function editkategori($id)
    {
        $e = kategori::select('*')->where('kategoriid', $id)->get();
        return view('kategori.editkategori', ['data' => $e]);

    }
    public function editka(Request $request, $id)
    {
        $e = kategori::where('kategoriid', $id)->update([
            'nama_kategori' => $request->nama_kategori
        ]);
        return redirect('admin/kategori');
    }
    // end edit kategori

    // hapus kategori
    public function hapuskategori($id)
    {
        $e = kategori::where('kategoriid', $id)->delete();
        return back();
    }
    // end hapus kategori
}

