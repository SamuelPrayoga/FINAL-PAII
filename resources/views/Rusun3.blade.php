@include('navuser')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">DASHBOARD REKTOR IT DEL</h1>
    <a href="/Rusun3/export_excel" data-target="#dataTable" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-download fa-sm text-white-50"></i> Download Excel</a>
</div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Rusunawa 3 Institut Teknologi Del</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
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
