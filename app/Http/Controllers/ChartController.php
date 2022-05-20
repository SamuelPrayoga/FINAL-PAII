<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function chart()
    {
        $pendaftar = \DB::table('tbl_pendaftar')
            ->where('program_studi', '=', 'Infosys')
            ->orderBy('tahun', 'ASC')
            ->get();
            return response()->json($pendaftar);
            return view('index', compact('pendaftar'));
    }
}
