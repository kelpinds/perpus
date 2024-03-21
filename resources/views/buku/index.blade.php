
@extends('layoutadmin')

@section('content')

    <div class="container mt-5 ">
        <div class="card">
            <div class="card-header">
                <span class="card-title h4 text-black-50">Data Buku</span>
            </div>
            <div class="container mt-4 d-flex justify-content-end">
                
                <a type="button" class="btn btn-primary" href="{{url('admin/tambahbuku')}}">Tambah</a>
            </div>
            <div class="card mt-2">
                <table id="table-movie" class="table table-sm table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun Terbit</th>
                            <th>Stok</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{$item->bukuid}}</td>
                                <td>{{$item->judul}}</td>
                                <td>{{$item->penulis}}</td>
                                <td>{{$item->penerbit}}</td>
                                <td>{{$item->tahun_terbit}}</td>
                                <td>{{$item->stok}}</td>
                                <td>
                                    <a href="{{url('admin/editbuku/'.$item->bukuid)}}" class="btn btn-primary"><i class="fa fa-edit "></i> Edit</a>
                                    <a href="hapusbuku/{{$item->bukuid}}" class="btn btn-danger"><i class="fa fa-pencil"></i> Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection 