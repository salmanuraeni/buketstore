{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.0.2-dist/css/bootstrap.min.css')}}">
    <title>Document</title>

</head>
<body style="background-color:  rgb(224, 163, 163)">
    <nav class="navbar navbar-expand-sm " style="background-color:  rgb(201, 81, 81)">
        <div class="container-fluid">
            <a href="#" style="margin-left: 50%;" class="navbar-brand text-white">Fres Flower</a>
        </div>
    </nav>
    <div class="container">
        @if (Session::has('pesan'))
            <div class="alert alert-denger">{{Session::get('pesan')}}</div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card mt-5">
                    <div class="card-header text-center text-white" style="background-color: rgb(201, 81, 81)">
                        login
                    </div>
                    <div class="card-body">
                        <form method="post" action="/auth">
                            @csrf
                            <div class="form-group">
                                <label for="email">email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="enter email">
                            </div>
                            <div class="form-group">
                                <label for="password">password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="enter password">
                            </div>
                            <button type="submit" class="btn btn-secondary btn-blok mt-3 w-100" style="background-color:  rgb(201, 81, 81)">simpan</button>

                        </form>
                    </div>
                </div>
            </div>
        </div> --}}

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
            <meta name="author" content="AdminKit">
            <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
            <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.0.2-dist/css/bootstrap.min.css')}}">

            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

            <link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-in.html" />

            <title>Sign In | AdminKit Demo</title>

            <link href="css/app.css" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
        </head>

        <body>
            <div class="container">
                @if (Session::has('pesan'))
                    <div class="alert alert-denger">{{Session::get('pesan')}}</div>
                @endif
                <main class="d-flex w-100">
                    <div class="container d-flex flex-column">
                        <div class="row vh-100">
                            <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                                <div class="d-table-cell align-middle">
                                    <div class="text-center mt-4">
                                        <h1 class="h2">Welcome back, Charles</h1>
                                        <p class="lead">
                                            Sign in to your account to continue
                                        </p>
                                    </div>
                                    <div class="card" style="background-color: rgb(245, 174, 174)">
                                        <div class="card-body">
                                            <div class="m-sm-4">
                                                <div class="text-center">
                                                    <img src="./img/avatar.jpg" alt="Charles Hall" class="img-fluid rounded-circle" width="132" height="132" />
                                                </div>
                                                <form method="post" action="/auth">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label class="form-label">Email</label>
                                                        <input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email" />
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Password</label>
                                                        <input class="form-control form-control-lg" type="password" name="password" placeholder="Enter your password" />
                                                        <small>

                                                            <a href="index.html">Forgot password?</a>
                                                        </small>
                                                    </div>
                                                    <div>
                                                        <label class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="remember-me" name="remember-me" checked>
                                                            <span class="form-check-label">
                                                            Remember me next time
                                                            </span>
                                                        </label>
                                                    </div>
                                                    <div class="text-center mt-3">
                                                        <button type="submit" class="btn btn-blok mt-3 w-100" style="background-color: rgb(245, 174, 174)">Masuk</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <script src="js/app.js"></script>
        </body>
        </html>
