@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Dosen</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Keasramaan</h6>
    </div>
    <div class="card-body">
        <form action="{{Route('keasramaan.tambah')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Nama Pembina</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="nama" name="nama" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">ID Keasramaan</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="keasramaanID" name="keasramaanID" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Pendidikan</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="pendidikan" name="pendidikan" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Jabatan</label>
                <div class="col-sm-9">
                    <select class="form-control"  required="required" name="jabatan" aria-label="Default select example" >
                        <option value="Koordinator Keasramaan">Koordinator Keasramaan</option>
                        <option value="Pembina Asrama">Pembina Asrama</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Asrama</label>
                <div class="col-sm-9">
                    <select class="form-control"  required="required" name="asrama" aria-label="Default select example" >
                        <option value="Asrama Silo">Asrama Silo</option>
                        <option value="Asrama Kapernaum">Asrama Kapernaum</option>
                        <option value="Asrama Anthiokia">Asrama Anthiokia</option>
                        <option value="Asrama Danau Toba">Asrama Danau Toba</option>
                        <option value="Asrama Pniel">Asrama Pniel</option>
                        <option value="Asrama Mamre">Asrama Mamre</option>
                        <option value="Asrama Nazareth">Asrama Nazareth</option>
                        <option value="Rusun IV">Rusun IV</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Asal</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="asal" name="asal" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">No.Telepon</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="notelp" name="notelp" class="form-control" placeholder="(+62)">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Aktif Start</label>
                <div class="col-sm-9">
                    <input type="date" required="required" id="aktifstart" name="aktifstart" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Aktif End</label>
                <div class="col-sm-9">
                    <input type="date" id="aktifend" name="aktifend" class="form-control">
                </div>
            </div>
    </div>
    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-plus-square"></i> Tambah</button>
    </form>
</div>
<div class="card-body">
</div>


@include('Admin.footeradmin')
