@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Inventaris Kampus</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Data Komputer dan Alat Elektronik Lainnya</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('datakomputer.updatekomputer', $editkomputer->id) }}" method="post"
            enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Ruangan/Gedung</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="gedung" name="gedung" class="form-control" value="{{ $editkomputer->gedung }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Kategori</label>
                <div class="col-sm-9">
                    <select class="form-control"  required="required" name="kategori" aria-label="Default select example" >
                        <option value="{{ $editkomputer->kategori }}">{{ $editkomputer->kategori }}</option>
                        <option value="Komputer">Komputer</option>
                        <option value="Proyektor">Proyektor</option>
                        <option value="Layar Proyektor">Layar Proyektor</option>
                        <option value="Alat Musik">Alat Musik</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Jumlah</label>
                <div class="col-sm-9">
                    <input type="number" required="required" id="jumlah" name="jumlah" class="form-control" value="{{ $editkomputer->jumlah }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Penanggungjawab</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="penanggungjawab" name="penanggungjawab" class="form-control" value="{{ $editkomputer->penanggungjawab }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Jabatan</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="jabatan" name="jabatan" class="form-control" value="{{ $editkomputer->jabatan }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Keterangan</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="keterangan" name="keterangan" class="form-control" value="{{ $editkomputer->keterangan }}">
                </div>
            </div>
    </div>
    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
    </form>
</div>
<div class="card-body">
</div>


@include('Admin.footeradmin')
