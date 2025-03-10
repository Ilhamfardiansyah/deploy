<?php

namespace App\Http\Controllers;

use App\Models\odel;
use App\Models\SPTUG;
use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use PhpOffice\PhpWord\TemplateProcessor;
use Carbon\Carbon;

class SPTugController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function printTUG() {
    $tug = SPTUG::with('petugas')->get();

    return view('Cetak.Tug', compact('tug'));
}

    public function index()
    {
        $data = Petugas::all();
        return view('account.SPTug.Index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validateData = $request->validate([
            'petugas_id'        => 'required|array',
            'petugas_id.*'      => 'required|integer|exists:petugas,id',
            'NoSp_tug'          => 'required|string|unique:s_p_t_u_g_s',
            'tanggal'           => 'required|date',
            'menimbang_point'   => 'required',
            'untuk_1'           => 'required',
            'tanggal_1'         => 'required|date',
            'tanggal_2'         => 'required|date',
            'bulan'             => 'required|string',
            'tahun'             => 'required|string',
            'kepala_kejaksaan'  => 'required|string',
        ]);

        // dd($validateData);

        $tugPetugas = $validateData;
        unset($tugPetugas['petugas_id']);

        $tug = SPTUG::create($tugPetugas);

        if ($request->has('petugas_id')) {
            $tug->petugas()->sync($validateData['petugas_id']);
        }

        Alert::success('Succses', 'Data Anda Berhasil Tersimpan');
        return redirect('menu/tug');
    }

    /**
     * Display the specified resource.
     */
    public function cetakan(Sptug $sptug)
{
    // Lokasi template DOCX
    $templateLocation = resource_path('docx/SPTUG.docx');

    // Cek apakah template file ada
    if (!file_exists($templateLocation)) {
        abort(404, 'Template Not Found');
    }

    // Buat instance TemplateProcessor
    $templateProcessor = new TemplateProcessor($templateLocation);

    // Initialize table HTML
    $petugasTable = '<w:tbl><w:tblPr><w:tblW w:w="0" w:type="auto"/><w:tblBorders><w:top w:val="single" w:sz="4"/><w:left w:val="single" w:sz="4"/><w:bottom w:val="single" w:sz="4"/><w:right w:val="single" w:sz="4"/><w:insideH w:val="single" w:sz="4"/><w:insideV w:val="single" w:sz="4"/></w:tblBorders></w:tblPr>';

    if ($sptug->petugas->isEmpty()) {
        $petugasTable .= '<w:tr><w:tc><w:p><w:r><w:t></w:t></w:r></w:p></w:tc></w:tr>';
    } else {
        $i = 1;
        foreach ($sptug->petugas as $petugas) {
            $fontSize = '22'; // Ukuran 11 poin dalam setengah-poin

            // Gaya tabel tanpa border
            $noBorderTableStyle = '<w:tblPr><w:tblBorders>
                                    <w:top w:val="nil" />
                                    <w:left w:val="nil" />
                                    <w:bottom w:val="nil" />
                                    <w:right w:val="nil" />
                                    <w:insideH w:val="nil" />
                                    <w:insideV w:val="nil" />
                                    </w:tblBorders></w:tblPr>';

            // Terapkan gaya pada tabel
            $petugasTable .= '<w:tbl>' . $noBorderTableStyle;

            // Baris untuk Nama dengan kolom kosong dan nomor di sebelah kiri
            $petugasTable .= '<w:tr>';

            // Kolom kosong di sebelah kiri
            $petugasTable .= '<w:tc>';
            $petugasTable .= '<w:tcPr><w:tcW w:w="3" w:type="dxa"/></w:tcPr>';
            if ($i == 1) {
                $petugasTable .= '<w:p><w:pPr><w:jc w:val="left"/></w:pPr>';
                $petugasTable .= '<w:r><w:rPr><w:rFonts w:ascii="Arial" w:hAnsi="Arial"/><w:sz w:val="' . $fontSize . '"/></w:rPr>';
                $petugasTable .= '<w:t>Kepada            :</w:t></w:r></w:p>';
            } else {
                $petugasTable .= '<w:p><w:r><w:t></w:t></w:r></w:p>'; // Kosong untuk baris selain nomor 1
            }
            $petugasTable .= '</w:tc>';

            // Kolom nomor
            $petugasTable .= '<w:tc>';
            $petugasTable .= '<w:tcPr><w:tcW w:w="0" w:type="dxa"/></w:tcPr>'; // Lebar kolom nomor
            $petugasTable .= '<w:p><w:pPr><w:jc w:val="left"/></w:pPr>'; // Align text ke kiri untuk nomor
            $petugasTable .= '<w:r><w:rPr><w:rFonts w:ascii="Arial" w:hAnsi="Arial"/><w:sz w:val="' . $fontSize . '"/></w:rPr>';
            $petugasTable .= '<w:t>' . $i  . '.</w:t></w:r></w:p>';
            $petugasTable .= '</w:tc>';

            // Kolom untuk label Nama
            $petugasTable .= '<w:tc>';
            $petugasTable .= '<w:tcPr><w:tcW w:w="2000" w:type="dxa"/></w:tcPr>';
            $petugasTable .= '<w:p><w:pPr><w:jc w:val="left"/></w:pPr>';
            $petugasTable .= '<w:r><w:rPr><w:rFonts w:ascii="Arial" w:hAnsi="Arial"/><w:sz w:val="' . $fontSize . '"/></w:rPr>';
            $petugasTable .= '<w:t>Nama</w:t></w:r></w:p>';
            $petugasTable .= '</w:tc>';

            // Kolom untuk titik dua
            $petugasTable .= '<w:tc>';
            $petugasTable .= '<w:tcPr><w:tcW w:w="200" w:type="dxa"/></w:tcPr>';
            $petugasTable .= '<w:p><w:pPr><w:jc w:val="left"/></w:pPr>';
            $petugasTable .= '<w:r><w:rPr><w:rFonts w:ascii="Arial" w:hAnsi="Arial"/><w:sz w:val="' . $fontSize . '"/></w:rPr>';
            $petugasTable .= '<w:t>:</w:t></w:r></w:p>';
            $petugasTable .= '</w:tc>';

            // Kolom untuk nilai Nama
            $petugasTable .= '<w:tc>';
            $petugasTable .= '<w:tcPr><w:tcW w:w="3000" w:type="dxa"/></w:tcPr>';
            $petugasTable .= '<w:p><w:pPr><w:jc w:val="left"/></w:pPr>';
            $petugasTable .= '<w:r><w:rPr><w:rFonts w:ascii="Arial" w:hAnsi="Arial"/><w:sz w:val="' . $fontSize . '"/></w:rPr>';
            $petugasTable .= '<w:t>' . $petugas->nama . '</w:t></w:r></w:p>';
            $petugasTable .= '</w:tc>';
            $petugasTable .= '</w:tr>';

            // Baris untuk Jabatan, NIP, dan Pangkat
            foreach (['Jabatan' => $petugas->jabatan, 'NIP' => $petugas->NIP, 'Pangkat' => $petugas->pangkat] as $label => $value) {
                $petugasTable .= '<w:tr>';

                // Kolom kosong di sebelah kiri
                $petugasTable .= '<w:tc>';
                $petugasTable .= '<w:tcPr><w:tcW w:w="2" w:type="dxa"/></w:tcPr>';
                $petugasTable .= '<w:p><w:r><w:t></w:t></w:r></w:p>'; // Kosong
                $petugasTable .= '</w:tc>';

                // Kolom nomor (kosong untuk baris ini)
                $petugasTable .= '<w:tc>';
                $petugasTable .= '<w:tcPr><w:tcW w:w="500" w:type="dxa"/></w:tcPr>';
                $petugasTable .= '<w:p><w:r><w:t></w:t></w:r></w:p>'; // Kosong
                $petugasTable .= '</w:tc>';

                // Kolom untuk label (Jabatan, NIP, Pangkat)
                $petugasTable .= '<w:tc>';
                $petugasTable .= '<w:tcPr><w:tcW w:w="2000" w:type="dxa"/></w:tcPr>';
                $petugasTable .= '<w:p><w:pPr><w:jc w:val="left"/></w:pPr>';
                $petugasTable .= '<w:r><w:rPr><w:rFonts w:ascii="Arial" w:hAnsi="Arial"/><w:sz w:val="' . $fontSize . '"/></w:rPr>';
                $petugasTable .= '<w:t>' . $label . '</w:t></w:r></w:p>';
                $petugasTable .= '</w:tc>';

                // Kolom untuk titik dua
                $petugasTable .= '<w:tc>';
                $petugasTable .= '<w:tcPr><w:tcW w:w="200" w:type="dxa"/></w:tcPr>';
                $petugasTable .= '<w:p><w:pPr><w:jc w:val="left"/></w:pPr>';
                $petugasTable .= '<w:r><w:rPr><w:rFonts w:ascii="Arial" w:hAnsi="Arial"/><w:sz w:val="' . $fontSize . '"/></w:rPr>';
                $petugasTable .= '<w:t>:</w:t></w:r></w:p>';
                $petugasTable .= '</w:tc>';

                // Kolom untuk nilai (Jabatan, NIP, Pangkat)
                $petugasTable .= '<w:tc>';
                $petugasTable .= '<w:tcPr><w:tcW w:w="3000" w:type="dxa"/></w:tcPr>';
                $petugasTable .= '<w:p><w:pPr><w:jc w:val="left"/></w:pPr>';
                $petugasTable .= '<w:r><w:rPr><w:rFonts w:ascii="Arial" w:hAnsi="Arial"/><w:sz w:val="' . $fontSize . '"/></w:rPr>';
                $petugasTable .= '<w:t>' . $value . '</w:t></w:r></w:p>';
                $petugasTable .= '</w:tc>';

                $petugasTable .= '</w:tr>';
            }

            $petugasTable .= '<w:tr><w:tc><w:p><w:r><w:t/></w:r></w:p></w:tc></w:tr>'; // Baris kosong untuk jarak antar petugas
            $petugasTable .= '</w:tbl>'; // Tutup tabel

            $i++;
        }
    }

    $petugasTable .= '</w:tbl>';

    // Set petugas table in the template
    $templateProcessor->setValue('petugas_data', $petugasTable);

    // Format tanggal
    Carbon::setLocale('id');
    $tanggal = Carbon::parse($sptug['tanggal'])->format('d-m-Y');
    $tanggal_1 = Carbon::parse($sptug['tanggal_1'])->translatedFormat('d F Y');
    $tanggal_2 = Carbon::parse($sptug['tanggal_2'])->translatedFormat('d F Y');


    // Set bulan

    $namaBulan = [
        1 => 'Januari',
        2 => 'Februari',
        3 => 'Maret',
        4 => 'April',
        5 => 'Mei',
        6 => 'Juni',
        7 => 'Juli',
        8 => 'Agustus',
        9 => 'September',
        10 => 'Oktober',
        11 => 'November',
        12 => 'Desember',
    ];

    $bulanAngka = (int) $sptug['bulan']; // Pastikan dalam bentuk integer
    $bulan = $namaBulan[$bulanAngka] ?? 'Bulan tidak valid'; // Default jika angka tidak valid

    $data = [
        'NoSp_tug'         => $sptug['NoSp_tug'],
        'tanggal'          => $tanggal,
        'menimbang_point'  => $sptug['menimbang_point'],
        'untuk_1'          => $sptug['untuk_1'],
        'tanggal_1'        => $tanggal_1,
        'tanggal_2'        => $tanggal_2,
        'bulan'            => $namaBulan[$bulanAngka],
        'tahun'            => $sptug['tahun'],
        'kepala_kejaksaan' => $sptug['kepala_kejaksaan'],
    ];

    // Apply the data to the template
    foreach ($data as $key => $value) {
        $templateProcessor->setValue($key, $value);
    }

    // Simpan hasil cetakan
    $fileName = 'SP_TUG_' . $sptug['NoSp_tug'] . '.docx';
    $filePath = storage_path('app/public/' . $fileName);
    $templateProcessor->saveAs($filePath);

    return response()->download($filePath)->deleteFileAfterSend(true);
}



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(odel $odel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, odel $odel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(odel $odel)
    {
        //
    }
}
