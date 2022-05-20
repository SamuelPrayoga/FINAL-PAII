@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Perumahan Luar</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Data Perumahan Luar</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('dataperumahanluar.updateperumahanluar', $editperumahanluar->id) }}" method="post"
            enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Nama Perumahan</label>
                <div class="col-sm-9">
                    <input type="text"  required="required" id="namaperumahan" name="namaperumahan" class="form-control" value="{{$editperumahanluar->namaperumahan }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Jumlah Kamar</label>
                <div class="col-sm-9">
                    <input type="number" required="required" id="jumlahkamar" name="jumlahkamar" class="form-control" value="{{$editperumahanluar->jumlahkamar }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Kapasitas/Kamar</label>
                <div class="col-sm-9">
                    <input type="number" required="required" id="kapasitaskamar" name="kapasitaskamar" class="form-control" value="{{$editperumahanluar->kapasitaskamar }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Jumlah</label>
                <div class="col-sm-9">
                    <input type="number" required="required" id="jumlah" name="jumlah" class="form-control" value="{{$editperumahanluar->jumlah }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Keterangan</label>
                <div class="col-sm-9">
                    <input type="text" id="keterangan" name="keterangan" class="form-control"  value="{{$editperumahanluar->keterangan }}">
                </div>
            </div>
    </div>
    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
    </form>
</div>
<div class="card-body">
</div>


@include('Admin.footeradmin')
