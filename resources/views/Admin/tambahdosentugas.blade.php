@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Dosen</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Dosen Tugas Belajar</h6>
    </div>
    <div class="card-body">
        <form action="{{Route('dosentugas.tambah')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Nama Dosen</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="namaDosen" name="namaDosen" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">NIDN</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="nidn" name="nidn" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Program Studi Basis</label>
                <div class="col-sm-9">
                    <select class="form-control"  required="required" name="prodi" aria-label="Default select example" >
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
                <label class="col-sm-3 col-form-label">Lokasi Tugas Belajar</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="lokasi" name="lokasi" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Program</label>
                <div class="col-sm-9">
                    <select class="form-control"  required="required" name="program" aria-label="Default select example" >
                        <option value="Sarjana">Sarjana</option>
                        <option value="Sarjana Terapan">Sarjana Terapan</option>
                        <option value="Magister">Magister</option>
                        <option value="Doktoral">Doktoral</option>
                        <option value="Profesor">Profesor</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Program Studi</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="programStudi" name="programStudi" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Mulai Tugas Belajar</label>
                <div class="col-sm-9">
                    <input type="date" required="required" id="mulaiTugas" name="mulaiTugas" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Rencana Aktif Kembali</label>
                <div class="col-sm-9">
                    <input type="date" id="rencanaAktif" name="rencanaAktif" class="form-control">
                </div>
            </div>
    </div>
    <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</button>
    </form>
</div>
<div class="card-body">
</div>


@include('Admin.footeradmin')
