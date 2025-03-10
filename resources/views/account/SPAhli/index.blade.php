@extends('layouts.main')


@section('content')
    @include('sweetalert::alert')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title text-center">SURAT PERINTAH JAKSA AGUNG MUDA INTELIJEN</h3>

                <form action="{{ route('spAhli') }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label for="noSPOs" class="col-sm-3 col-form-label">Nomor Perintah</label>
                        <div class="col-sm-3">
                            <input type="text" name="no_perintah"
                                class="form-control @error('no_perintah') is-invalid @enderror"
                                value="{{ old('no_perintah') }}">
                            @error('no_perintah')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="tanggal" class="col-sm-3 col-form-label">Tanggal Bulan Tahun</label>
                        <div class="col-sm-3">
                            <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror"
                                value="{{ old('tanggal') }}">
                            @error('tanggal')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Menimbang Point</label>
                        <label for="" class="col-sm col-form-label">a</label>
                        <div class="col-sm-9">
                            <textarea class="form-control @error('menimbang_point') is-invalid @enderror" id="outputNamaKasus"
                                name="menimbang_point" rows="3">{{ old('menimbang_point') }}</textarea>
                            @error('menimbang_point')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label"></label>
                        <label for="" class="col-sm col-form-label">b</label>
                        <div class="col-sm-9">
                            <textarea type="text" class="form-control" class="output_nama_kasus" id="outputNamaKasus" rows="3"
                                placeholder="bahwa untuk memberikan keterangan sebagai ahli Digital Forensik perlu dikeluarkan Surat Perintah Jaksa Agung Muda Intelijen."
                                aria-valuetext="bahwa untuk memberikan keterangan sebagai ahli Digital Forensik perlu dikeluarkan Surat Perintah Jaksa Agung Muda Intelijen."
                                disabled></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Dasar</label>
                        <label for="" class="col-sm col-form-label">1</label>
                        <div class="col-sm-9">
                            <textarea type="text" class="form-control" class="output_nama_kasus" id="outputNamaKasus" rows="4"
                                placeholder="Undang-Undang Nomor 31 Tahun 1999 tentang Pemberantasan Tindak Pidana Korupsi sebagaimana telah diubah dengan Undang-Undang Nomor 20 Tahun 2001 tentang Perubahan atas Undang-Undang Nomor 31 Tahun 1999 tentang Pemberantasan Tindak Pidana Korupsi;"
                                aria-valuetext="Undang-Undang Nomor 31 Tahun 1999 tentang Pemberantasan Tindak Pidana Korupsi sebagaimana telah diubah dengan Undang-Undang Nomor 20 Tahun 2001 tentang Perubahan atas Undang-Undang Nomor 31 Tahun 1999 tentang Pemberantasan Tindak Pidana Korupsi;"
                                disabled></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label"></label>
                        <label for="" class="col-sm col-form-label">2</label>
                        <div class="col-sm-9">
                            <textarea type="text" class="form-control" class="output_nama_kasus" id="outputNamaKasus" rows="4"
                                placeholder="Undang-Undang Nomor 16 Tahun 2004 tentang Kejaksaan Republik Indonesia sebagaimana telah diubah dengan Undang-Undang Nomor 11 Tahun 2021 tentang Perubahan atas Undang-Undang Nomor 16 Tahun 2004 tentang Kejaksaan Republik Indonesia;"
                                aria-valuetext="Undang-Undang Nomor 16 Tahun 2004 tentang Kejaksaan Republik Indonesia sebagaimana telah diubah dengan Undang-Undang Nomor 11 Tahun 2021 tentang Perubahan atas Undang-Undang Nomor 16 Tahun 2004 tentang Kejaksaan Republik Indonesia;"
                                disabled></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label"></label>
                        <label for="" class="col-sm col-form-label">3</label>
                        <div class="col-sm-9">
                            <textarea type="text" class="form-control" class="output_nama_kasus" id="outputNamaKasus" rows="4"
                                placeholder="Undang-Undang Nomor 11 Tahun 2008 tentang Informasi dan Transaksi Elektronik sebagaimana telah diubah dengan Undang-Undang Nomor 19 Tahun 2016 tentang Perubahan atas Undang-Undang Nomor 11 Tahun 2008 tentang Informasi dan Transaksi Elektronik;"
                                aria-valuetext="Undang-Undang Nomor 11 Tahun 2008 tentang Informasi dan Transaksi Elektronik sebagaimana telah diubah dengan Undang-Undang Nomor 19 Tahun 2016 tentang Perubahan atas Undang-Undang Nomor 11 Tahun 2008 tentang Informasi dan Transaksi Elektronik;"
                                disabled></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label"></label>
                        <label for="" class="col-sm col-form-label">4</label>
                        <div class="col-sm-9">
                            <textarea type="text" class="form-control" class="output_nama_kasus" id="outputNamaKasus"
                                placeholder="Undang-Undang Nomor 17 Tahun 2011 tentang Intelijen Negara;"
                                aria-valuetext="Undang-Undang Nomor 17 Tahun 2011 tentang Intelijen Negara;" disabled></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label"></label>
                        <label for="" class="col-sm col-form-label">5</label>
                        <div class="col-sm-9">
                            <textarea type="text" class="form-control" class="output_nama_kasus" id="outputNamaKasus" rows="5"
                                placeholder="Peraturan Presiden Nomor 38 Tahun 2010 tentang Organisasi dan Tata Kerja Kejaksaan Republik Indonesia sebagaimana telah beberapa kali diubah terakhir dengan Peraturan Presiden Nomor 15 Tahun 2021 tentang Perubahan Kedua atas Peraturan Presiden Nomor 38 Tahun 2010 tentang Organisasi dan Tata Kerja Kejaksaan Republik Indonesia;"
                                aria-valuetext="Peraturan Presiden Nomor 38 Tahun 2010 tentang Organisasi dan Tata Kerja Kejaksaan Republik Indonesia sebagaimana telah beberapa kali diubah terakhir dengan Peraturan Presiden Nomor 15 Tahun 2021 tentang Perubahan Kedua atas Peraturan Presiden Nomor 38 Tahun 2010 tentang Organisasi dan Tata Kerja Kejaksaan Republik Indonesia;"
                                disabled></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label"></label>
                        <label for="" class="col-sm col-form-label">6</label>
                        <div class="col-sm-9">
                            <textarea type="text" class="form-control" class="output_nama_kasus" id="outputNamaKasus" rows="5"
                                placeholder="Peraturan Jaksa Agung Nomor PER-006/A/JA/07/2017 tentang Organisasi dan Tata Kerja Kejaksaan Republik Indonesia sebagaimana telah beberapa kali diubah terakhir dengan Peraturan Kejaksaan Nomor 1 Tahun 2022 tentang Perubahan Ketiga atas Peraturan Jaksa Agung Nomor PER-006/A/JA/07/2017 tentang Organisasi dan Tata Kerja Kejaksaan Republik Indonesia;"
                                aria-valuetext="Peraturan Jaksa Agung Nomor PER-006/A/JA/07/2017 tentang Organisasi dan Tata Kerja Kejaksaan Republik Indonesia sebagaimana telah beberapa kali diubah terakhir dengan Peraturan Kejaksaan Nomor 1 Tahun 2022 tentang Perubahan Ketiga atas Peraturan Jaksa Agung Nomor PER-006/A/JA/07/2017 tentang Organisasi dan Tata Kerja Kejaksaan Republik Indonesia;"
                                disabled></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label"></label>
                        <label for="" class="col-sm col-form-label">7</label>
                        <div class="col-sm-9">
                            <textarea type="text" class="form-control" class="output_nama_kasus" id="outputNamaKasus"
                                placeholder="Peraturan Kejaksaan Nomor 4 Tahun 2019 tentang Administrasi Intelijen Kejaksaan Republik Indonesia;"
                                aria-valuetext="Peraturan Kejaksaan Nomor 4 Tahun 2019 tentang Administrasi Intelijen Kejaksaan Republik Indonesia;"
                                disabled></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label"></label>
                        <label for="" class="col-sm col-form-label">8</label>
                        <div class="col-sm-9">
                            <textarea name="dasar" class="form-control @error('dasar') is-invalid @enderror" id="outputNamaKasus"
                                rows="5">{{ old('dasar') }}</textarea>
                            @error('dasar')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <label for="floatingSelect" class="col-sm-2 col-form-label">Memerintahkan Kepada</label>
                        <label for="" class="col-sm col-form-label"></label>
                        <div class="col-sm-9">
                            <select name="petugas_id" class="form-select @error('petugas_id') is-invalid @enderror"
                                id="personSelect" aria-label="Default select example">
                                <option disabled selected>Pilih Nama</option>
                                @foreach ($data as $datas)
                                    <option value="{{ $datas->id }}" data-nama="{{ $datas->nama }}"
                                        data-pangkat="{{ $datas->pangkat }}" data-nip="{{ $datas->NIP }}"
                                        data-jabatan="{{ $datas->jabatan }}"
                                        {{ old('petugas_id') == $datas->id ? 'selected' : '' }}>
                                        {{ $datas->nama }}
                                    </option>
                                @endforeach
                            </select>
                            @error('petugas_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div id="detailPerson" class="row" style="display: none;">
                        <label for="" class="col-sm col-form-label"></label>
                        <div class="col-sm-9 offset-sm-3">
                            <div class="card">
                                <div class="card-body">
                                    <p><strong>Nama:</strong> <span id="namaDetail"></span></p>
                                    <p><strong>Pangkat:</strong> <span id="pangkatDetail"></span></p>
                                    <p><strong>NIP:</strong> <span id="nipDetail"></span></p>
                                    <p><strong>Jabatan:</strong> <span id="jabatanDetail"></span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Untuk</label>
                        <label for="" class="col-sm col-form-label">1</label>
                        <div class="col-sm-9">
                            <textarea type="text" name="untuk" class="form-control  @error('untuk') is-invalid @enderror"
                                class="output_nama_kasus" id="outputNamaKasus" rows="4">{{ old('untuk') }}</textarea>
                            @error('untuk')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label"></label>
                        <label for="" class="col-sm col-form-label">2</label>
                        <div class="col-sm-9">
                            <textarea type="text" class="form-control" class="output_nama_kasus" id="outputNamaKasus" rows="3"
                                placeholder="Melaksanakan Surat Perintah ini dengan penuh tanggung jawab;"
                                aria-valuetext="Melaksanakan Surat Perintah ini dengan penuh tanggung jawab;" disabled></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label"></label>
                        <label for="" class="col-sm col-form-label">3</label>
                        <div class="col-sm-9">
                            <textarea type="text" class="form-control" class="output_nama_kasus" id="outputNamaKasus" rows="3"
                                placeholder="Membuat laporan tertulis kepada Jaksa Agung Muda Intelijen setelah selesai melaksanakan tugas ini;"
                                aria-valuetext="Membuat laporan tertulis kepada Jaksa Agung Muda Intelijen setelah selesai melaksanakan tugas ini;"
                                disabled></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label"></label>
                        <label for="" class="col-sm col-form-label">4</label>
                        <div class="col-sm-9">
                            <textarea type="text" class="form-control" class="output_nama_kasus" id="outputNamaKasus" rows="3"
                                placeholder="Melaksanakan Surat Perintah ini sejak tanggal ditandatangani sampai dengan selesai pekerjaan atau ditentukan khusus;"
                                aria-valuetext="Melaksanakan Surat Perintah ini sejak tanggal ditandatangani sampai dengan selesai pekerjaan atau ditentukan khusus;"
                                disabled></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label"></label>
                        <label for="" class="col-sm col-form-label">5</label>
                        <div class="col-sm-9">
                            <textarea type="text" class="form-control" class="output_nama_kasus" id="outputNamaKasus" rows="3"
                                placeholder="Segala biaya yang timbul berkaitan dengan pelaksanaan tugas ini dibebankan kepada DIPA Kejaksaan Agung T.A."
                                aria-valuetext="Segala biaya yang timbul berkaitan dengan pelaksanaan tugas ini dibebankan kepada DIPA Kejaksaan Agung T.A."
                                disabled></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="yearPicker" class="col-sm-3 col-form-label">Pilih Tahun</label>
                        <div class="col-sm-9">
                            <select class="form-select @error('tahun') is-invalid @enderror" name="tahun"
                                id="yearSelect">
                                <option value="">Pilih Tahun</option>
                                @for ($i = date('Y'); $i >= 2000; $i--)
                                    <option value="{{ $i }}" {{ old('tahun') == $i ? 'selected' : '' }}>
                                        {{ $i }}</option>
                                @endfor
                            </select>
                            @error('tahun')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Dikeluarkan di</label>
                        <label for="" class="col-sm col-form-label"></label>
                        <div class="col-sm-9">
                            <textarea type="text" class="form-control" class="output_nama_kasus" id="outputNamaKasus" placeholder="Jakarta"
                                aria-valuetext="Jakarta" disabled></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-sm-3 col-form-label">Pilih Tanggal</label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control @error('tanggal_1') is-invalid @enderror"
                                name="tanggal_1" id="outputNamaKasus" value="{{ old('tanggal_1') }}">
                            @error('tanggal_1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-3 col-form-label">Jabatan Penanda Tangan</label>
                        <div class="col-sm-9">
                            <input type="text" name="jabatan"
                                class="form-control @error('jabatan') is-invalid @enderror" id="outputNamaKasus"
                                value="{{ old('jabatan') }}">
                            @error('jabatan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-3 col-form-label">Pejabat Penanda Tangan</label>
                        <div class="col-sm-9">
                            <input type="text" name="pejabat"
                                class="form-control @error('pejabat') is-invalid @enderror" value="{{ old('pejabat') }}">
                            @error('pejabat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    @for ($i = 1; $i <= 7; $i++)
                        <div class="row mb-3">
                            <label for="inputEmail" class="col-sm-2 col-form-label">
                                @if ($i == 1)
                                    Tembusan
                                @endif
                            </label>
                            <label for="" class="col-sm col-form-label">{{ $i }}</label>
                            <div class="col-sm-9">
                                <input type="text" name="tembusan_{{ $i }}"
                                    class="form-control @error('tembusan_' . $i) is-invalid @enderror"
                                    value="{{ old('tembusan_' . $i) }}">
                                <small class="form-text text-danger">
                                    Tanpa tanda ;
                                </small>
                                @error('tembusan_' . $i)
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    @endfor

                    <div class="d-grid gap-2 col-sm-12 mb-3 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary" id="saveButton">Save</button>
                    </div>

            </div>
        </div>
    </div>

    </form>

    <script>
        // Event listener untuk menampilkan detail saat opsi dipilih
        document.getElementById('personSelect').addEventListener('change', function() {
            var selectedOption = this.options[this.selectedIndex];

            // Ambil data dari atribut data-*
            var nama = selectedOption.getAttribute('data-nama');
            var pangkat = selectedOption.getAttribute('data-pangkat');
            var nip = selectedOption.getAttribute('data-nip');
            var jabatan = selectedOption.getAttribute('data-jabatan');

            // Isi elemen detail dengan data yang dipilih
            document.getElementById('namaDetail').innerText = nama;
            document.getElementById('pangkatDetail').innerText = pangkat;
            document.getElementById('nipDetail').innerText = nip;
            document.getElementById('jabatanDetail').innerText = jabatan;

            // Tampilkan elemen detail
            document.getElementById('detailPerson').style.display = 'block';
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const monthPicker = document.getElementById('monthPicker');
            const yearPicker = document.getElementById('yearsPicker');

            // Populate month picker
            const months = [{
                    value: 'Januari',
                    text: 'Januari'
                },
                {
                    value: 'Februari',
                    text: 'Februari'
                },
                {
                    value: 'Maret',
                    text: 'Maret'
                },
                {
                    value: 'April',
                    text: 'April'
                },
                {
                    value: 'Mei',
                    text: 'Mei'
                },
                {
                    value: 'Juni',
                    text: 'Juni'
                },
                {
                    value: 'Juli',
                    text: 'Juli'
                },
                {
                    value: 'Agustus',
                    text: 'Agustus'
                },
                {
                    value: 'September',
                    text: 'September'
                },
                {
                    value: 'Oktober',
                    text: 'Oktober'
                },
                {
                    value: 'November',
                    text: 'November'
                },
                {
                    value: 'Desember',
                    text: 'Desember'
                }
            ];

            months.forEach(month => {
                const option = document.createElement('option');
                option.value = month.value;
                option.textContent = month.text;
                monthPicker.appendChild(option);
            });

            // Populate year picker
            const currentYear = new Date().getFullYear();
            const startYear = currentYear - 50; // Customize the range as needed

            for (let year = currentYear; year >= startYear; year--) {
                const option = document.createElement('option');
                option.value = year;
                option.textContent = year;
                yearsPicker.appendChild(option);
            }
        });
    </script>
@endsection
