@include('Admin.navadmin')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>EDIT KENDARAAN</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/beranda">Dashboard Admin</a></li>
                        <li class="breadcrumb-item"><a href="/datakendaraan">Kendaraan Kampus</a></li>
                        <li class="breadcrumb-item active">Edit Kendaraan Kampus</li>
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
                                  <h3 class="card-title">Edit Kendaraan Kampus</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="{{ route('datakendaraan.updatekendaraan', $editkendaraan->id) }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="card-body">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">No.Plat Kendaraan</label>
                                            <div class="col-sm-9">
                                                <input type="text" required="required" id="noplat" name="noplat" class="form-control" value="{{ $editkendaraan->noplat}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Driver</label>
                                            <div class="col-sm-9">
                                                <input type="text" required="required" id="driver" name="driver" class="form-control" value="{{ $editkendaraan->driver}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Penanggung Jawab</label>
                                            <div class="col-sm-9">
                                                <input type="text" required="required" id="penanggungjawab" name="penanggungjawab" class="form-control" value="{{ $editkendaraan->penanggungjawab}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Jenis Kendaraan</label>
                                            <div class="col-sm-9">
                                                <select class="form-control"  required="required" name="jeniskendaraan" aria-label="Default select example" >
                                                    <option value="{{ $editkendaraan->jeniskendaraan }}">{{ $editkendaraan->jeniskendaraan }}</option>
                                                    <option value="Sepeda Motor">Sepeda Motor</option>
                                                    <option value="Bus">Bus</option>
                                                    <option value="Mobil SUV ">Mobil SUV </option>
                                                    <option value="Mobil Pick Up">Mobil Pick Up</option>
                                                    <option value="Mobil Truk">Mobil Truk</option>
                                                    <option value="Kendaraan Roda 3">Kendaraan Roda 3</option>
                                                    <option value="Lainnya">Lainnya</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Operasional</label>
                                            <div class="col-sm-9">
                                                <select class="form-control"  required="required" name="operasional" aria-label="Default select example" >
                                                    <option value="{{ $editkendaraan->operasional }}">{{ $editkendaraan->operasional }}</option>
                                                    <option value="Mahasiswa">Mahasiswa</option>
                                                    <option value="Dosen/Staff">Dosen/Staff</option>
                                                    <option value="Rektorat ">Rektorat </option>
                                                    <option value="Keasramaan">Keasramaan</option>
                                                    <option value="Kantin">Kantin</option>
                                                    <option value="Satpam">Satpam</option>
                                                    <option value="Pekerja Lapangan">Pekerja Lapangan</option>
                                                    <option value="Lainnya">Lainnya</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Keterangan</label>
                                            <div class="col-sm-9">
                                                <input type="text"  id="keterangan" name="keterangan" class="form-control" value="{{ $editkendaraan->keterangan}}">
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
