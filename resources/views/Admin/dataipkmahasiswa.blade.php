@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Dosen</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Dosen Tugas Belajar</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Program Studi</th>
                        <th>Angkatan</th>
                        <th>Rataan IPK</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1 @endphp
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td></td>
                            <td></td>
                            <td width="25%">
                                <button type="button" class="btn btn-warning"
                                    onclick="window.location.href='/dataipk/editipk/'"><i
                                        class="fas fa-edit"></i>
                                    Edit</button>
                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target="#myModal"><i class="fas fa-trash-alt"></i>
                                    Hapus</button>
                            </td>
                        </tr>

                </tbody>
            </table>
            <button type="button" class="btn btn-primary" onclick="window.location.href='/tambahipk'"><i
                    class="fas fa-plus-square"></i> Tambah Data</button>
        </div>
    </div>
</div>
<div class="card-body">
</div>

<!-- Modal -->

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Hapus Data IPK</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapusnya? </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-danger"
                    onclick="window.location.href='/dataipk/deleteipk/'">Hapus</button>
            </div>
        </div>
    </div>
</div>
@endforeach

@include('Admin.footeradmin')
