<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\agendarektor;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\AgendaRektorExport;

class ConfirmController extends Controller
{
    public function index()
    {
        $agendarektor = agendarektor::all();
        $agendaterbaru = agendarektor::latest()->take(2)->get();
        return view('AgendaRektor', compact('agendarektor','agendaterbaru'));
    }

    public function editagendarektors($id)
    {
        $editagendarektors = agendarektor::find($id);

        return view('KonfirmasiAgenda', compact('editagendarektors'));
    }
    public function updateagendarektors(Request $request, $id)
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

        return redirect('AgendaRektor');
    }

    public function export_excel()
	{
		return Excel::download(new AgendaRektorExport, 'AgendaRektor.xlsx');
	}
}
