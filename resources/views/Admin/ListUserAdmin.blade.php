@extends('layouts.admin.mainadmin')
@section('containerAdmin')
    <div class=" bg-dark-content w-content text-light m-5 p-5 rounded-card">
        <div class="mb-4">
            <div class="d-flex justify-content between">
                <h5 class="ps-4">Daftar User<span class="badge rounded-pill bg-white py-2">1000
                        User</span></h5>
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
                            <td><a href="{{ route('user.detail', $user->id) }}" type="button" class="btn btn-table">Lihat
                                    Detail</a></td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
