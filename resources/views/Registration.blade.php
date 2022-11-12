<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registration</title>

    <!-- Fonts -->
    <link href="app.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Styles -->

</head>

<body class="img js-fullheight" style="background-image: url(image/bg.png);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-1 mt-2 pt-5">
                    <img src="image/Logo.svg" alt="logo" style="width: 17%">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-12">
                    <div class="login-wrap p-0">
                        <h2 class="mb-2 text-center text-white">Selamat Datang di PT Maju Bersama</h2>
                        <h6 class="mb-4 text-center text-white">Silahkan melakukan Daftar Akun terlebih dahulu dengan
                            mengisi kolom di bawah ini</h6>
                        <form action="{{ route('registration.action') }}" method="post" class="signin-form ">
                            @csrf
                            <div class="row mb-4">
                                <div class="col-6">
                                    <h6 class="mt-1 mb-3 text-white">ID Akun</h6>
                                    <div class="form-group">
                                        <input type="text" class="form-control rounded-pill py-3 px-4"
                                            placeholder="@User01111" disabled>
                                    </div>
                                    <h6 class="my-3 text-white">Nama Lengkap</h6>
                                    <div class="form-group">
                                        <input type="text" class="form-control rounded-pill py-3 px-4" name="name"
                                            placeholder="Silahkan masukan Nama Lengkap anda" required>
                                        {{-- <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span> --}}
                                    </div>
                                    <h6 class="my-3 text-white">Email</h6>
                                    <div class="form-group">
                                        <input type="text" class="form-control rounded-pill py-3 px-4" name="email"
                                            placeholder="Silahkan masukan Email anda" required>
                                    </div>
                                    <h6 class="my-3 text-white">Nomor Telepon</h6>
                                    <div class="form-group">
                                        <input type="tel" class="form-control rounded-pill py-3 px-4"
                                            name="contact_number" placeholder="Silahkan masukan Nomor Telepon anda"
                                            required>
                                        {{-- <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span> --}}
                                    </div>

                                </div>
                                <div class="col-6">
                                    <h6 class="mt-1 mb-3 text-white">Kata Sandi</h6>
                                    <div class="form-group">
                                        <input id="password-field" type="password"
                                            class="form-control rounded-pill py-3 px-4"
                                            placeholder="Silahkan masukan Kata Sandi Anda" name="password" required>
                                    </div>
                                    <h6 class="my-3 text-white">Konfirmasi Kata Sandi</h6>
                                    <div class="form-group">
                                        <input id="password-field" type="password"
                                            class="form-control rounded-pill py-3 px-4"
                                            placeholder="Silahkan masukan kembali Kata Sandi Anda"
                                            name="password_confirm" required>
                                        {{-- <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span> --}}
                                    </div>
                                    <h6 class="my-3 text-white">Kode Referal</h6>
                                    <div class="form-group">
                                        <input type="text" class="form-control rounded-pill py-3 px-4"
                                            placeholder="@KDREFOP000001" disabled>
                                        {{-- <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span> --}}
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <button type="submit"
                                    class="form-control btn btn-primary submit py-3 px-3 rounded-pill">Daftar</button>
                            </div>
                            <div class="form-group mb-5">
                                <a class="form-control btn btn-outline-primary py-3 px-3 rounded-pill"
                                    href="/login-">Sudah Punya Akun? Silahkan Melakukan Login</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
