@extends('layouts.main')


@section('content')
    @include('sweetalert::alert')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title text-center">SURAT PERINTAH TUGAS JAKSA AGUNG MUDA INTELIJEN</h3>

                <form action="{{ route('create_tug') }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label for="NoSp_tug" class="col-sm-3 col-form-label">No. SP TUG</label>
                        <div class="col-sm-3">
                            <input name="NoSp_tug" type="text"
                                class="form-control @error('NoSp_tug') is-invalid @enderror" value="{{ old('NoSp_tug') }}">
                            @error('NoSp_tug')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="tanggal" class="col-sm-3 col-form-label">Tanggal Bulan Tahun</label>
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
                        <label for="menimbang_point" class="col-sm-2 col-form-label">Menimbang Point</label>
                        <label for="" class="col-sm col-form-label">a</label>
                        <div class="col-sm-9">
                            <textarea name="menimbang_point" class="form-control @error('menimbang_point') is-invalid @enderror"
                                id="outputNamaKasus" rows="3">{{ old('menimbang_point') }}</textarea>
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
                                placeholder="Bahwa untuk melakukan kegiatan Digital Forensik perlu dikeluarkan Surat Perintah Tugas Intelijen"
                                aria-valuetext="Bahwa untuk melakukan kegiatan Digital Forensik perlu dikeluarkan Surat Perintah Tugas Intelijen "
                                disabled></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Dasar</label>
                        <label for="" class="col-sm col-form-label">1</label>
                        <div class="col-sm-9">
                            <textarea type="text" class="form-control" class="output_nama_kasus" id="outputNamaKasus" rows="4"
                                placeholder="Undang-Undang Nomor 31 Tahun 1999 tentang Pemberantasan Tindak Pidana Korupsi sebagaimana telah diubah dengan Undang-Undang Nomor 20 Tahun 2001 tentang perubahan atas Undang-Undang Nomor 31 tahun 1999 tentang Pemberantasan Tindak Pidana Korupsi"
                                aria-valuetext="Undang-Undang Nomor 31 Tahun 1999 tentang Pemberantasan Tindak Pidana Korupsi sebagaimana telah diubah dengan Undang-Undang Nomor 20 Tahun 2001 tentang perubahan atas Undang-Undang Nomor 31 tahun 1999 tentang Pemberantasan Tindak Pidana Korupsi "
                                disabled></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label"></label>
                        <label for="" class="col-sm col-form-label">2</label>
                        <div class="col-sm-9">
                            <textarea type="text" class="form-control" class="output_nama_kasus" id="outputNamaKasus" rows="4"
                                placeholder="Undang-Undang Nomor 16 Tahun 2024 tentang Kejaksaan Republik Indonesia sebagaimana telah diubah dengan Undang-Undang Nomor 11 Tahun 2021 tentang Perubahan atas Undang-Undang Nomor 16 Tahun 2004 tentang Kejaksaan Republik Indonesia"
                                aria-valuetext="Undang-Undang Nomor 16 Tahun 2024 tentang Kejaksaan Republik Indonesia sebagaimana telah diubah dengan Undang-Undang Nomor 11 Tahun 2021 tentang Perubahan atas Undang-Undang Nomor 16 Tahun 2004 tentang Kejaksaan Republik Indonesia"
                                disabled></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label"></label>
                        <label for="" class="col-sm col-form-label">3</label>
                        <div class="col-sm-9">
                            <textarea type="text" class="form-control" class="output_nama_kasus" id="outputNamaKasus" rows="4"
                                placeholder="Undang-Undang Nomor 11 tahun 2008 tentang Informasi dan Transaksi Elektronik sebagaimana telah diubah dengan Undang-Undang Nomor 19 Tahun 2016 tentang Perubahan atas Undang-Undang Nomor 11 Tahun 2008 tentang Informasi dan Transaksi ElektronikUndng-Undang Nomor 11 tahun 2008 tentang Informasi dan Transaksi Elektronik sebagaimana telah diubah dengan Undang-Undang Nomor 19 Tahun 2016 tentang Perubahan atas Undang-Undang Nomor 11 Tahun 2008 tentang Informasi dan Transaksi ElektronikUndng-Undang Nomor 11 tahun 2008 tentang Informasi dan Transaksi Elektronik sebagaimana telah diubah dengan Undang-Undang Nomor 19 Tahun 2016 tentang Perubahan atas Undang-Undang Nomor 11 Tahun 2008 tentang Informasi dan Transaksi Elektronik"
                                aria-valuetext="Undang-Undang Nomor 11 tahun 2008 tentang Informasi dan Transaksi Elektronik sebagaimana telah diubah dengan Undang-Undang Nomor 19 Tahun 2016 tentang Perubahan atas Undang-Undang Nomor 11 Tahun 2008 tentang Informasi dan Transaksi ElektronikUndng-Undang Nomor 11 tahun 2008 tentang Informasi dan Transaksi Elektronik sebagaimana telah diubah dengan Undang-Undang Nomor 19 Tahun 2016 tentang Perubahan atas Undang-Undang Nomor 11 Tahun 2008 tentang Informasi dan Transaksi ElektronikUndng-Undang Nomor 11 tahun 2008 tentang Informasi dan Transaksi Elektronik sebagaimana telah diubah dengan Undang-Undang Nomor 19 Tahun 2016 tentang Perubahan atas Undang-Undang Nomor 11 Tahun 2008 tentang Informasi dan Transaksi Elektronik"
                                disabled></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label"></label>
                        <label for="" class="col-sm col-form-label">4</label>
                        <div class="col-sm-9">
                            <textarea type="text" class="form-control" class="output_nama_kasus" id="outputNamaKasus"
                                placeholder="Undang-Undang Nomor 17 Tahun 2011 tentang Intelijen Negara"
                                aria-valuetext="Undang-Undang Nomor 17 Tahun 2011 tentang Intelijen Negara" disabled></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label"></label>
                        <label for="" class="col-sm col-form-label">5</label>
                        <div class="col-sm-9">
                            <textarea type="text" class="form-control" class="output_nama_kasus" id="outputNamaKasus" rows="5"
                                placeholder="Peraturan Presiden Nomor 38 Tahun 2010 tentang Organisasi dan Tata Kerja Kejaksaan Republik Indonesia sebagaimana telah beberapa kali diubah terakhir dengan Peraturan Presiden Nomor 15 Tahun 2021 tentang Perubahan Kedua atas Peraturan Presiden Nomor 38 Tahun 2010 tentang Organisasi dan Tata Kerja Kejaksaan Republik Indonesia"
                                aria-valuetext="Peraturan Presiden Nomor 38 Tahun 2010 tentang Organisasi dan Tata Kerja Kejaksaan Republik Indonesia sebagaimana telah beberapa kali diubah terakhir dengan Peraturan Presiden Nomor 15 Tahun 2021 tentang Perubahan Kedua atas Peraturan Presiden Nomor 38 Tahun 2010 tentang Organisasi dan Tata Kerja Kejaksaan Republik Indonesia"
                                disabled></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label"></label>
                        <label for="" class="col-sm col-form-label">6</label>
                        <div class="col-sm-9">
                            <textarea type="text" class="form-control" class="output_nama_kasus" id="outputNamaKasus" rows="5"
                                placeholder="Peratuan Jaksa Agung Nomor PER=006/A/JA/07/2017 tetang Organisasi dan Tata Kerja Kejaksaan Republik Indonesia sebagaimana telah beberapa kali diubah terakhir dengan Peraturan Kejaksaan Nomor 1 Tahun 2022 tentang Perubahan Ketiga atas Peraturan Jaksa Agung Nomor PER-006/A/JA/07/2017 tentang Organisasi dan Tata Kerja Kejaksaan Republik Indonesia"
                                aria-valuetext="Peratuan Jaksa Agung Nomor PER=006/A/JA/07/2017 tetang Organisasi dan Tata Kerja Kejaksaan Republik Indonesia sebagaimana telah beberapa kali diubah terakhir dengan Peraturan Kejaksaan Nomor 1 Tahun 2022 tentang Perubahan Ketiga atas Peraturan Jaksa Agung Nomor PER-006/A/JA/07/2017 tentang Organisasi dan Tata Kerja Kejaksaan Republik Indonesia"
                                disabled></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label"></label>
                        <label for="" class="col-sm col-form-label">7</label>
                        <div class="col-sm-9">
                            <textarea type="text" class="form-control" class="output_nama_kasus" id="outputNamaKasus"
                                placeholder="Peraturan Kejaksaan Nomor 4 Tahun 2019 tentang Administrasi Intelijen Kejaksaan Republik Indinesia"
                                aria-valuetext="Peraturan Kejaksaan Nomor 4 Tahun 2019 tentang Administrasi Intelijen Kejaksaan Republik Indinesia"
                                disabled></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="floatingSelect" class="col-sm-2 col-form-label">Memerintahkan Kepada</label>
                        <label for="" class="col-sm col-form-label"></label>
                        <div class="col-sm-9 form-floating">
                            <select name="petugas_id[]"
                                class="form-control selectpicker @error('petugas_id') is-invalid @enderror"
                                data-live-search="true" id="floatingSelect" multiple>
                                <option disabled>Pilih Nama</option>
                                @foreach ($data as $datas)
                                    <option value="{{ $datas->id }}" @if (is_array(old('petugas_id')) && in_array($datas->id, old('petugas_id'))) selected @endif>
                                        {{ $datas->nama }}
                                    </option>
                                @endforeach
                            </select>
                            <label for="floatingSelect">Memerintahkan Kepada</label>
                            @error('petugas_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    {{-- Detail Data --}}
                    <div class="row" id="detailData" style="display: none;">
                        <label for="floatingSelect" class="col-sm-2 col-form-label"></label>
                        <label for="" class="col-sm col-form-label"></label>
                        <div class="col-sm-9">
                            <div id="detailsContainer"></div>
                        </div>
                    </div>
                    {{-- End Detail Data --}}


                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Untuk</label>
                        <label for="" class="col-sm col-form-label">1</label>
                        <div class="col-sm-9">
                            <textarea type="text" class="form-control" class="output_nama_kasus" id="outputNamaKasus" rows="3"
                                placeholder="Melaksanakan kegiatan preservasi terhadap barang bukti elektronik dalam rangka mendukung penyidikan"
                                aria-valuetext="Melaksanakan kegiatan preservasi terhadap barang bukti elektronik dalam rangka mendukung penyidikan"
                                disabled></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label"></label>
                        <label for="" class="col-sm col-form-label"></label>
                        <div class="col-sm-9">
                            <textarea name="untuk_1" type="text" class="form-control @error('untuk_1') is-invalid @enderror"
                                class="output_nama_kasus" id="outputNamaKasus">{{ old('untuk_1') }}</textarea>
                            @error('untuk_1')
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
                            <textarea type="text" class="form-control" class="output_nama_kasus" id="outputNamaKasus"
                                placeholder="Melaksanakan Surat Perintah Tugas ini dalam waktu 7 (tujuh) hari kerja sejak tanggal"
                                aria-valuetext="Melaksanakan Surat Perintah Tugas ini dalam waktu 7 (tujuh) hari kerja sejak tanggal" disabled></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-sm-3 col-form-label">Pilih Tanggal</label>
                        <div class="col-sm-4">
                            <input name="tanggal_1" type="date"
                                class="form-control @error('tanggal_1') is-invalid @enderror"
                                value="{{ old('tanggal_1') }}" id="outputNamaKasus">
                            @error('tanggal_1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <input name="tanggal_2" type="date"
                                class="form-control @error('tanggal_2') is-invalid @enderror"
                                value="{{ old('tanggal_2') }}" id="outputNamaKasus">
                            @error('tanggal_2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label"></label>
                        <label for="" class="col-sm col-form-label">3</label>
                        <div class="col-sm-9">
                            <textarea type="text" class="form-control" class="output_nama_kasus" id="outputNamaKasus"
                                placeholder="Melaporkan hasil pelaksanaannya dalam tenggang waktu 3 (tiga) hsri kerja setelah surat perintah tugas selesai dilaksanakan;"
                                aria-valuetext="Melaporkan hasil pelaksanaannya dalam tenggang waktu 3 (tiga) hsri kerja setelah surat perintah tugas selesai dilaksanakan;"
                                disabled></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label"></label>
                        <label for="" class="col-sm col-form-label">4</label>
                        <div class="col-sm-9">
                            <textarea type="text" class="form-control" class="output_nama_kasus" id="outputNamaKasus"
                                placeholder="Segala biaya yang timbul berkaitan dengan pelaksanaan tugas ini dibebankan kepada DIPA Kejaksaan Agung T.A."
                                aria-valuetext="Segala biaya yang timbul berkaitan dengan pelaksanaan tugas ini dibebankan kepada DIPA Kejaksaan Agung T.A."
                                disabled></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="yearSelect" class="col-sm-3 col-form-label">Pilih Tahun</label>
                        <div class="col-sm-9">
                            <select name="tahun" class="form-control @error('tahun') is-invalid @enderror"
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

                    <div class="row input-group mb-3">
                        <label for="inputEmail" class="col-sm-4 col-form-label">Pilih Bulan & Tahun</label>
                        <div class="col-sm-4">
                            <select name="bulan" class="form-control mb-1 @error('bulan') is-invalid @enderror"
                                id="monthPicker">
                                <option value="">Pilih Bulan</option>
                                @foreach (['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'] as $index => $month)
                                    <option value="{{ $index + 1 }}"
                                        {{ old('bulan') == $index + 1 ? 'selected' : '' }}>{{ $month }}</option>
                                @endforeach
                            </select>
                            @error('bulan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <select name="tahun" class="form-control @error('tahun') is-invalid @enderror"
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
                        <label for="inputEmail" class="col-sm-3 col-form-label">Jabatan Penanda Tangan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="outputNamaKasus"
                                placeholder="JAKSA AGUNG MUDA INTELJEN" value="JAKSA AGUNG MUDA INTELJEN"
                                disabled></input>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-3 col-form-label">Jabatan Penanda Tangan</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="outputNamaKasus"
                                placeholder="REDA MANTHOVANI" value="REDA MANTHOVANI" disabled></input>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label"></label>
                        <label for="" class="col-sm col-form-label">1</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="outputNamaKasus"
                                placeholder="Yth. Jaksa Agung RI;" value="Yth. Jaksa Agung RI;" disabled></input>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label"></label>
                        <label for="" class="col-sm col-form-label">2</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="outputNamaKasus"
                                placeholder="Yth. Wakil Jaksa Agung RI;" value="Yth. Wakil Jaksa Agung RI;"
                                disabled></input>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label"></label>
                        <label for="" class="col-sm col-form-label">3</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="outputNamaKasus"
                                placeholder="Sekertaris Jaksa Agung Muda Bidang Itelijen;"
                                value="Sekertaris Jaksa Agung Muda Bidang Itelijen;" disabled></input>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label"></label>
                        <label for="" class="col-sm col-form-label">4</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="outputNamaKasus"
                                placeholder="Direktur E pada Jaksa Agung Muda Bidang Intelijen;"
                                value="Direktur E pada Jaksa Agung Muda Bidang Intelijen;" disabled></input>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label"></label>
                        <label for="" class="col-sm col-form-label">5</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('kepala_kejaksaan') is-invalid @enderror"
                                name="kepala_kejaksaan" value="{{ old('kepala_kejaksaan') }}"></input>
                            @error('kepala_kejaksaan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <small class="form-text text-danger">
                                Tanpa tanda ;
                            </small>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label"></label>
                        <label for="" class="col-sm col-form-label">6</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="outputNamaKasus"
                                placeholder="Kasubdit Pemantauan;" value="Kasubdit Pemantauan;" disabled></input>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label"></label>
                        <label for="" class="col-sm col-form-label">7</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="outputNamaKasus" placeholder="Arsip"
                                value="Arsip" disabled></input>
                        </div>
                    </div>

                    <div class="d-grid gap-2 col-sm-12 mb-3 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary" id="saveButton">Save</button>
                    </div>

            </div>
        </div>
    </div>
    </form>

    <script>
        $(document).ready(function() {
            // Ambil data dari data array (misalnya dari backend atau variabel JavaScript)
            var data = @json($data); // Asumsikan $data adalah array PHP yang diubah menjadi JSON

            // Handler saat memilih item di select
            $('#floatingSelect').change(function() {
                var selectedIds = $(this).val(); // Dapatkan semua ID yang dipilih

                // Clear previous details
                $('#detailsContainer').empty();

                if (selectedIds && selectedIds.length > 0) {
                    // Filter data yang sesuai dengan ID yang dipilih
                    var selectedData = data.filter(item => selectedIds.includes(item.id.toString()));

                    // Build detail data HTML
                    var detailHtml = '';
                    selectedData.forEach(function(item) {
                        detailHtml += `
                        <div class="selected-item">
                            <p>Nama: ${item.nama}</p>
                            <p>Pangkat: ${item.pangkat}</p>
                            <p>NIP: ${item.NIP}</p>
                            <p>Jabatan: ${item.jabatan}</p>
                            <hr>
                        </div>
                    `;
                    });

                    // Update and show detail data
                    $('#detailsContainer').html(detailHtml);
                    $('#detailData').show();
                } else {
                    // Sembunyikan detail data jika tidak ada pilihan
                    $('#detailData').hide();
                }
            });
        });
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const monthPicker = document.getElementById('monthPicker');
            const yearPicker = document.getElementById('yearsPicker');

            // Populate month picker
            const months = [{
                    value: '01',
                    text: 'Januari'
                },
                {
                    value: '02',
                    text: 'Februari'
                },
                {
                    value: '03',
                    text: 'Maret'
                },
                {
                    value: '04',
                    text: 'April'
                },
                {
                    value: '05',
                    text: 'Mei'
                },
                {
                    value: '06',
                    text: 'Juni'
                },
                {
                    value: '07',
                    text: 'Juli'
                },
                {
                    value: '08',
                    text: 'Agustus'
                },
                {
                    value: '09',
                    text: 'September'
                },
                {
                    value: '10',
                    text: 'Oktober'
                },
                {
                    value: '11',
                    text: 'November'
                },
                {
                    value: '12',
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
