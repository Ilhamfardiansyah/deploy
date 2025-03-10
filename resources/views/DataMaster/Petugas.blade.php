@extends('layouts.main')

@section('content')
    @include('sweetalert::alert')

    <div class="col-log-12">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title text-center">Tambah Data Ahli</h3>

                <form action="{{ route('storeMasterPetugas') }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-6">
                            <input type="text" name="nama" id="nama"
                                class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="pangkat" class="col-sm-3 col-form-label">Pangkat</label>
                        <div class="col-sm-6">
                            <input type="text" name="pangkat" id="pangkat"
                                class="form-control @error('pangkat') is-invalid @enderror" value="{{ old('pangkat') }}">
                            @error('pangkat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="NIP" class="col-sm-3 col-form-label">NIP</label>
                        <div class="col-sm-6">
                            <input type="text" name="NIP" id="NIP"
                                class="form-control @error('NIP') is-invalid @enderror" value="{{ old('NIP') }}">
                            @error('NIP')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="jabatan" class="col-sm-3 col-form-label">Jabatan</label>
                        <div class="col-sm-6">
                            <input type="text" name="jabatan" id="jabatan"
                                class="form-control @error('jabatan') is-invalid @enderror" value="{{ old('jabatan') }}">
                            @error('jabatan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div style="display: flex; justify-content: center;">
                        <button class="btn btn-success" style="margin-right: 10px;">Save</button>
                </form>
                <a href="{{ route('dataPetugas') }}" class="btn btn-secondary">Back</a>
            </div>

        </div>
    </div>
    </div>
@endsection
