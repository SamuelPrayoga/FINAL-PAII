@include('navuser')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>PERUMAHAN DALAM</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/beranda">Home</a></li>
                        <li class="breadcrumb-item">Gedung dan Bangunan</li>
                        <li class="breadcrumb-item active">Perumahan Dalam</li>
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
                            <table id="dataTable" class="table table-bordered table-hover">
                                <thead class="table-dark">
                                    <tr>
                                        <th rowspan="2">
                                            <center>No</center>
                                        </th>
                                        <th rowspan="2">Nama Perumahan</th>
                                        <th rowspan="2">Nama Penghuni</th>
                                        <th rowspan="2"><center>Jabatan</center></th>
                                        <th rowspan="2"><center>Jumlah Kamar</center></th>
                                        <th rowspan="2"><center>Kapasitas / Kamar</center></th>
                                        <th colspan="4"><center>Jumlah</center></th>
                                        <th rowspan="2">Keterangan</th>
                                    </tr>
                                    <tr>
                                        <td>I/S</td>
                                        <td>ANAK</td>
                                        <td>DLL</td>
                                        <td>Total</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i=1 @endphp
                                    @foreach ($perumahandalam as $dalam)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $dalam->namaperumahan}}</td>
                                        <td>{{ $dalam->namapenghuni}}</td>
                                        <td>{{ $dalam->jabatan}}</td>
                                        <td width="5%"><center>{{ $dalam->jumlahkamar}}</center></td>
                                        <td width="5%"><center>{{ $dalam->kapasitaskamar}}</center></td>
                                        <td><center>{{ $dalam->istri}}</center></td>
                                        <td><center>{{ $dalam->anak}}</center></td>
                                        <td><center>{{ $dalam->dll}}</center></td>
                                        <td><center>{{ $dalam->total}}</center></td>
                                        <td>{{ $dalam->keterangan}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

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

<script src="{{asset('dist/js/adminlte.js')}}"></script>

<script src="{{asset('dist/js/demo.js')}}"></script>

</body>

</html>
