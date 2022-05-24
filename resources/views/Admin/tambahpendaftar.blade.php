@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Pendaftar</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Pendaftar</h6>
    </div>
    <div class="card-body">
        <form action="{{Route('pendaftar.tambah')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Tahun</label>
                <div class="col-sm-9">
                    <select class="form-control"  required="required" name="tahun" aria-label="Default select example" >
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>
                        <option value="2031">2031</option>
                        <option value="2032">2032</option>
                        <option value="2033">2033</option>
                        <option value="2034">2034</option>
                        <option value="2035">2035</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Jumlah Pendaftar</label>
                <div class="col-sm-9">
                    <input type="number" required="required" id="jumlah_pendaftar" name="jumlah_pendaftar" class="form-control">
                </div>
            </div>
    </div>
    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-plus-square"></i> Tambah</button>
    </form>
</div>
<div class="card-body">
</div>


@include('Admin.footeradmin')
