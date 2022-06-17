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
        $agendarektor = agendarektor::where('status', '=', 'Menunggu Konfirmasi')->get();
        $tahun = \App\Models\pendaftar::all();

        $categories =[];
        $data =[];
        foreach ($tahun as $thn){
            $categories[] = $thn->tahun;
            $data[] = $thn->jumlah_pendaftar;
        }

        //$thn1 = dosentugas::where('tahun','=','2017')->count();
        $tahuns = dosentugas::select(DB::raw('tahun, count(*) as jumlah'))->groupBy('tahun')->get();
        $categoriess =[];
        $datas =[];
        foreach($tahuns as $thns){
            $categoriess[] = $thns->tahun;
            $datas[] = $thns->jumlah;
        }

        //dd($data);
        //dd(json_encode($categories));
        return view('index',['mahasiswaaktif'=>$mahasiswaaktif,'dosenaktif'=>$dosenaktif,'dosentugas'=>$dosentugas,'asrama'=>$asrama,'agendarektor'=>$agendarektor,'categories'=>$categories,'data'=>$data,
        'categoriess'=>$categoriess,'datas'=>$datas]);
    }

}
