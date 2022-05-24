@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Dosen</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pendaftar yang Lulus Sebagai Mahasiswa</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th><center>No</center></th>
                        <th><center>Tahun</center></th>
                        <th><center>Jumlah Pendaftar</center></th>
                        <th><center>Action</center></th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1 @endphp
                    @foreach ($pendaftar as $pen)
                        <tr>
                            <td width="2%">{{ $i++ }}</td>
                            <td align="center">{{ $pen->tahun }}</td>
                            <td align="center">{{ $pen->jumlah_pendaftar }}</td>
                            <td width="9%">
                                <center>
                                    <button type="button" class="btn btn-transparent-dark btn-sm"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <button class="dropdown-item" onclick="window.location.href='/datapendaftar/editpendaftar/{{$pen->pendaftar_id}}'"><i class="fas fa-edit"></i> Edit</button>
                                    </div>
                                    <button type="button" class="btn btn-transparent-dark btn-sm" data-toggle="modal"
                                        data-target="#myModal{{$pen->pendaftar_id}}"><i class="fas fa-trash-alt"></i>
                                    </button>
                                </center>
                            </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
            <button type="button" class="btn btn-primary btn-sm" onclick="window.location.href='/tambahpendaftar'"><i
                    class="fas fa-plus-square"></i> Tambah Data</button>
        </div>
    </div>
</div>
<div class="card-body">
</div>

<!-- Modal -->
@foreach ($pendaftar as $pen)
<div class="modal fade" id="myModal{{$pen->pendaftar_id}}" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Hapus Data Pendaftar</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapusnya? </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-danger btn-sm"
                    onclick="window.location.href='/datapendaftar/deletependaftar/{{$pen->pendaftar_id}}'">Hapus</button>
            </div>
        </div>
    </div>
</div>
@endforeach

@include('Admin.footeradmin')
