
@extends('layoutadmin')

@section('content')

    <div class="container mt-5 ">
        <div class="card">
            <div class="card-header">
                <span class="card-title h4 text-black-50">Data Petugas</span>
            </div>
            <div class="container mt-4 d-flex justify-content-end">
                
                <a type="button" class="btn btn-primary" href="{{url('admin/tambahadmin')}}">Tambah</a>
            </div>
            <div class="card mt-2">
                <table id="table-movie" class="table table-sm table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Nama Lengkap</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->username}}</td>
                                <td>{{$item->password}}</td>
                                <td>{{$item->nama_lengkap}}</td>
                                <td>{{$item->status}}</td>
                                <td>
                                    <a href="{{url('admin/editadmin/'.$item->id)}}" class="btn btn-primary"><i class="fa fa-edit "></i> Edit</a>
                                    <a href="hapusadmin/{{$item->id}}" class="btn btn-danger"><i class="fa fa-pencil"></i> Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection 