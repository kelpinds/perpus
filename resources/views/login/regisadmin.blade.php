<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi</title>   
    

    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>

<body>
    <div id="main" class="d-flax align-items-center vh-100">
        <div class="container">
            <div class="card shadow m-auto" style="width: 400px">
                <div class="card-body">
                    <h4 class="h4">Daftarkan Diri Anda</h4>
                    @if (session('Pesan'))
                        <div class="alert alert-success" role="alert">

                            {{ session('Pesan') }}
                        </div>
                    @endif
                    @if ($errors->any())   
                        <div class="alert alert-success" role="alert">

                            gagal coy
                        </div>
                    @endif

                    <form action="{{ url('admin/regis') }}" method="POST">
                        @csrf
                        <div class="mb-3">

                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" id="email"
                                placeholder="Email">

                            @error('Email')
                                <div class="form-text">
                                    {{ $message }}
                                </div>
                            @enderror
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" id="username"
                                placeholder="Username">

                            @error('Username')
                                <div class="form-text">
                                    {{ $message }}
                                </div>
                            @enderror

                            <label for="password" class="form-label">password</label>
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="Passsword">

                            @error('Nama')
                                <div class="form-text">
                                    {{ $message }}
                                </div>
                            @enderror

                            <label for="nama_lengkap" class="form-label">nama lengkap</label>
                            <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap"
                                placeholder="Nama Lengkap">

                            @error('Password')
                                <div class="form-text">
                                    {{ $message }}
                                </div>
                            @enderror 
                            <label for="status" class="form-label">status</label>
                            <select class="form-select" class="form-control" aria-label="Default select example" name="status" id="status">
                                <option value="1">Admin</option>
                                <option value="2">Petugas</option>
                              </select>
                              @error('status')
                                <div class="form-text">
                                    {{ $message }}
                                </div>
                            @enderror 

                        </div>
                        <button class="btn form-control btn-primary mb-2">Registrasi</button>
                        <button class="btn form-control btn-outline-success mb-2">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>