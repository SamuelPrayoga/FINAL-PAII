@include('Admin.navadmin')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>EDIT KAPASITAS RUANGAN</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/beranda">Dashboard Admin</a></li>
                        <li class="breadcrumb-item"><a href="/kapasitasruangankelas">Kapasitas Ruangan</a></li>
                        <li class="breadcrumb-item active">Edit Kapasitas Ruangan</li>
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
                                  <h3 class="card-title">Edit Kapasitas Ruangan</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="{{route('datakapasitasruangankelas.updatekapasitasruangankelas',$editkapasitasruangankelas->id)}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="card-body">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Ruangan</label>
                                            <div class="col-sm-9">
                                                <input type="text" required="required" id="ruangan" name="ruangan" class="form-control" value="{{$editkapasitasruangankelas->ruangan}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Keterangan</label>
                                            <div class="col-sm-9">
                                                <select class="form-control"  required="required" name="keterangan" aria-label="Default select example" >
                                                    <option value="Ruang Kuliah Umum">Ruang Kuliah Umum</option>
                                                    <option value="Ruang Kelas Belajar">Ruang Kelas Belajar</option>
                                                    <option value="Laboratorium Komputer">Laboratorium Komputer</option>
                                                    <option value="Laboratorium Desprin">Laboratorium Desprin</option>
                                                    <option value="Laboratorium Praktikum Analisis Data">Laboratorium Praktikum Analisis Data</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Luas (m<sup>2</sup>)</label>
                                            <div class="col-sm-9">
                                                <input type="text" required="required" id="luas" name="luas" class="form-control" value="{{$editkapasitasruangankelas->luas}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Kapasitas Normal</label>
                                            <div class="col-sm-9">
                                                <input type="text" required="required" id="kapasitasnormal" name="kapasitasnormal" class="form-control" value="{{$editkapasitasruangankelas->kapasitasnormal}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Perkiraan Kursi, Meja Hasil survei Langsung (Social Distancing)</label>
                                            <div class="col-sm-9">
                                                <input type="text" required="required" id="perkiraan" name="perkiraan" class="form-control" value="{{$editkapasitasruangankelas->perkiraan}}">
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <button type="submit" class="btn btn-info btn-sm"><i class="fas fa-save"></i> Simpan</button>
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
