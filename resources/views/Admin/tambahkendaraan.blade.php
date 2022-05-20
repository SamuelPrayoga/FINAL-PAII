@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Inventaris Kampus</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Kendaraan Kampus</h6>
    </div>
    <div class="card-body">
        <form action="{{Route('kendaraan.tambah')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">No.Plat Kendaraan</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="noplat" name="noplat" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Driver</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="driver" name="driver" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Penanggung Jawab</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="penanggungjawab" name="penanggungjawab" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Jenis Kendaraan</label>
                <div class="col-sm-9">
                    <select class="form-control"  required="required" name="jeniskendaraan" aria-label="Default select example" >
                        <option value="Sepeda Motor">Sepeda Motor</option>
                        <option value="Bus">Bus</option>
                        <option value="Mobil SUV ">Mobil SUV </option>
                        <option value="Mobil Pick Up">Mobil Pick Up</option>
                        <option value="Mobil Truk">Mobil Truk</option>
                        <option value="Kendaraan Roda 3">Kendaraan Roda 3</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Operasional</label>
                <div class="col-sm-9">
                    <select class="form-control"  required="required" name="operasional" aria-label="Default select example" >
                        <option value="Mahasiswa">Mahasiswa</option>
                        <option value="Dosen/Staff">Dosen/Staff</option>
                        <option value="Rektorat ">Rektorat </option>
                        <option value="Keasramaan">Keasramaan</option>
                        <option value="Kantin">Kantin</option>
                        <option value="Satpam">Satpam</option>
                        <option value="Pekerja Lapangan">Pekerja Lapangan</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Keterangan</label>
                <div class="col-sm-9">
                    <input type="text"  id="keterangan" name="keterangan" class="form-control">
                </div>
            </div>
    </div>
    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-plus-square"></i> Tambah</button>
    </form>
</div>
<div class="card-body">
</div>


@include('Admin.footeradmin')
