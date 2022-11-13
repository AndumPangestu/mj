@extends('layouts.admin.mainadmin')
@section('containerAdmin')
    <div class="welcome-section me-n1">
        <div class="row bg-dark d-flex justify-content-start mt-new-5">

            <h5 class="col-4 mt-4 pb-2" style="font-size: 12px; text-align:center; color:white;"><span
                    style="font-size: 12px;
        background: -webkit-linear-gradient(89.99deg, #5261DA 85%, #653CDC 90.16%, #A182E2 95.31%, #02A3D6 99.99%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;">
                    Hey Admin - </span>Selamat Datang di PT.MajuBersama</h5>
        </div>
        <div class="row bg-dark d-flex justify-content-start m-3">

            <div class="col">
                <a class="btn-primary btn mb-3 px-5" href="/admin-addAds" style="font-size: 12px; text-align: center;">
                    <span style="font-size: 12px;">+ </span>Buat Iklan Baru</a>
            </div>
        </div>
    </div>
    <div id="carouselExampleIndicators" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            @php
                $number = 0;
            @endphp
            @foreach ($users as $user)
                @if ($number == 0)
                    <button type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide-to="{{ $number }}" class="active" aria-current="true"
                        aria-label="Slide {{ $number + 1 }}"></button>
                @else
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                @endif

                @php
                    $number++;
                @endphp
            @endforeach

        </div>
        <div class="carousel-inner">
            @php
                $number = 0;
            @endphp
            @foreach ($users as $user)
                @if ($number == 0)
                    <div class="carousel-item active">
                        <img src="images/iklan/{{ $user->image }}" class="d-block w-100" alt="...">
                    </div>
                @else
                    <div class="carousel-item">
                        <img src="images/iklan/{{ $user->image }}" class="d-block w-100" alt="...">
                    </div>
                @endif
                @php
                    $number++;
                @endphp
            @endforeach
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
        <h5 class="my-auto py-2">
            @foreach ($users as $user)
                {{ $user->running_text }}
            @endforeach
        </h5>
    </marquee>
@endsection
