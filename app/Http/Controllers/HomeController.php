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
        $agendarektor = agendarektor::latest()->take(5)->get();

        //create function show data from pendaftar model show to chart
        /*$users = pendaftar::select(\DB::raw("COUNT(*) as count"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(\DB::raw("Month(created_at)"))
            ->pluck('count');

        $chart = new PendaftarChart;
        $chart->labels(['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']);
        $chart->dataset('New User Register Chart', 'line', $users)->options([
            'fill' => 'true',
            'borderColor' => '#51C1C0'
        ]);*/

        return view('index', compact('mahasiswaaktif', 'dosenaktif', 'dosentugas', 'asrama', 'agendarektor'));
    }
    //create function update in table agendarektor
    public function updatekehadiran(Request $request)
    {
        //func update kehadiran
        DB::table('agendarektor')->where('id', $request->id)->updatekehadiran([
            //list update coloum kehadiran
            'status' => $request->status,
        ]);
        return redirect('/home');
    }
}
