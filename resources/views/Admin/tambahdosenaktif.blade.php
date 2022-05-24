@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Dosen</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Dosen Aktif</h6>
    </div>
    <div class="card-body">
        <form action="{{Route('dosenaktif.tambah')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Nama Dosen <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="namaDosen" name="namaDosen" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">NIDN</label>
                <div class="col-sm-9">
                    <input type="text" id="nidn" name="nidn" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Program Studi <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <select class="form-control"  required="required" name="prodi" aria-label="Default select example" >
                        <option value="D3 TK">D3 TK</option>
                        <option value="D3 TI">D3 TI</option>
                        <option value="D4 TRPL">D4 TRPL</option>
                        <option value="S1 SI">S1 SI</option>
                        <option value="S1 IF">S1 IF</option>
                        <option value="S1 MR">S1 MR</option>
                        <option value="S1 TB">S1 TB</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Jabatan Akademik</label>
                <div class="col-sm-9">
                    <input type="text" id="jabatanAkademik" name="jabatanAkademik" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Golongan Kepangkatan</label>
                <div class="col-sm-9">
                    <input type="text" id="golonganKepangkatan" name="golonganKepangkatan" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Status Ikatan Kerja <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <select class="form-control"  required="required" name="statusIkatan" aria-label="Default select example" >
                        <option value="Dosen PNS">Dosen PNS</option>
                        <option value="Dosen Non-PNS">Dosen Non-PNS</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Aktif Start <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <input type="date" required="required" id="aktifStart" name="aktifStart" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Aktif End</label>
                <div class="col-sm-9">
                    <input type="date" id="aktifEnd" name="aktifEnd" class="form-control">
                </div>
            </div>
    </div>
    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-plus-square"></i> Tambah</button>
    </form>
</div>
<div class="card-body">
</div>


@include('Admin.footeradmin')
