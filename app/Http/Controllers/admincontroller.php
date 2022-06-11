<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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




class admincontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showdosenaktif()
    {
        $dosenaktif = DB::table('dosenaktif')->get();
        return view('Admin/datadosenaktif', ['dosenaktif' => $dosenaktif]);
    }
    public function tambahdosenaktif()
    {
        return view('Admin/tambahdosenaktif');
    }
    public function tambahdosenaktifs(Request $request)
    {
        $tambahdosenaktifs = new dosenaktif();
        $tambahdosenaktifs->namaDosen = $request->namaDosen;
        $tambahdosenaktifs->nidn = $request->nidn;
        $tambahdosenaktifs->prodi = $request->prodi;
        $tambahdosenaktifs->jabatanAkademik = $request->jabatanAkademik;
        $tambahdosenaktifs->golonganKepangkatan = $request->golonganKepangkatan;
        $tambahdosenaktifs->statusIkatan = $request->statusIkatan;
        $tambahdosenaktifs->aktifStart = $request->aktifStart;
        $tambahdosenaktifs->aktifEnd = $request->aktifEnd;
        $tambahdosenaktifs->save();
        return redirect('datadosenaktif');
    }
    public function editdosenaktif($nidn)
    {
        $editdosenaktif = dosenaktif::find($nidn);

        return view('Admin.editdosenaktif', compact('editdosenaktif'));
    }
    public function updatedosenaktif(Request $request, $nidn)
    {
        $update = dosenaktif::find($nidn);

        $update->namaDosen = $request->namaDosen;
        $update->nidn = $request->nidn;
        $update->prodi = $request->prodi;
        $update->jabatanAkademik = $request->jabatanAkademik;
        $update->golonganKepangkatan = $request->golonganKepangkatan;
        $update->statusIkatan = $request->statusIkatan;
        $update->aktifStart = $request->aktifStart;
        $update->aktifEnd = $request->aktifEnd;
        $update->save();

        return redirect('datadosenaktif');
    }
    public function deletedosenaktif($nidn)
    {
        $deletedosenaktif = dosenaktif::find($nidn);
        if ($deletedosenaktif->delete()) {
            return redirect()->back();
        }
    }

    //DOSEN TUGAS BELAJAR
    public function showdosentugas()
    {
        $dosentugas = DB::table('dosentugas')->get();
        return view('Admin/datadosentugas', ['dosentugas' => $dosentugas]);
    }
    public function tambahdosentugas()
    {
        return view('Admin/tambahdosentugas');
    }
    public function tambahdosentugass(Request $request)
    {
        $tambahdosentugass = new dosentugas();
        $tambahdosentugass->namaDosen = $request->namaDosen;
        $tambahdosentugass->nidn = $request->nidn;
        $tambahdosentugass->prodi = $request->prodi;
        $tambahdosentugass->lokasi = $request->lokasi;
        $tambahdosentugass->program = $request->program;
        $tambahdosentugass->programStudi = $request->programStudi;
        $tambahdosentugass->mulaiTugas = $request->mulaiTugas;
        $tambahdosentugass->tahun = $request->tahun;
        $tambahdosentugass->rencanaAktif = $request->rencanaAktif;
        $tambahdosentugass->save();
        return redirect('datadosentugas');
    }
    public function editdosentugas($id)
    {
        $editdosentugas = dosentugas::find($id);

        return view('Admin.editdosentugas', compact('editdosentugas'));
    }
    public function updatedosentugas(Request $request, $id)
    {
        $update = dosentugas::find($id);

        $update->namaDosen = $request->namaDosen;
        $update->nidn = $request->nidn;
        $update->prodi = $request->prodi;
        $update->lokasi = $request->lokasi;
        $update->program = $request->program;
        $update->programStudi = $request->programStudi;
        $update->mulaiTugas = $request->mulaiTugas;
        $update->tahun = $request->tahun;
        $update->rencanaAktif = $request->rencanaAktif;
        $update->save();

        return redirect('datadosentugas');
    }
    public function deletedosentugas($id)
    {
        $deletedosentugas = dosentugas::find($id);
        if ($deletedosentugas->delete()) {
            return redirect()->back();
        }
    }

    //DATA STAFF
    public function showstaf()
    {
        $staf = DB::table('staf')->get();
        return view('Admin/datastaf', ['staf' => $staf]);
    }
    public function tambahstaf()
    {
        return view('Admin/tambahstaf');
    }
    public function tambahstafs(Request $request)
    {
        $tambahstafs = new staf();
        $tambahstafs->stafID = $request->stafID;
        $tambahstafs->namastaf = $request->namastaf;
        $tambahstafs->bagian = $request->bagian;
        $tambahstafs->jabatan = $request->jabatan;
        $tambahstafs->jabatan = $request->jabatan;
        $tambahstafs->pendidikan = $request->pendidikan;
        $tambahstafs->aktifstart = $request->aktifstart;
        $tambahstafs->aktifend = $request->aktifend;

        $tambahstafs->save();
        return redirect('datastaf');
    }
    public function editstaf($id)
    {
        $editstaf = staf::find($id);

        return view('Admin.editstaf', compact('editstaf'));
    }
    public function updatestaf(Request $request, $id)
    {
        $update = staf::find($id);

        $update->stafID = $request->stafID;
        $update->namastaf = $request->namastaf;
        $update->bagian = $request->bagian;
        $update->jabatan = $request->jabatan;
        $update->pendidikan = $request->pendidikan;
        $update->aktifstart = $request->aktifstart;
        $update->aktifend = $request->aktifend;
        $update->save();

        return redirect('datastaf');
    }

    public function deletestaf($id)
    {
        $deletestaf = staf::find($id);
        if ($deletestaf->delete()) {
            return redirect()->back();
        }
    }

    //DATA ASISTEN DOSEN
    public function showasistendosen()
    {
        $asistendosen = DB::table('asistendosen')->get();
        return view('Admin/dataasistendosen', ['asistendosen' => $asistendosen]);
    }
    public function tambahasistendosen()
    {
        return view('Admin/tambahasistendosen');
    }
    public function tambahasistendosens(Request $request)
    {
        $tambahasistendosens = new asistendosen();
        $tambahasistendosens->namaasdos = $request->namaasdos;
        $tambahasistendosens->asdosID = $request->asdosID;
        $tambahasistendosens->matakuliah = $request->matakuliah;
        $tambahasistendosens->fakultas = $request->fakultas;
        $tambahasistendosens->prodi = $request->prodi;
        $tambahasistendosens->pendidikan = $request->pendidikan;
        $tambahasistendosens->tahun = $request->tahun;
        $tambahasistendosens->aktifstart = $request->aktifstart;
        $tambahasistendosens->aktifend = $request->aktifend;
        $tambahasistendosens->save();
        return redirect('dataasistendosen');
    }
    public function editasistendosen($id)
    {
        $editasistendosen = asistendosen::find($id);

        return view('Admin.editasistendosen', compact('editasistendosen'));
    }
    public function updateasistendosen(Request $request, $id)
    {
        $update = asistendosen::find($id);

        $update->namaasdos = $request->namaasdos;
        $update->asdosID = $request->asdosID;
        $update->matakuliah = $request->matakuliah;
        $update->fakultas = $request->fakultas;
        $update->prodi = $request->prodi;
        $update->pendidikan = $request->pendidikan;
        $update->tahun = $request->tahun;
        $update->aktifstart = $request->aktifstart;
        $update->aktifend = $request->aktifend;
        $update->save();

        return redirect('dataasistendosen');
    }
    public function deleteasistendosen($id)
    {
        $deleteasistendosen = asistendosen::find($id);
        if ($deleteasistendosen->delete()) {
            return redirect()->back();
        }
    }

    //DATA KEASRAMAAN
    public function showkeasramaan()
    {
        $keasramaan = DB::table('keasramaan')->get();
        return view('Admin/datakeasramaan', ['keasramaan' => $keasramaan]);
    }
    public function tambahkeasramaan()
    {
        return view('Admin/tambahkeasramaan');
    }
    public function tambahkeasramaans(Request $request)
    {
        $tambahkeasramaans = new keasramaan();
        $tambahkeasramaans->nama = $request->nama;
        $tambahkeasramaans->keasramaanID = $request->keasramaanID;
        $tambahkeasramaans->pendidikan = $request->pendidikan;
        $tambahkeasramaans->jabatan = $request->jabatan;
        $tambahkeasramaans->asrama = $request->asrama;
        $tambahkeasramaans->asal = $request->asal;
        $tambahkeasramaans->notelp = $request->notelp;
        $tambahkeasramaans->aktifstart = $request->aktifstart;
        $tambahkeasramaans->aktifend = $request->aktifend;
        $tambahkeasramaans->save();
        return redirect('datakeasramaan');
    }
    public function editkeasramaan($id)
    {
        $editkeasramaan = keasramaan::find($id);

        return view('Admin.editkeasramaan', compact('editkeasramaan'));
    }
    public function updatekeasramaan(Request $request, $id)
    {
        $update = keasramaan::find($id);

        $update->nama = $request->nama;
        $update->keasramaanID = $request->keasramaanID;
        $update->pendidikan = $request->pendidikan;
        $update->jabatan = $request->jabatan;
        $update->asrama = $request->asrama;
        $update->asal = $request->asal;
        $update->notelp = $request->notelp;
        $update->aktifstart = $request->aktifstart;
        $update->aktifend = $request->aktifend;
        $update->save();

        return redirect('datakeasramaan');
    }
    public function deletekeasramaan($id)
    {
        $deletekeasramaan = keasramaan::find($id);
        if ($deletekeasramaan->delete()) {
            return redirect()->back();
        }
    }


    //DATA PEGAWAI
    public function showpegawai()
    {
        $pegawai = DB::table('pegawai')->get();
        return view('Admin/datapegawai', ['pegawai' => $pegawai]);
    }
    public function tambahpegawai()
    {
        return view('Admin/tambahpegawai');
    }
    public function tambahpegawais(Request $request)
    {
        $tambahpegawais = new pegawai();
        $tambahpegawais->nama = $request->nama;
        $tambahpegawais->pegawaiID = $request->pegawaiID;
        $tambahpegawais->bagian = $request->bagian;
        $tambahpegawais->jabatan = $request->jabatan;
        $tambahpegawais->pendidikan = $request->pendidikan;
        $tambahpegawais->alamat = $request->alamat;
        $tambahpegawais->notelp = $request->notelp;
        $tambahpegawais->aktifstart = $request->aktifstart;
        $tambahpegawais->aktifend = $request->aktifend;
        $tambahpegawais->save();
        return redirect('datapegawai');
    }
    public function editpegawai($id)
    {
        $editpegawai = pegawai::find($id);

        return view('Admin.editpegawai', compact('editpegawai'));
    }
    public function updatepegawai(Request $request, $id)
    {
        $update = pegawai::find($id);

        $update->nama = $request->nama;
        $update->pegawaiID = $request->pegawaiID;
        $update->bagian = $request->bagian;
        $update->jabatan = $request->jabatan;
        $update->pendidikan = $request->pendidikan;
        $update->alamat = $request->alamat;
        $update->notelp = $request->notelp;
        $update->aktifstart = $request->aktifstart;
        $update->aktifend = $request->aktifend;
        $update->save();

        return redirect('datapegawai');
    }
    public function deletepegawai($id)
    {
        $deletepegawai = pegawai::find($id);
        if ($deletepegawai->delete()) {
            return redirect()->back();
        }
    }

    //DATA MAHASISWA AKTIF
    public function showmahasiswaaktif()
    {
        $mahasiswaaktif = DB::table('mahasiswaaktif')->get();
        return view('Admin/datamahasiswaaktif', ['mahasiswaaktif' => $mahasiswaaktif]);
    }
    public function tambahmahasiswaaktif()
    {
        return view('Admin/tambahmahasiswaaktif');
    }
    public function tambahmahasiswaaktifs(Request $request)
    {
        $tambahmahasiswaaktifs = new mahasiswaaktif();
        $tambahmahasiswaaktifs->nama = $request->nama;
        $tambahmahasiswaaktifs->nim = $request->nim;
        $tambahmahasiswaaktifs->fakultas = $request->fakultas;
        $tambahmahasiswaaktifs->prodi = $request->prodi;
        $tambahmahasiswaaktifs->kelas = $request->kelas;
        $tambahmahasiswaaktifs->angkatan = $request->angkatan;
        $tambahmahasiswaaktifs->jalurmasuk = $request->jalurmasuk;
        $tambahmahasiswaaktifs->notelp = $request->notelp;
        $tambahmahasiswaaktifs->emailaktif = $request->emailaktif;
        $tambahmahasiswaaktifs->dosenwali = $request->dosenwali;
        $tambahmahasiswaaktifs->save();
        return redirect('datamahasiswaaktif');
    }
    public function editmahasiswaaktif($id)
    {
        $editmahasiswaaktif = mahasiswaaktif::find($id);

        return view('Admin.editmahasiswaaktif', compact('editmahasiswaaktif'));
    }
    public function updatemahasiswaaktif(Request $request, $id)
    {
        $update = mahasiswaaktif::find($id);

        $update->nama = $request->nama;
        $update->nim = $request->nim;
        $update->prodi = $request->prodi;
        $update->kelas = $request->kelas;
        $update->angkatan = $request->angkatan;
        $update->jalurmasuk = $request->jalurmasuk;
        $update->notelp = $request->notelp;
        $update->emailaktif = $request->emailaktif;
        $update->dosenwali = $request->dosenwali;
        $update->save();

        return redirect('datamahasiswaaktif');
    }
    public function deletemahasiswaaktif($id)
    {
        $deletemahasiswaaktif = mahasiswaaktif::find($id);
        if ($deletemahasiswaaktif->delete()) {
            return redirect()->back();
        }
    }

    //DATA MAHASISWA ALUMNI
    public function showmahasiswaalumni()
    {
        $mahasiswaalumni = DB::table('mahasiswaalumni')->get();
        return view('Admin/datamahasiswaalumni', ['mahasiswaalumni' => $mahasiswaalumni]);
    }
    public function tambahmahasiswaalumni()
    {
        return view('Admin/tambahmahasiswaalumni');
    }
    public function tambahmahasiswaalumnis(Request $request)
    {
        $tambahmahasiswaalumnis = new mahasiswaalumni();
        $tambahmahasiswaalumnis->nama = $request->nama;
        $tambahmahasiswaalumnis->nim = $request->nim;
        $tambahmahasiswaalumnis->fakultas = $request->fakultas;
        $tambahmahasiswaalumnis->prodi = $request->prodi;
        $tambahmahasiswaalumnis->angkatan = $request->angkatan;
        $tambahmahasiswaalumnis->lulus = $request->lulus;
        $tambahmahasiswaalumnis->notelp = $request->notelp;
        $tambahmahasiswaalumnis->lokasikerja = $request->lokasikerja;
        $tambahmahasiswaalumnis->posisi = $request->posisi;
        $tambahmahasiswaalumnis->save();
        return redirect('datamahasiswaalumni');
    }
    public function editmahasiswaalumni($nim)
    {
        $editmahasiswaalumni = mahasiswaalumni::find($nim);

        return view('Admin.editmahasiswaalumni', compact('editmahasiswaalumni'));
    }
    public function updatemahasiswaalumni(Request $request, $nim)
    {
        $update = mahasiswaalumni::find($nim);

        $update->nama = $request->nama;
        $update->nim = $request->nim;
        $update->fakultas = $request->fakultas;
        $update->prodi = $request->prodi;
        $update->angkatan = $request->angkatan;
        $update->lulus = $request->lulus;
        $update->notelp = $request->notelp;
        $update->lokasikerja = $request->lokasikerja;
        $update->posisi = $request->posisi;
        $update->save();

        return redirect('datamahasiswaalumni');
    }
    public function deletemahasiswaalumni($nim)
    {
        $deletemahasiswaalumni = mahasiswaalumni::find($nim);
        if ($deletemahasiswaalumni->delete()) {
            return redirect()->back();
        }
    }

    //DATA LIST GEDUNG
    public function showlistgedung()
    {
        $listgedung = DB::table('listgedung')->get();
        return view('Admin/datalistgedung', ['listgedung' => $listgedung]);
    }
    public function tambahlistgedung()
    {
        return view('Admin/tambahlistgedung');
    }
    public function tambahlistgedungs(Request $request)
    {
        $tambahlistgedungs = new listgedung();
        $tambahlistgedungs->namagedung = $request->namagedung;
        $tambahlistgedungs->penomoran = $request->penomoran;
        $tambahlistgedungs->namaruangan = $request->namaruangan;
        $tambahlistgedungs->kapasitasruangan = $request->kapasitasruangan;
        $tambahlistgedungs->lokasimeja = $request->lokasimeja;
        $tambahlistgedungs->namapemakai = $request->namapemakai;
        $tambahlistgedungs->terisi = $request->terisi;
        $tambahlistgedungs->ketersediaan = $request->ketersediaan;
        $tambahlistgedungs->keterangan = $request->keterangan;
        $tambahlistgedungs->save();
        return redirect('datalistgedung');
    }
    public function editlistgedung($gedungid)
    {
        $editlistgedung = listgedung::find($gedungid);

        return view('Admin.editlistgedung', compact('editlistgedung'));
    }
    public function updatelistgedung(Request $request, $gedungid)
    {
        $update = listgedung::find($gedungid);

        $update->namagedung = $request->namagedung;
        $update->penomoran = $request->penomoran;
        $update->namagedung = $request->namagedung;
        $update->namaruangan = $request->namaruangan;
        $update->kapasitasruangan = $request->kapasitasruangan;
        $update->lokasimeja = $request->lokasimeja;
        $update->namapemakai = $request->namapemakai;
        $update->terisi = $request->terisi;
        $update->ketersediaan = $request->ketersediaan;
        $update->keterangan = $request->keterangan;
        $update->save();

        return redirect('datalistgedung');
    }
    public function deletelistgedung($gedungid)
    {
        $deletelistgedung = listgedung::find($gedungid);
        if ($deletelistgedung->delete()) {
            return redirect()->back();
        }
    }

    //DATA KAPASITAS RUANGAN KELAS
    public function showkapasitasruangankelas()
    {
        $kapasitasruangankelas = DB::table('kapasitasruangankelas')->get();
        return view('Admin/datakapasitasruangankelas', ['kapasitasruangankelas' => $kapasitasruangankelas]);
    }
    public function tambahkapasitasruangankelas()
    {
        return view('Admin/tambahkapasitasruangankelas');
    }
    public function tambahkapasitasruangankelass(Request $request)
    {
        $tambahkapasitasruangankelass = new kapasitasruangankelas();
        $tambahkapasitasruangankelass->id = $request->id;
        $tambahkapasitasruangankelass->ruangan = $request->ruangan;
        $tambahkapasitasruangankelass->keterangan = $request->keterangan;
        $tambahkapasitasruangankelass->luas = $request->luas;
        $tambahkapasitasruangankelass->kapasitasnormal = $request->kapasitasnormal;
        $tambahkapasitasruangankelass->perkiraan = $request->perkiraan;
        $tambahkapasitasruangankelass->save();
        return redirect('datakapasitasruangankelas');
    }
    public function editkapasitasruangankelas($id)
    {
        $editkapasitasruangankelas = kapasitasruangankelas::find($id);

        return view('Admin.editkapasitasruangankelas', compact('editkapasitasruangankelas'));
    }
    public function updatekapasitasruangankelas(Request $request, $id)
    {
        $update = kapasitasruangankelas::find($id);

        $update->id = $request->id;
        $update->ruangan = $request->ruangan;
        $update->keterangan = $request->keterangan;
        $update->luas = $request->luas;
        $update->kapasitasnormal = $request->kapasitasnormal;
        $update->perkiraan = $request->perkiraan;
        $update->save();

        return redirect('datakapasitasruangankelas');
    }
    public function deletekapasitasruangankelas($id)
    {
        $deletekapasitasruangankelas = kapasitasruangankelas::find($id);
        if ($deletekapasitasruangankelas->delete()) {
            return redirect()->back();
        }
    }

    //DATA KANTIN
    public function showkantin()
    {
        $kantin = DB::table('kantin')->get();
        return view('Admin/datakantin', ['kantin' => $kantin]);
    }
    public function tambahkantin()
    {
        return view('Admin/tambahkantin');
    }
    public function tambahkantins(Request $request)
    {
        $tambahkantins = new kantin();
        $tambahkantins->kantinID = $request->kantinID;
        $tambahkantins->namaperumahan = $request->namaperumahan;
        $tambahkantins->jumlahmeja = $request->jumlahmeja;
        $tambahkantins->kapasitas = $request->kapasitas;
        $tambahkantins->jumlah = $request->jumlah;

        $tambahkantins->save();
        return redirect('datakantin');
    }
    public function editkantin($kantinID)
    {
        $editkantin = kantin::find($kantinID);

        return view('Admin.editkantin', compact('editkantin'));
    }
    public function updatekantin(Request $request, $kantinID)
    {
        $update = kantin::find($kantinID);

        $update->kantinID = $request->kantinID;
        $update->namaperumahan = $request->namaperumahan;
        $update->jumlahmeja = $request->jumlahmeja;
        $update->kapasitas = $request->kapasitas;
        $update->jumlah = $request->jumlah;
        $update->save();

        return redirect('datakantin');
    }
    public function deletekantin($kantinID)
    {
        $deletekantin = kantin::find($kantinID);
        if ($deletekantin->delete()) {
            return redirect()->back();
        }
    }

    //DATA PERUMAHAN DALAM
    public function showperumahandalam()
    {
        $perumahandalam = DB::table('perumahandalam')->get();
        return view('Admin/dataperumahandalam', ['perumahandalam' => $perumahandalam]);
    }
    public function tambahperumahandalam()
    {
        return view('Admin/tambahperumahandalam');
    }
    public function tambahperumahandalams(Request $request)
    {
        $tambahperumahandalams = new perumahandalam();
        $tambahperumahandalams->id = $request->id;
        $tambahperumahandalams->namaperumahan = $request->namaperumahan;
        $tambahperumahandalams->namapenghuni = $request->namapenghuni;
        $tambahperumahandalams->jabatan = $request->jabatan;
        $tambahperumahandalams->jumlahkamar = $request->jumlahkamar;
        $tambahperumahandalams->kapasitaskamar = $request->kapasitaskamar;
        $tambahperumahandalams->istri = $request->istri;
        $tambahperumahandalams->anak = $request->anak;
        $tambahperumahandalams->dll = $request->dll;
        $tambahperumahandalams->total = $request->total;
        $tambahperumahandalams->keterangan = $request->keterangan;

        $tambahperumahandalams->save();
        return redirect('dataperumahandalam');
    }
    public function editperumahandalam($id)
    {
        $editperumahandalam = perumahandalam::find($id);

        return view('Admin.editperumahandalam', compact('editperumahandalam'));
    }
    public function updateperumahandalam(Request $request, $id)
    {
        $update = perumahandalam::find($id);

        $update->id = $request->id;
        $update->namaperumahan = $request->namaperumahan;
        $update->namapenghuni = $request->namapenghuni;
        $update->jabatan = $request->jabatan;
        $update->jumlahkamar = $request->jumlahkamar;
        $update->kapasitaskamar = $request->kapasitaskamar;
        $update->istri = $request->istri;
        $update->anak = $request->anak;
        $update->dll = $request->dll;
        $update->total = $request->total;
        $update->keterangan = $request->keterangan;
        $update->save();

        return redirect('dataperumahandalam');
    }
    public function deleteperumahandalam($id)
    {
        $deleteperumahandalam = perumahandalam::find($id);
        if ($deleteperumahandalam->delete()) {
            return redirect()->back();
        }
    }

    //DATA PERUMAHAN LUAR
    public function showperumahanluar()
    {
        $perumahanluar = DB::table('perumahanluar')->get();
        return view('Admin/dataperumahanluar', ['perumahanluar' => $perumahanluar]);
    }
    public function tambahperumahanluar()
    {
        return view('Admin/tambahperumahanluar');
    }
    public function tambahperumahanluars(Request $request)
    {
        $tambahperumahanluars = new perumahanluar();
        $tambahperumahanluars->id = $request->id;
        $tambahperumahanluars->namaperumahan = $request->namaperumahan;
        $tambahperumahanluars->jumlahkamar = $request->jumlahkamar;
        $tambahperumahanluars->kapasitaskamar = $request->kapasitaskamar;
        $tambahperumahanluars->jumlah = $request->jumlah;
        $tambahperumahanluars->keterangan = $request->keterangan;

        $tambahperumahanluars->save();
        return redirect('dataperumahanluar');
    }
    public function editperumahanluar($id)
    {
        $editperumahanluar = perumahanluar::find($id);

        return view('Admin.editperumahanluar', compact('editperumahanluar'));
    }
    public function updateperumahanluar(Request $request, $id)
    {
        $update = perumahanluar::find($id);

        $update->id = $request->id;
        $update->namaperumahan = $request->namaperumahan;
        $update->jumlahkamar = $request->jumlahkamar;
        $update->kapasitaskamar = $request->kapasitaskamar;
        $update->jumlah = $request->jumlah;
        $update->keterangan = $request->keterangan;
        $update->save();

        return redirect('dataperumahanluar');
    }
    public function deleteperumahanluar($id)
    {
        $deleteperumahanluar = perumahanluar::find($id);
        if ($deleteperumahanluar->delete()) {
            return redirect()->back();
        }
    }

    //DATA ASRAMA
    public function showasrama()
    {
        $asrama = DB::table('asrama')->get();
        return view('Admin/dataasrama', ['asrama' => $asrama]);
    }
    public function tambahasrama()
    {
        return view('Admin/tambahasrama');
    }
    public function tambahasramas(Request $request)
    {
        $tambahasramas = new asrama();
        $tambahasramas->namagedung = $request->namagedung;
        $tambahasramas->kategori = $request->kategori;
        $tambahasramas->jumlahkamar = $request->jumlahkamar;
        $tambahasramas->kapasitasruangan = $request->kapasitasruangan;
        $tambahasramas->total = $request->total;
        $tambahasramas->keterangan = $request->keterangan;

        $tambahasramas->save();
        return redirect('dataasrama');
    }
    public function editasrama($id)
    {
        $editasrama = asrama::find($id);

        return view('Admin.editasrama', compact('editasrama'));
    }
    public function updateasrama(Request $request, $id)
    {
        $update = asrama::find($id);

        $update->namagedung = $request->namagedung;
        $update->kategori = $request->kategori;
        $update->jumlahkamar = $request->jumlahkamar;
        $update->kapasitasruangan = $request->kapasitasruangan;
        $update->total = $request->total;
        $update->keterangan = $request->keterangan;
        $update->save();

        return redirect('dataasrama');
    }
    public function deleteasrama($id)
    {
        $deleteasrama = asrama::find($id);
        if ($deleteasrama->delete()) {
            return redirect()->back();
        }
    }

    //DATA RUSUN 3
    public function showrusun3()
    {
        $rusun3 = DB::table('rusun3')->get();
        return view('Admin/datarusun3', ['rusun3' => $rusun3]);
    }
    public function tambahrusun3()
    {
        return view('Admin/tambahrusun3');
    }
    public function tambahrusun3s(Request $request)
    {
        $tambahrusun3s = new rusun3();
        $tambahrusun3s->nomorkamar = $request->nomorkamar;
        $tambahrusun3s->namapenghuni = $request->namapenghuni;
        $tambahrusun3s->jabatan = $request->jabatan;
        $tambahrusun3s->jumlahkamar = $request->jumlahkamar;
        $tambahrusun3s->kapasitaskamar = $request->kapasitaskamar;
        $tambahrusun3s->istri = $request->istri;
        $tambahrusun3s->anak = $request->anak;
        $tambahrusun3s->dll = $request->dll;
        $tambahrusun3s->total = $request->total;
        $tambahrusun3s->keterangan = $request->keterangan;

        $tambahrusun3s->save();
        return redirect('datarusun3');
    }
    public function editrusun3($id)
    {
        $editrusun3 = rusun3::find($id);

        return view('Admin.editrusun3', compact('editrusun3'));
    }
    public function updaterusun3(Request $request, $id)
    {
        $update = rusun3::find($id);

        $update->nomorkamar = $request->nomorkamar;
        $update->namapenghuni = $request->namapenghuni;
        $update->jabatan = $request->jabatan;
        $update->jumlahkamar = $request->jumlahkamar;
        $update->kapasitaskamar = $request->kapasitaskamar;
        $update->istri = $request->istri;
        $update->anak = $request->anak;
        $update->dll = $request->dll;
        $update->total = $request->total;
        $update->keterangan = $request->keterangan;
        $update->save();

        return redirect('datarusun3');
    }
    public function deleterusun3($id)
    {
        $deleterusun3 = rusun3::find($id);
        if ($deleterusun3->delete()) {
            return redirect()->back();
        }
    }


    //DATA INVENTARIS KOMPUTER
    public function showkomputer()
    {
        $komputer = DB::table('komputer')->get();
        return view('Admin/datakomputer', ['komputer' => $komputer]);
    }
    public function tambahkomputer()
    {
        return view('Admin/tambahkomputer');
    }
    public function tambahkomputers(Request $request)
    {
        $tambahkomputers = new komputer();
        $tambahkomputers->gedung = $request->gedung;
        $tambahkomputers->penanggungjawab = $request->penanggungjawab;
        $tambahkomputers->jabatan = $request->jabatan;
        $tambahkomputers->kategori = $request->kategori;
        $tambahkomputers->jumlah = $request->jumlah;
        $tambahkomputers->keterangan = $request->keterangan;

        $tambahkomputers->save();
        return redirect('datakomputer');
    }
    public function editkomputer($id)
    {
        $editkomputer = komputer::find($id);

        return view('Admin.editkomputer', compact('editkomputer'));
    }
    public function updatekomputer(Request $request, $id)
    {
        $update = komputer::find($id);

        $update->gedung = $request->gedung;
        $update->penanggungjawab = $request->penanggungjawab;
        $update->jabatan = $request->jabatan;
        $update->kategori = $request->kategori;
        $update->jumlah = $request->jumlah;
        $update->keterangan = $request->keterangan;

        $update->save();

        return redirect('datakomputer');
    }
    public function deletekomputer($id)
    {
        $deletekomputer = komputer::find($id);
        if ($deletekomputer->delete()) {
            return redirect()->back();
        }
    }

    //DATA INVENTARIS KENDARAAN
    public function showkendaraan()
    {
        $kendaraan = DB::table('kendaraan')->get();
        return view('Admin/datakendaraan', ['kendaraan' => $kendaraan]);
    }
    public function tambahkendaraan()
    {
        return view('Admin/tambahkendaraan');
    }
    public function tambahkendaraans(Request $request)
    {
        $tambahkendaraans = new kendaraan();
        $tambahkendaraans->noplat = $request->noplat;
        $tambahkendaraans->driver = $request->driver;
        $tambahkendaraans->penanggungjawab = $request->penanggungjawab;
        $tambahkendaraans->jeniskendaraan = $request->jeniskendaraan;
        $tambahkendaraans->operasional = $request->operasional;
        $tambahkendaraans->keterangan = $request->keterangan;

        $tambahkendaraans->save();
        return redirect('datakendaraan');
    }
    public function editkendaraan($id)
    {
        $editkendaraan = kendaraan::find($id);

        return view('Admin.editkendaraan', compact('editkendaraan'));
    }
    public function updatekendaraan(Request $request, $id)
    {
        $update = kendaraan::find($id);

        $update->noplat = $request->noplat;
        $update->driver = $request->driver;
        $update->penanggungjawab = $request->penanggungjawab;
        $update->jeniskendaraan = $request->jeniskendaraan;
        $update->operasional = $request->operasional;
        $update->keterangan = $request->keterangan;

        $update->save();

        return redirect('datakendaraan');
    }
    public function deletekendaraan($id)
    {
        $deletekendaraan = kendaraan::find($id);
        if ($deletekendaraan->delete()) {
            return redirect()->back();
        }
    }

    //DATA LIST MEBELER
    public function showlmebeler()
    {
        $lmebeler = DB::table('lmebeler')->get();
        return view('Admin/datalmebeler', ['lmebeler' => $lmebeler]);
    }
    public function tambahlmebeler()
    {
        return view('Admin/tambahlmebeler');
    }
    public function tambahlmebelers(Request $request)
    {
        $tambahlmebelers = new lmebeler();
        $tambahlmebelers->itembarang = $request->itembarang;
        $tambahlmebelers->tipebarang = $request->tipebarang;
        $tambahlmebelers->kodeaset = $request->kodeaset;
        $tambahlmebelers->jumlahunit = $request->jumlahunit;
        $tambahlmebelers->nopr = $request->nopr;
        $tambahlmebelers->nopo = $request->nopo;
        $tambahlmebelers->nilaiinvoice = $request->nilaiinvoice;
        $tambahlmebelers->umurekonomis = $request->umurekonomis;
        $tambahlmebelers->depresiasi = $request->depresiasi;
        $tambahlmebelers->sumberdana = $request->sumberdana;
        $tambahlmebelers->akumulasidepresiasi = $request->akumulasidepresiasi;
        $tambahlmebelers->nilaibuku = $request->nilaibuku;
        $tambahlmebelers->lokasi = $request->lokasi;
        $tambahlmebelers->unit = $request->unit;


        $tambahlmebelers->save();
        return redirect('datalmebeler');
    }
    public function editlmebeler($id)
    {
        $editlmebeler = lmebeler::find($id);

        return view('Admin.editlmebeler', compact('editlmebeler'));
    }
    public function updatelmebeler(Request $request, $id)
    {
        $update = lmebeler::find($id);

        $update->itembarang = $request->itembarang;
        $update->tipebarang = $request->tipebarang;
        $update->kodeaset = $request->kodeaset;
        $update->jumlahunit = $request->jumlahunit;
        $update->nopr = $request->nopr;
        $update->nopo = $request->nopo;
        $update->nilaiinvoice = $request->nilaiinvoice;
        $update->umurekonomis = $request->umurekonomis;
        $update->depresiasi = $request->depresiasi;
        $update->sumberdana = $request->sumberdana;
        $update->akumulasidepresiasi = $request->akumulasidepresiasi;
        $update->nilaibuku = $request->nilaibuku;
        $update->lokasi = $request->lokasi;
        $update->unit = $request->unit;

        $update->save();

        return redirect('datalmebeler');
    }
    public function deletelmebeler($id)
    {
        $deletelmebeler = lmebeler::find($id);
        if ($deletelmebeler->delete()) {
            return redirect()->back();
        }
    }

    //DATA LIST ALAT TULIS
    public function showlalattulis()
    {
        $lalattulis = DB::table('lalattulis')->get();
        return view('Admin/datalalattulis', ['lalattulis' => $lalattulis]);
    }
    public function tambahlalattulis()
    {
        return view('Admin/tambahlalattulis');
    }
    public function tambahlalattuliss(Request $request)
    {
        $tambahlalattuliss = new lalattulis();
        $tambahlalattuliss->itembarang = $request->itembarang;
        $tambahlalattuliss->tipebarang = $request->tipebarang;
        $tambahlalattuliss->kodeaset = $request->kodeaset;
        $tambahlalattuliss->jumlahunit = $request->jumlahunit;
        $tambahlalattuliss->nopr = $request->nopr;
        $tambahlalattuliss->nopo = $request->nopo;
        $tambahlalattuliss->nilaiinvoice = $request->nilaiinvoice;
        $tambahlalattuliss->umurekonomis = $request->umurekonomis;
        $tambahlalattuliss->depresiasi = $request->depresiasi;
        $tambahlalattuliss->sumberdana = $request->sumberdana;
        $tambahlalattuliss->akumulasidepresiasi = $request->akumulasidepresiasi;
        $tambahlalattuliss->nilaibuku = $request->nilaibuku;
        $tambahlalattuliss->lokasi = $request->lokasi;
        $tambahlalattuliss->unit = $request->unit;


        $tambahlalattuliss->save();
        return redirect('datalalattulis');
    }
    public function editlalattulis($id)
    {
        $editlalattulis = lalattulis::find($id);

        return view('Admin.editlalattulis', compact('editlalattulis'));
    }
    public function updatelalattulis(Request $request, $id)
    {
        $update = lalattulis::find($id);

        $update->itembarang = $request->itembarang;
        $update->tipebarang = $request->tipebarang;
        $update->kodeaset = $request->kodeaset;
        $update->jumlahunit = $request->jumlahunit;
        $update->nopr = $request->nopr;
        $update->nopo = $request->nopo;
        $update->nilaiinvoice = $request->nilaiinvoice;
        $update->umurekonomis = $request->umurekonomis;
        $update->depresiasi = $request->depresiasi;
        $update->sumberdana = $request->sumberdana;
        $update->akumulasidepresiasi = $request->akumulasidepresiasi;
        $update->nilaibuku = $request->nilaibuku;
        $update->lokasi = $request->lokasi;
        $update->unit = $request->unit;

        $update->save();

        return redirect('datalalattulis');
    }
    public function deletelalattulis($id)
    {
        $deletelalattulis = lalattulis::find($id);
        if ($deletelalattulis->delete()) {
            return redirect()->back();
        }
    }

    //DATA LIST ALAT AUDIO VISUAL
    public function showlaudiovisual()
    {
        $laudiovisual = DB::table('laudiovisual')->get();
        return view('Admin/datalaudiovisual', ['laudiovisual' => $laudiovisual]);
    }
    public function tambahlaudiovisual()
    {
        return view('Admin/tambahlaudiovisual');
    }
    public function tambahlaudiovisuals(Request $request)
    {
        $tambahlaudiovisuals = new laudiovisual();
        $tambahlaudiovisuals->itembarang = $request->itembarang;
        $tambahlaudiovisuals->tipebarang = $request->tipebarang;
        $tambahlaudiovisuals->kodeaset = $request->kodeaset;
        $tambahlaudiovisuals->jumlahunit = $request->jumlahunit;
        $tambahlaudiovisuals->nopr = $request->nopr;
        $tambahlaudiovisuals->nopo = $request->nopo;
        $tambahlaudiovisuals->nilaiinvoice = $request->nilaiinvoice;
        $tambahlaudiovisuals->umurekonomis = $request->umurekonomis;
        $tambahlaudiovisuals->depresiasi = $request->depresiasi;
        $tambahlaudiovisuals->sumberdana = $request->sumberdana;
        $tambahlaudiovisuals->akumulasidepresiasi = $request->akumulasidepresiasi;
        $tambahlaudiovisuals->nilaibuku = $request->nilaibuku;
        $tambahlaudiovisuals->lokasi = $request->lokasi;
        $tambahlaudiovisuals->unit = $request->unit;


        $tambahlaudiovisuals->save();
        return redirect('datalaudiovisual');
    }
    public function editlaudiovisual($id)
    {
        $editlaudiovisual = laudiovisual::find($id);

        return view('Admin.editlaudiovisual', compact('editlaudiovisual'));
    }
    public function updatelaudiovisual(Request $request, $id)
    {
        $update = laudiovisual::find($id);

        $update->itembarang = $request->itembarang;
        $update->tipebarang = $request->tipebarang;
        $update->kodeaset = $request->kodeaset;
        $update->jumlahunit = $request->jumlahunit;
        $update->nopr = $request->nopr;
        $update->nopo = $request->nopo;
        $update->nilaiinvoice = $request->nilaiinvoice;
        $update->umurekonomis = $request->umurekonomis;
        $update->depresiasi = $request->depresiasi;
        $update->sumberdana = $request->sumberdana;
        $update->akumulasidepresiasi = $request->akumulasidepresiasi;
        $update->nilaibuku = $request->nilaibuku;
        $update->lokasi = $request->lokasi;
        $update->unit = $request->unit;

        $update->save();

        return redirect('datalaudiovisual');
    }
    public function deletelaudiovisual($id)
    {
        $deletelaudiovisual = laudiovisual::find($id);
        if ($deletelaudiovisual->delete()) {
            return redirect()->back();
        }
    }

    //DATA LIST ALAT PERALATAN RUMAH TANGGA, WISMA DAN ASRAMA
    public function showlperalatan()
    {
        $lperalatan = DB::table('lperalatan')->get();
        return view('Admin/datalperalatan', ['lperalatan' => $lperalatan]);
    }
    public function tambahlperalatan()
    {
        return view('Admin/tambahlperalatan');
    }
    public function tambahlperalatans(Request $request)
    {
        $tambahlperalatans = new lperalatan();
        $tambahlperalatans->itembarang = $request->itembarang;
        $tambahlperalatans->tipebarang = $request->tipebarang;
        $tambahlperalatans->kodeaset = $request->kodeaset;
        $tambahlperalatans->jumlahunit = $request->jumlahunit;
        $tambahlperalatans->nopr = $request->nopr;
        $tambahlperalatans->nopo = $request->nopo;
        $tambahlperalatans->nilaiinvoice = $request->nilaiinvoice;
        $tambahlperalatans->umurekonomis = $request->umurekonomis;
        $tambahlperalatans->depresiasi = $request->depresiasi;
        $tambahlperalatans->sumberdana = $request->sumberdana;
        $tambahlperalatans->akumulasidepresiasi = $request->akumulasidepresiasi;
        $tambahlperalatans->nilaibuku = $request->nilaibuku;
        $tambahlperalatans->lokasi = $request->lokasi;
        $tambahlperalatans->unit = $request->unit;


        $tambahlperalatans->save();
        return redirect('datalperalatan');
    }
    public function editlperalatan($id)
    {
        $editlperalatan = lperalatan::find($id);

        return view('Admin.editlperalatan', compact('editlperalatan'));
    }
    public function updatelperalatan(Request $request, $id)
    {
        $update = lperalatan::find($id);

        $update->itembarang = $request->itembarang;
        $update->tipebarang = $request->tipebarang;
        $update->kodeaset = $request->kodeaset;
        $update->jumlahunit = $request->jumlahunit;
        $update->nopr = $request->nopr;
        $update->nopo = $request->nopo;
        $update->nilaiinvoice = $request->nilaiinvoice;
        $update->umurekonomis = $request->umurekonomis;
        $update->depresiasi = $request->depresiasi;
        $update->sumberdana = $request->sumberdana;
        $update->akumulasidepresiasi = $request->akumulasidepresiasi;
        $update->nilaibuku = $request->nilaibuku;
        $update->lokasi = $request->lokasi;
        $update->unit = $request->unit;

        $update->save();

        return redirect('datalperalatan');
    }
    public function deletelperalatan($id)
    {
        $deletelperalatan = lperalatan::find($id);
        if ($deletelperalatan->delete()) {
            return redirect()->back();
        }
    }

    //DATA LIST PERSEDIAAN
    public function showlpersediaan()
    {
        $lpersediaan = DB::table('lpersediaan')->get();
        return view('Admin/datalpersediaan', ['lpersediaan' => $lpersediaan]);
    }
    public function tambahlpersediaan()
    {
        return view('Admin/tambahlpersediaan');
    }
    public function tambahlpersediaans(Request $request)
    {
        $tambahlpersediaans = new lpersediaan();
        $tambahlpersediaans->itembarang = $request->itembarang;
        $tambahlpersediaans->tipebarang = $request->tipebarang;
        $tambahlpersediaans->kodeaset = $request->kodeaset;
        $tambahlpersediaans->jumlahunit = $request->jumlahunit;
        $tambahlpersediaans->nopr = $request->nopr;
        $tambahlpersediaans->nopo = $request->nopo;
        $tambahlpersediaans->nilaiinvoice = $request->nilaiinvoice;
        $tambahlpersediaans->umurekonomis = $request->umurekonomis;
        $tambahlpersediaans->depresiasi = $request->depresiasi;
        $tambahlpersediaans->sumberdana = $request->sumberdana;
        $tambahlpersediaans->akumulasidepresiasi = $request->akumulasidepresiasi;
        $tambahlpersediaans->nilaibuku = $request->nilaibuku;
        $tambahlpersediaans->lokasi = $request->lokasi;
        $tambahlpersediaans->unit = $request->unit;


        $tambahlpersediaans->save();
        return redirect('datalpersediaan');
    }
    public function editlpersediaan($id)
    {
        $editlpersediaan = lpersediaan::find($id);

        return view('Admin.editlpersediaan', compact('editlpersediaan'));
    }
    public function updatelpersediaan(Request $request, $id)
    {
        $update = lpersediaan::find($id);

        $update->itembarang = $request->itembarang;
        $update->tipebarang = $request->tipebarang;
        $update->kodeaset = $request->kodeaset;
        $update->jumlahunit = $request->jumlahunit;
        $update->nopr = $request->nopr;
        $update->nopo = $request->nopo;
        $update->nilaiinvoice = $request->nilaiinvoice;
        $update->umurekonomis = $request->umurekonomis;
        $update->depresiasi = $request->depresiasi;
        $update->sumberdana = $request->sumberdana;
        $update->akumulasidepresiasi = $request->akumulasidepresiasi;
        $update->nilaibuku = $request->nilaibuku;
        $update->lokasi = $request->lokasi;
        $update->unit = $request->unit;

        $update->save();

        return redirect('datalpersediaan');
    }
    public function deletelpersediaan($id)
    {
        $deletelpersediaan = lpersediaan::find($id);
        if ($deletelpersediaan->delete()) {
            return redirect()->back();
        }
    }

    //DATA LIST ALAT LAB
    public function showllab()
    {
        $llab = DB::table('llab')->get();
        return view('Admin/datallab', ['llab' => $llab]);
    }
    public function tambahllab()
    {
        return view('Admin/tambahllab');
    }
    public function tambahllabs(Request $request)
    {
        $tambahllabs = new llab();
        $tambahllabs->itembarang = $request->itembarang;
        $tambahllabs->tipebarang = $request->tipebarang;
        $tambahllabs->kodeaset = $request->kodeaset;
        $tambahllabs->jumlahunit = $request->jumlahunit;
        $tambahllabs->nopr = $request->nopr;
        $tambahllabs->nopo = $request->nopo;
        $tambahllabs->nilaiinvoice = $request->nilaiinvoice;
        $tambahllabs->umurekonomis = $request->umurekonomis;
        $tambahllabs->depresiasi = $request->depresiasi;
        $tambahllabs->sumberdana = $request->sumberdana;
        $tambahllabs->akumulasidepresiasi = $request->akumulasidepresiasi;
        $tambahllabs->nilaibuku = $request->nilaibuku;
        $tambahllabs->lokasi = $request->lokasi;
        $tambahllabs->unit = $request->unit;


        $tambahllabs->save();
        return redirect('datallab');
    }
    public function editllab($id)
    {
        $editllab = llab::find($id);

        return view('Admin.editllab', compact('editllab'));
    }
    public function updatellab(Request $request, $id)
    {
        $update = llab::find($id);

        $update->itembarang = $request->itembarang;
        $update->tipebarang = $request->tipebarang;
        $update->kodeaset = $request->kodeaset;
        $update->jumlahunit = $request->jumlahunit;
        $update->nopr = $request->nopr;
        $update->nopo = $request->nopo;
        $update->nilaiinvoice = $request->nilaiinvoice;
        $update->umurekonomis = $request->umurekonomis;
        $update->depresiasi = $request->depresiasi;
        $update->sumberdana = $request->sumberdana;
        $update->akumulasidepresiasi = $request->akumulasidepresiasi;
        $update->nilaibuku = $request->nilaibuku;
        $update->lokasi = $request->lokasi;
        $update->unit = $request->unit;

        $update->save();

        return redirect('datallab');
    }
    public function deletellab($id)
    {
        $deletellab = llab::find($id);
        if ($deletellab->delete()) {
            return redirect()->back();
        }
    }

    //DATA LIST ALAT JARINGAN
    public function showljaringan()
    {
        $ljaringan = DB::table('ljaringan')->get();
        return view('Admin/dataljaringan', ['ljaringan' => $ljaringan]);
    }
    public function tambahljaringan()
    {
        return view('Admin/tambahljaringan');
    }
    public function tambahljaringans(Request $request)
    {
        $tambahljaringans = new ljaringan();
        $tambahljaringans->itembarang = $request->itembarang;
        $tambahljaringans->tipebarang = $request->tipebarang;
        $tambahljaringans->kodeaset = $request->kodeaset;
        $tambahljaringans->jumlahunit = $request->jumlahunit;
        $tambahljaringans->nopr = $request->nopr;
        $tambahljaringans->nopo = $request->nopo;
        $tambahljaringans->nilaiinvoice = $request->nilaiinvoice;
        $tambahljaringans->umurekonomis = $request->umurekonomis;
        $tambahljaringans->depresiasi = $request->depresiasi;
        $tambahljaringans->sumberdana = $request->sumberdana;
        $tambahljaringans->akumulasidepresiasi = $request->akumulasidepresiasi;
        $tambahljaringans->nilaibuku = $request->nilaibuku;
        $tambahljaringans->lokasi = $request->lokasi;
        $tambahljaringans->unit = $request->unit;


        $tambahljaringans->save();
        return redirect('dataljaringan');
    }
    public function editljaringan($id)
    {
        $editljaringan = ljaringan::find($id);

        return view('Admin.editljaringan', compact('editljaringan'));
    }
    public function updateljaringan(Request $request, $id)
    {
        $update = ljaringan::find($id);

        $update->itembarang = $request->itembarang;
        $update->tipebarang = $request->tipebarang;
        $update->kodeaset = $request->kodeaset;
        $update->jumlahunit = $request->jumlahunit;
        $update->nopr = $request->nopr;
        $update->nopo = $request->nopo;
        $update->nilaiinvoice = $request->nilaiinvoice;
        $update->umurekonomis = $request->umurekonomis;
        $update->depresiasi = $request->depresiasi;
        $update->sumberdana = $request->sumberdana;
        $update->akumulasidepresiasi = $request->akumulasidepresiasi;
        $update->nilaibuku = $request->nilaibuku;
        $update->lokasi = $request->lokasi;
        $update->unit = $request->unit;

        $update->save();

        return redirect('dataljaringan');
    }
    public function deleteljaringan($id)
    {
        $deleteljaringan = ljaringan::find($id);
        if ($deleteljaringan->delete()) {
            return redirect()->back();
        }
    }


    //DATA LIST ALAT MAINTANANCE
    public function showlmaintanance()
    {
        $lmaintanance = DB::table('lmaintanance')->get();
        return view('Admin/datalmaintanance', ['lmaintanance' => $lmaintanance]);
    }
    public function tambahlmaintanance()
    {
        return view('Admin/tambahlmaintanance');
    }
    public function tambahlmaintanances(Request $request)
    {
        $tambahlmaintanances = new lmaintanance();
        $tambahlmaintanances->itembarang = $request->itembarang;
        $tambahlmaintanances->tipebarang = $request->tipebarang;
        $tambahlmaintanances->kodeaset = $request->kodeaset;
        $tambahlmaintanances->jumlahunit = $request->jumlahunit;
        $tambahlmaintanances->nopr = $request->nopr;
        $tambahlmaintanances->nopo = $request->nopo;
        $tambahlmaintanances->nilaiinvoice = $request->nilaiinvoice;
        $tambahlmaintanances->umurekonomis = $request->umurekonomis;
        $tambahlmaintanances->depresiasi = $request->depresiasi;
        $tambahlmaintanances->sumberdana = $request->sumberdana;
        $tambahlmaintanances->akumulasidepresiasi = $request->akumulasidepresiasi;
        $tambahlmaintanances->nilaibuku = $request->nilaibuku;
        $tambahlmaintanances->lokasi = $request->lokasi;
        $tambahlmaintanances->unit = $request->unit;


        $tambahlmaintanances->save();
        return redirect('datalmaintanance');
    }
    public function editlmaintanance($id)
    {
        $editlmaintanance = lmaintanance::find($id);

        return view('Admin.editlmaintanance', compact('editlmaintanance'));
    }
    public function updatelmaintanance(Request $request, $id)
    {
        $update = lmaintanance::find($id);

        $update->itembarang = $request->itembarang;
        $update->tipebarang = $request->tipebarang;
        $update->kodeaset = $request->kodeaset;
        $update->jumlahunit = $request->jumlahunit;
        $update->nopr = $request->nopr;
        $update->nopo = $request->nopo;
        $update->nilaiinvoice = $request->nilaiinvoice;
        $update->umurekonomis = $request->umurekonomis;
        $update->depresiasi = $request->depresiasi;
        $update->sumberdana = $request->sumberdana;
        $update->akumulasidepresiasi = $request->akumulasidepresiasi;
        $update->nilaibuku = $request->nilaibuku;
        $update->lokasi = $request->lokasi;
        $update->unit = $request->unit;

        $update->save();

        return redirect('datalmaintanance');
    }
    public function deletelmaintanance($id)
    {
        $deletelmaintanance = lmaintanance::find($id);
        if ($deletelmaintanance->delete()) {
            return redirect()->back();
        }
    }

    //DATA LIST ALAT TAMAN
    public function showltaman()
    {
        $ltaman = DB::table('ltaman')->get();
        return view('Admin/dataltaman', ['ltaman' => $ltaman]);
    }
    public function tambahltaman()
    {
        return view('Admin/tambahltaman');
    }
    public function tambahltamans(Request $request)
    {
        $tambahltamans = new ltaman();
        $tambahltamans->itembarang = $request->itembarang;
        $tambahltamans->tipebarang = $request->tipebarang;
        $tambahltamans->kodeaset = $request->kodeaset;
        $tambahltamans->jumlahunit = $request->jumlahunit;
        $tambahltamans->nopr = $request->nopr;
        $tambahltamans->nopo = $request->nopo;
        $tambahltamans->nilaiinvoice = $request->nilaiinvoice;
        $tambahltamans->umurekonomis = $request->umurekonomis;
        $tambahltamans->depresiasi = $request->depresiasi;
        $tambahltamans->sumberdana = $request->sumberdana;
        $tambahltamans->akumulasidepresiasi = $request->akumulasidepresiasi;
        $tambahltamans->nilaibuku = $request->nilaibuku;
        $tambahltamans->lokasi = $request->lokasi;
        $tambahltamans->unit = $request->unit;


        $tambahltamans->save();
        return redirect('dataltaman');
    }
    public function editltaman($id)
    {
        $editltaman = ltaman::find($id);

        return view('Admin.editltaman', compact('editltaman'));
    }
    public function updateltaman(Request $request, $id)
    {
        $update = ltaman::find($id);

        $update->itembarang = $request->itembarang;
        $update->tipebarang = $request->tipebarang;
        $update->kodeaset = $request->kodeaset;
        $update->jumlahunit = $request->jumlahunit;
        $update->nopr = $request->nopr;
        $update->nopo = $request->nopo;
        $update->nilaiinvoice = $request->nilaiinvoice;
        $update->umurekonomis = $request->umurekonomis;
        $update->depresiasi = $request->depresiasi;
        $update->sumberdana = $request->sumberdana;
        $update->akumulasidepresiasi = $request->akumulasidepresiasi;
        $update->nilaibuku = $request->nilaibuku;
        $update->lokasi = $request->lokasi;
        $update->unit = $request->unit;

        $update->save();

        return redirect('dataltaman');
    }
    public function deleteltaman($id)
    {
        $deleteltaman = ltaman::find($id);
        if ($deleteltaman->delete()) {
            return redirect()->back();
        }
    }


    //DATA DISPOSAL ALAT MEBELER
    public function showdispmebeler()
    {
        $dispmebeler = DB::table('dispmebeler')->get();
        return view('Admin/datadispmebeler', ['dispmebeler' => $dispmebeler]);
    }
    public function tambahdispmebeler()
    {
        return view('Admin/tambahdispmebeler');
    }
    public function tambahdispmebelers(Request $request)
    {
        $tambahdispmebelers = new dispmebeler();
        $tambahdispmebelers->itembarang = $request->itembarang;
        $tambahdispmebelers->kodeaset = $request->kodeaset;
        $tambahdispmebelers->jumlahunit = $request->jumlahunit;
        $tambahdispmebelers->nopr = $request->nopr;
        $tambahdispmebelers->nopo = $request->nopo;
        $tambahdispmebelers->nilaiinvoice = $request->nilaiinvoice;
        $tambahdispmebelers->sumberdana = $request->sumberdana;
        $tambahdispmebelers->nilaibuku = $request->nilaibuku;
        $tambahdispmebelers->lokasi = $request->lokasi;
        $tambahdispmebelers->alasan = $request->alasan;
        $tambahdispmebelers->unit = $request->unit;


        $tambahdispmebelers->save();
        return redirect('datadispmebeler');
    }
    public function editdispmebeler($id)
    {
        $editdispmebeler = dispmebeler::find($id);

        return view('Admin.editdispmebeler', compact('editdispmebeler'));
    }
    public function updatedispmebeler(Request $request, $id)
    {
        $update = dispmebeler::find($id);

        $update->itembarang = $request->itembarang;
        $update->kodeaset = $request->kodeaset;
        $update->jumlahunit = $request->jumlahunit;
        $update->nopr = $request->nopr;
        $update->nopo = $request->nopo;
        $update->nilaiinvoice = $request->nilaiinvoice;
        $update->sumberdana = $request->sumberdana;
        $update->nilaibuku = $request->nilaibuku;
        $update->lokasi = $request->lokasi;
        $update->alasan = $request->alasan;
        $update->unit = $request->unit;

        $update->save();

        return redirect('datadispmebeler');
    }
    public function deletedispmebeler($id)
    {
        $deletedispmebeler = dispmebeler::find($id);
        if ($deletedispmebeler->delete()) {
            return redirect()->back();
        }
    }

    //DATA DISPOSAL ALAT TULIS
    public function showdispalattulis()
    {
        $dispalattulis = DB::table('dispalattulis')->get();
        return view('Admin/datadispalattulis', ['dispalattulis' => $dispalattulis]);
    }
    public function tambahdispalattulis()
    {
        return view('Admin/tambahdispalattulis');
    }
    public function tambahdispalattuliss(Request $request)
    {
        $tambahdispalattuliss = new dispalattulis();
        $tambahdispalattuliss->itembarang = $request->itembarang;
        $tambahdispalattuliss->kodeaset = $request->kodeaset;
        $tambahdispalattuliss->jumlahunit = $request->jumlahunit;
        $tambahdispalattuliss->nopr = $request->nopr;
        $tambahdispalattuliss->nopo = $request->nopo;
        $tambahdispalattuliss->nilaiinvoice = $request->nilaiinvoice;
        $tambahdispalattuliss->sumberdana = $request->sumberdana;
        $tambahdispalattuliss->nilaibuku = $request->nilaibuku;
        $tambahdispalattuliss->lokasi = $request->lokasi;
        $tambahdispalattuliss->alasan = $request->alasan;
        $tambahdispalattuliss->unit = $request->unit;


        $tambahdispalattuliss->save();
        return redirect('datadispalattulis');
    }
    public function editdispalattulis($id)
    {
        $editdispalattulis = dispalattulis::find($id);

        return view('Admin.editdispalattulis', compact('editdispalattulis'));
    }
    public function updatedispalattulis(Request $request, $id)
    {
        $update = dispalattulis::find($id);

        $update->itembarang = $request->itembarang;
        $update->kodeaset = $request->kodeaset;
        $update->jumlahunit = $request->jumlahunit;
        $update->nopr = $request->nopr;
        $update->nopo = $request->nopo;
        $update->nilaiinvoice = $request->nilaiinvoice;
        $update->sumberdana = $request->sumberdana;
        $update->nilaibuku = $request->nilaibuku;
        $update->lokasi = $request->lokasi;
        $update->alasan = $request->alasan;
        $update->unit = $request->unit;

        $update->save();

        return redirect('datadispalattulis');
    }
    public function deletedispalattulis($id)
    {
        $deletedispalattulis = dispalattulis::find($id);
        if ($deletedispalattulis->delete()) {
            return redirect()->back();
        }
    }

    //DATA DISPOSAL AUDIO VISUAL
    public function showdispaudio()
    {
        $dispaudio = DB::table('dispaudio')->get();
        return view('Admin/datadispaudio', ['dispaudio' => $dispaudio]);
    }
    public function tambahdispaudio()
    {
        return view('Admin/tambahdispaudio');
    }
    public function tambahdispaudios(Request $request)
    {
        $tambahdispaudios = new dispaudio();
        $tambahdispaudios->itembarang = $request->itembarang;
        $tambahdispaudios->kodeaset = $request->kodeaset;
        $tambahdispaudios->jumlahunit = $request->jumlahunit;
        $tambahdispaudios->nopr = $request->nopr;
        $tambahdispaudios->nopo = $request->nopo;
        $tambahdispaudios->nilaiinvoice = $request->nilaiinvoice;
        $tambahdispaudios->sumberdana = $request->sumberdana;
        $tambahdispaudios->nilaibuku = $request->nilaibuku;
        $tambahdispaudios->lokasi = $request->lokasi;
        $tambahdispaudios->alasan = $request->alasan;
        $tambahdispaudios->unit = $request->unit;


        $tambahdispaudios->save();
        return redirect('datadispaudio');
    }
    public function editdispaudio($id)
    {
        $editdispaudio = dispaudio::find($id);

        return view('Admin.editdispaudio', compact('editdispaudio'));
    }
    public function updatedispaudio(Request $request, $id)
    {
        $update = dispaudio::find($id);

        $update->itembarang = $request->itembarang;
        $update->kodeaset = $request->kodeaset;
        $update->jumlahunit = $request->jumlahunit;
        $update->nopr = $request->nopr;
        $update->nopo = $request->nopo;
        $update->nilaiinvoice = $request->nilaiinvoice;
        $update->sumberdana = $request->sumberdana;
        $update->nilaibuku = $request->nilaibuku;
        $update->lokasi = $request->lokasi;
        $update->alasan = $request->alasan;
        $update->unit = $request->unit;

        $update->save();

        return redirect('datadispaudio');
    }
    public function deletedispaudio($id)
    {
        $deletedispaudio = dispaudio::find($id);
        if ($deletedispaudio->delete()) {
            return redirect()->back();
        }
    }

    //DATA DISPOSAL PERALATAN RUMAH TANGGA
    public function showdispperalatan()
    {
        $dispperalatan = DB::table('dispperalatan')->get();
        return view('Admin/datadispperalatan', ['dispperalatan' => $dispperalatan]);
    }
    public function tambahdispperalatan()
    {
        return view('Admin/tambahdispperalatan');
    }
    public function tambahdispperalatans(Request $request)
    {
        $tambahdispperalatans = new dispperalatan();
        $tambahdispperalatans->itembarang = $request->itembarang;
        $tambahdispperalatans->kodeaset = $request->kodeaset;
        $tambahdispperalatans->jumlahunit = $request->jumlahunit;
        $tambahdispperalatans->nopr = $request->nopr;
        $tambahdispperalatans->nopo = $request->nopo;
        $tambahdispperalatans->nilaiinvoice = $request->nilaiinvoice;
        $tambahdispperalatans->sumberdana = $request->sumberdana;
        $tambahdispperalatans->nilaibuku = $request->nilaibuku;
        $tambahdispperalatans->lokasi = $request->lokasi;
        $tambahdispperalatans->alasan = $request->alasan;
        $tambahdispperalatans->unit = $request->unit;


        $tambahdispperalatans->save();
        return redirect('datadispperalatan');
    }
    public function editdispperalatan($id)
    {
        $editdispperalatan = dispperalatan::find($id);

        return view('Admin.editdispperalatan', compact('editdispperalatan'));
    }
    public function updatedispperalatan(Request $request, $id)
    {
        $update = dispperalatan::find($id);

        $update->itembarang = $request->itembarang;
        $update->kodeaset = $request->kodeaset;
        $update->jumlahunit = $request->jumlahunit;
        $update->nopr = $request->nopr;
        $update->nopo = $request->nopo;
        $update->nilaiinvoice = $request->nilaiinvoice;
        $update->sumberdana = $request->sumberdana;
        $update->nilaibuku = $request->nilaibuku;
        $update->lokasi = $request->lokasi;
        $update->alasan = $request->alasan;
        $update->unit = $request->unit;

        $update->save();

        return redirect('datadispperalatan');
    }
    public function deletedispperalatan($id)
    {
        $deletedispperalatan = dispperalatan::find($id);
        if ($deletedispperalatan->delete()) {
            return redirect()->back();
        }
    }

    //DATA DISPOSAL PERSEDIAAN KAMPUS
    public function showdisppersediaan()
    {
        $disppersediaan = DB::table('disppersediaan')->get();
        return view('Admin/datadisppersediaan', ['disppersediaan' => $disppersediaan]);
    }
    public function tambahdisppersediaan()
    {
        return view('Admin/tambahdisppersediaan');
    }
    public function tambahdisppersediaans(Request $request)
    {
        $tambahdisppersediaans = new disppersediaan();
        $tambahdisppersediaans->itembarang = $request->itembarang;
        $tambahdisppersediaans->kodeaset = $request->kodeaset;
        $tambahdisppersediaans->jumlahunit = $request->jumlahunit;
        $tambahdisppersediaans->nopr = $request->nopr;
        $tambahdisppersediaans->nopo = $request->nopo;
        $tambahdisppersediaans->nilaiinvoice = $request->nilaiinvoice;
        $tambahdisppersediaans->sumberdana = $request->sumberdana;
        $tambahdisppersediaans->nilaibuku = $request->nilaibuku;
        $tambahdisppersediaans->lokasi = $request->lokasi;
        $tambahdisppersediaans->alasan = $request->alasan;
        $tambahdisppersediaans->unit = $request->unit;


        $tambahdisppersediaans->save();
        return redirect('datadisppersediaan');
    }
    public function editdisppersediaan($id)
    {
        $editdisppersediaan = disppersediaan::find($id);

        return view('Admin.editdisppersediaan', compact('editdisppersediaan'));
    }
    public function updatedisppersediaan(Request $request, $id)
    {
        $update = disppersediaan::find($id);

        $update->itembarang = $request->itembarang;
        $update->kodeaset = $request->kodeaset;
        $update->jumlahunit = $request->jumlahunit;
        $update->nopr = $request->nopr;
        $update->nopo = $request->nopo;
        $update->nilaiinvoice = $request->nilaiinvoice;
        $update->sumberdana = $request->sumberdana;
        $update->nilaibuku = $request->nilaibuku;
        $update->lokasi = $request->lokasi;
        $update->alasan = $request->alasan;
        $update->unit = $request->unit;

        $update->save();

        return redirect('datadisppersediaan');
    }
    public function deletedisppersediaan($id)
    {
        $deletedisppersediaan = disppersediaan::find($id);
        if ($deletedisppersediaan->delete()) {
            return redirect()->back();
        }
    }

    //DATA DISPOSAL ALAT LAB
    public function showdisplab()
    {
        $displab = DB::table('displab')->get();
        return view('Admin/datadisplab', ['displab' => $displab]);
    }
    public function tambahdisplab()
    {
        return view('Admin/tambahdisplab');
    }
    public function tambahdisplabs(Request $request)
    {
        $tambahdisplabs = new displab();
        $tambahdisplabs->itembarang = $request->itembarang;
        $tambahdisplabs->kodeaset = $request->kodeaset;
        $tambahdisplabs->jumlahunit = $request->jumlahunit;
        $tambahdisplabs->nopr = $request->nopr;
        $tambahdisplabs->nopo = $request->nopo;
        $tambahdisplabs->nilaiinvoice = $request->nilaiinvoice;
        $tambahdisplabs->sumberdana = $request->sumberdana;
        $tambahdisplabs->nilaibuku = $request->nilaibuku;
        $tambahdisplabs->lokasi = $request->lokasi;
        $tambahdisplabs->alasan = $request->alasan;
        $tambahdisplabs->unit = $request->unit;


        $tambahdisplabs->save();
        return redirect('datadisplab');
    }
    public function editdisplab($id)
    {
        $editdisplab = displab::find($id);

        return view('Admin.editdisplab', compact('editdisplab'));
    }
    public function updatedisplab(Request $request, $id)
    {
        $update = displab::find($id);

        $update->itembarang = $request->itembarang;
        $update->kodeaset = $request->kodeaset;
        $update->jumlahunit = $request->jumlahunit;
        $update->nopr = $request->nopr;
        $update->nopo = $request->nopo;
        $update->nilaiinvoice = $request->nilaiinvoice;
        $update->sumberdana = $request->sumberdana;
        $update->nilaibuku = $request->nilaibuku;
        $update->lokasi = $request->lokasi;
        $update->alasan = $request->alasan;
        $update->unit = $request->unit;

        $update->save();

        return redirect('datadisplab');
    }
    public function deletedisplab($id)
    {
        $deletedisplab = displab::find($id);
        if ($deletedisplab->delete()) {
            return redirect()->back();
        }
    }

    //DATA DISPOSAL JARINGAN
    public function showdispjaringan()
    {
        $dispjaringan = DB::table('dispjaringan')->get();
        return view('Admin/datadispjaringan', ['dispjaringan' => $dispjaringan]);
    }
    public function tambahdispjaringan()
    {
        return view('Admin/tambahdispjaringan');
    }
    public function tambahdispjaringans(Request $request)
    {
        $tambahdispjaringans = new dispjaringan();
        $tambahdispjaringans->itembarang = $request->itembarang;
        $tambahdispjaringans->kodeaset = $request->kodeaset;
        $tambahdispjaringans->jumlahunit = $request->jumlahunit;
        $tambahdispjaringans->nopr = $request->nopr;
        $tambahdispjaringans->nopo = $request->nopo;
        $tambahdispjaringans->nilaiinvoice = $request->nilaiinvoice;
        $tambahdispjaringans->sumberdana = $request->sumberdana;
        $tambahdispjaringans->nilaibuku = $request->nilaibuku;
        $tambahdispjaringans->lokasi = $request->lokasi;
        $tambahdispjaringans->alasan = $request->alasan;
        $tambahdispjaringans->unit = $request->unit;


        $tambahdispjaringans->save();
        return redirect('datadispjaringan');
    }
    public function editdispjaringan($id)
    {
        $editdispjaringan = dispjaringan::find($id);

        return view('Admin.editdispjaringan', compact('editdispjaringan'));
    }
    public function updatedispjaringan(Request $request, $id)
    {
        $update = dispjaringan::find($id);

        $update->itembarang = $request->itembarang;
        $update->kodeaset = $request->kodeaset;
        $update->jumlahunit = $request->jumlahunit;
        $update->nopr = $request->nopr;
        $update->nopo = $request->nopo;
        $update->nilaiinvoice = $request->nilaiinvoice;
        $update->sumberdana = $request->sumberdana;
        $update->nilaibuku = $request->nilaibuku;
        $update->lokasi = $request->lokasi;
        $update->alasan = $request->alasan;
        $update->unit = $request->unit;

        $update->save();

        return redirect('datadispjaringan');
    }
    public function deletedispjaringan($id)
    {
        $deletedispjaringan = dispjaringan::find($id);
        if ($deletedispjaringan->delete()) {
            return redirect()->back();
        }
    }

    //DATA DISPOSAL PERLENGKAPAN MAINTANANCE
    public function showdispmaintanance()
    {
        $dispmaintanance = DB::table('dispmaintanance')->get();
        return view('Admin/datadispmaintanance', ['dispmaintanance' => $dispmaintanance]);
    }
    public function tambahdispmaintanance()
    {
        return view('Admin/tambahdispmaintanance');
    }
    public function tambahdispmaintanances(Request $request)
    {
        $tambahdispmaintanances = new dispmaintanance();
        $tambahdispmaintanances->itembarang = $request->itembarang;
        $tambahdispmaintanances->kodeaset = $request->kodeaset;
        $tambahdispmaintanances->jumlahunit = $request->jumlahunit;
        $tambahdispmaintanances->nopr = $request->nopr;
        $tambahdispmaintanances->nopo = $request->nopo;
        $tambahdispmaintanances->nilaiinvoice = $request->nilaiinvoice;
        $tambahdispmaintanances->sumberdana = $request->sumberdana;
        $tambahdispmaintanances->nilaibuku = $request->nilaibuku;
        $tambahdispmaintanances->lokasi = $request->lokasi;
        $tambahdispmaintanances->alasan = $request->alasan;
        $tambahdispmaintanances->unit = $request->unit;


        $tambahdispmaintanances->save();
        return redirect('datadispmaintanance');
    }
    public function editdispmaintanance($id)
    {
        $editdispmaintanance = dispmaintanance::find($id);

        return view('Admin.editdispmaintanance', compact('editdispmaintanance'));
    }
    public function updatedispmaintanance(Request $request, $id)
    {
        $update = dispmaintanance::find($id);

        $update->itembarang = $request->itembarang;
        $update->kodeaset = $request->kodeaset;
        $update->jumlahunit = $request->jumlahunit;
        $update->nopr = $request->nopr;
        $update->nopo = $request->nopo;
        $update->nilaiinvoice = $request->nilaiinvoice;
        $update->sumberdana = $request->sumberdana;
        $update->nilaibuku = $request->nilaibuku;
        $update->lokasi = $request->lokasi;
        $update->alasan = $request->alasan;
        $update->unit = $request->unit;

        $update->save();

        return redirect('datadispmaintanance');
    }
    public function deletedispmaintanance($id)
    {
        $deletedispmaintanance = dispmaintanance::find($id);
        if ($deletedispmaintanance->delete()) {
            return redirect()->back();
        }
    }

    //DATA DISPOSAL PERLENGKAPAN TAMAN
    public function showdisptaman()
    {
        $disptaman = DB::table('disptaman')->get();
        return view('Admin/datadisptaman', ['disptaman' => $disptaman]);
    }
    public function tambahdisptaman()
    {
        return view('Admin/tambahdisptaman');
    }
    public function tambahdisptamans(Request $request)
    {
        $tambahdisptamans = new disptaman();
        $tambahdisptamans->itembarang = $request->itembarang;
        $tambahdisptamans->kodeaset = $request->kodeaset;
        $tambahdisptamans->jumlahunit = $request->jumlahunit;
        $tambahdisptamans->nopr = $request->nopr;
        $tambahdisptamans->nopo = $request->nopo;
        $tambahdisptamans->nilaiinvoice = $request->nilaiinvoice;
        $tambahdisptamans->sumberdana = $request->sumberdana;
        $tambahdisptamans->nilaibuku = $request->nilaibuku;
        $tambahdisptamans->lokasi = $request->lokasi;
        $tambahdisptamans->alasan = $request->alasan;
        $tambahdisptamans->unit = $request->unit;


        $tambahdisptamans->save();
        return redirect('datadisptaman');
    }
    public function editdisptaman($id)
    {
        $editdisptaman = disptaman::find($id);

        return view('Admin.editdisptaman', compact('editdisptaman'));
    }
    public function updatedisptaman(Request $request, $id)
    {
        $update = disptaman::find($id);

        $update->itembarang = $request->itembarang;
        $update->kodeaset = $request->kodeaset;
        $update->jumlahunit = $request->jumlahunit;
        $update->nopr = $request->nopr;
        $update->nopo = $request->nopo;
        $update->nilaiinvoice = $request->nilaiinvoice;
        $update->sumberdana = $request->sumberdana;
        $update->nilaibuku = $request->nilaibuku;
        $update->lokasi = $request->lokasi;
        $update->alasan = $request->alasan;
        $update->unit = $request->unit;

        $update->save();

        return redirect('datadisptaman');
    }
    public function deletedisptaman($id)
    {
        $deletedisptaman = disptaman::find($id);
        if ($deletedisptaman->delete()) {
            return redirect()->back();
        }
    }


}
