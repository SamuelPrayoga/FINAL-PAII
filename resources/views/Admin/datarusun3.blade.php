@include('Admin.navadmin')


<h1 class="h3 mb-2 text-gray-800"> Asrama dan Rusunawa</h1>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"> Data Rusunawa 3</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nomor Kamar</th>
                        <th>Nama Penghuni</th>
                        <th>Jabatan</th>
                        <th>Jumlah Kamar</th>
                        <th>Kapasitas/Kamar</th>
                        <th>
                            <center>Action</center>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1 @endphp
                    @foreach ($rusun3 as $rus3)
                        <tr>
                            <td width="5%">
                                <center>{{ $i++ }} </center>
                            </td>
                            <td>{{ $rus3->nomorkamar }} </td>
                            <td>{{ $rus3->namapenghuni }} </td>
                            <td>{{ $rus3->jabatan }} </td>
                            <td>
                                <center>{{ $rus3->jumlahkamar }}</center>
                            </td>
                            <td width="5%">
                                <center>{{ $rus3->kapasitaskamar }}</center>
                            </td>
                            <td width="22%">
                                <center>
                                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                                        data-target="#myModal1{{ $rus3->id }}"><i class="fas fa-eye"></i>
                                        Lihat</button>
                                    <button type="button" class="btn btn-warning btn-sm"
                                        onclick="window.location.href='/datarusun3/editrusun3/{{ $rus3->id }}'"><i
                                            class="fas fa-edit"></i>
                                        Edit</button>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#myModal{{ $rus3->id }}"><i class="fas fa-trash-alt"></i>
                                        Hapus</button>
                                </center>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button type="button" class="btn btn-primary btn-sm" onclick="window.location.href='/tambahrusun3'"><i
                    class="fas fa-plus-square"></i> Tambah Data</button>
        </div>
    </div>
</div>
<div class="card-body">
</div>

<!-- Modal -->
@foreach ($rusun3 as $rus3)
    <div class="modal fade" id="myModal{{ $rus3->id }}" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Hapus Data Rusunawa 3</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapusnya?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-danger btn-sm"
                        onclick="window.location.href='/datarusun3/deleterusun3/{{ $rus3->id }}'">Hapus</button>
                </div>
            </div>
        </div>
    </div>
@endforeach

@foreach ($rusun3 as $rus3)
    <div class="modal fade" id="myModal1{{ $rus3->id }}" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Lihat Data Rusunawa 3</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-4"><strong>Nomor Kamar</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $rus3->nomorkamar }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Nama Penghuni</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $rus3->namapenghuni }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Jabatan</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $rus3->jabatan }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Jumlah Kamar</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $rus3->jumlahkamar }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Kapasitas/Kamar</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $rus3->kapasitaskamar }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>I/S</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $rus3->istri }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Anak</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $rus3->anak }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>DLL</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $rus3->dll }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Total</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $rus3->total }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Keterangan</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $rus3->keterangan }}</div>
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
