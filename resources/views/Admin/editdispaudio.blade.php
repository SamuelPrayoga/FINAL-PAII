@include('Admin.navadmin')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>EDIT PEMUSNAHAN AUDIO VISUAL</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/beranda">Dashboard Admin</a></li>
                        <li class="breadcrumb-item"><a href="/datadispaudio">Pemusnahan Aset Audio Visual</a></li>
                        <li class="breadcrumb-item active">Edit Pemusnahan Aset Audio Visual</li>
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
                                  <h3 class="card-title">Edit Pemusnahan Aset Audio Visual</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="{{ route('datadispaudio.updatedispaudio', $editdispaudio->id) }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="card-body">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Item Barang</label>
                                            <div class="col-sm-9">
                                                <input type="text" required="required" id="itembarang" name="itembarang" class="form-control" value="{{$editdispaudio->itembarang}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Kode Aset</label>
                                            <div class="col-sm-9">
                                                <input type="text" required="required" id="kodeaset" name="kodeaset" class="form-control" value="{{$editdispaudio->kodeaset}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Jumlah Unit</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="jumlahunit" name="jumlahunit" class="form-control" value="{{$editdispaudio->jumlahunit}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">No PR</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="nopr" name="nopr" class="form-control" value="{{$editdispaudio->nopr}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">No PO</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="nopo" name="nopo" class="form-control" value="{{$editdispaudio->nopo}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Nilai Invoice</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="nilaiinvoice" name="nilaiinvoice" class="form-control" value="{{$editdispaudio->nilaiinvoice}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Sumber Dana</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="sumberdana" name="sumberdana" class="form-control" value="{{$editdispaudio->sumberdana}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Nilai Buku</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="nilaibuku" name="nilaibuku" class="form-control" value="{{$editdispaudio->nilaibuku}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Lokasi</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="lokasi" name="lokasi" class="form-control" value="{{$editdispaudio->lokasi}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Alasan Write-Off</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="alasan" name="alasan" class="form-control" value="{{$editdispaudio->alasan}}">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Unit</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="unit" name="unit" class="form-control" value="{{$editdispaudio->unit}}">
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
