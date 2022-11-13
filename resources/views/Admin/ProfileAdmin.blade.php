@extends('layouts.admin.mainadmin')
@section('containerAdmin')
    <section class="d-flex justify-content-center  my-5 ms-3 pt-5">
        <div class="container bg-dark-content p-5 rounded-card">
            <div class="d-flex justify-content-between text-white">
                <h2>Profil</h2>
                <h2><span class="material-symbols-outlined">
                    </span></h2>
            </div>
            <div class="row justify-content-center ">
                <div class="col-12">
                    <div class="login-wrap p-0">
                        <form action="{{ route('update.action') }}" method="post" class="signin-form">
                            @csrf
                            <div class="text-center">
                                <div class="form-group">
                                    <label for="formFileSm" class="label_display form-label"><img
                                            src="image/profile_icon.svg" style="width: 75%" alt="">
                                    </label>

                                    <input style="display : none" class="width_input mx-auto form-control form-control-sm"
                                        id="formFileSm" type="file">
                                </div>
                            </div>
                            <h6 class="mt-1 mb-3 text-white">ID Akun</h6>
                            <div class="form-group">
                                <input type="text" class="form-control rounded-pill py-3 px-4" placeholder="@Admin"
                                    name="id_account" value="{{ auth()->user()->id }}" required disabled>
                            </div>
                            <h6 class="my-3 text-white">Nama Lengkap</h6>
                            <div class="form-group">
                                <input type="text" class="form-control rounded-pill py-3 px-4" name="name"
                                    value="{{ Auth::user()->name }}" required>
                            </div>
                            <h6 class="my-3 text-white">Email</h6>
                            <div class="form-group">
                                <input id="emaiil-field" type="email" class="form-control rounded-pill py-3 px-4"
                                    name="email" value="{{ auth()->user()->email }}" required>
                            </div>
                            <h6 class="my-3 text-white">Nomor Telepon</h6>
                            <div class="form-group">
                                <input type="tel" class="form-control rounded-pill py-3 px-4" name="contact_number"
                                    value="{{ auth()->user()->contact_number }}" required>
                            </div>
                            <h6 class="my-3 text-white">Alamat</h6>
                            <div class="form-group">
                                <input type="text" class="form-control rounded-pill py-3 px-4" name="address"
                                    value="{{ auth()->user()->address }}" placeholder="Silahkan masukan alamat anda"
                                    required>
                            </div>
                            <h6 class="my-3 text-white">Kode Referal</h6>
                            <div class="form-group">
                                <input type="text" class="form-control rounded-pill py-3 px-4"
                                    placeholder="@KDREFOP000001" name="reff_code" value="{{ auth()->user()->ref_code }}"
                                    disabled>
                                {{-- <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span> --}}
                            </div>
                            <div class="form-group mb-3 mt-4">
                                <button type="submit"
                                    class="form-control btn btn-primary submit py-3 ps-3 rounded-pill">Simpan</button>
                            </div>
                            <div class="form-group">
                                <a class="form-control btn btn-outline-primary py-3 ps-3 rounded-pill"
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
                <a class="form-control btn btn-primary py-3 rounded-pill" href="/admin-change-password">Ganti Kata
                    Sandi</a>
            </div>
            <div class="form-group">
                <a class="form-control btn btn-danger py-3 rounded-pill" href="">Keluar</a>
            </div>
        </div>
    </section>
@endsection
