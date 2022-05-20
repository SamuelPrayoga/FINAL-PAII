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
                    <input type="text" placeholder="YYYY" required="required" id="tahun" name="tahun" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Program Studi</label>
                <div class="col-sm-9">
                    <select class="form-control"  required="required" name="program_studi" aria-label="Default select example" >
                        <option value="D3 TK">D3 TK</option>
                        <option value="D3 TI">D3 TI</option>
                        <option value="D4 TRPL">D4 TRPL</option>
                        <option value="S1 SI">S1 SI</option>
                        <option value="S1 IF">S1 IF</option>
                        <option value="S1 MR">S1 MR</option>
                        <option value="S1 BP">S1 BP</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Jumlah Pendaftar Lulus</label>
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
