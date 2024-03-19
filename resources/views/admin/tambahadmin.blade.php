@extends('layoutadmin')
@section('content')
<!DOCTYPE html>

<body>
    <div id="main" class="d-flax align-items-center vh-100">
        <div class="container">
            <div class="card shadow m-auto" style="width: 400px">
                <div class="card-body">
                    <h4 class="h4">Daftarkan Diri Anda</h4>
                    @if ($errors->any())   
                        <div class="alert alert-success" role="alert">

                            gagal Di tambahkan
                        </div>
                    @endif

                    <form action="{{ url('admin/tambahadmin') }}" method="POST">
                        @csrf
                        <div class="mb-3">

                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" id="email"
                                placeholder="Email">

                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" id="username"
                                placeholder="Username">

                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="Passsword">

                            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap"
                                placeholder="Nama Lengkap">

                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" class="form-control" aria-label="Default select example" name="status" id="status">
                                <option value="1">Admin</option>
                                <option value="2">Petugas</option>
                              </select>
                        </div>
                        <button class="btn form-control btn-primary mb-2">Tambah</button>
                        <button class="btn form-control btn-outline-success mb-2">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection