@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Penambahan Asset</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Perlengkapan Taman</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Item Barang</th>
                        <th>Tipe Barang</th>
                        <th>Kode Aset</th>
                        <th>Jumlah Unit</th>
                        <th>No PR</th>
                        <th>No PO</th>
                        <th><center>Action</center></th>
                    </tr>
                </thead>

                <tbody>
                    @php $i=1 @endphp
                    @foreach ($ltaman as $lg)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $lg->itembarang }}</td>
                            <td>{{ $lg->tipebarang }}</td>
                            <td>{{ $lg->kodeaset }}</td>
                            <td>{{ $lg->jumlahunit }}</td>
                            <td>{{ $lg->nopr }}</td>
                            <td>{{ $lg->nopo }}</td>
                            <td width="9%">
                                <center>
                                    <button type="button" class="btn btn-transparent-dark btn-sm"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <button class="dropdown-item" data-toggle="modal" data-target="#myModal1{{ $lg->id }}"><i class="fas fa-eye"></i> View</button>
                                        <button class="dropdown-item" onclick="window.location.href='/dataltaman/editltaman/{{ $lg->id }}'"><i class="fas fa-edit"></i> Edit</button>
                                    </div>
                                    <button type="button" class="btn btn-transparent-dark btn-sm" data-toggle="modal"
                                        data-target="#myModal{{ $lg->id }}"><i class="fas fa-trash-alt"></i>
                                    </button>
                                </center>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button type="button" class="btn btn-primary btn-sm" onclick="window.location.href='/tambahltaman'"><i
                    class="fas fa-plus-square"></i> Tambah Data</button>
        </div>
    </div>
</div>
<div class="card-body">
</div>

<!-- Modal -->
@foreach ($ltaman as $lg)
<div class="modal fade" id="myModal{{ $lg->id }}" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Hapus Data Perlengkapan Taman</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapusnya?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger btn-sm"
                    onclick="window.location.href='/dataltaman/deleteltaman/{{ $lg->id }}'">Hapus</button>
            </div>
        </div>
    </div>
</div>
@endforeach

@foreach ($ltaman as $lg)
    <div class="modal fade" id="myModal1{{ $lg->id }}" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">Lihat Data Perlengkapan Taman</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-4"><strong>Item Barang</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{$lg->itembarang}}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Tipe Barang</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{$lg->tipebarang}}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Kode Aset</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{$lg->kodeaset}}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Jumlah Unit</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{$lg->jumlahunit}}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>No PR</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{$lg->nopr}}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>No PO</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{$lg->nopo}}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Nilai Invoice</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{$lg->nilaiinvoice}}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Umur Ekonomis</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{$lg->umurekonomis}}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Depresiasi Perbulan</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{$lg->depresiasi}}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Sumber Dana</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{$lg->sumberdana}}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Akumulasi Depresiasi</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{$lg->akumulasidepresiasi}}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Nilai Buku</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{$lg->nilaibuku}}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Lokasi</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{$lg->lokasi}}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Unit</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{$lg->unit}}</div>
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
