@extends('layouts.main')

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th class="text-center">Nama Ahli</th>
                                <th class="text-center">Total Kasus</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $datas)
                                <tr>
                                    <td class="text-center"><a
                                            href="{{ route('tabulasiIndex', ['ahli_ditunjuk' => $datas->ahli_ditunjuk]) }}">{{ $datas->ahli_ditunjuk }}</a>
                                    </td>
                                    <td class="text-center">{{ $datas->total }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <a class="btn btn-primary" href="{{ route('kpi') }}">Kembali</a>
            </div>
        </div>
    </div>
    <script>
        new DataTable('#example');
    </script>
@endsection
