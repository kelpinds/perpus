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
                        
                    <form method="POST" action="{{url('admin/editbuku/'.$item->bukuid)}}">
                        @csrf
                        <div class="mb-3">

                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" class="form-control" name="judul" id="judul"
                                placeholder="Judul Buku"  value="{{$item->judul}}" >
                        </div>
                        <div class="mb-3">
                            <label for="penulis" class="form-label">Penulis</label>
                            <input type="text" class="form-control" name="penulis" id="penulis"
                                placeholder="Penulis"  value="{{$item->penulis}}">
                        </div>
                        <div class="mb-3">
                            <label for="penerbit" class="form-label">Penerbit</label>
                            <input type="text" class="form-control" name="penerbit" id="penerbit"
                                placeholder="Penerbit"  value="{{$item->penerbit}}">
                        </div>
                        <div class="mb-3">
                            <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                            <input type="text" class="form-control" name="tahun_terbit" id="tahun_terbit"
                                placeholder="Tahun Terbit"  value="{{$item->tahun_terbit}}">
                        </div>
                        <div class="mb-3">
                            <label for="stok" class="form-label">Stok</label>
                            <input type="text" class="form-control" name="stok" id="stok"
                                placeholder="Stok"  value="{{$item->stok}}">
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