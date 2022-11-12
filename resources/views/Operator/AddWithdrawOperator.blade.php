@extends('layouts.operator.mainoperator')
@section('containerOperator')
    <div class="welcome-section me-n1 ">
        <div class="row bg-dark d-flex justify-content-start mt-new-5">

            <h5 class="col-4 mt-4 pb-3 ps-4" style="font-size: 12px; text-align:start; color:white;"><span
                    style="font-size: 12px;
background: -webkit-linear-gradient(89.99deg, #5261DA 85%, #653CDC 90.16%, #A182E2 95.31%, #02A3D6 99.99%);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;">
                    List User - </span>Withdraw</h5>
        </div>

    </div>
    <section class="d-flex justify-content-center ">
        <div class="container bg-dark-content p-5 rounded-card">
            <div class="d-flex justify-content-center text-white col-12">
                <a class="btn btn-secondary btn-not-active-left" href="/operator-addDeposite">Deposite</a>
                <a class="btn btn-primary btn-active-right" href="/operator-addWithdraw">Withdraw</a>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-12">
                    <div class="login-wrap p-0">
                        <form action="#" class="signin-form ">

                            <h6 class="my-3 text-white">Nama Pengguna(User)</h6>
                            <div class="form-group">
                                <input id="" type="text" class="form-control rounded-pill py-3 px-4"
                                    placeholder="Aryo Wiguna Cahyo" disabled>
                            </div>
                            <h6 class="my-3 text-white">Saldo</h6>
                            <div class="form-group">
                                <input id="" type="text" class="form-control rounded-pill py-3 px-4"
                                    placeholder="Rp 2.000.000" disabled>
                            </div>
                            <h6 class="my-3 text-white">Jumlah Withdraw</h6>
                            <div class="form-group">
                                <input id="" type="text" class="form-control rounded-pill py-3 px-4"
                                    placeholder="Rp 10.000.000" required>
                            </div>
                            <h6 class="my-3 text-white">Tanggal/Waktu</h6>
                            <div class="form-group">
                                <input id="" type="datetime" class="form-control rounded-pill py-3 px-4"
                                    placeholder="09-11-2022 17:25" disabled>
                            </div>
                            <h6 class="my-3 text-white">Nomor Referal</h6>
                            <div class="form-group">
                                <input id="" type="text" class="form-control rounded-pill py-3 px-4"
                                    placeholder="@Operator001" disabled>
                            </div>
                            <div class="form-group mb-3 mt-5">
                                <button type="submit"
                                    class="form-control btn btn-primary submit py-3 px-3 rounded-pill">Withdraw</button>
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
