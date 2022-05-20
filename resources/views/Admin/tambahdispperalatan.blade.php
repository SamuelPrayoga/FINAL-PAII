@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Disposal Aset</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Disposal Aset Peralatan Rumah Tangga/h6>
    </div>
    <div class="card-body">
        <form action="{{Route('dispperalatan.tambah')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Item Barang</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="itembarang" name="itembarang" class="form-control">
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Kode Aset</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="kodeaset" name="kodeaset" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Jumlah Unit</label>
                <div class="col-sm-9">
                    <input type="number" id="jumlahunit" name="jumlahunit" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">No PR</label>
                <div class="col-sm-9">
                    <input type="number" id="nopr" name="nopr" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">No PO</label>
                <div class="col-sm-9">
                    <input type="number" id="nopo" name="nopo" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Nilai Invoice</label>
                <div class="col-sm-9">
                    <input type="text" id="nilaiinvoice" name="nilaiinvoice" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Sumber Dana</label>
                <div class="col-sm-9">
                    <input type="text" id="sumberdana" name="sumberdana" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Nilai Buku</label>
                <div class="col-sm-9">
                    <input type="text" id="nilaibuku" name="nilaibuku" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Lokasi</label>
                <div class="col-sm-9">
                    <input type="text" id="lokasi" name="lokasi" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Alasan Write-Off</label>
                <div class="col-sm-9">
                    <input type="text" id="alasan" name="alasan" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Unit</label>
                <div class="col-sm-9">
                    <input type="text" id="unit" name="unit" class="form-control">
                </div>
            </div>
    </div>
    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-plus-square"></i> Tambah</button>
    </form>
</div>
<div class="card-body">
</div>


@include('Admin.footeradmin')
