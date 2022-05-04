@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Dosen</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Data Dosen Tugas Belajar</h6>
    </div>
    <div class="card-body">
        <form action="{{route('datastaf.updatestaf',$editstaf->stafID)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Nama Staff</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="namastaf" name="namastaf" class="form-control" value="{{$editstaf->namastaf}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">ID Staff</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="stafID" name="stafID" class="form-control" value="{{$editstaf->stafID}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Unit Kerja</label>
                <div class="col-sm-9">
                    <select class="form-control"  required="required" name="bagian" aria-label="Default select example" >
                        <option value="{{$editstaf->bagian}}">{{$editstaf->bagian}}</option>
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
                    <input type="text" required="required" id="jabatan" name="jabatan" class="form-control" value="{{$editstaf->jabatan}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Pendidikan</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="pendidikan" name="pendidikan" class="form-control" value="{{$editstaf->pendidikan}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Aktif Start</label>
                <div class="col-sm-9">
                    <input type="date" required="required" id="aktifstart" name="aktifstart" class="form-control" value="{{$editstaf->aktifstart}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Aktif End</label>
                <div class="col-sm-9">
                    <input type="date" id="aktifend" name="aktifend" class="form-control" value="{{$editstaf->aktifend}}">
                </div>
            </div>
    </div>
    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
    </form>
</div>
<div class="card-body">
</div>


@include('Admin.footeradmin')
