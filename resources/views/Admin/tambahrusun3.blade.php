@include('Admin.navadmin')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>TAMBAH RUSUNAWA 3</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/beranda">Dashboard Admin</a></li>
                        <li class="breadcrumb-item"><a href="/datarusun3">Rusunawa 3</a></li>
                        <li class="breadcrumb-item active">Tambah Rusunawa 3</li>
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
                                  <h3 class="card-title">Tambah Rusunawa 3</h3>
                                </div>
                                <!-- form start -->
                                <form action="{{Route('rusun3.tambah')}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="card-body">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Nomor Kamar <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="text" required="required" id="nomorkamar" name="nomorkamar" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Nama Penghuni <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="text" id="namapenghuni" name="namapenghuni" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Jabatan <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
                                                <select class="form-control" name="jabatan" aria-label="Default select example" >
                                                    <option value=""></option>
                                                    <option value="Dosen">Dosen</option>
                                                    <option value="HRD dan Legal">HRD dan Legal</option>
                                                    <option value="Staff Radio">Staff Radio</option>
                                                    <option value="Staff BAAK">Staff BAAK</option>
                                                    <option value="Teaching Asistant">Teaching Asistant</option>
                                                    <option value="Koordinator Keamanan">Koordinator Keamanan</option>
                                                    <option value="Staff KHDTK">Staff KHDTK</option>
                                                    <option value="Laboran">Laboran</option>
                                                    <option value="Staff DUKTEK">Staff DUKTEK</option>
                                                    <option value="Staff SDI">Staff SDI</option>
                                                    <option value="Satpam">Satpam</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Jumlah/Kamar</label>
                                            <div class="col-sm-9">
                                                <input type="number" id="jumlahkamar" name="jumlahkamar" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Kapasitas/Kamar</label>
                                            <div class="col-sm-9">
                                                <input type="number" id="kapasitaskamar" name="kapasitaskamar" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">I/S</label>
                                            <div class="col-sm-9">
                                                <input type="number" id="istri" name="istri" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Anak</label>
                                            <div class="col-sm-9">
                                                <input type="number" id="anak" name="anak" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">DLL</label>
                                            <div class="col-sm-9">
                                                <input type="number" id="dll" name="dll" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Total</label>
                                            <div class="col-sm-9">
                                                <input type="number" id="total" name="total" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Keterangan</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="keterangan" name="keterangan" class="form-control">
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
