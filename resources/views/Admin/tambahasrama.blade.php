@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Gedung & Bangunan</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Asrama</h6>
    </div>
    <div class="card-body">
        <form action="{{Route('asrama.tambah')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Nama Gedung</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="namagedung" name="namagedung" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Kategori</label>
                <div class="col-sm-9">
                    <select class="form-control"  required="required" name="kategori" aria-label="Default select example" >
                        <option value="ASRAMA">ASRAMA</option>
                        <option value="RUSUNAWA">RUSUNAWA</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Jumlah Kamar</label>
                <div class="col-sm-9">
                    <input type="number" id="jumlahkamar" name="jumlahkamar" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Kapasitas/Kamar</label>
                <div class="col-sm-9">
                    <input type="number" id="kapasitasruangan" name="kapasitasruangan" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Total</label>
                <div class="col-sm-9">
                    <input type="number" id="total" name="total" class="form-control">
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
