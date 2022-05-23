@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Inventaris Kampus</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Alat Elektronik dan Inventaris Lainnya</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Ruangan/Gedung</th>
                        <th>Kategori</th>
                        <th>Jumlah</th>
                        <th>Penanggungjawab</th>
                        <th>Keterangan</th>
                        <th>
                            <center>Action</center>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1 @endphp
                    @foreach ($komputer as $komp)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $komp->gedung }}</td>
                            <td>{{ $komp->kategori }}</td>
                            <td>{{ $komp->jumlah }}</td>
                            <td>{{ $komp->penanggungjawab }}</td>
                            <td>{{ $komp->keterangan }}</td>
                            <td width="9%">
                                <center>
                                    <button type="button" class="btn btn-transparent-dark btn-sm"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <button class="dropdown-item" data-toggle="modal" data-target="#myModal1{{ $komp->id }}"><i class="fas fa-eye"></i> View</button>
                                        <button class="dropdown-item" onclick="window.location.href='/datakomputer/editkomputer/{{ $komp->id }}'"><i class="fas fa-edit"></i> Edit</button>
                                    </div>
                                    <button type="button" class="btn btn-transparent-dark btn-sm" data-toggle="modal"
                                        data-target="#myModal{{ $komp->id }}"><i class="fas fa-trash-alt"></i>
                                    </button>
                                </center>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button type="button" class="btn btn-primary btn-sm" onclick="window.location.href='/tambahkomputer'"><i
                    class="fas fa-plus-square"></i> Tambah Data</button>
        </div>
    </div>
</div>
<div class="card-body">
</div>

<!-- Modal -->
@foreach ($komputer as $komp)
    <div class="modal fade" id="myModal{{ $komp->id }}" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">Hapus Data Alat Elektronik dan Inventaris Lainnya</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapusnya?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-danger btn-sm"
                        onclick="window.location.href='/datakomputer/deletekomputer/{{ $komp->id }}'">Hapus</button>
                </div>
            </div>
        </div>
    </div>
@endforeach

@foreach ($komputer as $komp)
    <div class="modal fade" id="myModal1{{ $komp->id }}" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">Lihat Data Alat Elektronik dan Inventaris Lainnya</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-4"><strong>Gedung</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $komp->gedung }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Kategori</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $komp->kategori }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Jumlah </strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $komp->jumlah }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Penanggung Jawab</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $komp->penanggungjawab }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Jabatan</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $komp->jabatan }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Keterangan</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $komp->keterangan }}</div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
@endforeach

@include('Admin.footeradmin')
