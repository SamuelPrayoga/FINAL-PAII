@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Perumahan Dalam</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Data Perumahan Dalam</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('dataperumahandalam.updateperumahandalam', $editperumahandalam->id) }}" method="post"
            enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Nama Perumahan</label>
                <div class="col-sm-9">
                    <input type="text"  required="required" id="namaperumahan" name="namaperumahan" class="form-control" value="{{$editperumahandalam->namaperumahan }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Nama Penghuni</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="namapenghuni" name="namapenghuni" class="form-control" value="{{$editperumahandalam->namapenghuni }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Jabatan</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="jabatan" name="jabatan" class="form-control" value="{{$editperumahandalam->jabatan }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Jumlah Kamar</label>
                <div class="col-sm-9">
                    <input type="number" required="required" id="jumlahkamar" name="jumlahkamar" class="form-control" value="{{$editperumahandalam->jumlahkamar }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Kapasitas Kamar</label>
                <div class="col-sm-9">
                    <input type="number" id="kapasitaskamar" name="kapasitaskamar" class="form-control" required="required" value="{{$editperumahandalam->kapasitaskamar }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">I/S</label>
                <div class="col-sm-9">
                    <input type="number" id="istri" name="istri" class="form-control" required="required" value="{{$editperumahandalam->istri }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">ANAK</label>
                <div class="col-sm-9">
                    <input type="number" id="anak" name="anak" class="form-control" required="required" value="{{$editperumahandalam->anak }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">DLL</label>
                <div class="col-sm-9">
                    <input type="number" id="dll" name="dll" class="form-control" required="required" value="{{$editperumahandalam->dll }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Total</label>
                <div class="col-sm-9">
                    <input type="number" id="total" name="total" class="form-control" required="required" value="{{$editperumahandalam->total }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Keterangan</label>
                <div class="col-sm-9">
                    <input type="text" id="keterangan" name="keterangan" class="form-control" required="required" value="{{$editperumahandalam->keterangan }}">
                </div>
            </div>
    </div>
    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
    </form>
</div>
<div class="card-body">
</div>


@include('Admin.footeradmin')
