@include('navuser')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">DASHBOARD REKTOR IT DEL</h1>
    <a href="/AgendaRektor/export_excel" data-target="#dataTable" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-download fa-sm text-white-50"></i> Download Excel</a>
</div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">[Terbaru] Agenda dan Kegiatan Rektor</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Nama Kegiatan</th>
                            <th>Penyelenggara</th>
                            <th>Lokasi</th>
                            <th>Mulai</th>
                            <th>Selesai</th>
                            <th>Status</th>
                            <th>Keterangan</th>
                            <th><center>Konfirmasi</center></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1 @endphp
                        @foreach ($agendaterbaru as $agenda )
                        <tr>
                            <td width="2%">{{ $i++ }}</td>
                            <td>{{ $agenda->namakegiatan }}</td>
                            <td>{{ $agenda->penyelenggara }}</td>
                            <td>{{ $agenda->lokasi }}</td>
                            <td>{{ date('l, d M Y', strtotime($agenda->tanggal)) }}</td>
                            <td>{{ ($agenda->waktu) }} WIB</td>
                            <td width="18%">
                                @if($agenda->status == 'Hadir')
                                    <button class="btn btn-success btn-sm" disabled>{{ $agenda->status }}</button>
                                    @endif
                                @if ($agenda->status == 'Tidak Hadir')
                                    <button class="btn btn-danger btn-sm" disabled>{{ $agenda->status }}</button>
                                    @endif
                                @if ($agenda->status == 'Menunggu Konfirmasi')
                                    <button class="btn btn-warning btn-sm" disabled>{{ $agenda->status }}</button>
                                    @endif
                                @if ($agenda->status == 'Selesai')
                                    <button class="btn btn-primary btn-sm" disabled>{{ $agenda->status }}</button>
                                    @endif
                        </td>
                            <td>{{ $agenda->keterangan }}</td>
                            <td width="14%"><center>
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
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Agenda dan Kegiatan Rektor</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kegiatan</th>
                            <th>Penyelenggara</th>
                            <th>Lokasi</th>
                            <th>Mulai</th>
                            <th>Selesai</th>
                            <th>Status</th>
                            <th>Keterangan</th>
                            <th><center>Konfirmasi</center></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1 @endphp
                        @foreach ($agendarektor as $agenda )
                        <tr>
                            <td width="2%">{{ $i++ }}</td>
                            <td>{{ $agenda->namakegiatan }}</td>
                            <td>{{ $agenda->penyelenggara }}</td>
                            <td>{{ $agenda->lokasi }}</td>
                            <td>{{ date('l, d M Y', strtotime($agenda->tanggal)) }}</td>
                            <td>{{ ($agenda->waktu) }} WIB</td>
                            <td width="18%">
                                    @if($agenda->status == 'Hadir')
                                        <button class="btn btn-success btn-sm" disabled>{{ $agenda->status }}</button>
                                        @endif
                                    @if ($agenda->status == 'Tidak Hadir')
                                        <button class="btn btn-danger btn-sm" disabled>{{ $agenda->status }}</button>
                                        @endif
                                    @if ($agenda->status == 'Menunggu Konfirmasi')
                                        <button class="btn btn-warning btn-sm" disabled>{{ $agenda->status }}</button>
                                        @endif
                                    @if ($agenda->status == 'Selesai')
                                        <button class="btn btn-primary btn-sm" disabled>{{ $agenda->status }}</button>
                                        @endif
                            </td>
                            <td>{{ $agenda->keterangan }}</td>
                            <td width="14%"><center>
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
        </div>
    </div>
</div>

<!--footer-->
</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Dashboard Rektor Institut Teknologi Del</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
    <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="{{ route('logout') }}">Logout</a>
    </div>
</div>
</div>
</div>


<!-- Bootstrap core JavaScript-->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('js/sb-admin-2.min.js')}}"></script>


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

<!-- Page level custom scripts -->
<script src="{{asset('js/demo/datatables-demo.js')}}"></script>

</body>

</html>
