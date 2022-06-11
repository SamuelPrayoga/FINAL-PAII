@include('Admin.navadmin')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>EDIT MAHASISWA AKTIF</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/beranda">Dashboard Admin</a></li>
                        <li class="breadcrumb-item"><a href="/datamahasiswaaktif">Mahasiswa Aktif</a></li>
                        <li class="breadcrumb-item active">Edit Mahasiswa Aktif</li>
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
                                  <h3 class="card-title">Edit Mahasiswa Aktif</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="{{ route('datamahasiswaaktif.updatemahasiswaaktif', $editmahasiswaaktif->id) }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="card-body">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Nama Mahasiswa</label>
                                            <div class="col-sm-9">
                                                <input type="text" required="required" id="nama" name="nama" class="form-control" value="{{$editmahasiswaaktif->nama}} ">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">NIM</label>
                                            <div class="col-sm-9">
                                                <input type="text" required="required" id="nim" name="nim" class="form-control" value="{{$editmahasiswaaktif->nim}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Fakultas</label>
                                            <div class="col-sm-9">
                                                <select class="form-control"  required="required" name="fakultas" aria-label="Default select example" >
                                                    <option value="{{ $editmahasiswaaktif->fakultas }}">{{ $editmahasiswaaktif->fakultas }}</option>
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
                                                    <option value="{{ $editmahasiswaaktif->prodi }}">{{ $editmahasiswaaktif->prodi }}</option>
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
                                            <label class="col-sm-3 col-form-label">Kelas</label>
                                            <div class="col-sm-9">
                                                <input type="text" required="required" id="kelas" name="kelas" class="form-control" value="{{$editmahasiswaaktif->kelas}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Angkatan</label>
                                            <div class="col-sm-9">
                                                <select class="form-control"  required="required" name="angkatan" aria-label="Default select example">
                                                    <option value="{{ $editmahasiswaaktif->angkatan }}">{{ $editmahasiswaaktif->angkatan }}</option>
                                                    <option value="2018">2018</option>
                                                    <option value="2019">2019</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2021">2021</option>
                                                    <option value="2022">2022</option>
                                                    <option value="2023">2023</option>
                                                    <option value="2024">2024</option>
                                                    <option value="2025">2025</option>
                                                    <option value="2026">2026</option>
                                                    <option value="2027">2027</option>
                                                    <option value="2028">2028</option>
                                                    <option value="2029">2029</option>
                                                    <option value="2030">2030</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Jalur Masuk</label>
                                            <div class="col-sm-9">
                                                <select class="form-control"  required="required" name="jalurmasuk" aria-label="Default select example" value="{{$editmahasiswaaktif->jalurmasuk}}">
                                                    <option value="PMDK">PMDK</option>
                                                    <option value="USM 1">USM 1</option>
                                                    <option value="USM 2">USM 2</option>
                                                    <option value="USM 3">USM 3</option>
                                                    <option value="UTBK">UTBK</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Nomor Telepon</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="notelp" name="notelp" class="form-control" value="{{$editmahasiswaaktif->notelp}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Email Aktif</label>
                                            <div class="col-sm-9">
                                                <input type="email" id="emailaktif" name="emailaktif" class="form-control" value="{{$editmahasiswaaktif->emailaktif}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Dosen Wali</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="dosenwali" name="dosenwali" class="form-control" value="{{$editmahasiswaaktif->dosenwali}}">
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
