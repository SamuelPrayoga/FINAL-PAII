<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\mahasiswaaktif;
use App\Models\dosenaktif;
use App\Models\dosentugas;
use App\Models\asrama;
use App\Models\agendarektor;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $mahasiswaaktif = mahasiswaaktif::count();
        $dosenaktif = dosenaktif::count();
        $dosentugas = dosentugas::count();
        $asrama = asrama::count();
        $agendarektor = agendarektor::latest()->take(10)->get();
        return view('index', compact('mahasiswaaktif', 'dosenaktif', 'dosentugas', 'asrama','agendarektor'));
    }

}
