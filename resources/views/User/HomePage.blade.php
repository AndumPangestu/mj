@extends('layouts.user.mainuser')
@section('container')
    <section class="d-flex justify-content-center">
        <div class=" bg-dark-content w-content text-light m-5 p-5 rounded-card">
            <div class="mb-4">
                <h3 class="">Dompetku</h3>

            </div>
            <div class="text-center">
                <div class="row mb-4">
                    <div class="bg-primary p-5 rounded-card">
                        <h3 class="">Total Saldo Anda</h3>
                        <h1 class="" style="font-size: 8vw">IDR 9.000.000</h1>
                        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                            <h3 class="">4 November 2022</h3>
                            <h3 class="">2.66%</h3>
                            <img src="image/Vector.svg" alt="up-graph">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="bg-primary p-5 rounded-card mb-2">
                            <h2 class="py-3">Keuntungan Anda</h2>
                            <h2 class="py-3">IDR 2.500.000</h2>

                        </div>
                    </div>
                    <div class="col">
                        <div class="bg-primary p-5 rounded-card">
                            <h2 class="py-3">Nominal Keuntungan</h2>
                            <h2 class="py-3">IDR 7.500.000</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="d-flex justify-content-center">
        <div class=" bg-dark-content w-content text-light m-5 p-5 rounded-card">
            <div class="mb-4">
                <div class="d-flex justify-content between">
                    <h5 class="ps-4">Data Transaksi Investasi Produk <span class="badge rounded-pill bg-white py-2">10
                            Misi</span></h5>
                </div>

            </div>
            <div>
                <table class="table">
                    <thead class="table-head">
                        <tr>
                            <th scope="col">Nomor</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Nama Misi</th>
                            <th scope="col">Deposit</th>
                            <th scope="col">Withdraw</th>
                            <th scope="col">Masa Berlaku</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-body">
                        <tr>
                            <td style="text-align: center">1</td>
                            <td>
                                <div class="container text-center">
                                    <div class="row">
                                        <div class="col-3">
                                            <img src="image/logo.svg" style="width: 75%">
                                        </div>
                                        <div class="col-9" style="text-align: left">
                                            1 November 2022
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="container text-center">
                                    <div class="row">
                                        <div class="col-3">
                                            <img src="image/logo.svg" style="width: 100%">
                                        </div>
                                        <div class="col-9" style="text-align: left">
                                            Misi 0001
                                            <br>
                                            <div style="font-size: 0.8rem">Profit 10%</div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>IDR 200.000</td>
                            <td>IDR 202.000</td>
                            <td>
                                <div class="container text-center">
                                    <div class="row">
                                        <div class="col-3">
                                            <img src="image/logo.svg" style="width: 75%">
                                        </div>
                                        <div class="col-9" style="text-align: left">
                                            1 November 2022
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td><button type="button" class="btn btn-table">Lihat Misi</button></td>
                        </tr>
                        <tr>
                            <td style="text-align: center">2</td>
                            <td>
                                <div class="container text-center">
                                    <div class="row">
                                        <div class="col-3">
                                            <img src="image/logo.svg" style="width: 75%">
                                        </div>
                                        <div class="col-9" style="text-align: left">
                                            29 Oktober 2022
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="container text-center">
                                    <div class="row">
                                        <div class="col-3">
                                            <img src="image/logo.svg" style="width: 100%">
                                        </div>
                                        <div class="col-9" style="text-align: left">
                                            Misi 0001
                                            <br>
                                            <div style="font-size: 0.8rem">Profit 10%</div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>IDR 200.000</td>
                            <td>IDR 202.000</td>
                            <td>
                                <div class="container text-center">
                                    <div class="row">
                                        <div class="col-3">
                                            <img src="image/logo.svg" style="width: 75%">
                                        </div>
                                        <div class="col-9" style="text-align: left">
                                            29 Oktober 2022
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td><button type="button" class="btn btn-table">Lihat Misi</button></td>
                        </tr>
                        <tr>
                            <td style="text-align: center">3</td>
                            <td>
                                <div class="container text-center">
                                    <div class="row">
                                        <div class="col-3">
                                            <img src="image/logo.svg" style="width: 75%">
                                        </div>
                                        <div class="col-9" style="text-align: left">
                                            25 Oktober 2022
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="container text-center">
                                    <div class="row">
                                        <div class="col-3">
                                            <img src="image/logo.svg" style="width: 100%">
                                        </div>
                                        <div class="col-9" style="text-align: left">
                                            Misi 0001
                                            <br>
                                            <div style="font-size: 0.8rem">Profit 10%</div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>IDR 200.000</td>
                            <td>IDR 202.000</td>
                            <td>
                                <div class="container text-center">
                                    <div class="row">
                                        <div class="col-3">
                                            <img src="image/logo.svg" style="width: 75%">
                                        </div>
                                        <div class="col-9" style="text-align: left">
                                            25 Oktober 2022
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td><button type="button" class="btn btn-table">Lihat Misi</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
