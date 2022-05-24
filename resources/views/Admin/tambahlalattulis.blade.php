@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Penambahan Aset</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data List Alat Tulis/PC/Notebook</h6>
    </div>
    <div class="card-body">
        <form action="{{Route('lalattulis.tambah')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Item Barang <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="itembarang" name="itembarang" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Tipe Barang <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="tipebarang" name="tipebarang" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Kode Aset <span class="text-danger">*</span></label>
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
                <label class="col-sm-3 col-form-label">Umur Ekonomis</label>
                <div class="col-sm-9">
                    <input type="text" id="umurekonomis" name="umurekonomis" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Depresiasi Perbulan</label>
                <div class="col-sm-9">
                    <input type="text" id="depresiasi" name="depresiasi" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Sumber Dana</label>
                <div class="col-sm-9">
                    <input type="text" id="sumberdana" name="sumberdana" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Akumulasi Depresiasi</label>
                <div class="col-sm-9">
                    <input type="text" id="akumulasidepresiasi" name="akumulasidepresiasi" class="form-control">
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
