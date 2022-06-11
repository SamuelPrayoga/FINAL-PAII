@include('Admin.navadmin')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>EDIT PERUMAHAN DALAM</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/beranda">Dashboard Admin</a></li>
                        <li class="breadcrumb-item"><a href="/dataperumahandalam">Perumahan Dalam</a></li>
                        <li class="breadcrumb-item active">Edit Perumahan Dalam</li>
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
                                  <h3 class="card-title">Edit Perumahan Dalam</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="{{ route('dataperumahandalam.updateperumahandalam', $editperumahandalam->id) }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="card-body">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Nama Perumahan</label>
                                            <div class="col-sm-9">
                                                <input type="text"  required="required" id="namaperumahan" name="namaperumahan" class="form-control" value="{{$editperumahandalam->namaperumahan }}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Nama Penghuni</label>
                                            <div class="col-sm-9">
                                                <input type="text" required="required" id="namapenghuni" name="namapenghuni" class="form-control" value="{{$editperumahandalam->namapenghuni }}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Jabatan</label>
                                            <div class="col-sm-9">
                                                <input type="text" required="required" id="jabatan" name="jabatan" class="form-control" value="{{$editperumahandalam->jabatan }}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Jumlah Kamar</label>
                                            <div class="col-sm-9">
                                                <input type="number" required="required" id="jumlahkamar" name="jumlahkamar" class="form-control" value="{{$editperumahandalam->jumlahkamar }}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Kapasitas Kamar</label>
                                            <div class="col-sm-9">
                                                <input type="number" id="kapasitaskamar" name="kapasitaskamar" class="form-control" required="required" value="{{$editperumahandalam->kapasitaskamar }}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">I/S</label>
                                            <div class="col-sm-9">
                                                <input type="number" id="istri" name="istri" class="form-control" required="required" value="{{$editperumahandalam->istri }}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">ANAK</label>
                                            <div class="col-sm-9">
                                                <input type="number" id="anak" name="anak" class="form-control" required="required" value="{{$editperumahandalam->anak }}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">DLL</label>
                                            <div class="col-sm-9">
                                                <input type="number" id="dll" name="dll" class="form-control" required="required" value="{{$editperumahandalam->dll }}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Total</label>
                                            <div class="col-sm-9">
                                                <input type="number" id="total" name="total" class="form-control" required="required" value="{{$editperumahandalam->total }}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Keterangan</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="keterangan" name="keterangan" class="form-control" required="required" value="{{$editperumahandalam->keterangan }}">
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
