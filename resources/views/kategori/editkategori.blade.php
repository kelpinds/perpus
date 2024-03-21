@extends('layoutadmin')
@section('content')
<body>
    <div id="main" class="d-flax align-items-center vh-100">
        <div class="container">
            <div class="card shadow m-auto" style="width: 400px">
                <div class="card-body">
                    <div class="card-header">
                        <span class="card-title h4 text-black-50">Edit Data Buku</span>
                    </div>
                    @if ($errors->any())   
                        <div class="alert alert-success" role="alert">

                            gagal Di tambahkan
                        </div>
                    @endif
                    @foreach ($data as $item)
                        
                    <form method="POST" action="{{url('admin/editkategori/'.$item->kategoriid)}}">
                        @csrf
                        <div class="mb-3">

                            <label for="nama_kategoti" class="form-label">Nama Kategori</label>
                            <input type="text" class="form-control" name="nama_kategori" id="nama_kategori"
                                placeholder="Nama Kategori"  value="{{$item->nama_kategori}}" >
                        </div>
                       
                        <button class="btn form-control btn-primary mb-2">Edit</button>
                        <button class="btn form-control btn-outline-success mb-2">Batal</button>
                    </form> 
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</body>
@endsection