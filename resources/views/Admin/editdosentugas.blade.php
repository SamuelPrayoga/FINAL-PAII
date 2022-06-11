@include('Admin.navadmin')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>EDIT DOSEN TUGAS BELAJAR</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/beranda">Dashboard Admin</a></li>
                        <li class="breadcrumb-item"><a href="/datadosentugas">Dosen Tugas Belajar</a></li>
                        <li class="breadcrumb-item active">Edit Dosen Tugas Belajar</li>
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
                                  <h3 class="card-title">Edit Dosen Tugas Belajar</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="{{route('datadosentugas.updatedosentugas',$editdosentugas->id)}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="card-body">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Nama Dosen <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="text" required="required" id="namaDosen" name="namaDosen" class="form-control" value="{{$editdosentugas->namaDosen}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">NIDN</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="nidn" name="nidn" class="form-control" value="{{$editdosentugas->nidn}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Program Studi <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
                                                <select class="form-control"  required="required" name="prodi" aria-label="Default select example" >
                                                    <option value="{{$editdosentugas->prodi}}">{{$editdosentugas->prodi}}</option>
                                                    <option value="D3 TK">D3 TK</option>
                                                    <option value="D3 TI">D3 TI</option>
                                                    <option value="D4 TRPL">D4 TRPL</option>
                                                    <option value="S1 SI">S1 SI</option>
                                                    <option value="S1 IF">S1 IF</option>
                                                    <option value="S1 MR">S1 MR</option>
                                                    <option value="S1 TB">S1 TB</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Lokasi</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="lokasi" name="lokasi" class="form-control" value="{{$editdosentugas->lokasi}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Program <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
                                                <select class="form-control"  required="required" name="program" aria-label="Default select example" >
                                                    <option value="{{$editdosentugas->program}}">{{$editdosentugas->program}}</option>
                                                    <option value="Sarjana">Sarjana</option>
                                                    <option value="Sarjana Terapan">Sarjana Terapan</option>
                                                    <option value="Magister">Magister</option>
                                                    <option value="Doktoral">Doktoral</option>
                                                    <option value="Profesor">Profesor</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Program Studi <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="text" required="required" id="programStudi" name="programStudi" class="form-control" value="{{$editdosentugas->programStudi}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Mulai Belajar <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="date" required="required" id="mulaiTugas" name="mulaiTugas" class="form-control" value="{{$editdosentugas->mulaiTugas}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Tahun <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="number" required="required" id="tahun" name="tahun" class="form-control" value="{{$editdosentugas->tahun}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Rencana Kembali</label>
                                            <div class="col-sm-9">
                                                <input type="date" id="rencanaAktif" name="rencanaAktif" class="form-control" value="{{$editdosentugas->rencanaAktif}}">
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
