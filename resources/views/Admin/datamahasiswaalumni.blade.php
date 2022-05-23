@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Mahasiswa</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa Alumni</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Mahasiswa</th>
                        <th>NIM</th>
                        <th>Fakultas</th>
                        <th>Program Studi</th>
                        <th>Angkatan</th>
                        <th>Tahun Lulus</th>
                        <th>Lokasi Kerja</th>
                        <th><center>Action</center></th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1 @endphp
                    @foreach ($mahasiswaalumni as $s)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $s->nama }}</td>
                            <td>{{ $s->nim }}</td>
                            <td>{{ $s->fakultas }}</td>
                            <td>{{ $s->prodi }}</td>
                            <td>{{ $s->angkatan }}</td>
                            <td>{{ $s->lulus }}</td>
                            <td>{{ $s->lokasikerja }}</td>
                            <td width="9%">
                                <center>
                                    <button type="button" class="btn btn-transparent-dark btn-sm"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <button class="dropdown-item" data-toggle="modal" data-target="#myModal1{{ $s->nim }}"><i class="fas fa-eye"></i> View</button>
                                        <button class="dropdown-item" onclick="window.location.href='/datamahasiswaalumni/editmahasiswaalumni/{{ $s->nim }}'"><i class="fas fa-edit"></i> Edit</button>
                                    </div>
                                    <button type="button" class="btn btn-transparent-dark btn-sm" data-toggle="modal"
                                        data-target="#myModal{{ $s->nim }}"><i class="fas fa-trash-alt"></i>
                                    </button>
                                </center>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button type="button" class="btn btn-primary btn-sm" onclick="window.location.href='/tambahmahasiswaalumni'"><i
                    class="fas fa-plus-square"></i> Tambah Data</button>
        </div>
    </div>
</div>
<div class="card-body">
</div>

@foreach ($mahasiswaalumni as $s)
<div class="modal fade" id="myModal{{ $s->nim }}" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Hapus Data Mahasiswa alumni</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapusnya?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger btn-sm"
                    onclick="window.location.href='/datamahasiswaalumni/deletemahasiswaalumni/{{ $s->nim }}'">Hapus</button>
            </div>
        </div>
    </div>
</div>
@endforeach

@foreach ($mahasiswaalumni as $s )
<!-- Modal -->
<div class="modal fade" id="myModal1{{$s->nim}}" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Lihat Detail Mahasiswa Alumni</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4"><strong>Nama Mahasiswa</strong></div>
                    <div class="col-sm-2">:</div>
                    <div class="col-md-6">{{$s->nama}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-4"><strong>NIM</strong></div>
                    <div class="col-sm-2">:</div>
                    <div class="col-md-6">{{$s->nim}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-4"><strong>Fakultas</strong></div>
                    <div class="col-sm-2">:</div>
                    <div class="col-md-6">{{$s->fakultas}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-4"><strong>Program Studi</strong></div>
                    <div class="col-sm-2">:</div>
                    <div class="col-md-6">{{$s->prodi}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-4"><strong>Angkatan</strong></div>
                    <div class="col-sm-2">:</div>
                    <div class="col-md-6">{{$s->angkatan}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-4"><strong>Tahun Lulus</strong></div>
                    <div class="col-sm-2">:</div>
                    <div class="col-md-6">{{$s->lulus}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-4"><strong>Nomor Telepon</strong></div>
                    <div class="col-sm-2">:</div>
                    <div class="col-md-6">{{$s->notelp}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-4"><strong>Lokasi Kerja</strong></div>
                    <div class="col-sm-2">:</div>
                    <div class="col-md-6">{{$s->lokasikerja}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-4"><strong>Posisi</strong></div>
                    <div class="col-sm-2">:</div>
                    <div class="col-md-6">{{$s->posisi}}</div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
            </div>
        </div>

    </div>
</div>
@endforeach

@include('Admin.footeradmin')
