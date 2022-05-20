@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Gedung dan Bangunan</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List Gedung</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Penomoran Gedung</th>
                        <th>Nama Gedung</th>
                        <th>Nama Ruangan</th>
                        <th>Kapasitas Ruangan</th>
                        <th>
                            <center>Action</center>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1 @endphp
                    @foreach ($listgedung as $lg)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $lg->penomoran }}</td>
                            <td>{{ $lg->namagedung }}</td>
                            <td>{{ $lg->namaruangan }}</td>
                            <td>{{ $lg->kapasitasruangan }}</td>
                            <td width="22%">
                                <center>
                                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                                        data-target="#myModal1{{ $lg->gedungid }}"><i class="fas fa-eye"></i>
                                        Lihat</button>
                                    <button type="button" class="btn btn-warning btn-sm"
                                        onclick="window.location.href='/datalistgedung/editlistgedung/{{ $lg->gedungid }}'"><i
                                            class="fas fa-edit"></i>
                                        Edit</button>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#myModal{{ $lg->gedungid }}"><i class="fas fa-trash-alt"></i>
                                        Hapus</button>
                                </center>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button type="button" class="btn btn-primary btn-sm" onclick="window.location.href='/tambahlistgedung'"><i
                    class="fas fa-plus-square"></i> Tambah Data</button>
        </div>
    </div>
</div>
<div class="card-body">
</div>

<!-- Modal -->
@foreach ($listgedung as $lg)
    <div class="modal fade" id="myModal{{ $lg->gedungid }}" role="dialog">
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
                        onclick="window.location.href='/datalistgedung/deletelistgedung/{{ $lg->gedungid }}'">Hapus</button>
                </div>
            </div>
        </div>
    </div>
@endforeach

@foreach ($listgedung as $lg)
    <div class="modal fade" id="myModal1{{ $lg->gedungid }}" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">Lihat Data List Gedung</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-4"><strong>ID Gedung</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $lg->gedungid }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Penomoran Gedung</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $lg->penomoran }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Nama Gedung</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $lg->namagedung }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Kapasitas Ruangan</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $lg->kapasitasruangan }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Lokasi Meja</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $lg->lokasimeja }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Nama Pemakai</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $lg->namapemakai }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Terisi</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $lg->terisi }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Ketersediaan</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $lg->ketersediaan }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Keterangan</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $lg->keterangan }}</div>
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
