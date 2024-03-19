

@extends('layoutadmin')

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="\css\bootstrap.min.css">
<link rel="stylesheet" href="\css\util.css">
<link rel="stylesheet" href="\css\style.css">
<link rel="stylesheet" href="\css\main.css">
<link rel="stylesheet" href="\css\bootstrap\mixins\_border-radius.css">
<link rel="stylesheet" href="\css\bootstrap\mixins\_screen-reader.css">
<link rel="stylesheet" href="\css\bootstrap\mixins\_visibility.css">
<link rel="stylesheet" href="\css\bootstrap\_media.css">
<link rel="stylesheet" href="\css\style.min.css">
<body>
    <div class="container mt-5 ">
        <div class="card">
            <div class="card-header">
                <span class="card-title h4 text-black-50">Data Petugas</span>
            </div>
            <div class="card-body">
                <a type="button" class="btn btn-primary" href="">Tambah</a>
                <table id="table-movie" class="table table-sm table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Depan</th>
                            <th>Nama Belakang</th>
                            <th>Email</th>
                            <th>JK</th>
                            <th>Jabatan</th>
                            <th>Perusahaan</th>
                            <th>Kata sandi</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                            <tr>
                                <td>{{$item->}}</td>
                                <td>{{$item->}}</td>
                                <td>{{$item->}}</td>
                                <td>{{$item->}}</td>
                                <td>{{$item->}}</td>
                                <td>{{$item->}}</td>
                                <td>{{$item->}}</td>
                                <td>{{$item->}}</td>
                                <td>
                                    <a href="" class="btn btn-primary"><i class="fa fa-edit "></i> Edit</a>
                                    <a href="" class="btn btn-danger"><i class="fa fa-pencil"></i> Delete</a>
                                </td>
                            </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
   
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="\js\jquery.min.js"></script>
    <script src="\perpus\public\js\popper.js"></script>
    <script src="\js\bootstrap.min.js"></script>
    <script src="\js\main.js"></script>
    <script src="\js\app-style-switcher.js"></script>
    <script src="\js\custom.js"></script>
    <script src="\js\sidebarmenu.js"></script>
    <script src="\js\waves.js"></script>
    <script src="\js\popper.js"></script>
@endsection