@extends('layouts.admin.mainadmin')
@section('containerAdmin')
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
                    @php($i = 1)
                    @foreach ($users as $user)
                        <tr>
                            <td style="text-align: center">{{ $i++ }}</td>
                            <td>{{ $user->name }}</td>
                            <td><a href="admin/tambahdata" type="button" class="btn btn-table">Lihat
                                    Detail</a></td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
