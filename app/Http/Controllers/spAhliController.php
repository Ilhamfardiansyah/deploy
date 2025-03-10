<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\SpAhli;
use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use PhpOffice\PhpWord\TemplateProcessor;


class spAhliController extends Controller
{
    public function index()
    {
        $data = Petugas::all();
        return view('account.SPAhli.index', compact('data'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $validateData = $request->validate([
            'petugas_id'        => 'required|integer', // Pastikan petugas_id diisi dan bertipe integer
            'no_perintah'       => 'required|unique:sp_ahlis',
            'tanggal'           => 'required|date',
            'menimbang_point'   => 'required',
            'dasar'             => 'required',
            'untuk'             => 'required',
            'tahun'             => 'required',
            'tanggal_1'         => 'required|date',
            'jabatan'           => 'required|string',
            'pejabat'           => 'required|string',
            'tembusan_1'        => 'required|string',
            'tembusan_2'        => 'required|string',
            'tembusan_3'        => 'required|string',
            'tembusan_4'        => 'required|string',
            'tembusan_5'        => 'required|string',
            'tembusan_6'        => 'required|string',
            'tembusan_7'        => 'required|string',
        ]);

        // Buat data SpAhli dengan petugas_id
        $ahli = SpAhli::create([
            'petugas_id'        => $validateData['petugas_id'], // Tetapkan petugas_id
            'no_perintah'       => $validateData['no_perintah'],
            'tanggal'           => $validateData['tanggal'],
            'menimbang_point'   => $validateData['menimbang_point'],
            'dasar'             => $validateData['dasar'],
            'untuk'             => $validateData['untuk'],
            'tahun'             => $validateData['tahun'],
            'tanggal_1'         => $validateData['tanggal_1'],
            'jabatan'           => $validateData['jabatan'],
            'pejabat'           => $validateData['pejabat'],
            'tembusan_1'        => $validateData['tembusan_1'],
            'tembusan_2'        => $validateData['tembusan_2'],
            'tembusan_3'        => $validateData['tembusan_3'],
            'tembusan_4'        => $validateData['tembusan_4'],
            'tembusan_5'        => $validateData['tembusan_5'],
            'tembusan_6'        => $validateData['tembusan_6'],
            'tembusan_7'        => $validateData['tembusan_7'],
        ]);

        // Tampilkan pesan sukses
        Alert::success('Sukses', 'Data Anda Berhasil Tersimpan');
        return redirect('menu/printAhli');
    }


    public function printAhli()
    {
        $ahli = SpAhli::all();
        return view('Cetak.SpAhli', compact('ahli'));
    }


    public function cetakAhli(SpAhli $spahli)
    {
        // Lokasi template dokumen Word
        $templateLocation = resource_path('docx/SPAHLI.docx');

        // Cek apakah file template ada
        if (!file_exists($templateLocation)) {
            abort(404, 'Template Not Found');
        }

        // Menggunakan PHPWord Template Processor
        $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor($templateLocation);

        // Ambil data petugas dari relasi petugas_id
        $petugas = $spahli->petugas; // Pastikan relasi petugas sudah terdefinisi di model SpAhli

        // Jika data petugas ada
        if ($petugas) {
            $petugasData = [
                'nama' => $petugas->nama,
                'pangkat' => $petugas->pangkat,
                'jabatan' => $petugas->jabatan,
                'NIP' => $petugas->NIP,
            ];
        } else {
            $petugasData = [
                'nama' => '',
                'pangkat' => '',
                'jabatan' => '',
                'NIP' => '',
            ];
        }

        Carbon::setLocale('id');
        // Format tanggal sesuai dengan kebutuhan
        $tanggalFormat = Carbon::parse($spahli->tanggal)->format('m/Y');
        $tanggal1Format = Carbon::parse($spahli->tanggal_1)->translatedFormat('F Y');

        // Data yang akan dimasukkan ke dalam template
        $data = [
            'no_perintah'       => $spahli->no_perintah,
            'tanggal'           => $tanggalFormat,
            'menimbang_point'   => $spahli->menimbang_point,
            'dasar'             => $spahli->dasar,
            'untuk'             => $spahli->untuk,
            'tahun'             => $spahli->tahun,
            'tanggal_1'         => $tanggal1Format,
            'jabatan'           => $spahli->jabatan,
            'pejabat'           => $spahli->pejabat,
            'tembusan_1'        => $spahli->tembusan_1,
            'tembusan_2'        => $spahli->tembusan_2,
            'tembusan_3'        => $spahli->tembusan_3,
            'tembusan_4'        => $spahli->tembusan_4,
            'tembusan_5'        => $spahli->tembusan_5,
            'tembusan_6'        => $spahli->tembusan_6,
            'tembusan_7'        => $spahli->tembusan_7,
        ];

        // Masukkan data ke template
        foreach ($data as $key => $value) {
            $templateProcessor->setValue($key, $value);
        }

        // Masukkan data petugas (nama, pangkat, jabatan, NIP)
        $templateProcessor->setValue('nama_petugas', $petugasData['nama']);
        $templateProcessor->setValue('pangkat_petugas', $petugasData['pangkat']);
        $templateProcessor->setValue('jabatan_petugas', $petugasData['jabatan']);
        $templateProcessor->setValue('NIP_petugas', $petugasData['NIP']);

        // Tentukan nama file output
        $fileName = 'SP_Ahli_' . $spahli->no_perintah . '.docx';
        $filePath = storage_path('app/public/' . $fileName);

        // Simpan dokumen yang sudah diisi
        $templateProcessor->saveAs($filePath);

        // Unduh file dan hapus setelah pengunduhan
        return response()->download($filePath)->deleteFileAfterSend(true);
    }

}
