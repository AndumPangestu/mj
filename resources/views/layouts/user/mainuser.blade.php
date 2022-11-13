<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home Page</title>

    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="app.css" rel="stylesheet">

    <!-- Styles -->

    <style>
        /* body {
                font-family: 'Nunito', sans-serif;
            } */
    </style>
</head>

<body class="bg-dark">
    @extends('layouts.user.navbar')
    <section class="home">
        <div id="carouselExampleIndicators" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>

            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="image/financialtradingslide.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="image/financialtradingslide.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="image/financialtradingslide.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <marquee direction="left">
        <h5 class="my-auto py-3">TEXT BERJALAN </h5>
    </marquee>
    <div>
        @yield('container')
    </div>
    <section class="d-flex justify-content-center">
        <div class=" w-content mx-5 mb-5 text-light ">
            <div class="bg-new-content rounded-half-card">
                <div class="text-center p-5">
                    <div class="row mb-4">
                        <div class="bg-primary p-5 rounded-card">
                            <div class="p-1 mb-2">
                                <span class="badge bg-smoke py-2 text-white"><span class="badge bg-green"><span
                                            class="iconify" data-icon="bxs:check-shield" style="color: white;"
                                            data-width="16" data-height="16"></span></span> Situs Trading
                                    Terpercaya</span>
                            </div>
                            <div class="d-flex justify-content-center mb-5">
                                <div class="col-6">
                                    <h2 class="">Mari Kita mulai investasi keuangan kita</h2>
                                </div>
                            </div>

                            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                                <div class="col-2">
                                    <button
                                        class="btn btn-success rounded-pill pnew-2 px-4 d-flex justify-content-center align-items-center">Mulai
                                        Sekarang <div class="space me-2"></div><img src="image/Arrow_R_Circle.png"
                                            alt="arrow" height="15px"></button>
                                </div>
                                <div class="col-2 d-flex align-items-center justify-content-center">
                                    <div class="mx-auto">
                                        <a href="">Info Lebih Lanjut >></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="d-flex justify-content-between bg-footer px-4 py-3">
                    <div><a href="index.php" class="navbar-brand ms-5 my-2"><img src="image/logo.svg" alt="logo"
                                style="width: 60px;"></a></div>
                    <div class="row">
                        <div class="align-items-center text-center">
                            <p class="text-center ms-n4"style="font-size: 12px !important;">© 2022 PT. Maju Bersama
                                All rights reserved.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="align-items-center m-auto">
                            <a href=""><span class="iconify" data-icon="dashicons:facebook-alt"
                                    style="color: white;" data-width="22" data-height="22"></span></a>
                            <a href="" class="me-1"><span class="iconify"
                                    data-icon="akar-icons:instagram-fill" style="color: white;" data-width="22"
                                    data-height="22"></span></a>
                            <a href=""><span class="iconify" data-icon="akar-icons:twitter-fill"
                                    style="color: white;" data-width="22" data-height="22"></span></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="js/app.js"></script>

</body>

</html>
