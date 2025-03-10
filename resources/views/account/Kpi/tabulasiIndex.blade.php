@extends('layouts.main')

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <h2 class="text-center">Daftar Kasus Ditangani</h2>
                    @if ($fristDataAhli)
                        <h3 class="text-center">{{ $fristDataAhli->ahli_ditunjuk }}</h3>
                    @endif
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th class="text-center">Nomor Kasus</th>
                                <th class="text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $datas)
                                <tr>
                                    <td class="text-center">{{ $datas->nomor_administrasi }}</td>
                                    <td class="text-center">
                                        @if ($datas->status_id === 1)
                                            <a href="{{ route('inputDaftar', $datas->id) }}"
                                                class="btn btn-danger text-white">Belum
                                                Diproses</a> <!-- Red button -->
                                        @elseif ($datas->status_id === 2)
                                            <a href="{{ route('inputDaftar', $datas->id) }}"
                                                class="btn btn-warning text-white">Sedang Diproses</a>
                                            <!-- Yellow button -->
                                        @elseif ($datas->status_id === 3)
                                            <a href="{{ route('inputDaftar', $datas->id) }}"
                                                class="btn btn-success text-white">Selesai Proses</a> <!-- Green button -->
                                        @else
                                            <span class="text-muted text-white">Data Tidak Tersedia</span>
                                            <!-- Muted text for unavailable data -->
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <a class="btn btn-primary" href="{{ route('tabulasi') }}">Kembali</a>
            </div>
        </div>
    </div>
    <script>
        new DataTable('#example');
    </script>
@endsection
