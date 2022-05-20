<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\agendarektor;

class EventController extends Controller
{
    public function index()
    {
        $agendarektor = agendarektor::all();
        return view('AgendaRektor', compact('agendarektor'));
    }

    public function showagendarektor()
    {
        $agendarektor = DB::table('agendarektor')->get();
        return view('Admin/dataagendarektor', ['agendarektor' => $agendarektor]);
    }
    public function tambahagendarektor()
    {
        return view('Admin/tambahagendarektor');
    }
    public function tambahagendarektors(Request $request)
    {
        $tambahagendarektors = new agendarektor();
        $tambahagendarektors->namakegiatan = $request->namakegiatan;
        $tambahagendarektors->penyelenggara = $request->penyelenggara;
        $tambahagendarektors->lokasi = $request->lokasi;
        $tambahagendarektors->tanggal = $request->tanggal;
        $tambahagendarektors->waktu = $request->waktu;
        $tambahagendarektors->status = $request->status;
        $tambahagendarektors->keterangan = $request->keterangan;
        $tambahagendarektors->save();
        return redirect('dataagendarektor');
    }
    public function editagendarektor($id)
    {
        $editagendarektor = agendarektor::find($id);

        return view('Admin.editagendarektor', compact('editagendarektor'));
    }
    public function updateagendarektor(Request $request, $id)
    {
        $update = agendarektor::find($id);

        $update->namakegiatan = $request->namakegiatan;
        $update->penyelenggara = $request->penyelenggara;
        $update->lokasi = $request->lokasi;
        $update->tanggal = $request->tanggal;
        $update->waktu = $request->waktu;
        $update->status = $request->status;
        $update->keterangan = $request->keterangan;
        $update->save();

        return redirect('dataagendarektor');
    }
    public function deleteagendarektor($id)
    {
        $deleteagendarektor = agendarektor::find($id);
        if ($deleteagendarektor->delete()) {
            return redirect()->back();
        }
    }
}
