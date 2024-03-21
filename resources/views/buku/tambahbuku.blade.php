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
                        @if (session('pesan'))
                            <div class="alert alert-success" role="alert">
                                {{ session('pesan') }}
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-success" role="alert">
                                Silahkan isi kolom Terlebih dahulu
                            </div>
                        @endif

                        <form action="{{ url('admin/tambahbuku') }}" method="POST">
                            @csrf
                            <div class="mb-3">

                                <label for="judul" class="form-label">Judul</label>
                                <input type="text" class="form-control" name="judul" id="judul"
                                    placeholder="Judul Buku">
                                @error('judul')
                                    <div class="form-text">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">

                                <label for="penulis" class="form-label">Penulis</label>
                                <input type="text" class="form-control" name="penulis" id="penulis"
                                    placeholder="Penulis">
                                @error('penulis')
                                    <div class="form-text">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="penerbit" class="form-label">Penerbit</label>
                                <input type="text" class="form-control" name="penerbit" id="penerbit"
                                    placeholder="Penerbit">
                                @error('penerbit')
                                    <div class="form-text">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                                <input type="text" class="form-control" name="tahun_terbit" id="tahun_terbit"
                                    placeholder="Tahun Terbit">
                                @error('tahun_terbit')
                                    <div class="form-text">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="stok" class="form-label">Stok</label>
                                <input type="number" class="form-control" name="stok" id="stok" placeholder="Stok">
                                @error('stok')
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
