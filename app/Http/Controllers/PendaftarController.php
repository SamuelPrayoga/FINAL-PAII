<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\pendaftar;

class PendaftarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showpendaftar()
    {
        $pendaftar = DB::table('tbl_pendaftar')->get();
        return view('Admin/datapendaftar', ['pendaftar' => $pendaftar]);
    }
    public function tambahpendaftar()
    {
        return view('Admin/tambahpendaftar');
    }
    public function tambahpendaftars(Request $request)
    {
        $tambahpendaftars = new pendaftar();
        $tambahpendaftars->tahun = $request->tahun;
        $tambahpendaftars->program_studi = $request->program_studi;
        $tambahpendaftars->jumlah_pendaftar = $request->jumlah_pendaftar;
        $tambahpendaftars->save();
        return redirect('datapendaftar');
    }
    public function editpendaftar($pendaftar_id)
    {
        $editpendaftar = pendaftar::find($pendaftar_id);

        return view('Admin.editpendaftar', compact('editpendaftar'));
    }
    public function updatependaftar(Request $request, $pendaftar_id)
    {
        $update = pendaftar::find($pendaftar_id);

        $update->tahun = $request->tahun;
        $update->program_studi = $request->program_studi;
        $update->jumlah_pendaftar = $request->jumlah_pendaftar;
        $update->save();

        return redirect('datapendaftar');
    }
    public function deletependaftar($pendaftar_id)
    {
        $deletependaftar = pendaftar::find($pendaftar_id);
        if ($deletependaftar->delete()) {
            return redirect()->back();
        }
    }
}
