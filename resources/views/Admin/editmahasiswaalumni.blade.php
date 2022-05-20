@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Mahasiswa</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Data Mahasiswa Alumni</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('datamahasiswaalumni.updatemahasiswaalumni', $editmahasiswaalumni->nim) }}" method="post"
            enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Nama Mahasiswa</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="nama" name="nama" class="form-control" value="{{$editmahasiswaalumni->nama}} ">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">NIM</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="nim" name="nim" class="form-control" value="{{$editmahasiswaalumni->nim}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Fakultas</label>
                <div class="col-sm-9">
                    <select class="form-control"  required="required" name="fakultas" aria-label="Default select example" >
                        <option value="{{ $editmahasiswaalumni->fakultas }}">{{ $editmahasiswaalumni->fakultas }}</option>
                        <option value="Vokasi">Vokasi</option>
                        <option value="FITE">FITE</option>
                        <option value="FTI">FTI</option>
                        <option value="FB">FB</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Program Studi</label>
                <div class="col-sm-9">
                    <select class="form-control"  required="required" name="prodi" aria-label="Default select example" >
                        <option value="{{ $editmahasiswaalumni->prodi }}">{{ $editmahasiswaalumni->prodi }}</option>
                        <option value="D-III Teknologi Komputer">D-III Teknologi Komputer</option>
                        <option value="D-III Teknologi Informasi">D-III Teknologi Informasi</option>
                        <option value="D-IV Teknologi Rekayasa Perangkat Lunak">D-IV Teknologi Rekayasa Perangkat Lunak</option>
                        <option value="S-1 Sistem Informasi">S-1 Sistem Informasi</option>
                        <option value="S-1 Informatika">S-1 Informatika</option>
                        <option value="S-1 Manajemen Rekayasa">S-1 Manajemen Rekayasa</option>
                        <option value="S-1 Bioteknologi">S-1 Bioteknologi</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Angkatan</label>
                <div class="col-sm-9">
                    <input type="year" required="required" id="angkatan" name="angkatan" class="form-control" value="{{$editmahasiswaalumni->angkatan}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Lulus</label>
                <div class="col-sm-9">
                    <input type="date" id="lulus" name="lulus" class="form-control" value="{{$editmahasiswaalumni->lulus}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Nomor Telepon</label>
                <div class="col-sm-9">
                    <input type="text" id="notelp" name="notelp" class="form-control" value="{{$editmahasiswaalumni->notelp}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Lokasi Kerja</label>
                <div class="col-sm-9">
                    <input type="text" id="lokasikerja" name="lokasikerja" class="form-control" value="{{$editmahasiswaalumni->lokasikerja}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Posisi</label>
                <div class="col-sm-9">
                    <input type="text" id="posisi" name="posisi" class="form-control" value="{{$editmahasiswaalumni->posisi}}">
                </div>
            </div>
    </div>
    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
    </form>
</div>
<div class="card-body">
</div>


@include('Admin.footeradmin')
