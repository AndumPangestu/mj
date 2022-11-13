{{-- @php
    if (Auth::check()) {
        // The user is logged in...
        if (Auth::user()->role < 2) {
            return view('login');
        }
    } else {
        return redirect()->route('login-');
    }
@endphp --}}

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
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-navbar ">
        <div class="container-fluid d-flex justify-content-between">

            <a href="/admin-homepage" class="navbar-brand ms-5 my-2"
                style="font-size: 12px; color: white; font-weight: 600"><img src="image/logo.svg" alt="logo"
                    style="width: 21px;"> PT. Maju Bersama</a>

            <div class="col-4">
                <div class="ms-n5">
                    <div class="form-outline">
                        <input type="search" id="form1" class="form-control searching" placeholder="Type to search"
                            aria-label="Search" />
                    </div>
                </div>

            </div>


            <div class="nav">
                <div class="link account">
                    <a href="profile.php"><span class="iconify me-3" data-icon="clarity:avatar-line" data-width="30"
                            data-height="30" style="color: #1b2223;"></span></a>
                </div>
                <div class="link logout me-5">
                    <a href="{{ route('logout') }}"><span class="iconify" data-icon="ion:log-out-outline"
                            data-width="30" data-height="30" style="color: #d60000;"></span></a>
                </div>
            </div>
        </div>
    </nav>

    <section class="home">
        <div class="container-fluid">
            <div class="row bg-dark">
                <div class="col-2 mt-custom-5 bg-dark-content">
                    <div class="row mt-2 ms-3 pt-3 pe-4 ps-3 ">
                        <a class="btn-primary btn mb-3 " href="/admin-addAds"
                            style="font-size: 12px; text-align: center;">
                            <span style="font-size: 12px;">+ </span>Buat Iklan Baru</a>
                        <div class="row mb-custom">
                            <a class="font-primary-active for-link mb-4 p-auto" href="/admin-homepage"
                                style="font-size: 12px; text-align: center; display: inline;">
                                <span>Dashboard</span>
                            </a>

                            <div class="row ">
                                <p class="for-link mb-2" style="font-size: 12px; text-align: center; color: white;">
                                    IKLAN
                                </p>
                                <a class="font-primary for-link mb-4" href="{{ route('ads.page') }}"
                                    style="font-size: 12px; text-align: center;">
                                    <span>Iklan</span>
                                </a>
                            </div>


                            <div class="row ">
                                <p class="for-link mb-2" style="font-size: 12px; text-align: center; color: white;">
                                    OPERATOR
                                </p>
                                <a class="font-primary for-link mb-4" href="{{ route('operator.list') }}"
                                    style="font-size: 12px; text-align: center;">
                                    <span>List Operator</span>
                                </a>
                            </div>

                            <div class="row ">
                                <p class="for-link mb-2" style="font-size: 12px; text-align: center; color: white;">USER
                                </p>
                                <a class="font-primary for-link mb-4" href="{{ route('user.list') }}"
                                    style="font-size: 12px; text-align: center;">
                                    <span>List User</span>
                                </a>
                            </div>

                            <div class="row ">
                                <p class="for-link mb-2" style="font-size: 12px; text-align: center; color: white;">
                                    LAPORAN
                                </p>
                                <a class="font-primary for-link mb-4" href="/admin-transaction"
                                    style="font-size: 12px; text-align: center;">
                                    <span>Transaksi</span>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <a class="font-primary for-link mb-4 p-auto" href="/admin-profile"
                                style="font-size: 12px; text-align: center;">
                                <span>Settings</span>
                            </a>
                            <a class="font-primary for-link mb-4" href="/login-"
                                style="font-size: 12px; text-align: center;">
                                <span>Logout</span>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-10 ">
                    @yield('containerAdmin')
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
</body>

</html>
