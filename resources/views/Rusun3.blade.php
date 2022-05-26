@include('navuser')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>RUSUNAWA 3</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/beranda">Home</a></li>
                        <li class="breadcrumb-item">Gedung dan Bangunan</li>
                        <li class="breadcrumb-item active">Staff</li>
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
                            <h3 class="card-title">Data Rusunawa 3</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <table id="dataTable" class="table table-bordered table-hover">
                                <thead class="table-dark">
                                    <tr>
                                        <th rowspan="2"><center>No</center></th>
                                        <th rowspan="2"><center>Nomor Kamar</center></th>
                                        <th rowspan="2"><center>Nama Penghuni</center></th>
                                        <th rowspan="2"><center>Jabatan</center></th>
                                        <th rowspan="2"><center>Jumlah Kamar</center></th>
                                        <th rowspan="2"><center>Kapasitas / Kamar</center></th>
                                        <th colspan="4"><center>Jumlah</center></th>
                                        <th rowspan="2"><center>Keterangan</center></th>
                                    </tr>
                                    <tr>
                                        <td><center>I/S</center></td>
                                        <td><center>ANAK</center></td>
                                        <td><center>DLL</center></td>
                                        <td><center>Total</center></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i=1 @endphp
                                    @foreach ($rusun3 as $rs3 )
                                    <tr>
                                        <td width="3%">{{ $i++ }}</td>
                                        <td width="10%">{{$rs3->nomorkamar }}</td>
                                        <td>{{$rs3->namapenghuni }}</td>
                                        <td>{{$rs3->jabatan }}</td>
                                        <td width="3%"><center>{{$rs3->jumlahkamar }}</center></td>
                                        <td width="3%"><center>{{$rs3->kapasitaskamar }}</center></td>
                                        <td><center>{{$rs3->istri }}</center></td>
                                        <td><center>{{$rs3->anak }}</center></td>
                                        <td><center>{{$rs3->dll }}</center></td>
                                        <td><center>{{$rs3->total }}</center></td>
                                        <td>{{$rs3->keterangan }}</td>
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
