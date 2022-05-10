@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Agenda Rektor</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Agenda Rektor</h6>
    </div>
    <div class="card-body">
        <form action="{{route('dataagendarektor.updateagendarektor',$editagendarektor->id)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Nama Kegiatan</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="namakegiatan" name="namakegiatan" class="form-control" value="{{$editagendarektor->namakegiatan}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Penyelenggara</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="penyelenggara" name="penyelenggara" class="form-control" value="{{$editagendarektor->penyelenggara}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Lokasi</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="lokasi" name="lokasi" class="form-control" value="{{$editagendarektor->lokasi}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Mulai</label>
                <div class="col-sm-9">
                    <input type="datetime-local" required="required" id="mulai" name="mulai" class="form-control" value="{{$editagendarektor->mulai}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Selesai</label>
                <div class="col-sm-9">
                    <input type="datetime-local" id="selesai" name="selesai" class="form-control" value="{{$editagendarektor->selesai}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Status</label>
                <div class="col-sm-9">
                    <select class="form-control"  required="required" name="status" aria-label="Default select example" >
                        <option value="{{$editagendarektor->status}}">{{$editagendarektor->status}}</option>
                        <option value="Selesai">Selesai</option>
                        <option value="Sedang Berlangsung">Sedang Berlangsung</option>
                        <option value="Dibatalkan">Dibatalkan</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Keterangan</label>
                <div class="col-sm-9">
                    <textarea name="keterangan" class="form-control" id="keterangan" cols="20" rows="3" style="width: 100%;" value="{{$editagendarektor->keterangan}}"></textarea>
                </div>
            </div>
    </div>
    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
    </form>
</div>
<div class="card-body">
</div>


@include('Admin.footeradmin')