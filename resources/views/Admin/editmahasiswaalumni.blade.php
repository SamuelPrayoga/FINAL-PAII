@include('Admin.navadmin')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>EDIT MAHASISWA ALUMNI</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/beranda">Dashboard Admin</a></li>
                        <li class="breadcrumb-item"><a href="/datamahasiswaalumni">Mahasiswa Alumni</a></li>
                        <li class="breadcrumb-item active">Edit Mahasiswa Alumni</li>
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
                                  <h3 class="card-title">Edit Mahasiswa Alumni</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="{{ route('datamahasiswaalumni.updatemahasiswaalumni', $editmahasiswaalumni->id) }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="card-body">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Nama Mahasiswa</label>
                                            <div class="col-sm-9">
                                                <input type="text" required="required" id="nama" name="nama" class="form-control" value="{{$editmahasiswaalumni->nama}} ">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">NIM</label>
                                            <div class="col-sm-9">
                                                <input type="text" required="required" id="nim" name="nim" class="form-control" value="{{$editmahasiswaalumni->nim}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Fakultas</label>
                                            <div class="col-sm-9">
                                                <select class="form-control"  required="required" name="fakultas" aria-label="Default select example" >
                                                    <option value="{{ $editmahasiswaalumni->fakultas }}">{{ $editmahasiswaalumni->fakultas }}</option>
                                                    <option value="Vokasi">Vokasi</option>
                                                    <option value="FITE">FITE</option>
                                                    <option value="FTI">FTI</option>
                                                    <option value="FB">FB</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Program Studi</label>
                                            <div class="col-sm-9">
                                                <select class="form-control"  required="required" name="prodi" aria-label="Default select example" >
                                                    <option value="{{ $editmahasiswaalumni->prodi }}">{{ $editmahasiswaalumni->prodi }}</option>
                                                    <option value="D-III Teknologi Komputer">D-III Teknologi Komputer</option>
                                                    <option value="D-III Teknologi Informasi">D-III Teknologi Informasi</option>
                                                    <option value="D-IV Teknologi Rekayasa Perangkat Lunak">D-IV Teknologi Rekayasa Perangkat Lunak</option>
                                                    <option value="S-1 Sistem Informasi">S-1 Sistem Informasi</option>
                                                    <option value="S-1 Informatika">S-1 Informatika</option>
                                                    <option value="S-1 Manajemen Rekayasa">S-1 Manajemen Rekayasa</option>
                                                    <option value="S-1 Bioteknologi">S-1 Bioteknologi</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Angkatan</label>
                                            <div class="col-sm-9">
                                                <input type="year" required="required" id="angkatan" name="angkatan" class="form-control" value="{{$editmahasiswaalumni->angkatan}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Lulus</label>
                                            <div class="col-sm-9">
                                                <input type="date" id="lulus" name="lulus" class="form-control" value="{{$editmahasiswaalumni->lulus}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Nomor Telepon</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="notelp" name="notelp" class="form-control" value="{{$editmahasiswaalumni->notelp}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Lokasi Kerja</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="lokasikerja" name="lokasikerja" class="form-control" value="{{$editmahasiswaalumni->lokasikerja}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Posisi</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="posisi" name="posisi" class="form-control" value="{{$editmahasiswaalumni->posisi}}">
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
