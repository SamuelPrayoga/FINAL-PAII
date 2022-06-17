@include('Admin.navadmin')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>DATA MAHASISWA AKTIF</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard Admin</a></li>
                        <li class="breadcrumb-item active">Data Mahasiswa Aktif</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Mahasiswa Aktif</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <table id="dataTable" class="table table-bordered table-striped">
                                <thead class="table-primary">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Mahasiswa</th>
                                        <th>NIM</th>
                                        <th>Fakultas</th>
                                        <th>Program Studi</th>
                                        <th>Angkatan</th>
                                        <th>Jalur Masuk</th>
                                        <th>Dosen Wali</th>
                                        <th><center>Action</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i=1 @endphp
                                    @foreach ($mahasiswaaktif as $s)
                                        <tr>
                                            <td>{{ $i++}}</td>
                                            <td width="24%">{{ $s->nama }}</td>
                                            <td>{{ $s->nim }}</td>
                                            <td>{{ $s->fakultas }}</td>
                                            <td>{{ $s->prodi }}</td>
                                            <td><center>{{ $s->angkatan }}</center></td>
                                            <td>{{ $s->jalurmasuk }}</td>
                                            <td width="24%">{{ $s->dosenwali }}</td>
                                            <td width="9%">
                                                <center>
                                                    <button type="button" class="btn btn-transparent-dark btn-sm"
                                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <button class="dropdown-item" data-toggle="modal" data-target="#myModals{{ $s->id }}"><i class="fas fa-eye"></i> View</button>
                                                        <button class="dropdown-item" onclick="window.location.href='/datamahasiswaaktif/editmahasiswaaktif/{{ $s->id }}'"><i class="fas fa-edit"></i> Edit</button>
                                                    </div>
                                                    <button type="button" class="btn btn-transparent-dark btn-sm" data-toggle="modal"
                                                        data-target="#myModal{{ $s->id }}"><i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </center>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-primary btn-sm" onclick="window.location.href='/tambahmahasiswaaktif'"><i
                                    class="fas fa-plus-square"></i> Tambah Data</button>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
</div>

<!--footer-->
</div>
@foreach ($mahasiswaaktif as $s)
<div class="modal fade" id="myModal{{ $s->id }}" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Hapus Data Mahasiswa Aktif</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapusnya?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger btn-sm"
                    onclick="window.location.href='/datamahasiswaaktif/deletemahasiswaaktif/{{ $s->id }}'">Hapus</button>
            </div>
        </div>
    </div>
</div>
@endforeach

@foreach ($mahasiswaaktif as $s )
<!-- Modal -->
<div class="modal fade" id="myModals{{$s->id}}" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Lihat Detail Mahasiswa Aktif</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4">Nama Mahasiswa</div>
                    <div class="col-sm-2">:</div>
                    <div class="col-md-6 text-primary">{{$s->nama}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-4">NIM</div>
                    <div class="col-sm-2">:</div>
                    <div class="col-md-6">{{$s->nim}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-4">Fakultas</div>
                    <div class="col-sm-2">:</div>
                    <div class="col-md-6">{{$s->fakultas}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-4">Program Studi</div>
                    <div class="col-sm-2">:</div>
                    <div class="col-md-6">{{$s->prodi}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-4">Kelas</div>
                    <div class="col-sm-2">:</div>
                    <div class="col-md-6">{{$s->kelas}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-4">Angkatan</div>
                    <div class="col-sm-2">:</div>
                    <div class="col-md-6">{{$s->angkatan}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-4">Jalur Masuk</div>
                    <div class="col-sm-2">:</div>
                    <div class="col-md-6">{{$s->jalurmasuk}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-4">Nomor Telepon</div>
                    <div class="col-sm-2">:</div>
                    <div class="col-md-6">{{$s->notelp}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-4">Email Aktif</div>
                    <div class="col-sm-2">:</div>
                    <div class="col-md-6">{{$s->emailaktif}}</div>
                </div>
                <div class="row">
                    <div class="col-sm-4">Dosen Wali</div>
                    <div class="col-sm-2">:</div>
                    <div class="col-md-6">{{$s->dosenwali}}</div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
            </div>
        </div>

    </div>
</div>
@endforeach
<!-- End of Main Content -->

<footer class="main-footer">
    <strong>Copyright &copy; 2022 <a href="https://del.ac.id">Dashboard Rektor IT Del</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0.0
    </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<!-- Page level plugins -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#dataTable').DataTable({
            dom: 'Bfrtip',
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
        });
    });
</script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
<!-- Page specific script -->
</body>

</html>
