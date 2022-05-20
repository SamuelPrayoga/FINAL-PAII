@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Staff dan Asisten Dosen</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Asisten Dosen</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Asisten Dosen</th>
                        <th>Asisten Dosen ID</th>
                        <th>Mata Kuliah yang Diasistensi</th>
                        <th>Fakultas</th>
                        <th>Program Studi</th>
                        <th>Pendidikan Terakhir</th>
                        <th><center>Action</center></th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1 @endphp
                    @foreach ($asistendosen as $s)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{ $s->namaasdos }}</td>
                            <td>{{ $s->asdosID }}</td>
                            <td>{{ $s->matakuliah }}</td>
                            <td>{{ $s->fakultas }}</td>
                            <td>{{ $s->prodi }}</td>
                            <td>{{ $s->pendidikan }}</td>
                            <td width="22%"><center>
                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                                    data-target="#myModal1{{ $s->asdosID }}"><i class="fas fa-eye"></i>
                                    Lihat</button>
                                <button type="button" class="btn btn-warning btn-sm"
                                    onclick="window.location.href='/dataasistendosen/editasistendosen/{{ $s->asdosID }}'"><i
                                        class="fas fa-edit"></i>
                                    Edit</button>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                    data-target="#myModal{{ $s->asdosID }}"><i class="fas fa-trash-alt"></i>
                                    Hapus</button></center>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button type="button" class="btn btn-primary btn-sm" onclick="window.location.href='/tambahasistendosen'"><i
                    class="fas fa-plus-square"></i> Tambah Data</button>
        </div>
    </div>
</div>
<div class="card-body">
</div>

@foreach ($asistendosen as $s)
    <!-- Modal -->
    <div class="modal fade" id="myModal{{ $s->asdosID }}" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">Hapus Data Komentar</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapusnya?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-danger btn-sm"
                        onclick="window.location.href='/dataasistendosen/deleteasistendosen/{{ $s->asdosID }}'">Hapus</button>
                </div>
            </div>

        </div>
    </div>
@endforeach

@foreach ($asistendosen as $s)
    <div class="modal fade" id="myModal1{{ $s->asdosID }}" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">Lihat Data Asisten Dosen</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-4"><strong>Nama Asisten Dosen</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $s->namaasdos }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>ID Asisten Dosen</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $s->asdosID }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Mata Kuliah yang Diasistensi</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $s->matakuliah }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Fakultas</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $s->fakultas }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Program Studi</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $s->prodi }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Pendidikan Terakhir</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $s->pendidikan }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Tahun Lulus</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $s->tahun }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Aktif Start</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ date('d M Y', strtotime($s->aktifstart))}}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Aktif End</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ date('d M Y', strtotime($s->aktifend)) }}</div>
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
