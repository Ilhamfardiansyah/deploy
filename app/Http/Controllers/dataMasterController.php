<?php

namespace App\Http\Controllers;

use App\Models\Pejabat;
use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Role;


class dataMasterController extends Controller
{
    public function dataPetugas()
    {
        $petugas = Petugas::all();
        return view('DataMaster.IndexPetugas', compact('petugas'));
    }

    public function indexPetugas()
    {
        return view('DataMaster.Petugas');
    }

    public function storePetugas(Request $request)
    {
        $validateData = $request->validate([
            'nama'          => 'required',
            'jabatan'       => 'required',
            'NIP'           => 'required|unique:petugas',
            'pangkat'       => 'required',
        ]);

        $master = $validateData;

        Petugas::create($master);
        Alert::success('Succses', 'Data Anda Berhasil Tersimpan');
        return redirect()->route('dataPetugas');
    }

    public function destroyPetugas($id)
    {
        try{
            $petugas = Petugas::findOrFail($id);

            $petugas->delete();

            return response()->json(['message' => 'Data petugas berhasil dihapus!'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error deleting petugas.'], 500);
        }
    }

    public function editPetugas(Petugas $petugas)
    {
        return view('DataMaster.editPetugas', compact('petugas'));
    }




    // Batas controller

    public function dataPejabat()
    {
        $pejabat = Pejabat::all();
        return view('DataMaster.IndexPejabat', compact('pejabat'));
    }

    public function indexPejabat()
    {
        return view('DataMaster.Pejabat');
    }

    public function storePejabat(Request $request)
    {
        // Validasi input
        $validateData = $request->validate([
            'nama'          => 'required',
            'jabatan'       => 'required',
            'nip'           => 'required|unique:pejabats',
            'pangkat'       => 'required',
        ]);

        $master = $validateData;

        Pejabat::create($master);
        // Redirect ke halaman yang diinginkan dengan pesan sukses
        Alert::success('Succses', 'Data Anda Berhasil Tersimpan');
        return redirect()->route('dataPejabat');
    }

    public function editPejabat(Pejabat $pejabat)
    {

        return view('DataMaster.editPejabat', compact('pejabat'));
    }

    public function updatePetugas(Request $request, $id)
    {
        $petugas = Petugas::findOrFail($id);

        $validateData = $request->validate([
            'nama'          => 'required',
            'pangkat'       => 'required',
            'NIP'           => ['required', 'unique:petugas,NIP,' . $petugas->id],
            'jabatan'       => 'required',
        ]);

        $petugas->update($validateData);

        Alert::success('Succses', 'Data Petugas Berhasil Di edit');
        return back();
    }

    public function updatePejabat(Request $request, $id)
    {
        // Ambil data pejabat yang sedang diupdate
        $pejabat = Pejabat::findOrFail($id);

        // Validasi data kecuali NIP tetap unik tapi tidak perlu memvalidasi terhadap NIP pejabat yang diupdate
        $validateData = $request->validate([
            'nama'          => 'required',
            'pangkat'       => 'required',
            'nip'           => ['required', 'unique:pejabats,nip,' . $pejabat->id], // Pengecualian ID untuk validasi unik
            'jabatan'       => 'required',
        ]);

        // Update data pejabat
        $pejabat->update($validateData);

        Alert::success('Succses', 'Data Pejabat Berhasil Di edit');

        return back();
    }

    public function destroyPejabat($id)
    {
        try {
            // Cari data berdasarkan ID
            $pejabat = Pejabat::findOrFail($id);

            // Hapus data dari database
            $pejabat->delete();

            // Kembalikan response sukses
            return response()->json(['message' => 'Data pejabat berhasil dihapus!'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error deleting pejabat.'], 500);
        }
    }

    // Batas controller

    public function indexAdmin()
    {
        $user = DB::table('users')
            ->leftJoin('model_has_roles', 'users.id', '=', 'model_has_roles.model_id')
            ->leftJoin('roles', 'model_has_roles.role_id', '=', 'roles.id')
            ->select('users.*', 'roles.name as role_name')
            ->get();

        return view('DataMaster.Admin', compact('user'));
    }

    public function editAdmin(User $admin)
    {
        $roles = Role::all();
        $adminRole = $user->getRoleNames();
        return view('DataMaster.editAdmin', compact('admin', 'adminRole', 'roles'));
    }

    public function updateAdmin(Request $request, $id)
    {
        $petugas = User::findOrFail($id);

        // Validasi input
        $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|email|unique:users,email,' . $petugas->id,
            'password'  => 'nullable|min:6',
            'pangkat'   => 'required|string',
            'nip'       => 'required|unique:users,nip,' . $petugas->id,
            'role'      => 'required|string', // Perbaikan validasi
            'jabatan'   => 'required|string',
        ]);

        // Debugging sebelum update
        // dd($request->all());

        // Update data admin
        $petugas->name = $request->name;
        $petugas->email = $request->email;
        $petugas->pangkat = $request->pangkat;
        $petugas->nip = $request->nip;
        $petugas->jabatan = $request->jabatan;

        // Hanya admin yang boleh mengubah role
        if (auth()->user()->role === 'admin') {
            $petugas->role = $request->role;
        }

        // Hanya update password jika diisi
        if ($request->filled('password')) {
            $petugas->password = bcrypt($request->password);
        }

        // Simpan hanya jika ada perubahan
        if ($petugas->isDirty()) {
            $petugas->save();
            Alert::success('Success', 'Data Admin Berhasil Diedit');
        } else {
            Alert::info('Info', 'Tidak ada perubahan yang dilakukan.');
        }

        return back();
    }
}
