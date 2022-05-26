@include('navuser')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>AGENDA REKTOR</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Agenda Rektor</li>
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
                            <h3 class="card-title">[Terbaru] Agenda Rektor</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="exampl2" class="table table-hover">
                                <thead class="table-primary">
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Kegiatan</th>
                                        <th>Penyelenggara</th>
                                        <th>Lokasi</th>
                                        <th>Mulai</th>
                                        <th>Selesai</th>
                                        <th>Status</th>
                                        <th>Keterangan</th>
                                        <th>
                                            <center>Konfirmasi</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i=1 @endphp
                                    @foreach ($agendaterbaru as $agenda)
                                        <tr>
                                            <td width="2%">{{ $i++ }}</td>
                                            <td width="20%">{{ $agenda->namakegiatan }}</td>
                                            <td width="12%">{{ $agenda->penyelenggara }}</td>
                                            <td width="16%">{{ $agenda->lokasi }}</td>
                                            <td width="12%">{{ date('l, d M Y', strtotime($agenda->tanggal)) }}</td>
                                            <td width="11%">{{ $agenda->waktu }} WIB</td>
                                            <td width="12%">
                                                @if ($agenda->status == 'Hadir')
                                                    <button class="btn btn-success btn-sm" disabled>{{ $agenda->status }}</button>
                                                @endif
                                                @if ($agenda->status == 'Tidak Hadir')
                                                    <button class="btn btn-danger btn-sm" disabled>{{ $agenda->status }}</button>
                                                @endif
                                                @if ($agenda->status == 'Menunggu Konfirmasi')
                                                    <button class="btn btn-warning btn-sm" disabled>{{ $agenda->status }}</button>
                                                @endif
                                                @if ($agenda->status == 'Reschedule')
                                                    <button class="btn btn-warning btn-sm" disabled>{{ $agenda->status }}</button>
                                                @endif
                                                @if ($agenda->status == 'Selesai')
                                                    <button class="btn btn-primary btn-sm" disabled>{{ $agenda->status }}</button>
                                                @endif
                                            </td>
                                            <td>{{ $agenda->keterangan }}</td>
                                            <td width="14%">
                                                <center>
                                                    <button type="button" class="btn btn-info btn-sm"
                                                        onclick="window.location.href='/AgendaRektor/editagendarektors/{{ $agenda->id }}'"><i
                                                            class="fas fa-wrench"></i>
                                                        Konfirmasi</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Agenda Rektor</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="dataTable" class="table table-bordered table-striped">
                                <thead class="table-primary">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kegiatan</th>
                                        <th>Penyelenggara</th>
                                        <th>Lokasi</th>
                                        <th>Mulai</th>
                                        <th>Selesai</th>
                                        <th>Status</th>
                                        <th>Keterangan</th>
                                        <th>
                                            <center>Konfirmasi</center>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i=1 @endphp
                                    @foreach ($agendarektor as $agenda)
                                        <tr>
                                            <td width="2%">{{ $i++ }}</td>
                                            <td width="20%">{{ $agenda->namakegiatan }}</td>
                                            <td width="12%">{{ $agenda->penyelenggara }}</td>
                                            <td width="16%">{{ $agenda->lokasi }}</td>
                                            <td width="12%">{{ date('l, d M Y', strtotime($agenda->tanggal)) }}</td>
                                            <td width="11%">{{ $agenda->waktu }} WIB</td>
                                            <td width="12%">
                                                @if ($agenda->status == 'Hadir')
                                                    <button class="btn btn-success btn-sm" disabled>{{ $agenda->status }}</button>
                                                @endif
                                                @if ($agenda->status == 'Tidak Hadir')
                                                    <button class="btn btn-danger btn-sm" disabled>{{ $agenda->status }}</button>
                                                @endif
                                                @if ($agenda->status == 'Menunggu Konfirmasi')
                                                    <button class="btn btn-warning btn-sm" disabled>{{ $agenda->status }}</button>
                                                @endif
                                                @if ($agenda->status == 'Reschedule')
                                                    <button class="btn btn-warning btn-sm" disabled>{{ $agenda->status }}</button>
                                                @endif
                                                @if ($agenda->status == 'Selesai')
                                                    <button class="btn btn-primary btn-sm" disabled>{{ $agenda->status }}</button>
                                                @endif
                                            </td>
                                            <td>{{ $agenda->keterangan }}</td>
                                            <td width="14%">
                                                <center>
                                                    <button type="button" class="btn btn-light btn-sm"
                                                        onclick="window.location.href='/AgendaRektor/editagendarektors/{{ $agenda->id }}'"><i
                                                            class="fas fa-wrench"></i>
                                                        Konfirmasi</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
