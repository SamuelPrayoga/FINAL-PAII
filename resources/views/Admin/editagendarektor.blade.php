@include('Admin.navadmin')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>EDIT AGENDA REKTOR</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/beranda">Dashboard Admin</a></li>
                        <li class="breadcrumb-item"><a href="/dataagendarektor">Agenda Rektor</a></li>
                        <li class="breadcrumb-item active">Edit Agenda Rektor</li>
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
                                  <h3 class="card-title">Edit Agenda Rektor</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="{{route('dataagendarektor.updateagendarektor',$editagendarektor->id)}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="card-body">
                                    <div class="form-group row">
                                      <label for="namakegiatan" class="col-sm-2 col-form-label">Nama Kegiatan</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" name="namakegiatan" id="namakegiatan" required="required" value="{{$editagendarektor->namakegiatan}}">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="penyelenggara" class="col-sm-2 col-form-label">Penyelenggara</label>
                                      <div class="col-sm-10">
                                        <input type="ptext" class="form-control" id="penyelenggara" name="penyelenggara" value="{{$editagendarektor->penyelenggara}}">
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lokasi" class="col-sm-2 col-form-label">Lokasi</label>
                                        <div class="col-sm-10">
                                          <input type="ptext" class="form-control" id="lokasi" name="lokasi" value="{{$editagendarektor->lokasi}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                                        <div class="col-sm-10">
                                          <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{$editagendarektor->tanggal}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="waktu" class="col-sm-2 col-form-label">Waktu</label>
                                        <div class="col-sm-10">
                                          <input type="time" class="form-control" id="waktu" name="waktu" value="{{$editagendarektor->waktu}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                                        <div class="col-sm-10">
                                            <textarea name="keterangan" id="keterangan" cols="130" rows="4" width="100%">{{$editagendarektor->keterangan}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="waktu" class="col-sm-2 col-form-label">Waktu</label>
                                        <div class="col-sm-10">
                                            <select class="form-control"  required="required" name="status" aria-label="Default select example" >
                                                <option value="{{$editagendarektor->status}}">{{$editagendarektor->status}}</option>
                                                <option value="Menunggu Konfirmasi">Menunggu Konfirmasi</option>
                                                <option value="Hadir">Hadir</option>
                                                <option value="Tidak Hadir">Tidak Hadir</option>
                                                <option value="Reschedule">Reschedule</option>
                                            </select>
                                        </div>
                                    </div>
                                  </div>
                                  <!-- /.card-body -->
                                  <div class="card-footer">
                                    <button type="submit" class="btn btn-info btn-sm"><i class="fas fa-save"></i> Simpan</button>
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


<script src="{{asset('dist/js/adminlte.js')}}"></script>

<script src="{{asset('dist/js/demo.js')}}"></script>

</body>

</html>
