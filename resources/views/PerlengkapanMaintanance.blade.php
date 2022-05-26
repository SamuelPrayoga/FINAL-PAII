@include('navuser')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>PERLENGKAPAN MAINTENANCE</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/beranda">Home</a></li>
                        <li class="breadcrumb-item">Penambahan Aset</li>
                        <li class="breadcrumb-item active">Perlengkapan Maintenance</li>
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
                            <h3 class="card-title">Data Perlengkapan Maintenance</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive">
                            <table id="dataTable" class="table table-bordered table-hover">
                                <thead class="table-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Item Barang</th>
                                        <th>Tipe Barang</th>
                                        <th>Kode Aset</th>
                                        <th>Jumlah Unit</th>
                                        <th>No PR</th>
                                        <th>No PO</th>
                                        <th>Nilai Invoice</th>
                                        <th>Umur Ekonomis</th>
                                        <th>Depresiasi/Bulan</th>
                                        <th>Sumber Dana</th>
                                        <th>Akumulasi Depresiasi</th>
                                        <th>Nilai Buku</th>
                                        <th>Lokasi</th>
                                        <th>Unit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i=1 @endphp
                                    @foreach ($maintanance as $main)
                                    <tr>
                                        <td width="5%">{{ $i++ }}</td>
                                        <td>{{$main->itembarang}}</td>
                                        <td>{{$main->tipebarang}}</td>
                                        <td>{{$main->kodeaset}}</td>
                                        <td width="7%">{{$main->jumlahunit}}</td>
                                        <td width="7%">{{$main->nopr}}</td>
                                        <td>{{$main->nopo}}</td>
                                        <td>{{$main->nilaiinvoice}}</td>
                                        <td>{{$main->umurekonomis}}</td>
                                        <td>{{$main->depresiasi}}</td>
                                        <td>{{$main->sumberdana}}</td>
                                        <td>{{$main->akumulasidepresiasi}}</td>
                                        <td>{{$main->nilaibuku}}</td>
                                        <td>{{$main->lokasi}}</td>
                                        <td>{{$main->unit}}</td>
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
