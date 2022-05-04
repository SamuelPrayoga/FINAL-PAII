@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Gedung & Bangunan</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data List Gedung</h6>
    </div>
    <div class="card-body">
        <form action="{{Route('listgedung.tambah')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">ID Gedung</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="gedungid" name="gedungid" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Penomoran</label>
                <div class="col-sm-9">
                    <select class="form-control"  required="required" name="penomoran" aria-label="Default select example" >
                        <option value="Gedung 1">Gedung 1</option>
                        <option value="Gedung 2">Gedung 2</option>
                        <option value="Gedung Ex Koperasi">Gedung Ex Koperasi</option>
                        <option value="Gedung Besar (Utama)">Gedung Besar (Utama)</option>
                        <option value="Gedung 3">Gedung 3</option>
                        <option value="Gedung 4">Gedung 4</option>
                        <option value="Gedung 5 dan 6">Gedung 5 dan 6</option>
                        <option value="Gedung 7">Gedung 7</option>
                        <option value="Gedung 8">Gedung 8</option>
                        <option value="Gedung 9">Gedung 9</option>
                        <option value="Container Park">Container Park</option>
                        <option value="Asrama Perpustakaan">Asrama Perpustakaan</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Nama Gedung</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="namagedung" name="namagedung" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Nama Ruangan</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="namaruangan" name="namaruangan" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Kapasitas Ruangan</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="kapasitasruangan" name="kapasitasruangan" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Lokasi Meja</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="lokasimeja" name="lokasimeja" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Nama Pemakai Ruangan</label>
                <div class="col-sm-9">
                    <input type="text" id="namapemakai" name="namapemakai" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Terisi</label>
                <div class="col-sm-9">
                    <input type="text" id="terisi" name="terisi" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Ketersediaan</label>
                <div class="col-sm-9">
                    <input type="text" id="ketersediaan" name="ketersediaan" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Keterangan</label>
                <div class="col-sm-9">
                    <input type="text"  id="keterangan" name="keterangan" class="form-control">
                </div>
            </div>
    </div>
    <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</button>
    </form>
</div>
<div class="card-body">
</div>


@include('Admin.footeradmin')
