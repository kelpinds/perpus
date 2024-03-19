@extends('layoutadmin')
@section('content')
<body>
    <div id="main" class="d-flax align-items-center vh-100">
        <div class="container">
            <div class="card shadow m-auto" style="width: 400px">
                <div class="card-body">
                    <h4 class="h4">Edit Data Petugas</h4>
                    @if ($errors->any())   
                        <div class="alert alert-success" role="alert">

                            gagal Di tambahkan
                        </div>
                    @endif
                    @foreach ($data as $item)
                    <form method="POST" >
                        @csrf
                        <div class="mb-3">

                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" id="email"
                                placeholder="Email" value="{{$item->email}}">

                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" id="username"
                                placeholder="Username" value="{{$item->username}}">

                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="Passsword" value="{{$item->password}}">

                            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap"
                                placeholder="Nama Lengkap" value="{{$item->nama_kelas}}">

                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" class="form-control" aria-label="Default select example" name="status" id="status" value="{{$item->status}}">
                                <option>Admin</option>
                                <option>Petugas</option>
                              </select>
                        </div>
                        <button class="btn form-control btn-primary mb-2">edit</button>
                        <button class="btn form-control btn-outline-success mb-2">Batal</button>
                    </form> 
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>
@endsection