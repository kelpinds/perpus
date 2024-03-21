@extends('layoutadmin')
@section('content')
    <!DOCTYPE html>

    <body>
        <div id="main" class="d-flax align-items-center vh-100">
            <div class="container">
                <div class="card shadow m-auto" style="width: 400px">
                    <div class="card-body">
                        <div class="card-header">
                            <span class="card-title h4 text-black-50">Tambah Data Buku</span>
                        </div>
                        <form action="{{ url('admin/tambahkategori') }}" method="POST">
                            @csrf
                            <div class="mb-3">

                                <label for="nama_kategori" class="form-label">nama kategori</label>
                                <input type="text" class="form-control" name="nama_kategori" id="nama_kategori"
                                    placeholder="nama_kategori">
                                @error('judul')
                                    <div class="form-text">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        
                            <div class="mb-3">
                                <button class="btn form-control btn-primary mb-2">Tambah</button>
                                <button class="btn form-control btn-outline-success mb-2">Batal</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
