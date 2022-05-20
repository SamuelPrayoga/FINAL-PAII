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
        $agendarektor = agendarektor::latest()->take(5)->get();
        return view('index', compact('mahasiswaaktif', 'dosenaktif', 'dosentugas', 'asrama', 'agendarektor'));
    }
    //create function update in table agendarektor
    public function updatekehadiran (Request $request){
        //func update kehadiran
        DB::table('agendarektor')->where('id',$request->id)->updatekehadiran([
            //list update coloum kehadiran
            'status'=>$request->status,
        ]);
        return redirect('/home');
    }

}
