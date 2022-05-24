@include('navuser')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Agenda Rektor</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Konfirmasi Kehadiran Pertemuan</h6>
    </div>
    <div class="card-body">
        <form action="{{route('AgendaRektor.updateagendarektors',$editagendarektors->id)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Nama Kegiatan</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="namakegiatan" name="namakegiatan" class="form-control" value="{{$editagendarektors->namakegiatan}}" readonly>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Penyelenggara</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="penyelenggara" name="penyelenggara" class="form-control" value="{{$editagendarektors->penyelenggara}}" readonly>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Lokasi</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="lokasi" name="lokasi" class="form-control" value="{{$editagendarektors->lokasi}}" readonly>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Tanggal</label>
                <div class="col-sm-9">
                    <input type="date" required="required" id="tanggal" name="tanggal" class="form-control" value="{{$editagendarektors->tanggal}}" readonly>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Waktu</label>
                <div class="col-sm-9">
                    <input type="time" id="waktu" name="waktu" class="form-control" value="{{$editagendarektors->waktu}}" readonly>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Keterangan</label>
                <div class="col-sm-9">
                    <textarea name="keterangan" class="form-control" id="keterangan" cols="20" rows="3" style="width: 100%;" readonly>{{$editagendarektors->keterangan}}</textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Status</label>
                <div class="col-sm-9">
                    <select class="form-control"  required="required" name="status" aria-label="Default select example" >
                        <option value="{{$editagendarektors->status}}">{{$editagendarektors->status}}</option>
                        <option value="Hadir">Hadir</option>
                        <option value="Tidak Hadir">Tidak Hadir</option>
                        <option value="Dibatalkan">Dibatalkan</option>
                    </select>
                </div>
            </div>
    </div>
    <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-check"></i> Konfirmasi</button>
    </form>
</div>
<div class="card-body">
</div>

</div>
@include('footeruser')
