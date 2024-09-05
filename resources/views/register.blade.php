<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.0.2-dist/css/bootstrap.min.css')}}">
    <title>Document</title>
</head>
<body style="height: 100vh; background: rgb(224, 167, 177); display:flex; flex-derection:column; align-items:center; justify-content: center; " >
    <div class="container">
        <div class="row px-3">
            <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0" style="overflow:hidden; border:0; border-radius: 20px; box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);">
                <div class="img-left d-none d-md-flex" style="width: 45%; background: url('./img/bungarose.webp') center; background-size: cover;"></div>
                <div class="card-body" style="padding: 2rem;">
                    <h2 class="title text-center mt-4" style="margin-bottom: 2rem;">
                        Register
                    </h2>
                    <form action="/dassboard/register" class="form-box px-3">
                        @csrf
                        <div class="form-input" style="position:relative; ">
                            <label class="form-label">Email</label>
                            <input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email" />
                        </div>
                        <div class="form-input" style="position:relative; ">
                            <label class="form-label">Username</label>
                            <input class="form-control form-control-lg" type="name" name="name" placeholder="Enter your name" />
                        </div>
                        <div class="form-input">
                            <span><i class="fa fa-key"></i></span>
                            <label class="form-label">Password</label>
                            <input class="form-control form-control-lg" type="password" name="password" placeholder="Enter your password" />
                        </div>
                        <div class="mb-3">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="cb1">
                                <label class="custom-control-label" for="cb1">Remember me</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-blok mt-3 w-100" style="background: rgb(224, 167, 177);">Sign Up</button>
                        </div>
                        <div class="text-right">
                            <a href="#" class="forget-link">Forget password?</a>
                        </div>
                        <div class="text-center mb-3">or login with</div>
                        <div class="row mb-3">
                            <div class="col-4">
                                <a href="#" class="btn btn-block btn-social btn-facebook">facebook</a>
                            </div>
                            <div class="col-4">
                                <a href="#" class="btn btn-block btn-social btn-twitter">twitter</a>
                            </div>
                            <div class="col-4">
                                <a href="#" class="btn btn-block btn-social btn-google">google</a>
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="text-center mb-2">Don't have an acount?
                            <a href="#" class="register-link">Register here</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
