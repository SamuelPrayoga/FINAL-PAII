@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Mahasiswa</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa Aktif</h6>
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
                        <th>Jalur Masuk</th>
                        <th>Dosen Wali</th>
                        <th><center>Action</center></th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1 @endphp
                    @foreach ($mahasiswaaktif as $s)
                        <tr>
                            <td>{{ $i++}}</td>
                            <td>{{ $s->nama }}</td>
                            <td>{{ $s->nim }}</td>
                            <td>{{ $s->fakultas }}</td>
                            <td>{{ $s->prodi }}</td>
                            <td><center>{{ $s->angkatan }}</center></td>
                            <td>{{ $s->jalurmasuk }}</td>
                            <td>{{ $s->dosenwali }}</td>
                            <td width="9%">
                                <center>
                                    <button type="button" class="btn btn-transparent-dark btn-sm"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <button class="dropdown-item" data-toggle="modal" data-target="#myModal1{{ $s->nim }}"><i class="fas fa-eye"></i> View</button>
                                        <button class="dropdown-item" onclick="window.location.href='/datamahasiswaaktif/editmahasiswaaktif/{{ $s->nim }}'"><i class="fas fa-edit"></i> Edit</button>
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
            <button type="button" class="btn btn-primary btn-sm" onclick="window.location.href='/tambahmahasiswaaktif'"><i
                    class="fas fa-plus-square"></i> Tambah Data</button>
        </div>
    </div>
</div>
<div class="card-body">
</div>

@foreach ($mahasiswaaktif as $s)
<div class="modal fade" id="myModal{{ $s->nim }}" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Hapus Data Mahasiswa Aktif</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapusnya?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger btn-sm"
                    onclick="window.location.href='/datamahasiswaaktif/deletemahasiswaaktif/{{ $s->nim }}'">Hapus</button>
            </div>
        </div>
    </div>
</div>
@endforeach

@foreach ($mahasiswaaktif as $s )
<!-- Modal -->
<div class="modal fade" id="myModal1{{$s->nim}}" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title"><strong>Lihat Detail Mahasiswa Aktif</h4>
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
                    <div class="col-sm-4"><strong>Kelas</strong></div>
                    <div class="col-sm-2">:</div>
                    <div class="col-md-6">{{$s->kelas}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-4"><strong>Angkatan</strong></div>
                    <div class="col-sm-2">:</div>
                    <div class="col-md-6">{{$s->angkatan}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-4"><strong>Jalur Masuk</strong></div>
                    <div class="col-sm-2">:</div>
                    <div class="col-md-6">{{$s->jalurmasuk}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-4"><strong>Nomor Telepon</strong></div>
                    <div class="col-sm-2">:</div>
                    <div class="col-md-6">{{$s->notelp}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-4"><strong>Email Aktif</strong></div>
                    <div class="col-sm-2">:</div>
                    <div class="col-md-6">{{$s->emailaktif}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-4"><strong>Dosen Wali</strong></div>
                    <div class="col-sm-2">:</div>
                    <div class="col-md-6">{{$s->dosenwali}}</div>
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
