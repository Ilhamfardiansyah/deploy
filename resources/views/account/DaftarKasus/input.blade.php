@extends('layouts.main')

@section('content')
    @include('sweetalert::alert')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">FORM INPUT ADMINISTRASI PERSURATAN</h5>

                <!-- General Form Elements -->
                <div class="row mb-3">
                    <div class="form-floating">
                        <select class="form-control selectpicker" data-live-search="true" id="floatingSelect">
                            <option value="" selected disabled>Pilih Nomor Kasus</option>
                            @foreach ($data1 as $datas)
                                <option data-tokens="ketchup mustard">{{ $datas->nomor_kasus }}</option>
                            @endforeach
                        </select>
                        <label for="floatingSelect">Nomor Kasus</label>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="text" class="col-sm-3 col-form-label">Tambah Nama Kasus</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nama_kasus" id="inputNamaKasus" autocomplete="off">
                    </div>
                </div>

                <div class="d-grid gap-2 col-sm-12 mb-3 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary" id="saveButton">Lanjut Proses</button>
                </div>

                <form action="{{ route('storedaftarKasus') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <label class="col-sm-3 col-form-label">Nomor/Nama Kasus Administrasi
                            Persuratan</label>
                        <div class="col-sm-9">
                            <input name="nomor_administrasi" type="text"
                                class="form-control @error('nomor_administrasi') is-invalid @enderror"
                                class="output_nama_kasus" id="outputNamaKasus" value="{{ old('nomor_administrasi') }}"
                                readonly>
                            @error('nomor_administrasi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Surat Permohonan</label>
                        <div class="col-sm-9">
                            <input name="surat_permohonan" type="file"
                                class="form-control @error('surat_permohonan') is-invalid @enderror"
                                value="{{ old('surat_permohonan') }}">
                            @error('surat_permohonan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">SP TUG</label>
                        <div class="col-sm-9">
                            <input name="sptug" type="file" class="form-control @error('sptug') is-invalid @enderror"
                                value="{{ old('sptug') }}">
                            @error('sptug')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">SP OPS</label>
                        <div class="col-sm-9">
                            <input name="spops" type="file" class="form-control @error('spops') is-invalid @enderror"
                                value="{{ old('spops') }}">
                            @error('spops')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Permohonan Laporan</label>
                        <div class="col-sm-9">
                            <input name="permohonan_laporan" type="file"
                                class="form-control @error('permohonan_laporan') is-invalid @enderror"
                                value="{{ old('permohonan_laporan') }}">
                            @error('permohonan_laporan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Nodis Laporan</label>
                        <div class="col-sm-9">
                            <input name="nodis_laporan" type="file"
                                class="form-control @error('nodis_laporan') is-invalid @enderror"
                                value="{{ old('nodis_laporan') }}">
                            @error('nodis_laporan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Permohonan Penunjukan Ahli</label>
                        <div class="col-sm-9">
                            <input name="penunjuk_ahli" type="file"
                                class="form-control @error('penunjuk_ahli') is-invalid @enderror">
                            @error('penunjuk_ahli')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">SP Penunjukan Ahli</label>
                        <div class="col-sm-9">
                            <input name="sp_penunjuk_ahli" type="file"
                                class="form-control @error('sp_penunjuk_ahli') is-invalid @enderror"
                                value="{{ old('sp_penunjuk_ahli') }}">
                            @error('sp_penunjuk_ahli')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Permohonan Panggilan Ahli P9</label>
                        <div class="col-sm-9">
                            <input name="ahli_p9" type="file" class="form-control @error('ahli_p9') is-invalid @enderror"
                                value="{{ old('ahli_p9') }}">
                            @error('ahli_p9')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">SP Panggilan Ahli</label>
                        <div class="col-sm-9">
                            <input name="sp_panggilan" type="file"
                                class="form-control @error('sp_panggilan') is-invalid @enderror"
                                value="{{ old('sp_panggilan') }}">
                            @error('sp_panggilan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Panggilan Sidang Ahli</label>
                        <div class="col-sm-9">
                            <input name="panggilan_sidang" type="file"
                                class="form-control @error('panggilan_sidang') is-invalid @enderror"
                                value="{{ old('panggilan_sidang') }}">
                            @error('panggilan_sidang')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">SP Sidang Ahli</label>
                        <div class="col-sm-9">
                            <input name="sp_ahli" type="file"
                                class="form-control @error('sp_ahli') is-invalid @enderror"
                                value="{{ old('sp_ahli') }}">
                            @error('sp_ahli')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    {{-- Ahli yang di tunjuk --}}
                    <div class="row mb-3">
                        <label for="floatingSelect" class="col-sm-2 col-form-label">Ahli yang di tunjuk</label>
                        <label for="" class="col-sm col-form-label"></label>
                        <div class="col-sm-9 form-floating">
                            <select class="form-control selectpicker" name="ahli_ditunjuk">
                                <option value="" selected disabled>Pilih nama</option>
                                @foreach ($data2 as $datas)
                                    <option data-tokens="ketchup mustard" value="{{ $datas->nama }}">
                                        {{ $datas->nama }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="d-grid gap-2 col-sm-12 mb-3 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Submit Form</button>
                        </div>
                    </div>
                </form><!-- End General Form Elements -->
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.selectpicker').selectpicker();

            $('#floatingSelect').on('changed.bs.select', function(e, clickedIndex, isSelected, previousValue) {
                var selectedValue = $(this).find('option').eq(clickedIndex).text();
                $('#inputNamaKasus').val(''); // Clear the input field
                $('#inputNamaKasus').val(selectedValue); // Set the new value
            });

            $('#saveButton').on('click', function() {
                var namaKasus = $('#inputNamaKasus').val();
                $('#outputNamaKasus').val(namaKasus);
                $('#inputNamaKasus').prop('disabled', true);
            });

            $('refreshButton').on('click', function() {
                location.reload();
            });
        });
    </script>
@endsection
