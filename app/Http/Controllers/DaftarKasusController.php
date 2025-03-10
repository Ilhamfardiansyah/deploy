<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Petugas;
use App\Models\inputKasus;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;


class DaftarKasusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data1 = DB::connection('mysql2')->table('kasus')->get();
        $data2 = Petugas::all();

        return view('account.DaftarKasus.input' , compact('data1','data2'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = DB::connection('mysql2')->table('kasus')->get();
        return view('account.DaftarKasus.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Validasi data input
            $validateData = $request->validate([
                'nomor_administrasi'    => 'required',
                'surat_permohonan'      => 'nullable|mimes:pdf|max:2048',
                'sptug'                 => 'nullable|mimes:pdf|max:2048',
                'spops'                 => 'nullable|mimes:pdf|max:2048',
                'permohonan_laporan'    => 'nullable|mimes:pdf|max:2048',
                'nodis_laporan'         => 'nullable|mimes:pdf|max:2048',
                'penunjuk_ahli'         => 'nullable|mimes:pdf|max:2048',
                'sp_penunjuk_ahli'      => 'nullable|mimes:pdf|max:2048',
                'ahli_p9'               => 'nullable|mimes:pdf|max:2048',
                'sp_panggilan'          => 'nullable|mimes:pdf|max:2048',
                'panggilan_sidang'      => 'nullable|mimes:pdf|max:2048',
                'sp_ahli'               => 'nullable|mimes:pdf|max:2048',
                'ahli_ditunjuk'         => 'required|string|max:255',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        }

        // Ambil nomor_administrasi untuk digunakan sebagai nama folder
        $folderName = $request->input('nomor_administrasi');

        // Proses penyimpanan file upload jika ada file yang diunggah
        $fileFields = [
            'surat_permohonan', 'sptug', 'spops', 'permohonan_laporan',
            'nodis_laporan', 'penunjuk_ahli', 'sp_penunjuk_ahli',
            'ahli_p9', 'sp_panggilan', 'panggilan_sidang', 'sp_ahli'
        ];

        foreach ($fileFields as $field) {
            if ($request->hasFile($field)) {
                $file = $request->file($field);
                $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME); // Get original file name without extension
                $extension = $file->getClientOriginalExtension(); // Get file extension
                $timestamp = now()->format('His'); // Get current time (hour:minute:second)

                // Create a new name for the file
                $newFileName = "{$originalName}_{$timestamp}.{$extension}";

                // Store the file in a folder named after 'nomor_administrasi'
                $file->storeAs("public/files/{$folderName}", $newFileName);
                $validateData[$field] = "files/" . $folderName . "/" . $newFileName;
            }
        }

        // Cek apakah hanya ahli_ditunjuk yang diinput
        $onlyAhliDitunjuk = !array_filter(array_intersect_key($validateData, array_flip($fileFields)));

        // Tentukan status berdasarkan kondisi
        if ($onlyAhliDitunjuk && $validateData['ahli_ditunjuk']) {
            // Jika hanya ahli_ditunjuk yang diisi
            $status = Status::where('name', 'Belum Diproses')->first();
        } else {
            // Hitung jumlah file yang diunggah
            $uploadedFiles = count(array_filter(array_intersect_key($validateData, array_flip($fileFields))));

            if ($uploadedFiles == 0) {
                $status = Status::where('name', 'Belum Diproses')->first();
            } elseif ($uploadedFiles < count($fileFields)) {
                $status = Status::where('name', 'Sedang diproses')->first();
            } else {
                $status = Status::where('name', 'Selesai')->first();
            }
        }

        // Jika status tidak ditemukan, gunakan nilai default
        $statusId = $status ? $status->id : Status::where('name', 'Proses tidak diketahui')->first()->id ?? 1; // Default

        // Tambahkan status ke data yang akan disimpan
        $validateData['status_id'] = $statusId;

        // Simpan data kasus ke tabel input_kasuses
        inputKasus::create($validateData);

        // Tampilkan notifikasi sukses
        Alert::success('Sukses', 'Data Anda Berhasil Tersimpan');

        // Redirect kembali ke halaman sebelumnya
        return redirect()->route('indexDaftar');
    }

    public function indexDaftar()
    {
        $data = inputKasus::with('statuses')->get();
        // dd($data);
        return view('account.DaftarKasus.daftarKasus', compact('data'));
    }

    public function inputDaftar(inputKasus $id)
    {
        return view('account.DaftarKasus.edit', compact('id'));
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
    public function updateDaftarKasus(Request $request, inputKasus $id)
    {
        try {
            // Validasi data input
            $validateData = $request->validate([
                'nomor_administrasi'    => 'required',
                'surat_permohonan'      => 'nullable|mimes:pdf|max:2048',
                'sptug'                 => 'nullable|mimes:pdf|max:2048',
                'spops'                 => 'nullable|mimes:pdf|max:2048',
                'permohonan_laporan'    => 'nullable|mimes:pdf|max:2048',
                'nodis_laporan'         => 'nullable|mimes:pdf|max:2048',
                'penunjuk_ahli'         => 'nullable|mimes:pdf|max:2048',
                'sp_penunjuk_ahli'      => 'nullable|mimes:pdf|max:2048',
                'ahli_p9'               => 'nullable|mimes:pdf|max:2048',
                'sp_panggilan'          => 'nullable|mimes:pdf|max:2048',
                'panggilan_sidang'      => 'nullable|mimes:pdf|max:2048',
                'sp_ahli'               => 'nullable|mimes:pdf|max:2048',
                'ahli_ditunjuk'         => 'nullable|string|max:255',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        }

        // Ambil nomor_administrasi untuk digunakan sebagai nama folder
        $folderName = $request->input('nomor_administrasi');

        // Proses penyimpanan file upload jika ada file yang diunggah
        $fileFields = [
            'surat_permohonan', 'sptug', 'spops', 'permohonan_laporan',
            'nodis_laporan', 'penunjuk_ahli', 'sp_penunjuk_ahli',
            'ahli_p9', 'sp_panggilan', 'panggilan_sidang', 'sp_ahli'
        ];

        foreach ($fileFields as $field) {
            // Cek apakah file ada di request dan file lama ada
            if ($request->hasFile($field)) {
                // Hapus file lama jika ada (opsional, jika perlu)
                if ($id->$field) {
                    // Hapus file lama di storage
                    Storage::delete('public/files/' . $id->$field);
                }

                // Ambil file yang diupload
                $file = $request->file($field);
                $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
                $extension = $file->getClientOriginalExtension();

                // Generate nama file baru tanpa timestamp
                $newFileName = "{$originalName}.{$extension}";

                // Simpan file yang baru
                $validateData[$field] = $file->storeAs("public/files/{$folderName}", $newFileName);
                $validateData[$field] = "files/" . $folderName . "/" . $newFileName;
            } else {
                // Jika tidak ada file, pertahankan file lama
                $validateData[$field] = $id->$field;
            }
        }

        // Cek kelengkapan file dan tentukan status secara otomatis
        $totalFiles = count($fileFields);
        $uploadedFiles = 0;

        foreach ($fileFields as $field) {
            if (isset($validateData[$field])) {
                $uploadedFiles++;
            }
        }

        // Tentukan status berdasarkan jumlah file yang diunggah
        if ($uploadedFiles == 0) {
            $status = Status::where('name', 'Belum Diproses')->first();
        } elseif ($uploadedFiles < $totalFiles) {
            $status = Status::where('name', 'Sedang diproses')->first();
        } else {
            $status = Status::where('name', 'Selesai')->first();
        }

        $statusId = $status ? $status->id : Status::where('name', 'Proses tidak diketahui')->first()->id ?? 1;

        // Update data kasus
        $id->update(array_merge($validateData, ['status_id' => $statusId]));

        // Tampilkan notifikasi sukses
        Alert::success('Sukses', 'Data Anda Berhasil Diperbarui');

        // Redirect kembali ke halaman daftar
        return redirect()->route('indexDaftar');
    }

    public function indexKpi()
    {
        $totalAhli = DB::table('input_kasuses')
            ->select('ahli_ditunjuk', DB::raw('count(*) as total'))
            ->whereNotNull('ahli_ditunjuk')
            ->groupBy('ahli_ditunjuk')
            ->get();
        // dd($data);
        return view('account.Kpi.index', compact('totalAhli'));
    }

    public function tabulasi()
    {
        $data = DB::table('input_kasuses')
                ->select('ahli_ditunjuk', DB::raw('count(*) as total'), DB::raw('min(id) as id'))
                ->whereNotNull('ahli_ditunjuk')
                ->groupBy('ahli_ditunjuk')
                ->get();        // dd($data);
        $totalAhli = $data->sum('total');
        return view('account.Kpi.tabulasi', compact('data', 'totalAhli'));
    }

    public function tabulasiIndex(request $request)
    {
        $ahliDitunjuk = $request->input('ahli_ditunjuk');
        $ahliDitunjukData = inputKasus::select('ahli_ditunjuk')->distinct()->get();

        if ($ahliDitunjuk) {
        $data = inputKasus::with('statuses')
                            ->where('ahli_ditunjuk', $ahliDitunjuk)
                            ->get();
        } else {
            // Jika tidak ada filter, ambil semua data
            $data = inputKasus::with('statuses')->get();
        }

        $fristDataAhli = $data->first();
            return view('account.Kpi.tabulasiIndex', compact('data', 'fristDataAhli'));
    }

    public function destroy(odel $odel)
    {
        //
    }
}
