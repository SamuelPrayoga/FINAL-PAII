@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Inventaris Kampus</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Kendaraan Kampus</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No.Plat Kendaraan</th>
                        <th>Driver</th>
                        <th>Penanggungjawab</th>
                        <th>Jenis Kendaraan</th>
                        <th>Operasional</th>
                        <th><center>Action</center></th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1 @endphp
                    @foreach ($kendaraan as $kend)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $kend->noplat }}</td>
                            <td>{{ $kend->driver }}</td>
                            <td>{{ $kend->penanggungjawab }}</td>
                            <td>{{ $kend->jeniskendaraan }}</td>
                            <td>{{ $kend->operasional }}</td>
                            <td width="25%">
                                <button type="button" class="btn btn-success" data-toggle="modal"
                                data-target="#myModal1{{ $kend->id }}"><i class="fas fa-eye"></i>
                                Lihat</button>
                                <button type="button" class="btn btn-warning"
                                    onclick="window.location.href='/datakendaraan/editkendaraan/{{ $kend->id }}'"><i
                                        class="fas fa-edit"></i>
                                    Edit</button>
                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target="#myModal{{ $kend->id }}"><i class="fas fa-trash-alt"></i>
                                    Hapus</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button type="button" class="btn btn-primary" onclick="window.location.href='/tambahkendaraan'"><i
                    class="fas fa-plus-square"></i> Tambah Data</button>
        </div>
    </div>
</div>
<div class="card-body">
</div>

<!-- Modal -->
@foreach ($kendaraan as $kend)
<div class="modal fade" id="myModal{{ $kend->id }}" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Hapus Data Kendaraan Kampus</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapusnya?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger"
                    onclick="window.location.href='/datakendaraan/deletekendaraan/{{ $kend->id }}'">Hapus</button>
            </div>
        </div>
    </div>
</div>
@endforeach

@foreach ($kendaraan as $kend)
    <div class="modal fade" id="myModal1{{ $kend->id }}" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">Lihat Data Kendaraan Kampus</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-4"><strong>No.Plat Kendaraan</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{$kend->noplat}}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Driver</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{$kend->driver}}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Penanggung Jawab </strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{$kend->penanggungjawab}}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Jenis Kendaraan</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{$kend->jeniskendaraan}}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Operasional</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{$kend->operasional}}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Keterangan</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{$kend->keterangan }}</div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
@endforeach

@include('Admin.footeradmin')
