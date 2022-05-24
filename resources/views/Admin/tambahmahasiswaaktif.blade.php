@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Mahasiswa</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Mahasiswa Aktif</h6>
    </div>
    <div class="card-body">
        <form action="{{Route('mahasiswaaktif.tambah')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Nama Mahasiswa <span class="text-danger">*</span></label>
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
                <label class="col-sm-3 col-form-label">Kelas <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="kelas" name="kelas" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Angkatan <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <select class="form-control"  required="required" name="angkatan" aria-label="Default select example" >
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Jalur Masuk <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <select class="form-control"  required="required" name="jalurmasuk" aria-label="Default select example" >
                        <option value="PMDK">PMDK</option>
                        <option value="USM 1">USM 1</option>
                        <option value="USM 2">USM 2</option>
                        <option value="USM 3">USM 3</option>
                        <option value="UTBK">UTBK</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Nomor Telepon</label>
                <div class="col-sm-9">
                    <input type="text" id="notelp" name="notelp" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Email Aktif</label>
                <div class="col-sm-9">
                    <input type="email" id="emailaktif" name="emailaktif" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Dosen Wali</label>
                <div class="col-sm-9">
                    <input type="text" id="dosenwali" name="dosenwali" class="form-control">
                </div>
            </div>
    </div>
    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-plus-square"></i> Tambah</button>
    </form>
</div>
<div class="card-body">
</div>


@include('Admin.footeradmin')
