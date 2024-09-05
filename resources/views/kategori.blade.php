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
            <h3>kategori</h3>
            <div class="row">
                <div class="col-md-6">
                    <a href="/kategori/create" class="btn btn-primary">Tambah Kategori</a>
                </div>
                <div class="col-md-6">
                    <form action="/kategori" method="post" class="">
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
                        <th> NAMA KATEGORI</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody class="table-white">
                    @foreach ($kategori as $key=> $item )
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$item->nm_kategori}}</td>
                        <td>
                            <a href="kategori/delete/{{ $item->id }}" onclick="return window.confirm('Yakin hapus data ini?')" class="btn btn-denger" onclick="return window.confirm('yakin hapus data ini?')">Hapus</a>
                            <a href="kategori/edit/{{ $item->id }}" class="btn" style="background-color: rgb(255, 39, 39)">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
    </html>

    @endsection

