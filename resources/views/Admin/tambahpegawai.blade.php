@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Staff dan Asisten Dosen</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Pegawai</h6>
    </div>
    <div class="card-body">
        <form action="{{Route('pegawai.tambah')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Nama Pegawai <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="nama" name="nama" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">ID Pegawai <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="pegawaiID" name="pegawaiID" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Unit Kerja <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <select class="form-control"  required="required" name="bagian" aria-label="Default select example" >
                        <option value="Security">Security</option>
                        <option value="Kantin">Kantin</option>
                        <option value="Taman">Taman</option>
                        <option value="Kebersihan">Kebersihan</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Jabatan <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <select class="form-control"  required="required" name="jabatan" aria-label="Default select example" >
                        <option value="Koordianator">Koordianator</option>
                        <option value="Anggota">Anggota</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Pendidikan <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="pendidikan" name="pendidikan" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Alamat <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <textarea name="alamat" class="form-control" id="alamat" cols="20" rows="4" style="width: 100%;" required="required"></textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">No.Telepon <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="notelp" name="notelp" class="form-control" placeholder="(+62)">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Aktif Start <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <input type="date" required="required" id="aktifstart" name="aktifstart" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Aktif End</label>
                <div class="col-sm-9">
                    <input type="date" id="aktifend" name="aktifend" class="form-control">
                </div>
            </div>
    </div>
    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah</button>
    </form>
</div>
<div class="card-body">
</div>


@include('Admin.footeradmin')
