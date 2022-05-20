@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Staff dan Pegawai</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Data Asisten Dosen</h6>
    </div>
    <div class="card-body">
        <form action="{{route('dataasistendosen.updateasistendosen',$editasistendosen->asdosID)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Nama Asisten Dosen</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="namaasdos" name="namaasdos" class="form-control" value="{{$editasistendosen->namaasdos}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Asisten Dosen ID</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="asdosID" name="asdosID" class="form-control" value="{{$editasistendosen->asdosID}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Mata Kuliah yang Diasistensi</label>
                <div class="col-sm-9">
                    <textarea name="matakuliah" class="form-control" id="matakuliah" cols="20" rows="5" style="width: 100%;">{{$editasistendosen->matakuliah}}</textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Fakultas</label>
                <div class="col-sm-9">
                    <select class="form-control"  required="required" name="fakultas" aria-label="Default select example" >
                        <option value="{{$editasistendosen->fakultas}}">{{$editasistendosen->fakultas}}</option>
                        <option value="Vokasi">Vokasi</option>
                        <option value="FITE">FITE</option>
                        <option value="FTI">FTI</option>
                        <option value="FB">FB</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Program Studi</label>
                <div class="col-sm-9">
                    <textarea name="prodi" class="form-control" id="prodi" cols="20" rows="5" style="width: 100%;">{{$editasistendosen->prodi}}</textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Pendidikan Terakhir</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="pendidikan" name="pendidikan" class="form-control" value="{{$editasistendosen->pendidikan}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Tahun Lulus</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="tahun" name="tahun" class="form-control" value="{{$editasistendosen->tahun}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Aktif Start</label>
                <div class="col-sm-9">
                    <input type="date" required="required" id="aktifstart" name="aktifstart" class="form-control" value="{{$editasistendosen->aktifstart}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Aktif End</label>
                <div class="col-sm-9">
                    <input type="date" id="aktifend" name="aktifend" class="form-control" value="{{$editasistendosen->aktifend}}">
                </div>
            </div>
    </div>
    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
    </form>
</div>
<div class="card-body">
</div>


@include('Admin.footeradmin')
