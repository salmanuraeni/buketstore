<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('asset/bootstrap-5.0.2-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <title>Document</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg" style="background-color: rgb(224, 167, 177)">
        <div class="container">
          <a class="navbar-brand text-white font-weight-bold" href="#">Fres Flower</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarnav" aria-controls="navbarnav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarnav">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-light" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                  </svg></button>
              </form>
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="#product">Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="#category">Category</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="/logout">Logout</a>
              </li>
              <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                  </svg>
              </li>

            </ul>
          </div>
        </div>
      </nav>
      <section>
        <div class="container-fluid" style="  heigth: 100%; width: 100%;" id="home">
            <img src="./img/bungarose.webp" style=" width: 100%;" alt="">
        </div>
    </section>
    <section>
        <div class="container mt-5" id="category">
            <h2 class=" mb-4">Categories</h2>

            <div class="row">
                <!-- Product 1 -->
                <div class="col-md-3 mb-4">
                    <div class="card h-100">
                        <a href=""><img src="./img/boneka.webp" class="card-img-top" alt="Produk 1"></a>
                        <div class="card-body">
                            <h5 class="card-title" style="margin-left: 70px;">Buket Boneka</h5>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="/produk" ><h5 style="margin-top: 20px; margin-left: 70px">Shop Now ></h5></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card h-100">
                        <a href="/produk"><img src="./img/makananbengbeng.jpg" class="card-img-top" alt="Produk 1"></a>
                        <div class="card-body">
                            <h5 class="card-title"  style="margin-left: 70px;">makanan</h5>
                            <a href="/produk" ><h5 style="margin-top: 20px; margin-left: 70px">Shop Now ></h5></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card h-100">
                        <img src="./img/uang.jfif" class="card-img-top" alt="Produk 1">
                        <div class="card-body">
                            <h5 class="card-title"  style="margin-left: 70px;">Buket Uang</h5>
                            <a href="/produk" ><h5 style="margin-top: 20px; margin-left: 70px">Shop Now ></h5></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card h-100">
                        <img src="./img/bunga12.webp" class="card-img-top" alt="Produk 1">
                        <div class="card-body">
                            <h5 class="card-title"  style="margin-left: 70px;">Buket Bunga</h5>
                            <a href="/produk" ><h5 style="margin-top: 20px; margin-left: 70px">Shop Now ></h5></a>
                        </div>
                    </div>
                </div>
            </div>

    </section>

    <section>
    <div class="container mt-5" id="product">
        <h2 class=" mb-4">Produk</h2>

        <div class="row">

            @foreach ($produk as $item)
            <div class="col-md-3 mb-5">
                <div class="card h-100">
                    <img src="{{ asset('storage/gambar/'. $item->gambar)}}"  class="img-top" alt="Produk 1" style="width: 200px; heigth:200%; margin-left:50px;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <p>{{ $item->kategori}}</p>
                        <span class="text-primary fw-bold ">{{ $item->Harga}}</span>
                        <div class="d-flex align-items-center">
                            <p>{{ $item->deskripsi }}</p>
                            <a href="/detailproduk/{{$item->id}}" class="btn btn-primary" style="border-radius:10px;">Detail</a>
                            <a href="/keranjang"><button class="btn btn-sm btn-primary" style=" border-radius:10px; margin-left:20px">Beli Sekarang</button></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
       </div>
    </div>
           <!-- <div class="col-md-3 mb-5">
               <div class="card h-100">
                   <img src="./img/bonekacapel.jfif" style="width: 50%; heigth:50%; margin-left:50px;" class="card-img-top" alt="Produk 1">
                   <div class="card-body">
                       <h5 class="card-title">√ 10 HP NFC Murah Terbaik 2024</h5>
                       <div class="d-flex justify-content-between align-items-center">
                           <span class="text-primary fw-bold">Rp1.000.000</span>
                           <a href="/keranjang"><button class="btn btn-sm btn-primary" style="width: 100%; margin-top:10px; heigth:30%; border-radius:10px;">Beli Sekarang</button></a>
                        </div>
                    </div>
                </div>
            </div> -->

{{-- </div> --}}
    </section>
    <section>
        <div class="container-fluid " style="background-color: rgb(224, 167, 177)">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 mb-4 text-white">
                        <h3>About Us</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Quod recusandae cupiditate accusamus nemo voluptate harum, labore,
                            quae aliquid temporibus voluptates ab.</p>
                            <li>1734 Stonecoal Road</li>
                            <li>+62-8953-3711-1836</li>
                            <li>email@gmail.com</li>
                    </div>
                    <div class="col-md-3 mb-4 text-white">
                        <h3>Categories</h3>
                        <p>Hot deals</p>
                        <p>Laptops</p>
                        <p>Smartphones</p>
                        <p>Cameras</p>
                    </div>
                    <div class="col-md-3 mb-4 text-white">
                        <h3>Information</h3>
                        <p>About Us</p>
                        <p>Contact Us</p>
                        <p>Privacy Policy</p>
                        <p>Orders and Returns</p>
                        <p>Terms & Conditions</p>
                    </div>
                    <div class="col-md-3 mb-4 text-white">
                        <h3>Service</h3>
                        <p>My Account</p>
                        <p>View Cart</p>
                        <p>Wishlist</p>
                        <p>Track My Order</p>
                        <p>Help</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid">
        <div class="text-center">
            <p>Copyright ©2024 All rights reserved | This template is made with  by Colorlib</p>
        </div>
    </div>
</body>
</html>
