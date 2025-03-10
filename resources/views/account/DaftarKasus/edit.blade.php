@extends('layouts.main')

@section('content')
    @include('sweetalert::alert')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">FORM INPUT ADMINISTRASI PERSURATAN</h5>

                <form action="{{ route('updateDaftarKasus', ['id' => $id->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <label class="col-sm-3 col-form-label">Nomor/Nama Kasus Administrasi
                            Persuratan</label>
                        <div class="col-sm-9">
                            <input name="nomor_administrasi" type="text"
                                class="form-control @error('nomor_administrasi') is-invalid @enderror"
                                class="output_nama_kasus" id="outputNamaKasus"
                                value="{{ old('nomor_administrasi', $id->nomor_administrasi) }}" readonly>
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
                        <label class="col-sm-3 col-form-label">Ahli Yang Ditunjuk</label>
                        <div class="col-sm-9">
                            <input name="ahli_ditunjuk" type="text"
                                class="form-control @error('ahli_ditunjuk') is-invalid @enderror" class="output_nama_kasus"
                                id="outputNamaKasus" value="{{ old('ahli_ditunjuk', $id->ahli_ditunjuk) }}" readonly>
                            @error('ahli_ditunjuk')
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
                                class="form-control @error('surat_permohonan') is-invalid @enderror {{ $id->surat_permohonan ? 'is-valid' : '' }}"
                                value="{{ old('surat_permohonan', $id->surat_permohonan) }}">
                            @error('surat_permohonan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                            {{-- Check if the file already exists --}}
                            @if ($id->surat_permohonan)
                                <div class="text-success mt-2">
                                    File sudah terinput:
                                    <a href="{{ asset('storage/' . $id->surat_permohonan) }}" target="_blank">
                                        {{ $id->surat_permohonan }}
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">SP TUG</label>
                        <div class="col-sm-9">
                            <input name="sptug" type="file"
                                class="form-control @error('sptug') is-invalid @enderror {{ $id->sptug ? 'is-valid' : '' }}"
                                value="{{ old('sptug') }}">
                            @error('sptug')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            {{-- Check if the file already exists --}}
                            @if ($id->sptug)
                                <div class="text-success mt-2">
                                    File sudah terinput:
                                    <a href="{{ asset('storage/' . $id->sptug) }}" target="_blank">
                                        {{ $id->sptug }}
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">SP OPS</label>
                        <div class="col-sm-9">
                            <input name="spops" type="file"
                                class="form-control @error('spops') is-invalid @enderror {{ $id->spops ? 'is-valid' : '' }}"
                                value="{{ old('spops') }}">
                            @error('spops')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            @if ($id->spops)
                                <div class="text-success mt-2">
                                    File sudah terinput:
                                    <a href="{{ asset('storage/' . $id->spops) }}" target="_blank">
                                        {{ $id->spops }}
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Permohonan Laporan</label>
                        <div class="col-sm-9">
                            <input name="permohonan_laporan" type="file"
                                class="form-control @error('permohonan_laporan') is-invalid @enderror {{ $id->permohonan_laporan ? 'is-valid' : '' }}"
                                value="{{ old('permohonan_laporan') }}">
                            @error('permohonan_laporan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            @if ($id->permohonan_laporan)
                                <div class="text-success mt-2">
                                    File sudah terinput:
                                    <a href="{{ asset('storage/' . $id->permohonan_laporan) }}" target="_blank">
                                        {{ $id->permohonan_laporan }}
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Nodis Laporan</label>
                        <div class="col-sm-9">
                            <input name="nodis_laporan" type="file"
                                class="form-control @error('nodis_laporan') is-invalid @enderror {{ $id->nodis_laporan ? 'is-valid' : '' }}"
                                value="{{ old('nodis_laporan') }}">
                            @error('nodis_laporan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            @if ($id->nodis_laporan)
                                <div class="text-success mt-2">
                                    File sudah terinput:
                                    <a href="{{ asset('storage/' . $id->nodis_laporan) }}" target="_blank">
                                        {{ $id->nodis_laporan }}
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Permohonan Penunjukan Ahli</label>
                        <div class="col-sm-9">
                            <input name="penunjuk_ahli" type="file"
                                class="form-control @error('penunjuk_ahli') is-invalid @enderror {{ $id->penunjuk_ahli ? 'is-valid' : '' }}">
                            @error('penunjuk_ahli')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            @if ($id->penunjuk_ahli)
                                <div class="text-success mt-2">
                                    File sudah terinput:
                                    <a href="{{ asset('storage/' . $id->penunjuk_ahli) }}" target="_blank">
                                        {{ $id->penunjuk_ahli }}
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">SP Penunjukan Ahli</label>
                        <div class="col-sm-9">
                            <input name="sp_penunjuk_ahli" type="file"
                                class="form-control @error('sp_penunjuk_ahli') is-invalid @enderror {{ $id->sp_penunjuk_ahli ? 'is-valid' : '' }}"
                                value="{{ old('sp_penunjuk_ahli') }}">
                            @error('sp_penunjuk_ahli')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            @if ($id->sp_penunjuk_ahli)
                                <div class="text-success mt-2">
                                    File sudah terinput:
                                    <a href="{{ asset('storage/' . $id->sp_penunjuk_ahli) }}" target="_blank">
                                        {{ $id->sp_penunjuk_ahli }}
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Permohonan Panggilan Ahli P9</label>
                        <div class="col-sm-9">
                            <input name="ahli_p9" type="file"
                                class="form-control @error('ahli_p9') is-invalid @enderror {{ $id->ahli_p9 ? 'is-valid' : '' }}"
                                value="{{ old('ahli_p9') }}">
                            @error('ahli_p9')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            @if ($id->ahli_p9)
                                <div class="text-success mt-2">
                                    File sudah terinput:
                                    <a href="{{ asset('storage/' . $id->ahli_p9) }}" target="_blank">
                                        {{ $id->ahli_p9 }}
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">SP Panggilan Ahli</label>
                        <div class="col-sm-9">
                            <input name="sp_panggilan" type="file"
                                class="form-control @error('sp_panggilan') is-invalid @enderror {{ $id->sp_panggilan ? 'is-valid' : '' }}"
                                value="{{ old('sp_panggilan') }}">
                            @error('sp_panggilan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            @if ($id->sp_panggilan)
                                <div class="text-success mt-2">
                                    File sudah terinput:
                                    <a href="{{ asset('storage/' . $id->sp_panggilan) }}" target="_blank">
                                        {{ $id->sp_panggilan }}
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Panggilan Sidang Ahli</label>
                        <div class="col-sm-9">
                            <input name="panggilan_sidang" type="file"
                                class="form-control @error('panggilan_sidang') is-invalid @enderror {{ $id->panggilan_sidang ? 'is-valid' : '' }}"
                                value="{{ old('panggilan_sidang') }}">
                            @error('panggilan_sidang')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            @if ($id->panggilan_sidang)
                                <div class="text-success mt-2">
                                    File sudah terinput:
                                    <a href="{{ asset('storage/' . $id->panggilan_sidang) }}" target="_blank">
                                        {{ $id->panggilan_sidang }}
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">SP Sidang Ahli</label>
                        <div class="col-sm-9">
                            <input name="sp_ahli" type="file"
                                class="form-control @error('sp_ahli') is-invalid @enderror {{ $id->sp_ahli ? 'is-valid' : '' }}"
                                value="{{ old('sp_ahli') }}">
                            @error('sp_ahli')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            @if ($id->sp_ahli)
                                <div class="text-success mt-2">
                                    File sudah terinput:
                                    <a href="{{ asset('storage/' . $id->sp_ahli) }}" target="_blank">
                                        {{ $id->sp_ahli }}
                                    </a>
                                </div>
                            @endif
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
