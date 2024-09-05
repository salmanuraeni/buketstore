<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.0.2-dist/css/bootstrap.min.css') }}">
</head>

<body>

    {{-- @extends('navbar') --}}
    @section('conte')

        <div class="container mt-5">
            <div class="container mt-5" style="margin-top:50px;">
                <div class="row">
                    <div class="container mt-5">
                        <h2 class=" mb-4">Detail Produk</h2>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('/storage/gambar/' . $produk->gambar) }}" alt="Gambar Produk" class="img-fluid"
                            width="450px" height="450px">
                    </div>
                    <div class="col-md-6" style="margin-top: 50px">
                        <h2>{{ $produk->name }}</h2>
                        <p>{{ $produk->kategori }}</p>
                        <h5 class="mt-3">Rp. {{ $produk->Harga }}</h5>
                        <h5>Deskripsi</h5>
                        <p>{{ $produk->deskripsi }}</p>
                        <div class="mt-4 mb-5">
                            <form action="/keranjang/add/{{ $produk->id }}" method="post">
                                @csrf
                                <a href="/checkout"><button class="btn btn-primary mt-3">Tambahkan ke keranjang</button></a>
                                <a href=""><button class="btn btn-primary mt-3">Beli Sekarang</button></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
