@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Perumahan Dalam</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Perumahan Dalam</h6>
    </div>
    <div class="card-body">
        <form action="{{Route('perumahandalam.tambah')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Nama Perumahan <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <input type="text"  required="required" id="namaperumahan" name="namaperumahan" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Nama Penghuni <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="namapenghuni" name="namapenghuni" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Jabatan <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="jabatan" name="jabatan" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Jumlah Kamar <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <input type="number" required="required" id="jumlahkamar" name="jumlahkamar" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Kapasitas Kamar <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <input type="number" id="kapasitaskamar" name="kapasitaskamar" class="form-control" required="required">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">I/S <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <input type="number" id="istri" name="istri" class="form-control" required="required">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">ANAK <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <input type="number" id="anak" name="anak" class="form-control" required="required">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">DLL <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <input type="number" id="dll" name="dll" class="form-control" required="required">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Total <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <input type="number" id="total" name="total" class="form-control" required="required">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Keterangan</label>
                <div class="col-sm-9">
                    <input type="text" id="keterangan" name="keterangan" class="form-control">
                </div>
            </div>
    </div>
    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-plus-square"></i> Tambah</button>
    </form>
</div>
<div class="card-body">
</div>


@include('Admin.footeradmin')
