@extends('layouts.main')

@section('content')
    @include('sweetalert::alert')

    <div class="col-log-12">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title text-center">DATA MASTER ADMIN</h3>

                <form action="{{ route('updateAdmin', $admin->id) }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label for="name" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-6">
                            <input type="text" name="name" id="name"
                                class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name', $admin->name) }}">
                            @error('name')
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
                                class="form-control @error('pangkat') is-invalid @enderror"
                                value="{{ old('pangkat', $admin->pangkat) }}">
                            @error('pangkat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="paswword" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-6">
                            <input type="password" name="password" id="password"
                                class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="nip" class="col-sm-3 col-form-label">NIP</label>
                        <div class="col-sm-6">
                            <input type="text" name="nip" id="nip"
                                class="form-control @error('nip') is-invalid @enderror"
                                value="{{ old('nip', $admin->nip) }}">
                            @error('nip')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="role" class="col-sm-3 col-form-label">Role</label>
                        <div class="col-sm-6">
                            <select name="role" id="role" class="form-control @error('role') is-invalid @enderror">
                                <option value="" disabled>-- Pilih Role --</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}" @if ($role->id == $admin->role_id) selected @endif>
                                        {{ $role->name }}</option>
                                @endforeach
                            </select>
                            @error('role')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="email" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-6">
                            <input type="text" name="email" id="email"
                                class="form-control @error('email') is-invalid @enderror"
                                value="{{ old('email', $admin->email) }}">
                            @error('email')
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
                                class="form-control @error('jabatan') is-invalid @enderror"
                                value="{{ old('jabatan', $admin->jabatan) }}">
                            @error('jabatan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div style="display: flex; justify-content: center;">
                        <button class="btn btn-info" style="margin-right: 10px;">Edit</button>
                </form>
                <a href="{{ route('masterAdmin') }}" role="button" class="btn btn-secondary">Back</a>
            </div>

        </div>
    </div>
    </div>
@endsection
