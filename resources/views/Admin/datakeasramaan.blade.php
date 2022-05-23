@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Staff dan Asisten Dosen</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Keasramaan</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pembina</th>
                        <th>ID Keasramaan</th>
                        <th>Pendidikan Terakhir</th>
                        <th>Jabatan</th>
                        <th>Asrama</th>
                        <th>
                            <center>Action</center>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1 @endphp
                    @foreach ($keasramaan as $ke)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $ke->nama }}</td>
                            <td>{{ $ke->keasramaanID }}</td>
                            <td>{{ $ke->pendidikan }}</td>
                            <td>{{ $ke->jabatan }}</td>
                            <td>{{ $ke->asrama }}</td>
                            <td width="9%">
                                <center>
                                    <button type="button" class="btn btn-transparent-dark btn-sm"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <button class="dropdown-item" data-toggle="modal" data-target="#myModal1{{ $ke->keasramaanID }}"><i class="fas fa-eye"></i> View</button>
                                        <button class="dropdown-item" onclick="window.location.href='/datakeasramaan/editkeasramaan/{{ $ke->keasramaanID }}'"><i class="fas fa-edit"></i> Edit</button>
                                    </div>
                                    <button type="button" class="btn btn-transparent-dark btn-sm" data-toggle="modal"
                                        data-target="#myModal{{ $ke->keasramaanID }}"><i class="fas fa-trash-alt"></i>
                                    </button>
                                </center>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button type="button" class="btn btn-primary btn-sm" onclick="window.location.href='/tambahkeasramaan'"><i
                    class="fas fa-plus-square"></i> Tambah Data</button>
        </div>
    </div>
</div>
<div class="card-body">
</div>

<!-- Modal -->
@foreach ($keasramaan as $ke)
    <div class="modal fade" id="myModal{{ $ke->keasramaanID }}" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">Hapus Data Keasramaan</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapusnya?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-danger btn-sm"
                        onclick="window.location.href='/datakeasramaan/deletekeasramaan/{{ $ke->keasramaanID }}'">Hapus</button>
                </div>
            </div>
        </div>
    </div>
@endforeach

@foreach ($keasramaan as $ke)
    <div class="modal fade" id="myModal1{{ $ke->keasramaanID }}" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">Lihat Data Keasramaan</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-4"><strong>Nama Pembina</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $ke->nama }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>ID Keasramaan</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $ke->keasramaanID }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Pendidikan Terakhir</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $ke->pendidikan }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Jabatan</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $ke->jabatan }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Asrama</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $ke->asrama }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Asal</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $ke->asal }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>No Telepon</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $ke->notelp }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Aktif Start</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ date('d M Y', strtotime($ke->aktifstart)) }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Aktif End</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ date('d M Y', strtotime($ke->aktifend)) }}</div>
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
