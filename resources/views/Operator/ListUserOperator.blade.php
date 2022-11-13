    @extends('layouts.operator.mainoperator')
    @section('containerOperator')
        <div class=" bg-dark-content w-content text-light m-5 p-5 rounded-card">
            <div class="mb-4">
                <div class="d-flex justify-content between">
                    <div class="col-8">
                        <h5 class="ps-4">Daftar User<span class="badge rounded-pill bg-white py-2">1000
                                User</span></h5>
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
                            <th scope="col">Nama User</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-body">
                        <tr>
                            <td style="text-align: center">1</td>
                            <td>USER001</td>
                            <td><button type="button" class="btn btn-table">Lihat Detail</button></td>
                        </tr>
                        <tr>
                            <td style="text-align: center">2</td>
                            <td>USER002</td>
                            <td><button type="button" class="btn btn-table">Lihat Detail</button></td>
                        </tr>
                        <tr>
                            <td style="text-align: center">3</td>
                            <td>USER003</td>
                            <td><button type="button" class="btn btn-table">Lihat Detail</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
