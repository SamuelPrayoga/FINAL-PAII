@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Gedung & Bangunan</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Rusunawa 3 Lantai 2</h6>
    </div>
    <div class="card-body">
        <form action="{{Route('rusun3.tambah')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Nomor Kamar</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="nomorkamar" name="nomorkamar" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Nama Penghuni</label>
                <div class="col-sm-9">
                    <input type="text" id="namapenghuni" name="namapenghuni" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Jabatan</label>
                <div class="col-sm-9">
                    <select class="form-control" name="jabatan" aria-label="Default select example" >
                        <option value=""></option>
                        <option value="Dosen">Dosen</option>
                        <option value="HRD dan Legal">HRD dan Legal</option>
                        <option value="Staff Radio">Staff Radio</option>
                        <option value="Staff BAAK">Staff BAAK</option>
                        <option value="Teaching Asistant">Teaching Asistant</option>
                        <option value="Koordinator Keamanan">Koordinator Keamanan</option>
                        <option value="Staff KHDTK">Staff KHDTK</option>
                        <option value="Laboran">Laboran</option>
                        <option value="Staff DUKTEK">Staff DUKTEK</option>
                        <option value="Staff SDI">Staff SDI</option>
                        <option value="Satpam">Satpam</option>
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
                    <input type="number" id="kapasitaskamar" name="kapasitaskamar" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">I/S</label>
                <div class="col-sm-9">
                    <input type="number" id="istri" name="istri" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Anak</label>
                <div class="col-sm-9">
                    <input type="number" id="anak" name="anak" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">DLL</label>
                <div class="col-sm-9">
                    <input type="number" id="dll" name="dll" class="form-control">
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
