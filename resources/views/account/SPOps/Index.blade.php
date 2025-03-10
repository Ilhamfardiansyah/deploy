@extends('layouts.main')


@section('content')
    @include('sweetalert::alert')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title text-center">FORM SURAT PERINTAH OPERASI INTELIJEN</h3>

                <form action="{{ route('create_ops') }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label for="noSPOs" class="col-sm-3 col-form-label">No. SP OPS</label>
                        <div class="col-sm-3">
                            <input type="text" name="noSPOps" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="tanggal" class="col-sm-3 col-form-label">Tanggal Bulan Tahun</label>
                        <div class="col-sm-3">
                            <input type="date" name="tanggal" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Menimbang Point</label>
                        <label for="" class="col-sm col-form-label">a</label>
                        <div class="col-sm-9">
                            <textarea type="text" class="form-control" class="output_nama_kasus" id="outputNamaKasus" name="menimbang_point"
                                rows="3"></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label"></label>
                        <label for="" class="col-sm col-form-label">b</label>
                        <div class="col-sm-9">
                            <textarea type="text" class="form-control" class="output_nama_kasus" id="outputNamaKasus" rows="3"
                                placeholder="Bahwa untuk melakukan kegiatan Digital Forensik perlu dikeluarkan Surat Perintah Operasi Intelijen"
                                aria-valuetext="Bahwa untuk melakukan kegiatan Digital Forensik perlu dikeluarkan Surat Perintah Operasi Intelijen "
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
                                placeholder="Undang-Undang Nomor 16 Tahun 2024 tentang Kejaksaan Republik Indonesia sebagaimana telah diubah dengan Undang-Undang Nomor 11 Tahun 2021 tentang Perubahan atas Undang-Undang Nomor 16 Tahun 2024 tentang Kejaksaan Republik Indonesia"
                                aria-valuetext="Undang-Undang Nomor 16 Tahun 2024 tentang Kejaksaan Republik Indonesia sebagaimana telah diubah dengan Undang-Undang Nomor 11 Tahun 2021 tentang Perubahan atas Undang-Undang Nomor 16 Tahun 2024 tentang Kejaksaan Republik Indonesia"
                                disabled></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label"></label>
                        <label for="" class="col-sm col-form-label">3</label>
                        <div class="col-sm-9">
                            <textarea type="text" class="form-control" class="output_nama_kasus" id="outputNamaKasus" rows="4"
                                placeholder="Undang-Undang Nomor 11 tahun 2008 tentang Informasi dan Transaksi Elektronik sebagaimana telah diubah dengan Undang-Undang Nomor 19 Tahun 2016 tentang Perubahan atas Undang-Undang Nomor 11 Tahun 2008 tentang Informasi dan Transaksi Elektronik"
                                aria-valuetext="Undang-Undang Nomor 11 tahun 2008 tentang Informasi dan Transaksi Elektronik sebagaimana telah diubah dengan Undang-Undang Nomor 19 Tahun 2016 tentang Perubahan atas Undang-Undang Nomor 11 Tahun 2008 tentang Informasi dan Transaksi Elektronik"
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
                        <label for="inputEmail" class="col-sm-2 col-form-label"></label>
                        <label for="" class="col-sm col-form-label">8</label>
                        <div class="col-sm-9">
                            <textarea type="text" class="form-control" class="output_nama_kasus" id="outputNamaKasus"
                                placeholder="Keputusan Jaksa Agung Nomor : KEP-135/A/JA/05/2019 tentang formulir atau bentuk, kode dan cara pengisian Administrasi Intelijen Kejaksaan"
                                aria-valuetext="Keputusan Jaksa Agung Nomor : KEP-135/A/JA/05/2019 tentang formulir atau bentuk, kode dan cara pengisian Administrasi Intelijen Kejaksaan"
                                disabled></textarea>
                        </div>
                    </div>

                    {{-- Memerintahkan Kepada --}}
                    <div class="row mb-3">
                        <label for="floatingSelect" class="col-sm-2 col-form-label">Memerintahkan Kepada</label>
                        <label for="" class="col-sm col-form-label"></label>
                        <div class="col-sm-9 form-floating">
                            <select class="form-control selectpicker" name="petugas_id[]" data-live-search="true"
                                id="floatingSelect" multiple>
                                <option disabled>Pilih Nama</option>
                                @foreach ($data as $datas)
                                    <option data-tokens="ketchup mustard" value="{{ $datas->id }}">
                                        {{ $datas->nama }}
                                    </option>
                                @endforeach
                            </select>
                            <label for="floatingSelect">Memerintahkan Kepada</label>
                        </div>
                    </div>
                    {{-- End --}}
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
                                placeholder="Melaksanakan kegiatan akuisisi dan analisis terhadap barang bukti elektronik dalam rangka mendukung"
                                aria-valuetext="Melaksanakan kegiatan akuisisi dan analisis terhadap barang bukti elektronik dalam rangka mendukung"
                                disabled></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label"></label>
                        <label for="" class="col-sm col-form-label"></label>
                        <div class="col-sm-9">
                            <textarea type="text" class="form-control" name="untuk_1" class="output_nama_kasus" id="outputNamaKasus"></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label"></label>
                        <label for="" class="col-sm col-form-label">2</label>
                        <div class="col-sm-9">
                            <textarea type="text" class="form-control" class="output_nama_kasus" id="outputNamaKasus" rows="3"
                                placeholder="Melaksanakan Surat Perintah Operasi Intelijen ini dengan sebaik-baiknya dan penuh rasa tanggung jawab;"
                                aria-valuetext="Melaksanakan Surat Perintah Operasi Intelijen ini dengan sebaik-baiknya dan penuh rasa tanggung jawab;"
                                disabled></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label"></label>
                        <label for="" class="col-sm col-form-label">3</label>
                        <div class="col-sm-9">
                            <textarea type="text" class="form-control" class="output_nama_kasus" id="outputNamaKasus" rows="3"
                                placeholder="Melaksanakan Surat Perintah Operasi Intelijen ini dalam waktu 30 (tiga puluh) hari sejak tanggal"
                                aria-valuetext="Melaksanakan Surat Perintah Operasi Intelijen ini dalam waktu 30 (tiga puluh) hari sejak tanggal"
                                disabled></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="" class="col-sm-3 col-form-label">Pilih Tanggal</label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control" name="tanggal_2" class="output_nama_kasus"
                                id="outputNamaKasus"></input>
                        </div>
                        <div class="col-sm-4">
                            <input type="date" class="form-control" name="tanggal_3" class="output_nama_kasus"
                                id="outputNamaKasus"></input>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label"></label>
                        <label for="" class="col-sm col-form-label">4</label>
                        <div class="col-sm-9">
                            <textarea type="text" class="form-control" class="output_nama_kasus" id="outputNamaKasus"
                                placeholder="Melaporkan hasil pelaksanaannya setelah Surat Perintah Operasi Intelijen selesai dilaksanakan"
                                aria-valuetext="Melaporkan hasil pelaksanaannya setelah Surat Perintah Operasi Intelijen selesai dilaksanakan"
                                disabled></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEmail" class="col-sm-2 col-form-label"></label>
                        <label for="" class="col-sm col-form-label">5</label>
                        <div class="col-sm-9">
                            <textarea type="text" class="form-control" class="output_nama_kasus" id="outputNamaKasus"
                                placeholder="Segala biaya yang timbul berkaitan dengan pelaksanaan tugas ini dibebankan kepada DIPA Kejaksaan Agung T.A"
                                aria-valuetext="Segala biaya yang timbul berkaitan dengan pelaksanaan tugas ini dibebankan kepada DIPA Kejaksaan Agung T.A"
                                disabled></textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="yearPicker" class="col-sm-3 col-form-label">Pilih Tahun</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="tahun" id="yearSelect">
                                <option value="">Pilih Tahun</option>
                                @for ($i = date('Y'); $i >= 2000; $i--)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
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
                            <select class="form-control mb-1" name="bulan" id="monthPicker">
                                <option value="">Pilih Bulan</option>
                                <!-- Months will be populated here by JavaScript -->
                            </select>
                        </div>
                        <select class="form-control col-sm-4" name="tahun2" id="yearSelect">
                            <option value="">Pilih Tahun</option>
                            @for ($i = date('Y'); $i >= 2000; $i--)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
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
                        <label for="inputEmail" class="col-sm-2 col-form-label">Tembusan</label>
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
                            <input type="text" name="kepala_kejaksaan" class="form-control"
                                id="outputNamaKasus"></input>
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
                                placeholder="Kasubid Pemantauan;" value="Kasubid Pemantauan;" disabled></input>
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
