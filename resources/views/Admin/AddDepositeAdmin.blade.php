@extends('layouts.operator.mainoperator')
@section('containerOperator')
    <div class="welcome-section me-n1 ">
        <div class="row bg-dark d-flex justify-content-start mt-new-5">

            <h5 class="col-4 mt-4 pb-3 ps-4" style="font-size: 12px; text-align:start; color:white;"><span
                    style="font-size: 12px;
background: -webkit-linear-gradient(89.99deg, #5261DA 85%, #653CDC 90.16%, #A182E2 95.31%, #02A3D6 99.99%);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;">
                    List User - </span>Deposite</h5>
        </div>

    </div>
    <section class="d-flex justify-content-center ">
        <div class="container bg-dark-content p-5 rounded-card">
            <div class="d-flex justify-content-center text-white col-12">
                <a class="btn btn-primary btn-active-left" href="">Deposite</a>
                <a class="btn btn-secondary btn-not-active-right" href="">Withdraw</a>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-12">
                    <div class="login-wrap p-0">

                        <form action="{{ route('deposit.add') }}" method="POST" class="signin-form ">
                            @csrf
                            <h6 class="my-3 text-white">Bukti Transfer</h6>
                            <div class="form-group">
                                <input id="file" type="file" class="form-control rounded-pill py-3 px-4"
                                    name="proof_transfer" required>
                            </div>
                            <h6 class="my-3 text-white">Nama Pengguna(User)</h6>
                            <div class="form-group">
                                <input type="text" name="id" name="id_user" value="{{ $users->id }}" hidden>
                                <input id="" type="text" class="form-control rounded-pill py-3 px-4"
                                    placeholder="Aryo Wiguna Cahyo" value="{{ $users->name }}" name="name_user"disabled>
                            </div>
                            <h6 class="my-3 text-white">Saldo</h6>
                            <div class="form-group">
                                <input id="" type="text" class="form-control rounded-pill py-3 px-4"
                                    placeholder="Rp 2.000.000" name="deposits_total" value="{{ $saldo }}"disabled>
                            </div>
                            <h6 class="my-3 text-white">Jumlah Deposite</h6>
                            <div class="form-group">
                                <input id="" type="text" class="form-control rounded-pill py-3 px-4"
                                    placeholder="" name="deposits_value" required>
                            </div>
                            <h6 class="my-3 text-white">Tanggal/Waktu</h6>
                            <div class="form-group">
                                <input id="" type="datetime" class="form-control rounded-pill py-3 px-4"
                                    name="deposits_date" placeholder="09-11-2022 17:25" name="datetime"
                                    value="{{ date('Y-m-d', time()) }}" disabled>
                            </div>
                            <h6 class="my-3 text-white">Nomor Referal</h6>
                            <div class="form-group">
                                <input id="" type="text" class="form-control rounded-pill py-3 px-4"
                                    placeholder="@Operator001" value="{{ $users->ref_code }}" name="reff_number_user"
                                    disabled>
                            </div>
                            <div class="form-group mb-3 mt-5">
                                <button type="submit"
                                    class="form-control btn btn-primary submit py-3 px-3 rounded-pill">Deposite</button>
                            </div>
                            <div class="form-group">
                                <a class="form-control btn btn-outline-primary py-3 px-3 rounded-pill"
                                    href="/operator-profile">Batal</a>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
