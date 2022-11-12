<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Profile</title>

    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="app.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>

<body class="bg-dark">
    @extends('layouts.user.navbar');
    <section class="d-flex justify-content-center  my-5 pt-5">
        <div class="container bg-dark-content p-5 rounded-card">
            <div class="d-flex justify-content-between text-white">
                <h2>Profil</h2>
                <h2><span class="material-symbols-outlined">
                    </span></h2>
            </div>
            <div class="row justify-content-center ">
                <div class="col-12">
                    <div class="login-wrap p-0">
                        <form action="#" class="signin-form ">
                            <div class="text-center">
                                <div class="form-group">
                                    <label for="formFileSm" class="label_display form-label"><img
                                            src="image/profile_icon.svg" style="width: 75%" alt="">
                                    </label>

                                    <input style="display : none"
                                        class="width_input mx-auto form-control form-control-sm" id="formFileSm"
                                        type="file">
                                </div>
                            </div>
                            <h6 class="mt-1 mb-3 text-white">ID Akun</h6>
                            <div class="form-group">
                                <input type="text" class="form-control rounded-pill py-3 px-4" placeholder="User1"
                                    value={{ auth()->user()->id }} required disabled>

                                @auth

                                </div>
                                <h6 class="my-3 text-white">Nama Lengkap</h6>
                                <div class="form-group">
                                    <input type="text" class="form-control rounded-pill py-3 px-4"
                                        value="{{ Auth::user()->name }}" required>
                                </div>
                                <h6 class="my-3 text-white">Email</h6>
                                <div class="form-group">
                                    <input id="emaiil-field" type="email" class="form-control rounded-pill py-3 px-4"
                                        value="{{ auth()->user()->email }}" required>
                                </div>
                                <h6 class="my-3 text-white">Nomor Telepon</h6>
                                <div class="form-group">
                                    <input type="tel" class="form-control rounded-pill py-3 px-4"
                                        value="{{ auth()->user()->contact_number }}" required>
                                </div>
                                <h6 class="my-3 text-white">Alamat</h6>
                                <div class="form-group">
                                    <input type="text" class="form-control rounded-pill py-3 px-4"
                                        value="{{ auth()->user()->address }}" required>
                                </div>
                                <h6 class="my-3 text-white">Kode Referal</h6>
                                <div class="form-group">
                                    <input type="text" class="form-control rounded-pill py-3 px-4"
                                        value="{{ auth::user()->ref_code }}" required disabled>
                                    {{-- <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span> --}}
                                </div>
                            @endauth
                            <div class="form-group mb-3 mt-4">
                                <button type="submit"
                                    class="form-control btn btn-primary submit py-3 px-3 rounded-pill">Simpan</button>
                            </div>
                            <div class="form-group">
                                <a class="form-control btn btn-outline-primary py-3 px-3 rounded-pill"
                                    href="">Batal</a>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="d-flex justify-content-center pb-5">
        <div class="container">
            <div class="form-group mb-3 mt-4">
                <a class="form-control btn btn-primary py-3 px-3 rounded-pill" href="/change-password">Ganti Kata
                    Sandi</a>
            </div>
            <div class="form-group">
                <a class="form-control btn btn-danger py-3 px-3 rounded-pill" href="">Keluar</a>
            </div>
        </div>
    </section>


    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
