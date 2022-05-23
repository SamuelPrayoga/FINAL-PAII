@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Dosen</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Data Dosen Tugas Belajar</h6>
    </div>
    <div class="card-body">
        <form action="{{route('datadosentugas.updatedosentugas',$editdosentugas->nidn)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Nama Dosen</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="namaDosen" name="namaDosen" class="form-control" value="{{$editdosentugas->namaDosen}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">NIDN</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="nidn" name="nidn" class="form-control" value="{{$editdosentugas->nidn}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Program Studi</label>
                <div class="col-sm-9">
                    <select class="form-control"  required="required" name="prodi" aria-label="Default select example" >
                        <option value="{{$editdosentugas->prodi}}">{{$editdosentugas->prodi}}</option>
                        <option value="D3 TK">D3 TK</option>
                        <option value="D3 TI">D3 TI</option>
                        <option value="D4 TRPL">D4 TRPL</option>
                        <option value="S1 SI">S1 SI</option>
                        <option value="S1 IF">S1 IF</option>
                        <option value="S1 MR">S1 MR</option>
                        <option value="S1 TB">S1 TB</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Lokasi</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="lokasi" name="lokasi" class="form-control" value="{{$editdosentugas->lokasi}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Program</label>
                <div class="col-sm-9">
                    <select class="form-control"  required="required" name="program" aria-label="Default select example" >
                        <option value="{{$editdosentugas->program}}">{{$editdosentugas->program}}</option>
                        <option value="Sarjana">Sarjana</option>
                        <option value="Sarjana Terapan">Sarjana Terapan</option>
                        <option value="Magister">Magister</option>
                        <option value="Doktoral">Doktoral</option>
                        <option value="Profesor">Profesor</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Program Studi</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="programStudi" name="programStudi" class="form-control" value="{{$editdosentugas->programStudi}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Mulai Belajar</label>
                <div class="col-sm-9">
                    <input type="date" required="required" id="mulaiTugas" name="mulaiTugas" class="form-control" value="{{$editdosentugas->mulaiTugas}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Rencana Kembali</label>
                <div class="col-sm-9">
                    <input type="date" id="rencanaAktif" name="rencanaAktif" class="form-control" value="{{$editdosentugas->rencanaAktif}}">
                </div>
            </div>
    </div>
    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
    </form>
</div>
<div class="card-body">
</div>


@include('Admin.footeradmin')
