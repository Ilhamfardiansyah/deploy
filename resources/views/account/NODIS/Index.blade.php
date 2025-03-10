@extends('layouts.main')

@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title text-center">FORM INPUT NOTA DINAS PLT. DIREKTUR E</h3>

                <form action="{{ route('store') }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label for="" class="col-sm-3 col-form-label">Nomor Nodis</label>
                        <div class="col-sm-3">
                            <input name="nodis" type="text" class="form-control @error('nodis') is-invalid @enderror"
                                value="{{ old('nodis') }}">
                            @error('nodis')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-sm-3 col-form-label">Tanggal Bulan dan Tahun Nodis</label>
                        <div class="col-sm-3">
                            <input name="tanggal" type="date" class="form-control @error('tanggal') is-invalid @enderror"
                                value="{{ old('tanggal') }}">
                            @error('tanggal')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-sm-3 col-form-label">Yth.</label>
                        <div class="col-sm-5">
                            <input name="yth" type="text" class="form-control @error('yth') is-invalid @enderror"
                                value="{{ old('yth') }}">
                            @error('yth')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-sm-3 col-form-label">Dari</label>
                        <div class="col-sm-5">
                            <input name="dari" type="text" class="form-control @error('dari') is-invalid @enderror"
                                value="{{ old('dari') }}">
                            @error('dari')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-sm-3 col-form-label">Tanggal</label>
                        <div class="col-sm-3">
                            <input name="tanggal_1" type="date"
                                class="form-control @error('tanggal_1') is-invalid @enderror"
                                value="{{ old('tanggal_1') }}">
                            @error('tanggal_1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-sm-3 col-form-label">Sifat</label>
                        <div class="col-sm-3">
                            <div class="form-check">
                                <input name="status" value="Rahasia"
                                    class="form-check-input @error('status') is-invalid @enderror" id="flexRadioDefault1"
                                    type="radio" {{ old('status') === 'Rahasia' ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Rahasia
                                </label>
                            </div>
                            <div class="form-check">
                                <input name="status" value="Tidak Rahasia"
                                    class="form-check-input @error('status') is-invalid @enderror" id="flexRadioDefault2"
                                    type="radio" {{ old('status') === 'Tidak Rahasia' ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Tidak Rahasia
                                </label>
                            </div>

                            @error('status')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-sm-3 col-form-label">Lampiran</label>
                        <div class="col-sm-3">
                            <input name="lampiran" type="text"
                                class="form-control @error('lampiran') is-invalid @enderror" value="{{ old('lampiran') }}">
                            @error('lampiran')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Perihal</label>
                        <label for="" class="col-sm col-form-label"></label>
                        <div class="col-sm-9">
                            <textarea type="text" class="form-control" class="output_nama_kasus" id="outputNamaKasus" rows="2"
                                placeholder="Permohonan Tanda Tangan Surat Perintah Operasi Intelijen Digital Forensik terkait Penyidikan Perkara Dugaan"
                                disabled></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label"></label>
                        <label for="" class="col-sm col-form-label"></label>
                        <div class="col-sm-9">
                            <textarea name="isi" type="text" class="form-control"
                                class="output_nama_kasus @error('isi') is-invalid @enderror" id="outputNamaKasus" rows="3">{{ old('isi') }}</textarea>
                            @error('isi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-3 col-form-label">Isi Perihal Paragraf</label>
                        <div class="col-sm-9">
                            <textarea name="isi_perihal" type="text" class="form-control @error('isi_perihal') is-invalid @enderror"
                                class="output_nama_kasus" id="outputNamaKasus" rows="5">{{ old('isi_perihal') }}</textarea>
                            @error('isi_perihal')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-3 col-form-label">Pejabat Penanda Tangan</label>
                        <label for="" class="col-sm col-form-label"></label>
                        <div class="col-sm-8 col-form-label">
                            <select name="pejabat_id" class="form-select @error('pejabat_id') is-invalid @enderror"
                                id="floatingSelect" aria-label="Default select example">
                                <option disabled {{ old('pejabat_id') ? '' : 'selected' }}>Open this select menu</option>
                                @foreach ($pejabat as $datas)
                                    <option value="{{ $datas->id }}" data-jabatan="{{ $datas->jabatan }}"
                                        data-pangkat="{{ $datas->pangkat }}" data-NIP="{{ $datas->nip }}"
                                        {{ old('pejabat_id') == $datas->id ? 'selected' : '' }}>
                                        {{ $datas->nama }}
                                    </option>
                                @endforeach
                            </select>

                            @error('pejabat_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-3 col-form-label"></label>
                        <label for="" class="col-sm col-form-label"></label>
                        <div class="col-sm-8 col-form-label">
                            <div id="details">
                                <p id="pangkat"></p>
                                <p id="NIP"></p>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-sm-3 col-form-label">Jabatan Penanda Tangan</label>
                        <div class="col-sm-9">
                            <div id="details">
                                <input type="text" class="form-control" id="jabatan" disabled>
                                <p id="jabatan"></p>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Tembusan</label>
                        <label for="" class="col-sm col-form-label">1</label>
                        <div class="col-sm-9">
                            <input name="tembusan_1" type="text"
                                class="form-control @error('tembusan_1') is-invalid @enderror"
                                value="{{ old('tembusan_1') }}">
                            @error('tembusan_1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <span class="text-danger">Jangan menggunakan tanda ;</span>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label"></label>
                        <label for="" class="col-sm col-form-label">2</label>
                        <div class="col-sm-9">
                            <input name="tembusan_2" type="text"
                                class="form-control @error('tembusan_2') is-invalid @enderror"
                                value="{{ old('tembusan_2') }}">
                            @error('tembusan_2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <span class="text-danger">Jangan menggunakan tanda .</span>
                        </div>
                    </div>


                    <div class="d-grid gap-2 col-sm-12 mb-3 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary" id="saveButton">Save</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('flexRadioDefault1').checked = false;
            document.getElementById('flexRadioDefault2').checked = false;
        });
    </script>

    <script>
        document.getElementById('floatingSelect').addEventListener('change', function() {
            const selectedOption = this.options[this.selectedIndex];
            const jabatan = selectedOption.getAttribute('data-jabatan');
            const pangkat = selectedOption.getAttribute('data-pangkat');
            const NIP = selectedOption.getAttribute('data-NIP');

            document.getElementById('pangkat').textContent = 'Pangkat: ' + pangkat;
            document.getElementById('NIP').textContent = 'NIP: ' + NIP;
            document.getElementById('jabatan').value = jabatan;
        });
    </script>
@endsection
