@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Gedung dan Bangunan</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Kantin</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Perumahan</th>
                        <th><center>Jumlah Meja</center></th>
                        <th><center>Kapasitas/Kamar</center></th>
                        <th><center>Jumlah</center></th>
                        <th><center>Action</center></th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1 @endphp
                    @foreach ($kantin as $kan)
                        <tr>
                            <td width="2%">{{ $i++ }}</td>
                            <td>{{ $kan->namaperumahan }}</td>
                            <td><center>{{ $kan->jumlahmeja }}</center></td>
                            <td><center>{{ $kan->kapasitas }}</center></td>
                            <td><center>{{ $kan->jumlah }}</center></td>
                            <td width="16%"><center>
                                <button type="button" class="btn btn-warning btn-sm"
                                    onclick="window.location.href='/datakantin/editkantin/{{ $kan->kantinID }}'"><i
                                        class="fas fa-edit"></i>
                                    Edit</button>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                    data-target="#myModal{{ $kan->kantinID }}"><i class="fas fa-trash-alt"></i>
                                    Hapus</button></center>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button type="button" class="btn btn-primary btn-sm" onclick="window.location.href='/tambahkantin'"><i
                    class="fas fa-plus-square"></i> Tambah Data</button>
        </div>
    </div>
</div>
<div class="card-body">
</div>

<!-- Modal -->
@foreach ($kantin as $kan)
<div class="modal fade" id="myModal{{ $kan->kantinID }}" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Hapus Data Kantin</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapusnya?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger btn-sm"
                    onclick="window.location.href='/datakantin/deletekantin/{{ $kan->kantinID }}'">Hapus</button>
            </div>
        </div>
    </div>
</div>
@endforeach

@include('Admin.footeradmin')
