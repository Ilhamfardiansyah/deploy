@extends('layouts.main')

@section('content')
    @include('sweetalert::alert')

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title text-center">Data Master Admin</h3>
                <table class="display" id="example" style="width:100%">
                    <thead>
                        <tr>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Pangkat</th>
                            <th class="text-center">NIP</th>
                            <th class="text-center">Jabatan</th>
                            <th class="text-center">Role</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $data)
                            <tr>
                                <td class="text-center">{{ $data->name }}</td>
                                <td class="text-center">{{ $data->email }}</td>
                                <td class="text-center">{{ $data->pangkat }}</td>
                                <td class="text-center">{{ $data->nip }}</td>
                                <td class="text-center">{{ $data->jabatan }}</td>
                                <td class="text-center">{{ $data->role_name }}</td>
                                <td class="text-center">
                                    <a href="{{ route('editAdmin', $data->id) }}"
                                        class="btn btn-success bi bi-pencil-square" role="button"></a>
                                    <a href="#" onclick="confirmDelete({{ $data->id }}, event)"
                                        class="btn btn-danger bi bi-trash3-fill" role="button"></a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                <a class="btn btn-success bi bi-person-plus-fill" href="{{ route('storeMasterPejabat') }}">Tambah
                    Anggota</a>
            </div>
        </div>
    </div>

    <script>
        function confirmDelete(id, event) {
            event.preventDefault(); // Mencegah default action dari link

            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Anda tidak akan dapat mengembalikan data ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Kirim permintaan DELETE menggunakan fetch
                    fetch(`/dataMaster/pejabat/${id}`, {
                            method: 'DELETE',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                    'content') // CSRF token
                            }
                        })
                        .then(response => {
                            if (response.ok) {
                                Swal.fire(
                                    'Deleted!',
                                    'Data pejabat berhasil dihapus.',
                                    'success'
                                ).then(() => {
                                    window.location.reload(); // Refresh halaman
                                });
                            } else {
                                Swal.fire(
                                    'Error!',
                                    'There was a problem deleting the data.',
                                    'error'
                                );
                            }
                        })
                        .catch(error => {
                            Swal.fire(
                                'Error!',
                                'There was a problem with the request.',
                                'error'
                            );
                        });
                }
            });
        }
    </script>


    <script>
        new DataTable('#example');
    </script>
@endsection
