
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.0.2-dist/css/bootstrap.min.css')}}">
</head>
<body>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header text-center">
                        Form Produk
                    </div>
                    @if ($erors->any())
                        <ul>
                            @foreach ($erors->all() as $item )
                                <li>{{$item}}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="card-body">
                        <form action="/kategori/create" method="post" enctype="multipart/form-data">
                            @csrf
                            <table>
                                <tr>
                                    <td>Nama Kategori</td>
                                    <td><input type="text" name="nm_kategori" id="" value="{{old('nm_kategori')}}"></td>
                                </tr>
                                <tr>
                                    <td><input type="submit" name="" id="" value="Masukan"></input></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
<script src="bootstrap/js/bootstrap.min.js"></script>
