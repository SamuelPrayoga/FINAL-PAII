@include('Admin.navadmin')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>DATA ASISTEN DOSEN</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard Admin</a></li>
                        <li class="breadcrumb-item active">Data Asisten Dosen</li>
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
                            <h3 class="card-title">Data Asisten Dosen</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <table id="dataTable" class="table table-bordered table-striped">
                                <thead class="table-primary">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Asisten Dosen</th>
                                        <th>Asisten Dosen ID</th>
                                        <th>Mata Kuliah</th>
                                        <th>Fakultas</th>
                                        <th>Program Studi</th>
                                        <th>Pendidikan Terakhir</th>
                                        <th><center>Action</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i=1 @endphp
                                    @foreach ($asistendosen as $s)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{ $s->namaasdos }}</td>
                                            <td>{{ $s->asdosID }}</td>
                                            <td>{{ $s->matakuliah }}</td>
                                            <td>{{ $s->fakultas }}</td>
                                            <td>{{ $s->prodi }}</td>
                                            <td>{{ $s->pendidikan }}</td>
                                            <td width="9%">
                                                <center>
                                                    <button type="button" class="btn btn-transparent-dark btn-sm" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i>
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <button class="dropdown-item" data-toggle="modal" data-target="#myModal1{{ $s->id }}"><i class="fas fa-eye"></i> View</button>
                                                            <button class="dropdown-item" onclick="window.location.href='/dataasistendosen/editasistendosen/{{ $s->id }}'"><i class="fas fa-edit"></i> Edit</button>
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
                            <button type="button" class="btn btn-primary btn-sm" onclick="window.location.href='/tambahasistendosen'"><i
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
@foreach ($asistendosen as $s)
    <!-- Modal -->
    <div class="modal fade" id="myModal{{ $s->id }}" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">Hapus Data Asisten Dosen</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapusnya?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-danger btn-sm"
                        onclick="window.location.href='/dataasistendosen/deleteasistendosen/{{ $s->id }}'">Hapus</button>
                </div>
            </div>

        </div>
    </div>
@endforeach

@foreach ($asistendosen as $s)
    <div class="modal fade" id="myModal1{{ $s->id }}" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">Lihat Data Asisten Dosen</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-4">Nama Asisten Dosen</div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6 text-primary">{{ $s->namaasdos }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">ID Asisten Dosen</div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6 ">{{ $s->asdosID }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">Mata Kuliah</div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $s->matakuliah }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">Fakultas</div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $s->fakultas }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">Program Studi</div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $s->prodi }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">Pendidikan Terakhir</div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $s->pendidikan }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">Tahun Lulus</div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $s->tahun }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">Aktif Start</div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $s->aktifstart}}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">Aktif End</div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $s->aktifend }}</div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Tutup</button>
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
