@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Staff</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Staff</h6>
    </div>
    <div class="card-body">
        <form action="{{Route('staf.tambah')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Nama Staff</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="namastaf" name="namastaf" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Staff ID</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="stafID" name="stafID" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Unit Kerja</label>
                <div class="col-sm-9">
                    <select class="form-control"  required="required" name="bagian" aria-label="Default select example" >
                        <option value="BAAK">BAAK</option>
                        <option value="TENDIK">TENDIK</option>
                        <option value="DUKTEK">DUKTEK</option>
                        <option value="SDI">SDI</option>
                        <option value="REKTORAT">REKTORAT</option>
                        <option value="KEMAHASISWAAN">KEMAHASISWAAN</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Jabatan</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="jabatan" name="jabatan" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Pendidikan Terakhir</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="pendidikan" name="pendidikan" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Aktif Start</label>
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
