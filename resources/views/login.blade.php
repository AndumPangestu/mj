<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

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
                <div class="col-md-6 text-center mb-1 mt-5 pt-5">
                    <img src="image/Logo.svg" alt="logo" style="width: 17%">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-7">
                    <div class="login-wrap p-0">
                        <h2 class="mb-2 text-center text-white">Selamat Datang di PT Maju Bersama</h2>
                        <h6 class="mb-4 text-center text-white">Silahkan melakukan Login terlebih dahulu dengan mengisi
                            kolom di bawah ini</h6>
                        <form action="{{ route('login.action') }}" method="POST" class="signin-form">
                            @csrf
                            <h6 class="mt-1 mb-3 text-white">ID Akun dan Email</h6>
                            <div class="form-group">
                                <input type="text" class="form-control rounded-pill py-3 px-4"
                                    placeholder="Silahkan masukan ID Akun atau Email anda" name="email" autofocus
                                    required>
                            </div>
                            <h6 class="my-3 text-white">Kata Sandi</h6>
                            <div class="form-group">
                                <input id="password-field" type="password" class="form-control rounded-pill py-3 px-4"
                                    placeholder="Silahkan masukan Kata Sandi Anda" name="password" required>
                            </div>

                            <div class="row mt-2 mb-4">
                                <a class="link-forget-password" href="#">Lupa Password?</a>
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit"
                                    class="form-control btn btn-primary submit py-3 px-3 rounded-pill">Masuk</button>
                            </div>
                            <div class="form-group">
                                <a class="form-control btn btn-outline-primary py-3 px-3 rounded-pill"
                                    href="/registration">Daftar Sebagai Pengguna Baru</a>
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
