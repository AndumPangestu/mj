@extends('layouts.admin.mainadmin')
@section('containerAdmin')
    <div class="welcome-section me-n1">
        <div class="row bg-dark d-flex justify-content-start mt-new-5">

            <h5 class="col-4 mt-4 pb-3" style="font-size: 12px; text-align:center; color:white;"><span
                    style="font-size: 12px;
        background: -webkit-linear-gradient(89.99deg, #5261DA 85%, #653CDC 90.16%, #A182E2 95.31%, #02A3D6 99.99%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;">
                    Hey Admin - </span>Selamat Datang di PT.MajuBersama</h5>
        </div>
    </div>
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
    <marquee direction="left" class="mb-5">
        <h5 class="my-auto py-2">TEXT BERJALAN </h5>
    </marquee>
@endsection
