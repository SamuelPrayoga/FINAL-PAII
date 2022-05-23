@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Gedung & Bangunan</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data List Gedung</h6>
    </div>
    <div class="card-body">
        <form action="{{route('datakapasitasruangankelas.updatekapasitasruangankelas',$editkapasitasruangankelas->id)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Ruangan</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="ruangan" name="ruangan" class="form-control" value="{{$editkapasitasruangankelas->ruangan}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Keterangan</label>
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
                <label class="col-sm-3 col-form-label">Luas (m<sup>2</sup>)</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="luas" name="luas" class="form-control" value="{{$editkapasitasruangankelas->luas}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Kapasitas Normal</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="kapasitasnormal" name="kapasitasnormal" class="form-control" value="{{$editkapasitasruangankelas->kapasitasnormal}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Perkiraan Kursi, Meja Hasil survei Langsung (Social Distancing)</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="perkiraan" name="perkiraan" class="form-control" value="{{$editkapasitasruangankelas->perkiraan}}">
                </div>
            </div>
    </div>
    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
    </form>
</div>
<div class="card-body">
</div>


@include('Admin.footeradmin')
