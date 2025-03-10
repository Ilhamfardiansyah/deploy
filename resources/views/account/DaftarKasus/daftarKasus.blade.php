@extends('layouts.main')

@section('content')
    @include('sweetalert::alert')
    <div class="row">
        <div class="card">
            <table class="display" id="example" style="width:100%">
                <thead>
                    <tr>
                        <th class="text-center">
                            Nomor Administrasi
                        </th>
                        <th class="text-center">Dibuat Tanggal</th>
                        <th class="text-center">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $datas)
                        <tr>
                            <td class="text-center">{{ $datas->nomor_administrasi }}</td>
                            <td class="text-center">{{ $datas->created_at->format('d-m-Y H:i:s') }}</td>
                            <td class="text-center">
                                @if ($datas->status_id === 1)
                                    <a href="{{ route('inputDaftar', $datas->id) }}" class="btn btn-danger text-white">Belum
                                        Diproses</a> <!-- Red button -->
                                @elseif ($datas->status_id === 2)
                                    <a href="{{ route('inputDaftar', $datas->id) }}"
                                        class="btn btn-warning text-white">Sedang Diproses</a> <!-- Yellow button -->
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
    </div>


    <script>
        new DataTable('#example');
    </script>
@endsection
