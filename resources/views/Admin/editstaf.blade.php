@include('Admin.navadmin')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>EDIT STAFF</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/beranda">Dashboard Admin</a></li>
                        <li class="breadcrumb-item"><a href="/datastaf">Staff</a></li>
                        <li class="breadcrumb-item active">Edit Staff</li>
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
                                  <h3 class="card-title">Edit Staff</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="{{route('datastaf.updatestaf',$editstaf->id)}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="card-body">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">ID Staff</label>
                                            <div class="col-sm-9">
                                                <input type="text" required="required" id="stafID" name="stafID" class="form-control" value="{{$editstaf->stafID}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Nama Staff</label>
                                            <div class="col-sm-9">
                                                <input type="text" required="required" id="namastaf" name="namastaf" class="form-control" value="{{$editstaf->namastaf}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">ID Staff</label>
                                            <div class="col-sm-9">
                                                <input type="text" required="required" id="stafID" name="stafID" class="form-control" value="{{$editstaf->stafID}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Unit Kerja</label>
                                            <div class="col-sm-9">
                                                <select class="form-control"  required="required" name="bagian" aria-label="Default select example" >
                                                    <option value="{{$editstaf->bagian}}">{{$editstaf->bagian}}</option>
                                                    <option value="BAAK">BAAK</option>
                                                    <option value="TENDIK">TENDIK</option>
                                                    <option value="DUKTEK">DUKTEK</option>
                                                    <option value="SDI">SDI</option>
                                                    <option value="REKTORAT">REKTORAT</option>
                                                    <option value="KEMAHASISWAAN">KEMAHASISWAAN</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Jabatan</label>
                                            <div class="col-sm-9">
                                                <input type="text" required="required" id="jabatan" name="jabatan" class="form-control" value="{{$editstaf->jabatan}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Pendidikan</label>
                                            <div class="col-sm-9">
                                                <input type="text" required="required" id="pendidikan" name="pendidikan" class="form-control" value="{{$editstaf->pendidikan}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Aktif Start</label>
                                            <div class="col-sm-9">
                                                <input type="date" required="required" id="aktifstart" name="aktifstart" class="form-control" value="{{$editstaf->aktifstart}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Aktif End</label>
                                            <div class="col-sm-9">
                                                <input type="date" id="aktifend" name="aktifend" class="form-control" value="{{$editstaf->aktifend}}">
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
