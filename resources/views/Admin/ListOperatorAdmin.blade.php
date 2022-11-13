@extends('layouts.admin.mainadmin')
@section('containerAdmin')
    <div class="welcome-section me-n1">
        <div class="row bg-dark d-flex justify-content-start mt-new-5">

            <h5 class="col-4 mt-4 pb-3" style="font-size: 12px; text-align:center; color:white;"><span
                    style="font-size: 12px;
    background: -webkit-linear-gradient(89.99deg, #5261DA 85%, #653CDC 90.16%, #A182E2 95.31%, #02A3D6 99.99%);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;">
                    Hey Admin - </span>Selamat Datang di PT.MajuBersama</h5>
        </div>
    </div>
    <div class="row bg-dark d-flex justify-content-start m-3">

        <div class="col">
            <a class="btn-primary btn mb-3 px-5" href="/admin-addOperator" style="font-size: 12px; text-align: center;">
                <span style="font-size: 12px;">+ </span>Buat Operator Baru</a>
        </div>
    </div>
    <div class=" bg-dark-content w-content text-light m-3 p-5 rounded-card">
        <div class="mb-4">
            <div class="d-flex justify-content between">
                <div class="col-8">
                    <h5 class="ps-4">Daftar Operator<span class="badge rounded-pill bg-white py-2">1000
                            Operator</span></h5>
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
                        <th scope="col">Nama Operator</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-body">
                <tbody class="table-body">
                    @php($i = 1)
                    @foreach ($users as $user)
                        <tr>
                            <td style="text-align: center">{{ $i++ }}</td>
                            <td>{{ $user->name }}</td>
                            <td><a href="{{ route('user.detail', $user->id) }}" type="button" class="btn btn-table">Lihat
                                    Detail</a></td>
                        </tr>
                    @endforeach

                </tbody>
                </tbody>
            </table>
        </div>
    </div>
@endsection
