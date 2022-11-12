<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Change Password</title>

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
                        expand_more
                    </span></h2>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-12">
                    <div class="login-wrap p-0">
                        <form action="#" class="signin-form ">
                            <h6 class="mt-1 mb-3 text-white">Kata Sandi Baru</h6>
                            <div class="form-group">
                                <input id="password-field" type="password" class="form-control rounded-pill py-3 px-4"
                                    placeholder="Silahkan masukan Kata Sandi Baru Anda" required>
                            </div>
                            <h6 class="my-3 text-white">Konfirmasi Kata Sandi</h6>
                            <div class="form-group">
                                <input id="password-field" type="password" class="form-control rounded-pill py-3 px-4"
                                    placeholder="Silahkan masukan kembali Kata Sandi Anda" required>
                                {{-- <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span> --}}
                            </div>
                            <div class="form-group mb-3 mt-5">
                                <button type="submit"
                                    class="form-control btn btn-primary submit py-3 px-3 rounded-pill">Simpan</button>
                            </div>
                            <div class="form-group">
                                <a class="form-control btn btn-outline-primary py-3 px-3 rounded-pill"
                                    href="/profile">Batal</a>
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
