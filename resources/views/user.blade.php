<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.0.2-dist/css/bootstrap.min.css')}}">
    <title>Document</title>
</head>
<body>
    @extends('template')
    @section('content')



    <div style="margin-button: 500px">
            <h3>Data User</h3>
            <div class="row">
                <div class="col-md-6">
                    <a href="/user/create" class="btn btn-primary">Tambah User</a>
                </div>
                <div class="col-md-6">
                    <form action="/user/search" method="post" class="">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="search" name="cari" id="" class="form-control" placeholder="search..">
                            <button class="btn btn-primary" type="submit">Go</button>
                        </div>
                    </form>
                </div>
            </div>
            @if (Session::get('pesan'))
            {{ Session::get('pesan')}}
            @endif
            <table class="table" style="width: 800px; height: 100px">
                <thead class="table-dark">
                    <tr>
                        <th>NO</th>
                        <th>NAMA</th>
                        <th>EMAIL</th>
                        <th>LEVEL</th>
                        <th>FOTO</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody class="table-white">
                    @foreach ($user as $key=> $item )
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->Level->nm_level}}</td>
                        <td><img src="{{ asset('storage/gambar/'.$item->gambar)}}" alt=""></td>
                        <td>
                            <a href="user/delete/{{ $item->id }}" onclick="return window.confirm('Yakin hapus data ini?')" class="btn" style="background-color:rgb(252, 252, 78)">Hapus</a>
                            <a href="user/edit/{{ $item->id }}" class="btn" style="background-color: rgb(255, 39, 39)">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
    </html>

    @endsection
