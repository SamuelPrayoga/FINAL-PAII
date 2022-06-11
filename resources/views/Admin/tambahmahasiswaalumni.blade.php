@include('Admin.navadmin')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>TAMBAH MAHASISWA ALUMNI</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/beranda">Dashboard Admin</a></li>
                        <li class="breadcrumb-item"><a href="/datamahasiswaalumni">Mahasiswa Alumni</a></li>
                        <li class="breadcrumb-item active">Tambah Mahasiswa Alumni</li>
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
                                  <h3 class="card-title">Tambah Mahasiswa Alumni</h3>
                                </div>
                                <!-- form start -->
                                <form action="{{Route('mahasiswaalumni.tambah')}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="card-body">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Nama Alumni <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="text" required="required" id="nama" name="nama" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">NIM <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="text" required="required" id="nim" name="nim" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Fakultas <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
                                                <select class="form-control"  required="required" name="fakultas" aria-label="Default select example" >
                                                    <option value="Vokasi">Vokasi</option>
                                                    <option value="FITE">FITE</option>
                                                    <option value="FTI">FTI</option>
                                                    <option value="FB">FB</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Program Studi <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
                                                <select class="form-control"  required="required" name="prodi" aria-label="Default select example" >
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
                                            <label class="col-sm-3 col-form-label">Angkatan <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="number" id="angkatan" name="angkatan" class="form-control" placeholder="YYYY">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Lulus <span class="text-danger">*</span><</label>
                                            <div class="col-sm-9">
                                                <input type="date" id="lulus" name="lulus" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Nomor Telepon </label>
                                            <div class="col-sm-9">
                                                <input type="text" id="notelp" name="notelp" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Lokasi Kerja</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="lokasikerja" name="lokasikerja" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Posisi</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="posisi" name="posisi" class="form-control">
                                            </div>
                                        </div>
                                  </div>

                                  <div class="card-footer">
                                    <button type="submit" class="btn btn-info btn-sm"><i class="fas fa-plus-square"></i> Tambah</button>
                                  </div>

                                </form>
                              </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

</div>
</div>


</div>


<footer class="main-footer">
    <strong>Copyright &copy; 2022 <a href="https://del.ac.id">Dashboard Rektor IT Del</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0.0
    </div>
</footer>


<aside class="control-sidebar control-sidebar-dark">
</aside>
</div>
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="{{asset('dist/js/adminlte.js')}}"></script>
<script src="{{asset('dist/js/demo.js')}}"></script>
</body>
</html>
