@include('Admin.navadmin')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>TAMBAH PEMUSNAHAN ALAT LAB</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/beranda">Dashboard Admin</a></li>
                        <li class="breadcrumb-item"><a href="/datadisplab">Pemusnahan Alat Lab</a></li>
                        <li class="breadcrumb-item active">Tambah Pemusnahan Alat Lab</li>
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
                                  <h3 class="card-title">Tambah Pemusnahan Alat Lab</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form action="{{Route('displab.tambah')}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="card-body">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Item Barang</label>
                                            <div class="col-sm-9">
                                                <input type="text" required="required" id="itembarang" name="itembarang" class="form-control">
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Kode Aset</label>
                                            <div class="col-sm-9">
                                                <input type="text" required="required" id="kodeaset" name="kodeaset" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Jumlah Unit</label>
                                            <div class="col-sm-9">
                                                <input type="number" id="jumlahunit" name="jumlahunit" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">No PR</label>
                                            <div class="col-sm-9">
                                                <input type="number" id="nopr" name="nopr" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">No PO</label>
                                            <div class="col-sm-9">
                                                <input type="number" id="nopo" name="nopo" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Nilai Invoice</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="nilaiinvoice" name="nilaiinvoice" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Sumber Dana</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="sumberdana" name="sumberdana" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Nilai Buku</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="nilaibuku" name="nilaibuku" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Lokasi</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="lokasi" name="lokasi" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Alasan Write-Off</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="alasan" name="alasan" class="form-control">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Unit</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="unit" name="unit" class="form-control">
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
