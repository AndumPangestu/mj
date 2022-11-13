@extends('layouts.operator.mainoperator')
@section('containerOperator')
    <div class=" bg-dark-content w-content text-light m-5 p-5 rounded-card">
        <div class="mb-4">
            <div class="d-flex justify-content between">
                <div class="col-8">
                    <h5 class="ps-4">Data Transaksi User<span class="badge rounded-pill bg-white py-2">1000
                            Transaksi</span></h5>
                </div>

                <div class="col-4">
                    <div class="input-group">
                        <button type="button" class="btn btn-search"><span class="iconify" data-icon="akar-icons:search"
                                data-width="15" data-height="15" style="color: white;"></span></button>
                        <input type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-lg" placeholder="Search" id="searchinput">

                    </div>

                </div>
            </div>

        </div>
        <div>
            <table class="table">
                <thead class="table-head">
                    <tr>
                        <th scope="col">Nomor</th>
                        <th scope="col">Tanggal/Waktu</th>
                        <th scope="col">Nama User</th>
                        <th scope="col">Transaksi</th>
                        <th scope="col">Jumlah</th>
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
                                        9-11-2022:17:00
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>USER001</td>
                        <td>Deposit</td>
                        <td>IDR 200.000</td>
                        <td><button type="button" class="btn btn-table">Lihat Detail</button></td>
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
                                        8-11-2022:17:00
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>USER001</td>
                        <td>Deposit</td>
                        <td>IDR 200.000</td>
                        <td><button type="button" class="btn btn-table">Lihat Detail</button></td>
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
                                        7-11-2022:17:00
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>USER001</td>
                        <td>Deposit</td>
                        <td>IDR 200.000</td>
                        <td><button type="button" class="btn btn-table">Lihat Detail</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
