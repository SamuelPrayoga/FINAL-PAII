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
                        <th>
                            <center>No</center>
                        </th>
                        <th>
                            <center>Nama Pengguna</center>
                        </th>
                        <th>
                            <center>Email</center>
                        </th>
                        <th>
                            <center>Level</center>
                        </th>
                        <th>
                            <center>Status</center>
                        </th>
                        <th>
                            <center>Action</center>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1 @endphp
                    @foreach ($UserAccount as $user)
                        <tr>
                            <td width="2%">{{ $i++ }}</td>
                            <td width="20%">{{ $user->name }}</td>
                            <td width="10%">{{ $user->email }}</td>
                            <td width="2%">
                                <center>{{ $user->level }}</center>
                            </td>
                            <td width="5%">
                                <center>
                                    @if ($user->status == 'Default User')
                                        <button class="btn btn-primary btn-sm" disabled>{{ $user->status }}</button>
                                    @endif
                                    @if ($user->status == 'Added User')
                                        <button class="btn btn-success btn-sm" disabled>{{ $user->status }}</button>
                                    @endif
                                </center>
                            </td>
                            <td width="12%">
                                <center>
                                    <button type="button" class="btn btn-warning btn-sm"
                                        onclick="window.location.href='/dataakunpengguna/editakunpengguna/{{ $user->user_id }}'"><i
                                            class="fas fa-edit"></i>
                                        Edit</button>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#myModal{{ $user->user_id }}"><i class="fas fa-trash-alt"></i>
                                        Hapus</button>
                                </center>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <p>
        <center><i class="fas fa-plus-square"></i> Tambah Akun Pengguna: Akses URL "/register"</center>
    </p>
</div>
<div class="card-body">
</div>

<!-- Modal -->
@foreach ($UserAccount as $user)
    <div class="modal fade" id="myModal{{ $user->user_id }}" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Hapus Akun {{ $user->name }}</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapus akun tersebut?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-danger"
                        onclick="window.location.href='/dataakunpengguna/deleteakunpengguna/{{ $user->user_id }}'">Hapus</button>
                </div>
            </div>
        </div>
    </div>
@endforeach


@include('Admin.footeradmin')
