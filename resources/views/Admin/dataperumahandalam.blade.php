@include('Admin.navadmin')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>DATA PERUMAHAN DALAM</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard Admin</a></li>
                        <li class="breadcrumb-item active">Data Perumahan Dalam</li>
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
                            <h3 class="card-title">Data Perumahan Dalam</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <table id="dataTable" class="table table-bordered table-striped">
                                <thead class="table-primary">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Perumahan</th>
                                        <th>Nama Penghuni</th>
                                        <th>Jabatan</th>
                                        <th>Jumlah Kamar</th>
                                        <th>Kapasitas Kamar</th>
                                        <th>
                                            <center>Action</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i=1 @endphp
                                    @foreach ($perumahandalam as $pe)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $pe->namaperumahan }}</td>
                                            <td>{{ $pe->namapenghuni }}</td>
                                            <td>{{ $pe->jabatan }}</td>
                                            <td>{{ $pe->jumlahkamar }}</td>
                                            <td>{{ $pe->kapasitaskamar }}</td>
                                            <td width="9%">
                                                <center>
                                                    <button type="button" class="btn btn-transparent-dark btn-sm"
                                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <button class="dropdown-item" data-toggle="modal" data-target="#myModal1{{ $pe->id }}"><i class="fas fa-eye"></i> View</button>
                                                        <button class="dropdown-item" onclick="window.location.href='/dataperumahandalam/editperumahandalam/{{ $pe->id }}'"><i class="fas fa-edit"></i> Edit</button>
                                                    </div>
                                                    <button type="button" class="btn btn-transparent-dark btn-sm" data-toggle="modal"
                                                        data-target="#myModal{{ $pe->id }}"><i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </center>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-primary btn-sm"
                                onclick="window.location.href='/tambahperumahandalam'"><i class="fas fa-plus-square"></i> Tambah
                                Data</button>
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
@foreach ($perumahandalam as $pe)
    <div class="modal fade" id="myModal{{ $pe->id }}" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">Hapus Data Perumahan Dalam</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapusnya?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-danger btn-sm"
                        onclick="window.location.href='/dataperumahandalam/deleteperumahandalam/{{ $pe->id }}'">Hapus</button>
                </div>
            </div>
        </div>
    </div>
@endforeach

@foreach ($perumahandalam as $pe)
    <div class="modal fade" id="myModal1{{ $pe->id }}" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">Lihat Data Perumahan Dalam</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-4"><strong>Nama Perumahan</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $pe->namaperumahan }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Nama Penghuni</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $pe->namapenghuni }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Jabatan</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $pe->jabatan }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Jumlah Kamar</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $pe->jumlahkamar }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Kapasitas Kamar</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $pe->kapasitaskamar }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>I/S</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $pe->istri }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>ANAK</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $pe->anak }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>DLL</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $pe->dll }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Total</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $pe->total }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Keterangan</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $pe->keterangan }}</div>
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
