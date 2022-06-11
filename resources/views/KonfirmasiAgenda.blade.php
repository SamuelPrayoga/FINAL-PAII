@include('navuser')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>KONFIRMASI AGENDA REKTOR</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/beranda">Home</a></li>
                        <li class="breadcrumb-item">Agenda Rektor</li>
                        <li class="breadcrumb-item active">Konfirmasi Agenda Rektor</li>
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
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="card card-secondary">
                                <div class="card-header">
                                  <h3 class="card-title">Konfirmasi Agenda Rektor</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="{{route('AgendaRektor.updateagendarektors',$editagendarektors->id)}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="card-body">
                                    <div class="form-group row">
                                      <label for="namakegiatan" class="col-sm-2 col-form-label">Nama Kegiatan</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" name="namakegiatan" id="namakegiatan" required="required" value="{{$editagendarektors->namakegiatan}}" readonly>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="penyelenggara" class="col-sm-2 col-form-label">Penyelenggara</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="penyelenggara" name="penyelenggara" value="{{$editagendarektors->penyelenggara}}" readonly>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="lokasi" name="lokasi" value="{{$editagendarektors->lokasi}}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                                        <div class="col-sm-10">
                                          <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{$editagendarektors->tanggal}}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="waktu" class="col-sm-2 col-form-label">Waktu</label>
                                        <div class="col-sm-10">
                                          <input type="time" class="form-control" id="waktu" name="waktu" value="{{$editagendarektors->waktu}}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                                        <div class="col-sm-10">
                                            <textarea name="keterangan" id="keterangan" cols="130" rows="4" width="100%">{{$editagendarektors->keterangan}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="waktu" class="col-sm-2 col-form-label">Waktu</label>
                                        <div class="col-sm-10">
                                            <select class="form-control"  required="required" name="status" aria-label="Default select example" >
                                                <option value="{{$editagendarektors->status}}">{{$editagendarektors->status}}</option>
                                                <option value="Hadir">Hadir</option>
                                                <option value="Tidak Hadir">Tidak Hadir</option>
                                                <option value="Reschedule">Reschedule</option>
                                            </select>
                                        </div>
                                    </div>
                                  </div>
                                  <!-- /.card-body -->
                                  <div class="card-footer">
                                    <button type="submit" class="btn btn-info">Konfirmasi</button>
                                  </div>
                                  <!-- /.card-footer -->
                                </form>
                              </div>
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
