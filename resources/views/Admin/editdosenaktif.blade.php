@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Dosen</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Data Dosen Aktif</h6>
    </div>
    <div class="card-body">
        <form action="{{route('datadosenaktif.updatedosenaktif',$editdosenaktif->nidn)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Nama Dosen</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="namaDosen" name="namaDosen" class="form-control" value="{{$editdosenaktif->namaDosen}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">NIDN</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="nidn" name="nidn" class="form-control" value="{{$editdosenaktif->nidn}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Program Studi</label>
                <div class="col-sm-9">
                    <select class="form-control"  required="required" name="prodi" aria-label="Default select example" >
                        <option value="{{$editdosenaktif->prodi}}">{{$editdosenaktif->prodi}}</option>
                        <option value="D-III Teknologi Komputer">D-III Teknologi Komputer</option>
                        <option value="D-III Teknologi Informasi">D-III Teknologi Informasi</option>
                        <option value="D-IV Teknologi Rekayasa Perangkat Lunak">D-IV Teknologi Rekayasa Perangkat Lunak</option>
                        <option value="S-1 Sistem Informasi">S-1 Sistem Informasi</option>
                        <option value="S-1 Informatika">S-1 Informatika</option>
                        <option value="S-1 Manajemen Rekayasa">S-1 Manajemen Rekayasa</option>
                        <option value="S-1 Bioteknologi">S-1 Bioteknologi</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Jabatan Akademik</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="jabatanAkademik" name="jabatanAkademik" class="form-control" value="{{$editdosenaktif->jabatanAkademik}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Golongan Kepangkatan</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="golonganKepangkatan" name="golonganKepangkatan" class="form-control" value="{{$editdosenaktif->golonganKepangkatan}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Status Ikatan Kerja</label>
                <div class="col-sm-9">
                    <select class="form-control"  required="required" name="statusIkatan" aria-label="Default select example" >
                        <option value="{{$editdosenaktif->statusIkatan}}">{{$editdosenaktif->statusIkatan}}</option>
                        <option value="Dosen PNS">Dosen PNS</option>
                        <option value="Dosen NON-PNS">Dosen NON-PNS</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Aktif Start</label>
                <div class="col-sm-9">
                    <input type="date" required="required" id="aktifStart" name="aktifStart" class="form-control" value="{{$editdosenaktif->aktifStart}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Aktif End</label>
                <div class="col-sm-9">
                    <input type="date" id="aktifEnd" name="aktifEnd" class="form-control" value="{{$editdosenaktif->aktifEnd}}">
                </div>
            </div>
    </div>
    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
    </form>
</div>
<div class="card-body">
</div>


@include('Admin.footeradmin')
