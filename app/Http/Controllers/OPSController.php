<?php

namespace App\Http\Controllers;

use App\Models\OPS;
use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use PhpOffice\PhpWord\TemplateProcessor;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;


class OPSController extends Controller
{
    public function index()
    {
        $data = Petugas::all();
        return view('account.SPOps.Index', compact('data'));
    }


    public function store(Request $request): RedirectResponse
    {
        $validateData = $request->validate([
            'petugas_id'        => 'required|array', // Validate as array
            'petugas_id.*'      => 'required|integer|exists:petugas,id', // Validate each element in the array
            'noSPOps'           => 'required|string|unique:o_p_s',
            'tanggal'           => 'required|date',
            'menimbang_point'   => 'required',
            'untuk_1'           => 'required|string',
            'tanggal_2'         => 'required|date',
            'tanggal_3'         => 'required|date',
            'tahun'             => 'required|integer',
            'bulan'             => 'required|string',
            'tahun2'            => 'required|integer',
            'kepala_kejaksaan'  => 'required|string',
        ]);

        $opsData = $validateData;
        unset($opsData['petugas_id']); // Remove petugas_id as it will be saved separately

        $ops = OPS::create($opsData);

        if ($request->has('petugas_id')) {
            $ops->petugas()->sync($validateData['petugas_id']);
        }

        Alert::success('Succses', 'Data Anda Berhasil Tersimpan');
        return redirect('menu/printOps');
    }

    public function cetak(Ops $ops)
    {
            $templateLocation = resource_path('docx/SPOPS.docx');

            if (!file_exists($templateLocation)) {
                abort(404, 'Template Not Found');
            }

            $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor($templateLocation);

            // Initialize table HTML
            $petugasTable = '<w:tbl><w:tblPr><w:tblW w:w="0" w:type="auto"/><w:tblBorders><w:top w:val="single" w:sz="4"/><w:left w:val="single" w:sz="4"/><w:bottom w:val="single" w:sz="4"/><w:right w:val="single" w:sz="4"/><w:insideH w:val="single" w:sz="4"/><w:insideV w:val="single" w:sz="4"/></w:tblBorders></w:tblPr>';

                if ($ops->petugas->isEmpty()) {
            $petugasTable .= '<w:tr><w:tc><w:p><w:r><w:t></w:t></w:r></w:p></w:tc></w:tr>';
        } else {
            $i = 1;
            foreach ($ops->petugas as $petugas) {
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

                // Baris untuk Jabatan, NIP, dan Pangkat dengan kolom kosong dan nomor di sebelah kiri
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


        // Set the locale to Indonesian
        Carbon::setLocale('id');

        // Create Carbon instances
        $tanggal = Carbon::parse($ops['tanggal']);
        $tanggalFormat = $tanggal->format('d-m-Y');

        $tanggal_2 = Carbon::parse($ops['tanggal_2']);
        $tanggalFormat2 = $tanggal_2->translatedFormat('d F Y');

        $tanggal_3 = Carbon::parse($ops['tanggal_3']);
        $tanggalFormat3 = $tanggal_3->translatedFormat('d F Y');

        // Set other template values
        $data = [
            'noSPOps'           => $ops['noSPOps'],
            'tanggal'           => $tanggalFormat,
            'menimbang_point'   => $ops['menimbang_point'],
            'untuk_1'           => $ops['untuk_1'],
            'tanggal_2'         => $tanggalFormat2,
            'tanggal_3'         => $tanggalFormat3,
            'tahun'             => $ops['tahun'],
            'bulan'             => $ops['bulan'],
            'tahun_2'           => $ops['tahun_2'],
            'kepala_kejaksaan'  => $ops['kepala_kejaksaan'],
        ];

        // Apply the data to the template
        foreach ($data as $key => $value) {
            $templateProcessor->setValue($key, $value);
        }

        $fileName = 'SPOPS_' . $ops['noSPOps'] . '.docx';
        $filePath = storage_path('app/public/' . $fileName);
        $templateProcessor->saveAs($filePath);

        return response()->download($filePath, $fileName, ['Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document'])
                ->deleteFileAfterSend(true);
    }

    public function viewPrint() {
        $ops = Ops::with('petugas')->get();
        // dd($ops);

        return view('Index', compact('ops'));
    }

    public function printOPS() {
        $ops = Ops::with('petugas')->get();

        return view('Cetak.Ops', compact('ops'));
    }

}
