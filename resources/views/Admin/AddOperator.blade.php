@extends('layouts.admin.mainadmin')
@section('containerAdmin')
    <div class="welcome-section me-n1">
        <div class="row bg-dark d-flex justify-content-start mt-new-5">

            <h5 class="col-4 mt-4 pb-1 ps-4" style="font-size: 12px; text-align:start; color:white;"><span
                    style="font-size: 12px;
    background: -webkit-linear-gradient(89.99deg, #5261DA 85%, #653CDC 90.16%, #A182E2 95.31%, #02A3D6 99.99%);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;">
                    Operator - </span>Tambah Operator</h5>
        </div>

    </div>
    <section class="d-flex justify-content-center ms-3 pt-3">
        <div class="container bg-dark-content p-5 rounded-card">
            <div class="d-flex justify-content-between text-white">
                <h2>Tambah Operator</h2>
                <h2><span class="material-symbols-outlined">

                    </span></h2>
            </div>
            <div class="row justify-content-center ">
                <div class="col-12">
                    <div class="login-wrap p-0">
                        <form action="{{ route('registration.action') }}" method="post" class="signin-form ">
                            @csrf
                            <div class="row mb-4">

                                <h6 class="mt-1 mb-3 text-white">ID Akun</h6>
                                <div class="form-group">
                                    <input type="text" class="form-control rounded-pill py-3 px-4"
                                        placeholder="@User01111" name="id_account" disabled>
                                </div>
                                <h6 class="my-3 text-white">Username</h6>
                                <div class="form-group">
                                    <input type="text" class="form-control rounded-pill py-3 px-4" name="name"
                                        placeholder="Silahkan masukan Username Operator" name="name" required>
                                    {{-- <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span> --}}
                                </div>
                                <h6 class="my-3 text-white">Email</h6>
                                <div class="form-group">
                                    <input type="text" class="form-control rounded-pill py-3 px-4" name="email"
                                        placeholder="Silahkan masukan Email Operator" name="email" required>
                                </div>
                                <h6 class="my-3 text-white">Nomor Telepon</h6>
                                <div class="form-group">
                                    <input type="tel" class="form-control rounded-pill py-3 px-4" name="contact_number"
                                        placeholder="Silahkan masukan Nomor Telepon Operator" name="telp_number" required>
                                    {{-- <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span> --}}
                                </div>


                                <h6 class="mt-1 mb-3 text-white">Kata Sandi</h6>
                                <div class="form-group">
                                    <input id="password-field" type="password" class="form-control rounded-pill py-3 px-4"
                                        placeholder="Silahkan masukan Kata Sandi Operator" name="password" required>
                                </div>
                                <h6 class="my-3 text-white">Konfirmasi Kata Sandi</h6>
                                <div class="form-group">
                                    <input id="password-field" type="password" class="form-control rounded-pill py-3 px-4"
                                        placeholder="Silahkan masukan kembali Kata Sandi Operator" name="password_confirm"
                                        required>
                                    {{-- <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span> --}}
                                </div>
                                <h6 class="my-3 text-white">Kode Referal</h6>
                                <div class="form-group">
                                    <input type="text" class="form-control rounded-pill py-3 px-4"
                                        placeholder="@KDREFOP000001" name="reff_code" disabled>
                                    {{-- <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span> --}}
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <button type="submit"
                                    class="form-control btn btn-primary submit py-3 px-3 rounded-pill">Daftar</button>
                            </div>
                            <div class="form-group mb-5">
                                <a class="form-control btn btn-outline-primary py-3 px-3 rounded-pill" href="/login-">Sudah
                                    Punya Akun? Silahkan Melakukan Login</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
