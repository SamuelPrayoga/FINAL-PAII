<?php

namespace App\Http\Controllers;

use App\Models\agendarektor;
use Illuminate\Http\Request;
use App\Models\mahasiswaaktif;
use App\Models\dosenaktif;
use App\Models\dosentugas;
use App\Models\asrama;
use App\Models\pendaftar;
use Illuminate\Support\Facades\DB;
use App\Charts\PendaftarChart;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
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
