<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\inputKasus;


class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:Admin|User|Ahli|Mutu']);
    }

    public function index()
    {
            $dataKasus = DB::connection('mysql2')->table('kasus')->count();
            $belumProses = inputKasus::where('status_id', 1)->count();
            $sedangProses = inputKasus::where('status_id', 2)->count();
            $selesai = inputKasus::where('status_id', 3)->count();

            return view('account.dashboard.home', compact('dataKasus', 'belumProses', 'belumProses', 'sedangProses', 'selesai'));
    }
}
