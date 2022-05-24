@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Mahasiswa</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Mahasiswa Alumni</h6>
    </div>
    <div class="card-body">
        <form action="{{Route('mahasiswaalumni.tambah')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Nama Alumni <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="nama" name="nama" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">NIM <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="nim" name="nim" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Fakultas <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <select class="form-control"  required="required" name="fakultas" aria-label="Default select example" >
                        <option value="Vokasi">Vokasi</option>
                        <option value="FITE">FITE</option>
                        <option value="FTI">FTI</option>
                        <option value="FB">FB</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Program Studi <span class="text-danger">*</span></label>
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
                <label class="col-sm-3 col-form-label">Angkatan <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <input type="number" id="angkatan" name="angkatan" class="form-control" placeholder="YYYY">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Lulus</label>
                <div class="col-sm-9">
                    <input type="date" id="lulus" name="lulus" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Nomor Telepon</label>
                <div class="col-sm-9">
                    <input type="text" id="notelp" name="notelp" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Lokasi Kerja</label>
                <div class="col-sm-9">
                    <input type="text" id="lokasikerja" name="lokasikerja" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Posisi</label>
                <div class="col-sm-9">
                    <input type="text" id="posisi" name="posisi" class="form-control">
                </div>
            </div>
    </div>
    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-plus-square"></i> Tambah</button>
    </form>
</div>
<div class="card-body">
</div>


@include('Admin.footeradmin')
