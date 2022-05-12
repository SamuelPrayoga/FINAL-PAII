@include('Admin.navadmin')


<h1 class="h3 mb-2 text-gray-800">Data Staff dan Asisten Dosen</h1>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Staff</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Staff</th>
                        <th>ID Staff</th>
                        <th>Unit Kerja</th>
                        <th>Jabatan</th>
                        <th>Pendidikan Terakhir</th>
                        <th>Aktif Start</th>
                        <th>Aktif End</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1 @endphp
                    @foreach ($staf as $st)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $st->namastaf }}</td>
                            <td>{{ $st->stafID }}</td>
                            <td>{{ $st->bagian }}</td>
                            <td>{{ $st->jabatan }}</td>
                            <td>{{ $st->pendidikan }}</td>
                            <td>{{ date('d M Y', strtotime($st->aktifstart)) }}</td>
                            <td>{{ date('d M Y', strtotime($st->aktifend)) }}</td>
                            <td width="20%"><button type="button" class="btn btn-warning"
                                    onclick="window.location.href='/datastaf/editstaf/{{ $st->stafID }}'"><i
                                        class="fas fa-edit"></i>
                                    Edit</button>
                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target="#myModal"><i class="fas fa-trash-alt"></i>
                                    Hapus</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button type="button" class="btn btn-primary" onclick="window.location.href='/tambahstaf'">
                <i class="fas fa-plus-square"></i> Tambah Data</button>
        </div>
    </div>
</div>
<div class="card-body">
</div>

<!-- Modal -->
@foreach ($staf as $st)
    <div class="modal fade" id="myModal" role="dialog">
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
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-danger"
                        onclick="window.location.href='/datastaf/deletestaf/{{ $st->stafID }}'">Hapus</button>
                </div>
            </div>
        </div>
    </div>
@endforeach

@include('Admin.footeradmin')
