@extends('layouts.admin.mainadmin')
@section('containerAdmin')
    <div class="welcome-section me-n1">
        <div class="row bg-dark d-flex justify-content-start mt-new-5">

            <h5 class="col-4 mt-4 pb-3 ps-4" style="font-size: 12px; text-align:start; color:white;"><span
                    style="font-size: 12px;
    background: -webkit-linear-gradient(89.99deg, #5261DA 85%, #653CDC 90.16%, #A182E2 95.31%, #02A3D6 99.99%);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;">
                    Hey Admin - </span>Selamat Datang di PT.MajuBersama</h5>
        </div>

    </div>
    <section class="d-flex justify-content-center  my-5 pt-5">
        <div class="container bg-dark-content p-5 rounded-card">
            <div class="d-flex justify-content-between text-white">
                <h2>Iklan</h2>
                <h2><span class="material-symbols-outlined">

                    </span></h2>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-12">
                    <div class="login-wrap p-0">
                        <form action="{{ route('iklan.add') }}" method="POST" enctype="multipart/form-data"
                            class="signin-form ">
                            @csrf
                            <div class="form-group">
                                <input type="file" name="image" id="inputImage"
                                    class="form-control rounded-pill py-3 px-4"
                                    placeholder="Silahkan masukan Kata Sandi Baru Anda" name="image" required>
                            </div>
                            <h6 class="my-3 text-white">Text Berjalan</h6>
                            <div class="form-group mb-3">
                                <textarea class="form-control rounded-card p-3 text-white" placeholder="Silahkan masukan Text Berjalan"
                                    style="height: 150px; resize: none;" name="running_text"></textarea>
                            </div>
                            <div class="form-group mb-3 mt-5">
                                <button type="submit"
                                    class="form-control btn btn-primary submit py-3 px-3 rounded-pill">Simpan</button>
                            </div>
                            <div class="form-group">
                                <a class="form-control btn btn-outline-primary py-3 px-3 rounded-pill"
                                    href="/admin-profile">Batal</a>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
