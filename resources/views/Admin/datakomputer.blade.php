@include('Admin.navadmin')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>DATA KOMPUTER</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard Admin</a></li>
                        <li class="breadcrumb-item active">Data Komputer</li>
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
                            <h3 class="card-title">Data Komputer</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <table id="dataTable" class="table table-bordered table-striped">
                                <thead class="table-primary">
                                    <tr>
                                        <th>No</th>
                                        <th>Ruangan/Gedung</th>
                                        <th>Kategori</th>
                                        <th>Jumlah</th>
                                        <th>Penanggungjawab</th>
                                        <th>Keterangan</th>
                                        <th>
                                            <center>Action</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i=1 @endphp
                                    @foreach ($komputer as $komp)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $komp->gedung }}</td>
                                            <td>{{ $komp->kategori }}</td>
                                            <td>{{ $komp->jumlah }}</td>
                                            <td>{{ $komp->penanggungjawab }}</td>
                                            <td>{{ $komp->keterangan }}</td>
                                            <td width="9%">
                                                <center>
                                                    <button type="button" class="btn btn-transparent-dark btn-sm"
                                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <button class="dropdown-item" data-toggle="modal" data-target="#myModal1{{ $komp->id }}"><i class="fas fa-eye"></i> View</button>
                                                        <button class="dropdown-item" onclick="window.location.href='/datakomputer/editkomputer/{{ $komp->id }}'"><i class="fas fa-edit"></i> Edit</button>
                                                    </div>
                                                    <button type="button" class="btn btn-transparent-dark btn-sm" data-toggle="modal"
                                                        data-target="#myModal{{ $komp->id }}"><i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </center>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-primary btn-sm" onclick="window.location.href='/tambahkomputer'"><i
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
<!-- Modal -->
@foreach ($komputer as $komp)
    <div class="modal fade" id="myModal{{ $komp->id }}" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">Hapus Data Alat Elektronik dan Inventaris Lainnya</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapusnya?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-danger btn-sm"
                        onclick="window.location.href='/datakomputer/deletekomputer/{{ $komp->id }}'">Hapus</button>
                </div>
            </div>
        </div>
    </div>
@endforeach

@foreach ($komputer as $komp)
    <div class="modal fade" id="myModal1{{ $komp->id }}" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">Lihat Data Komputer</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-4"><strong>Gedung</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $komp->gedung }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Kategori</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $komp->kategori }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Jumlah </strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $komp->jumlah }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Penanggung Jawab</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $komp->penanggungjawab }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Jabatan</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $komp->jabatan }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Keterangan</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $komp->keterangan }}</div>
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
