@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Dosen</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Dosen Aktif</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Dosen</th>
                        <th>NIDN</th>
                        <th>Prodi</th>
                        <th>Jabatan Akademik</th>
                        <th>Golongan Kepangkatan</th>
                        <th>Status Ikatan</th>
                        <th>
                            <center>Action</center>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1 @endphp
                    @foreach ($dosenaktif as $s)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $s->namaDosen }}</td>
                            <td>{{ $s->nidn }}</td>
                            <td>{{ $s->prodi }}</td>
                            <td>{{ $s->jabatanAkademik }}</td>
                            <td>{{ $s->golonganKepangkatan }}</td>
                            <td>{{ $s->statusIkatan }}</td>
                            <td width="22%">
                                <center>
                                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                                        data-target="#myModal1{{ $s->nidn }}"><i class="fas fa-eye"></i>
                                        Lihat</button>
                                    <button type="button" class="btn btn-warning btn-sm"
                                        onclick="window.location.href='/datadosenaktif/editdosenaktif/{{ $s->nidn }}'"><i
                                            class="fas fa-edit"></i>
                                        Edit</button>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#myModal{{ $s->nidn }}"><i class="fas fa-trash-alt"></i>
                                        Hapus</button>
                                </center>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button type="button" class="btn btn-primary btn-sm" onclick="window.location.href='/tambahdosenaktif'"><i
                    class="fas fa-plus-square"></i> Tambah Data</button>
        </div>
    </div>
</div>
<div class="card-body">
</div>

<!-- Modal -->
@foreach ($dosenaktif as $s)
    <div class="modal fade" id="myModal{{ $s->nidn }}" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">Hapus Data Dosen Aktif</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapusnya?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-danger btn-sm"
                        onclick="window.location.href='/datadosenaktif/deletedosenaktif/{{ $s->nidn }}'">Hapus</button>
                </div>
            </div>
        </div>
    </div>
@endforeach

@foreach ($dosenaktif as $s)
    <div class="modal fade" id="myModal1{{ $s->nidn }}" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">Lihat Data Dosen Aktif</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-4"><strong>Nama Dosen</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $s->namaDosen }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>NIDN</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $s->nidn }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Program Studi</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $s->prodi }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Jabatan Akademik</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $s->jabatanAkademik }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Golongan Kepangkatan</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $s->golonganKepangkatan }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Status Ikatan</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $s->statusIkatan }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Aktif Start</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ date('d M Y', strtotime($s->aktifStart)) }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Aktif End</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ date('d M Y', strtotime($s->aktifEnd)) }}</div>
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
