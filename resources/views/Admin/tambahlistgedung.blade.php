@include('Admin.navadmin')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>TAMBAH PENAMBAHAN LIST GEDUNG</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/beranda">Dashboard Admin</a></li>
                        <li class="breadcrumb-item"><a href="/datallistgedung">Penambahan List Gedung</a></li>
                        <li class="breadcrumb-item active">Tambah Penambahan List Gedung</li>
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
                                  <h3 class="card-title">Tambah Penambahan List Gedung</h3>
                                </div>
                                <!-- form start -->
                                <form action="{{Route('listgedung.tambah')}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="card-body">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Penomoran <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
                                                <select class="form-control"  required="required" name="penomoran" aria-label="Default select example" >
                                                    <option value="Gedung 1">Gedung 1</option>
                                                    <option value="Gedung 2">Gedung 2</option>
                                                    <option value="Gedung Ex Koperasi">Gedung Ex Koperasi</option>
                                                    <option value="Gedung Besar (Utama)">Gedung Besar (Utama)</option>
                                                    <option value="Gedung 3">Gedung 3</option>
                                                    <option value="Gedung 4">Gedung 4</option>
                                                    <option value="Gedung 5 dan 6">Gedung 5 dan 6</option>
                                                    <option value="Gedung 7">Gedung 7</option>
                                                    <option value="Gedung 8">Gedung 8</option>
                                                    <option value="Gedung 9">Gedung 9</option>
                                                    <option value="Container Park">Container Park</option>
                                                    <option value="Asrama Perpustakaan">Asrama Perpustakaan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Nama Gedung <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="text" required="required" id="namagedung" name="namagedung" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Nama Ruangan <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="text" required="required" id="namaruangan" name="namaruangan" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Kapasitas Ruangan</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="kapasitasruangan" name="kapasitasruangan" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Lokasi Meja <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="text" required="required" id="lokasimeja" name="lokasimeja" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Nama Pemakai Ruangan</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="namapemakai" name="namapemakai" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Terisi</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="terisi" name="terisi" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Ketersediaan</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="ketersediaan" name="ketersediaan" class="form-control">
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
