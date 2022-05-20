<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dosenaktif;
use App\Models\dosentugas;
use App\Models\staf;
use App\Models\asistendosen;
use App\Models\keasramaan;
use App\Models\pegawai;
use App\Models\mahasiswaaktif;
use App\Models\mahasiswaalumni;
use App\Models\listgedung;
use App\Models\kapasitasruangankelas;
use App\Models\kantin;
use App\Models\perumahandalam;
use App\Models\perumahanluar;
use App\Models\asrama;
use App\Models\rusun3;
use App\Models\komputer;
use App\Models\kendaraan;
use App\Models\lmebeler;
use App\Models\lalattulis;
use App\Models\laudiovisual;
use App\Models\lperalatan;
use App\Models\lpersediaan;
use App\Models\llab;
use App\Models\ljaringan;
use App\Models\lmaintanance;
use App\Models\ltaman;
use App\Models\dispmebeler;
use App\Models\dispalattulis;
use App\Models\dispaudio;
use App\Models\dispperalatan;
use App\Models\disppersediaan;
use App\Models\displab;
use App\Models\dispjaringan;
use App\Models\dispmaintanance;
use App\Models\disptaman;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DosenAktifExport;
use App\Exports\DosenTugasExport;
use App\Exports\StafExport;
use App\Exports\AsistenDosenExport;
use App\Exports\KantinExport;
use App\Exports\KeasramaanExport;
use App\Exports\PegawaiExport;
use App\Exports\MahasiswaAktifExport;
use App\Exports\MahasiswaAlumniExport;
use App\Exports\ListGedungExport;
use App\Exports\KapasitasRuanganKelasExport;
use App\Exports\PerumahanDalamExport;
use App\Exports\PerumahanLuarExport;
use App\Exports\AsramaExport;
use App\Exports\Rusun3Export;
use App\Exports\KomputerExport;
use App\Exports\KendaraanExport;
use App\Exports\MebelerExport;
use App\Exports\AlatTulisExport;
use App\Exports\AudioVisualExport;
use App\Exports\PeralatanExport;
use App\Exports\PersediaanExport;
use App\Exports\LaboratoriumExport;
use App\Exports\JaringanExport;
use App\Exports\MaintananceExport;
use App\Exports\TamanExport;
use App\Exports\DisposalMebelerExport;
use App\Exports\DisposalAlatTulisExport;
use App\Exports\DisposalAudioVisualExport;
use App\Exports\DisposalPeralatanExport;
use App\Exports\DisposalPersediaanExport;
use App\Exports\DisposalLaboratoriumExport;
use App\Exports\DisposalJaringanExport;
use App\Exports\DisposalMaintananceExport;
use App\Exports\DisposalTamanExport;


class usercontroller extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexdosenaktif()
    {
        $dosenaktif = dosenaktif::all();
        return view('DosenAktif', compact('dosenaktif'));
    }
    public function export_excel()
	{
		return Excel::download(new DosenAktifExport, 'DataDosenAktif.xlsx');
	}
    /*public function export_pdf(){
        $data = mahasiswaaktif::limit(20)->get();
        $pdf = PDF::loadView('mahasiswaaktif-pdf', compact('data'));
        $pdf->setPaper('A4','portrait');
        return $pdf->stream('mahasiswaaktif.pdf');
    }*/
    ////////////////////////////////////////////////////////////////////////////////
    public function indexdosentugas()
    {
        $dosentugas = dosentugas::all();
        return view('DosenTugasBelajar', compact('dosentugas'));
    }
    public function export_excel1()
	{
		return Excel::download(new DosenTugasExport, 'DataDosenTugasBelajar.xlsx');
	}
    ////////////////////////////////////////////////////////////////////////////////
    public function indexstaf()
    {
        $staf = staf::all();
        return view('Staff', compact('staf'));
    }
    public function export_excel2()
	{
		return Excel::download(new StafExport, 'DataStaff.xlsx');
	}
    ////////////////////////////////////////////////////////////////////////////////
    public function indexasistendosen()
    {
        $asistendosen = asistendosen::all();
        return view('AsistenDosen', compact('asistendosen'));
    }
    public function export_excel3()
	{
		return Excel::download(new AsistenDosenExport, 'DataAsistenDosen.xlsx');
	}
    ////////////////////////////////////////////////////////////////////////////////
    public function indexkeasramaan()
    {
        $keasramaan = keasramaan::all();
        return view('Keasramaan', compact('keasramaan'));
    }
    public function export_excel4()
	{
		return Excel::download(new KeasramaanExport, 'DataKeasramaan.xlsx');
	}
    /////////////////////////////////////////////////////////////////////////////////
    public function indexpegawai()
    {
        $pegawai = pegawai::all();
        return view('Pegawai', compact('pegawai'));
    }
    public function export_excel5()
	{
		return Excel::download(new PegawaiExport, 'DataPegawai.xlsx');
	}
    /////////////////////////////////////////////////////////////////////////////////
    public function indexmahasiswaaktif()
    {
        $mahasiswaaktif = mahasiswaaktif::all();

        return view('MahasiswaAktif', compact('mahasiswaaktif'));
    }
    public function export_excel6()
	{
		return Excel::download(new MahasiswaAktifExport, 'DataMahasiswaAktif.xlsx');
	}
    /////////////////////////////////////////////////////////////////////////////////
    public function indexmahasiswaalumni()
    {
        $mahasiswaalumni = mahasiswaalumni::all();
        return view('MahasiswaAlumni', compact('mahasiswaalumni'));
    }
    public function export_excel7()
	{
		return Excel::download(new MahasiswaAlumniExport, 'DataMahasiswaAlumni.xlsx');
	}
    /////////////////////////////////////////////////////////////////////////////////
    public function indexlistgedung()
    {
        $listgedung = listgedung::all();
        return view('ListGedung', compact('listgedung'));
    }
    public function export_excel8()
	{
		return Excel::download(new ListGedungExport, 'DataListGedung.xlsx');
	}
    //////////////////////////////////////////////////////////////////////////////////
    public function indexkapasitasruangankelas()
    {
        $kapasitasruangankelas = kapasitasruangankelas::all();
        return view('KapasitasRuangKelas', compact('kapasitasruangankelas'));
    }
    public function export_excel9()
	{
		return Excel::download(new KapasitasRuanganKelasExport, 'DataKapasitasRuanganKelas.xlsx');
	}
    ///////////////////////////////////////////////////////////////////////////////////
    public function indexkantin()
    {
        $kantin = kantin::all();
        return view('Kantin', compact('kantin'));
    }
    public function export_excel10()
	{
		return Excel::download(new KantinExport, 'DataKantin.xlsx');
	}
    ///////////////////////////////////////////////////////////////////////////////////
    public function indexperumahanluar()
    {
        $perumahanluar = perumahanluar::all();
        return view('PerumahanLuar', compact('perumahanluar'));
    }
    public function export_excel11()
	{
		return Excel::download(new PerumahanLuarExport, 'DataPerumahanLuar.xlsx');
	}
    ///////////////////////////////////////////////////////////////////////////////////
    public function indexperumahandalam()
    {
        $perumahandalam = perumahandalam::all();
        return view('PerumahanDalam', compact('perumahandalam'));
    }
    public function export_excel12()
	{
		return Excel::download(new PerumahanDalamExport, 'Data Perumahan Dalam.xlsx');
	}
    ///////////////////////////////////////////////////////////////////////////////////
    public function indexasrama()
    {
        $asrama = asrama::all();
        return view('Asrama', compact('asrama'));
    }
    public function export_excel13()
	{
		return Excel::download(new AsramaExport, 'Data Asrama.xlsx');
	}
    ///////////////////////////////////////////////////////////////////////////////////
    public function indexrusun3()
    {
        $rusun3 = rusun3::all();
        return view('Rusun3', compact('rusun3'));
    }
    public function export_excel14()
	{
		return Excel::download(new Rusun3Export, 'DataRusunawa 3.xlsx');
	}
    ////////////////////////////////////////////////////////////////////////////////////
    public function indexkomputer()
    {
        $komputer = komputer::all();
        return view('Komputer', compact('komputer'));
    }

    public function export_excel15()
	{
		return Excel::download(new KomputerExport, 'Data Komputer.xlsx');
	}
    //////////////////////////////////////////////////////////////////////////////////////
    public function indexkendaraan()
    {
        $kendaraan = kendaraan::all();
        return view('Kendaraan', compact('kendaraan'));
    }
    public function export_excel16()
	{
		return Excel::download(new KendaraanExport, 'Data Kendaraan Kampus.xlsx');
	}
    ///////////////////////////////////////////////////////////////////////////////////////
    public function indexmebeler()
    {
        $mebeler = lmebeler::all();
        return view('Mebeler', compact('mebeler'));
    }
    public function export_excel17()
	{
		return Excel::download(new MebelerExport, 'Data Penambahan Aset Mebeler.xlsx');
	}
    ////////////////////////////////////////////////////////////////////////////////////////
    public function indexalattulis()
    {
        $alattulis = lalattulis::all();
        return view('AlatTulis', compact('alattulis'));
    }
    public function export_excel18()
	{
		return Excel::download(new AlatTulisExport, 'Data Penambahan Aset Alat Tulis,PC,Notebook.xlsx');
	}
    /////////////////////////////////////////////////////////////////////////////////////////
    public function indexaudiovisual()
    {
        $audiovisual = laudiovisual::all();
        return view('AudioVisual', compact('audiovisual'));
    }
    public function export_excel19()
	{
		return Excel::download(new AudioVisualExport, 'Data Penambahan Aset Audio Visual.xlsx');
	}
    ///////////////////////////////////////////////////////////////////////////////////////////
    public function indexperalatan()
    {
        $peralatan = lperalatan::all();
        return view('PeralatanRumahTangga', compact('peralatan'));
    }
    public function export_excel20()
	{
		return Excel::download(new PeralatanExport, 'Data Penambahan Aset Peralatan Rumah Tangga.xlsx');
	}
    ////////////////////////////////////////////////////////////////////////////////////////////
    public function indexpersediaan()
    {
        $persediaan = lpersediaan::all();
        return view('PersediaanKampus', compact('persediaan'));
    }
    public function export_excel21()
	{
		return Excel::download(new PersediaanExport, 'Data Penambahan Aset Persediaan Kampus.xlsx');
	}
    /////////////////////////////////////////////////////////////////////////////////////////////
    public function indexalatlab()
    {
        $alatlab = llab::all();
        return view('AlatLaboratorium', compact('alatlab'));
    }
    public function export_excel22()
	{
		return Excel::download(new LaboratoriumExport, 'Data Penambahan Aset Alat-Alat Laboratorium.xlsx');
	}
    /////////////////////////////////////////////////////////////////////////////////////////////
    public function indexjaringan()
    {
        $jaringan = ljaringan::all();
        return view('Jaringan', compact('jaringan'));
    }
    public function export_excel23()
	{
		return Excel::download(new JaringanExport, 'Data Penambahan Aset Jaringan.xlsx');
	}
    ///////////////////////////////////////////////////////////////////////////////////////////////
    public function indexmaintanance()
    {
        $maintanance = lmaintanance::all();
        return view('PerlengkapanMaintanance', compact('maintanance'));
    }
    public function export_excel24()
	{
		return Excel::download(new MaintananceExport, 'Data Penambahan Aset Perlengkapan Maintanance.xlsx');
	}
    ///////////////////////////////////////////////////////////////////////////////////////////////
    public function indextaman()
    {
        $taman = ltaman::all();
        return view('PerlengkapanTaman', compact('taman'));
    }
    public function export_excel25()
	{
		return Excel::download(new TamanExport, 'Data Penambahan Aset PerlengkapanTaman.xlsx');
	}

    //DISPOSAL
    public function indexdispmebeler()
    {
        $dispmebeler = dispmebeler::all();
        return view('DisposalMebeler', compact('dispmebeler'));
    }
    public function export_excel26()
	{
		return Excel::download(new DisposalMebelerExport, 'Data Disposal Aset Mebeler.xlsx');
	}
    ////////////////////////////////////////////////////////////////////////////////////////////////////
    public function indexdispalattulis()
    {
        $dispalattulis = dispalattulis::all();
        return view('DisposalAlatTulis', compact('dispalattulis'));
    }
    public function export_excel27()
	{
		return Excel::download(new DisposalAlatTulisExport, 'Data Disposal Aset Alat Tulis,PC,Notebook.xlsx');
	}
    ////////////////////////////////////////////////////////////////////////////////////////////////////
    public function indexdispaudiovisual()
    {
        $dispaudiovisual = dispaudio::all();
        return view('DisposalAudioVisual', compact('dispaudiovisual'));
    }
    public function export_excel28()
	{
		return Excel::download(new DisposalAudioVisualExport, 'Data Disposal Aset Audio Visual.xlsx');
	}
    ////////////////////////////////////////////////////////////////////////////////////////////////////
    public function indexdispperalatan()
    {
        $dispperalatan = dispperalatan::all();
        return view('DisposalPeralatanRumahTangga', compact('dispperalatan'));
    }
    public function export_excel29()
	{
		return Excel::download(new DisposalPeralatanExport, 'Data Disposal Aset Perlatan Rumah Tangga.xlsx');
	}
    ////////////////////////////////////////////////////////////////////////////////////////////////////
    public function indexdisppersediaan()
    {
        $disppersediaan = disppersediaan::all();
        return view('DisposalPersediaanKampus', compact('disppersediaan'));
    }
    public function export_excel30()
	{
		return Excel::download(new DisposalPersediaanExport, 'Data Disposal Aset Persediaan Kampus.xlsx');
	}
    ////////////////////////////////////////////////////////////////////////////////////////////////////
    public function indexdispalatlab()
    {
        $dispalatlab = displab::all();
        return view('DisposalAlatLaboratorium', compact('dispalatlab'));
    }
    public function export_excel31()
	{
		return Excel::download(new DisposalLaboratoriumExport, 'Data Disposal Aset Laboratorium.xlsx');
	}
    ////////////////////////////////////////////////////////////////////////////////////////////////////
    public function indexdispjaringan()
    {
        $dispjaringan = dispjaringan::all();
        return view('DisposalJaringan', compact('dispjaringan'));
    }
    public function export_excel32()
	{
		return Excel::download(new DisposalJaringanExport, 'Data Disposal Aset Jaringan.xlsx');
	}
    ////////////////////////////////////////////////////////////////////////////////////////////////////
    public function indexdispmaintanance()
    {
        $dispmaintanance = dispmaintanance::all();
        return view('DisposalPerlengkapanMaintanance', compact('dispmaintanance'));
    }
    public function export_excel33()
	{
		return Excel::download(new DisposalMaintananceExport, 'Data Disposal Aset Perlengkapan Maintanance.xlsx');
	}
    ////////////////////////////////////////////////////////////////////////////////////////////////////
    public function indexdisptaman()
    {
        $disptaman = disptaman::all();
        return view('DisposalPerlengkapanTaman', compact('disptaman'));
    }
    public function export_excel34()
	{
		return Excel::download(new DisposalTamanExport, 'Data Disposal Aset Perlengkapan Taman.xlsx');
	}
    ////////////////////////////////////////////////////////////////////////////////////////////////////

}
