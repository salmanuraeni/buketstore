<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{  asset('asset/bootstrap-5.0.2-dist/css/bootstrap.min.css') }}">
    <title>Document</title>
</head>
<body>



    <div class="container" style="margin-top: 150px">
        <h1 class="mb-4">Keranjang Belanja</h1>
        <div class="row">
            <div class="col-lg-8">
                <div class="card-header">
                    <h5 class="mb-0">Daftar Produk</h5>
                </div>
                <div class="card-body">
                    @foreach ($keranjang as $item)
                        <div class="row mb-3">
                            <div class="col-md-2">
                                <img src="{{ asset('storage/gambar/'.$item->produk->gambar)}}" class="img-fluid" alt="{{ $item->produk->gambar}}">
                            </div>
                            <div class="col-md-4">
                                <h5>{{ $item->produk->name}}</h5>
                                <p class="mb-0">{{ number_format($item->produk->Harga, 2, ',','.')}}</p>
                            </div>
                            <div class="col-md-2 text-center">
                                <input type="number" class="form-control" value="{{ $item->quantity}}" min="1">
                            </div>
                            <div class="col-md-2 text-end">
                                <a href="/delete-cart/{{ $item->id}}">
                                <button class="btn btn-danger btn-sm">Hapus</button>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</body>
</html>
