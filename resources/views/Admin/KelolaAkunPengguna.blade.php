@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Kelola Akun Pengguna</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Akun Pengguna</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th><center>No</center></th>
                        <th><center>Email</center></th>
                        <th><center>Username</center></th>
                        <th><center>Role</center></th>
                        <th><center>Action</center></th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1 @endphp
                        <tr>
                            <td width="2%">{{ $i++}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td width="22%">

                                <button type="button" class="btn btn-warning"
                                    onclick="window.location.href='/datakapasitasruangankelas/editkapasitasruangankelas/'"><i
                                        class="fas fa-edit" value="Edit"></i>
                                    Edit</button>
                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target="#myModal"><i class="fas fa-ban"></i>
                                Nonaktifkan</button>
                            </td>
                        </tr>

                </tbody>
            </table>
            <button type="button" class="btn btn-primary" onclick="window.location.href='/tambahkapasitasruangankelas'"><i
                    class="fas fa-plus-square"></i> Tambah Akun Pengguna</button>
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
                <h4 class="modal-title">Nonaktifkan Akun</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menonaktifkannya?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger"
                    onclick="window.location.href='/datakapasitasruangankelas/deletekapasitasruangankelas/'">Nonaktifkan</button>
            </div>
        </div>
    </div>
</div>


@include('Admin.footeradmin')
