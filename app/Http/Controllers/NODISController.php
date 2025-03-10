<?php

namespace App\Http\Controllers;

use App\Models\odel;
use App\Models\Nodis;
use App\Models\Pejabat;
use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\TemplateProcessor;
use Carbon\Carbon;




class NODISController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pejabat = Pejabat::all();
        return view ('account.NODIS.Index', compact('pejabat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function printNodis()
    {
        $nodis = Nodis::all();
        return view('Cetak.Nodis', compact('nodis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'pejabat_id'            => 'required',
            'nodis'                 => 'required|string|unique:nodis',
            'tanggal'               => 'required|date',
            'yth'                   => 'required|string',
            'dari'                  => 'required|string',
            'tanggal_1'             => 'required|date',
            'status'                => 'required',
            'lampiran'              => 'required|string',
            'isi'                   => 'required',
            'isi_perihal'           => 'required',
            'tembusan_1'            => 'required',
            'tembusan_2'            => 'required',
        ]);

        $nodis = Nodis::create($validateData);

        Alert::success('Succses', 'Data Anda Berhasil Tersimpan');
        return redirect('menu/printNodis');
    }

    /**
     * Display the specified resource.
     */

public function cetak(Nodis $nodis)
{
    // Lokasi template DOCX
    $templateLocation = resource_path('docx/Nodis.docx');

    // Cek apakah template file ada
    if (!file_exists($templateLocation)) {
        abort(404, 'Template Not Found');
    }

    // Load the template
    $templateProcessor = new TemplateProcessor($templateLocation);

    // Retrieve the pejabat details using pejabat_id
    $pejabat = Pejabat::find($nodis->pejabat_id); // Adjust based on your model and relation

    // Check if pejabat data is found
    if (!$pejabat) {
        abort(404, 'Pejabat Not Found');
    }

    // Convert dates if needed
    $tanggal = is_string($nodis->tanggal) ? new \DateTime($nodis->tanggal) : $nodis->tanggal;
    $tanggal_1 = is_string($nodis->tanggal_1) ? new \DateTime($nodis->tanggal_1) : $nodis->tanggal_1;

    Carbon::setLocale('id');

    // Create Carbon instances
    $tanggal = Carbon::parse($nodis['tanggal']);
    $tanggalFormat = $tanggal->format('m/Y');

    $tanggal_1 = Carbon::parse($nodis['tanggal_1']);
    $tanggalFormat1 = $tanggal_1->translatedFormat('d F Y');

    // Replace placeholders with data from the Nodis model and pejabat details
    $templateProcessor->setValue('pejabat_nama', $pejabat->nama); // Replace placeholders in your template accordingly
    $templateProcessor->setValue('pejabat_jabatan', $pejabat->jabatan);
    $templateProcessor->setValue('pejabat_pangkat', $pejabat->pangkat);
    $templateProcessor->setValue('pejabat_nip', $pejabat->nip);
    $templateProcessor->setValue('nodis', $nodis->nodis);
    $templateProcessor->setValue('tanggal', $tanggalFormat); // Adjust format if needed
    $templateProcessor->setValue('yth', $nodis->yth);
    $templateProcessor->setValue('dari', $nodis->dari);
    $templateProcessor->setValue('tanggal_1', $tanggalFormat1); // Adjust format if needed
    $templateProcessor->setValue('status', $nodis->status);
    $templateProcessor->setValue('lampiran', $nodis->lampiran);
    $templateProcessor->setValue('isi', $nodis->isi);
    $templateProcessor->setValue('isi_perihal', $nodis->isi_perihal);
    $templateProcessor->setValue('tembusan_1', $nodis->tembusan_1);
    $templateProcessor->setValue('tembusan_2', $nodis->tembusan_2);

    // Save the document
    $fileName = 'NODIS '. $nodis['nodis']. '.docx';
    $outputPath = storage_path('app/public/'. $fileName);
    $templateProcessor->saveAs($outputPath);

    // Return the document as a download response
    return response()->download($outputPath);
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
