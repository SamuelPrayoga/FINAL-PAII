@include('navuser')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>MAHASISWA AKTIF</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/beranda">Home</a></li>
                        <li class="breadcrumb-item">Mahasiswa</li>
                        <li class="breadcrumb-item active">Mahasiswa Aktif</li>
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
                            <table id="dataTable" class="table table-bordered table-hover">
                                <thead class="table-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Prodi</th>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>Angkatan</th>
                                        <th>Jalur Masuk</th>
                                        <th>Email Aktif</th>
                                        <th>Dosen Wali</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i=1 @endphp
                                    @foreach($mahasiswaaktif as $aktif)
                                    <tr>
                                        <td width="2%">{{ $i++ }}</td>
                                        <td>{{ $aktif->prodi }}</td>
                                        <td>{{ $aktif->nim }}</td>
                                        <td>{{ $aktif->nama }}</td>
                                        <td>{{ $aktif->kelas }}</td>
                                        <td width="5%">{{ $aktif->angkatan }}</td>
                                        <td width="5%">{{ $aktif->jalurmasuk }}</td>
                                        <td>{{ $aktif->emailaktif }}</td>
                                        <td>{{ $aktif->dosenwali }}</td>
                                        <td width="2%">
                                            <center>
                                                <button type="button" class="btn btn-transparent-dark btn-sm"
                                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false"><i class="fas fa-ellipsis-v"></i></button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <button class="dropdown-item" data-toggle="modal" data-target="#myModal1{{ $aktif->id }}"><i class="fas fa-eye"></i> View</button>
                                                    </div>
                                            </center>
                                        </td>
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

@foreach ($mahasiswaaktif as $aktif)
    <div class="modal fade" id="myModal1{{ $aktif->id }}" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">Lihat Data Mahasiswa Aktif</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-4"><strong>Nama Mahasiswa</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $aktif->nama }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>NIM</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $aktif->nim }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Program Studi</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $aktif->prodi }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Kelas</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $aktif->kelas }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Angkatan</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $aktif->angkatan}}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Jalur Masuk</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $aktif->jalurmasuk }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Email Aktif</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $aktif->emailaktif }}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"><strong>Dosen Wali</strong></div>
                        <div class="col-sm-2">:</div>
                        <div class="col-md-6">{{ $aktif->dosenwali }}</div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
@endforeach

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
