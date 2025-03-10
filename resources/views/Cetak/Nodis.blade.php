@extends('layouts.main')

@section('content')
    @include('sweetalert::alert')
    <div class="row">
        <div class="card">
            <table class="display" id="example" style="width:100%">
                <thead>
                    <tr>
                        <th class="text-center">
                            Nodis
                        </th>
                        <th class="text-center">Dibuat Tanggal</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($nodis as $data)
                        <tr>
                            <td class="text-center">{{ $data->nodis }}</td>
                            <td class="text-center">{{ $data->created_at->format('d-m-Y') }}</td>
                            <td class="text-center">
                                <a href="{{ route('cetakNodis', $data->id) }}" class="btn btn-primary bi bi-printer"
                                    role="button"></a>
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
