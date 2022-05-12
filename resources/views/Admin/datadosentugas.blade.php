@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Dosen</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Dosen Tugas Belajar</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Dosen</th>
                        <th>NIDN</th>
                        <th>Prodi Basis</th>
                        <th>Lokasi Tugas Belajar</th>
                        <th>Program</th>
                        <th>Program Studi Lanjutan</th>
                        <th>Mulai Belajar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1 @endphp
                    @foreach ($dosentugas as $dt)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $dt->namaDosen }}</td>
                            <td>{{ $dt->nidn }}</td>
                            <td>{{ $dt->prodi }}</td>
                            <td>{{ $dt->lokasi }}</td>
                            <td>{{ $dt->program }}</td>
                            <td>{{ $dt->programStudi }}</td>
                            <td>{{ date('d M Y', strtotime($dt->mulaiTugas)) }}</td>
                            <td width="25%">
                                <button type="button" class="btn btn-success" data-toggle="modal"
                                data-target="#myModal1{{ $dt->nidn }}"><i class="fas fa-eye"></i>
                                Lihat</button><button type="button" class="btn btn-warning"
                                    onclick="window.location.href='/datadosentugas/editdosentugas/{{ $dt->nidn }}'"><i
                                        class="fas fa-edit"></i>
                                    Edit</button>
                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target="#myModal{{ $dt->nidn }}"><i class="fas fa-trash-alt"></i>
                                    Hapus</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button type="button" class="btn btn-primary" onclick="window.location.href='/tambahdosentugas'"><i
                    class="fas fa-plus-square"></i> Tambah Data</button>
        </div>
    </div>
</div>
<div class="card-body">
</div>

<!-- Modal -->
@foreach ($dosentugas as $dt)
<div class="modal fade" id="myModal{{ $dt->nidn }}" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Hapus Data Komentar</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapusnya? </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-danger"
                    onclick="window.location.href='/datadosentugas/deletedosentugas/{{ $dt->nidn }}'">Hapus</button>
            </div>
        </div>
    </div>
</div>
@endforeach

@foreach ($dosentugas as $dt)
    <div class="modal fade" id="myModal1{{ $dt->nidn }}" role="dialog">
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
                        <div class="col-md-6">{{$dt->namaDosen}}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>NIDN</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{$dt->nidn}}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Program Basis</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{$dt->prodi}}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Lokasi Tugas Belajar</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{$dt->lokasi}}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Program Studi Lanjutan</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{$dt->programStudi}}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Mulai Tugas Belajar</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{date('d M Y', strtotime($dt->mulaiTugas))}}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Rencana Aktif</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{date('d M Y', strtotime($dt->rencanaAktif))}}</div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>
@endforeach

@include('Admin.footeradmin')
