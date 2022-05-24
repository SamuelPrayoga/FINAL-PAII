@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Gedung & Bangunan</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Kapasitas Ruangan</h6>
    </div>
    <div class="card-body">
        <form action="{{Route('kapasitasruangankelas.tambah')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Ruangan <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="ruangan" name="ruangan" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Keterangan <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <select class="form-control"  required="required" name="keterangan" aria-label="Default select example" >
                        <option value="Ruang Kuliah Umum">Ruang Kuliah Umum</option>
                        <option value="Ruang Kelas Belajar">Ruang Kelas Belajar</option>
                        <option value="Laboratorium Komputer">Laboratorium Komputer</option>
                        <option value="Laboratorium Desprin">Laboratorium Desprin</option>
                        <option value="Laboratorium Praktikum Analisis Data">Laboratorium Praktikum Analisis Data</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Luas (m<sup>2</sup>) <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="luas" name="luas" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Kapasitas Normal <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="kapasitasnormal" name="kapasitasnormal" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Perkiraan Kursi, Meja Hasil survei Langsung (Social Distancing) <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="perkiraan" name="perkiraan" class="form-control">
                </div>
            </div>
    </div>
    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-plus-square"></i> Tambah</button>
    </form>
</div>
<div class="card-body">
</div>


@include('Admin.footeradmin')
