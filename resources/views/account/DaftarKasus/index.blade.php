@extends('layouts.main')

@section('content')
    <!-- Recent Sales -->
    <div class="pagetitle">
        <h1>Daftar Kasus</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item active">Daftar Kasus</li>
            </ol>
        </nav>
    </div>
    <div class="col-12">
        <div class="card recent-sales overflow-auto">
            <div class="card-body">
                <h5 class="card-title">Halaman Daftar Kasus</h5>

                <table class="table table-borderless datatable">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">No. Kasus</th>
                            <th scope="col">No. Adm. Persuratan</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $datas)
                            <tr>
                                <th scope="row"><a href="#">1</a></th>
                                <td>{{ $datas->nomor_kasus }}</td>
                                <td></td>
                                <td><span class="badge bg-success">Selesai</span></td>
                                <td><a href=""><i class="ri-edit-2-line"></i></a> | <a
                                        href="{{ route('DaftarKasus.create') }}"><i class="ri-add-fill"></i> </a> | <a
                                        href=""><i class="ri-delete-bin-6-line"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

        </div>
    </div><!-- End Recent Sales -->
@endsection
