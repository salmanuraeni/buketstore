

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{  asset('asset/bootstrap-5.0.2-dist/css/bootstrap.min.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="col-md-10 container pt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <h3>Tambah Data Pengguna</h3>
                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $item )
                                <li>{{$item}}</li>
                            @endforeach
                        </ul>
                    @endif
                    <form action="/user/edit/{{$user->id}}" method="post" class="multipart/form-data">
                        @csrf
                        <table>
                            <tr>
                                <td>Name</td>
                                <td><input type="text" name="name" error class="@error('name') error @enderror" id=""  value="{{$user->name}}"></td>
                                <td>
                                    @error('name')
                                        {{$message}}
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="email" name="email" id="" value="{{$user->email}}"></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input type="password" name="password" id=""  value="{{$user->password}}" ></td>
                                @error('password')
                                    {{$message}}
                                @enderror
                            </tr>
                            <tr>
                                <td><input type="submit" name="" id="" value="SIMPAN"></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
         </div>
    </div>
</body>
</html>
<script src="{{  asset('asset/bootstrap-5.0.2-dist/js/bootstrap.min.js')}}"></script>

