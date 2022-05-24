@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Inventaris Kampus</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Komputer dan Alat Elektronik Lainnya</h6>
    </div>
    <div class="card-body">
        <form action="{{Route('komputer.tambah')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Ruangan/Gedung <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="gedung" name="gedung" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Kategori <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <select class="form-control"  required="required" name="kategori" aria-label="Default select example" >
                        <option value="Komputer">Komputer</option>
                        <option value="Proyektor">Laptop</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Jumlah <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <input type="number" required="required" id="jumlah" name="jumlah" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Penanggungjawab <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="penanggungjawab" name="penanggungjawab" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Jabatan <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="jabatan" name="jabatan" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Keterangan <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="keterangan" name="keterangan" class="form-control">
                </div>
            </div>
    </div>
    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-plus-square"></i> Tambah</button>
    </form>
</div>
<div class="card-body">
</div>


@include('Admin.footeradmin')
