<?php

namespace App\Http\Controllers;

use App\Models\OPS;
use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ExportController extends Controller
{
    public function index() {
        $ops = OPS::with('petugas')->get();
            return view('Index', compact('ops'));
    }
}
