@include('navuser')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/beranda">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $mahasiswaaktif }}</h3>

                            <p>Mahasiswa Aktif</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                        <a href="/MahasiswaAktif" class="small-box-footer">@if (auth()->user()->level == 0)Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i>@endif</a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $dosenaktif }}</h3>

                            <p>Dosen Aktif</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                        </div>

                        <a href="/DosenAktif" class="small-box-footer">@if (auth()->user()->level == 0)Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i>@endif</a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ $dosentugas }}</h3>

                            <p>Dosen Tugas Belajar</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-user-plus" aria-hidden="true"></i>
                        </div>
                        <a href="/DosenTugasBelajar" class="small-box-footer">@if (auth()->user()->level == 0)Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i>@endif</a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ $asrama }}</h3>

                            <p>Asrama dan Rusunawa</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-home" aria-hidden="true"></i>
                        </div>
                        <a href="/Asrama" class="small-box-footer">@if (auth()->user()->level == 0)Lihat Selengkapnya <i class="fas fa-arrow-circle-right"></i>@endif</a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
                <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Agenda Rektor Terbaru</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example" class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama Kegiatan</th>
                            <th>Penyelenggara</th>
                            <th>Lokasi</th>
                            <th><center>Status</center></th>
                            @if (auth()->user()->level == 0)
                            <th>
                                <center>#</center>
                            </th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1 @endphp
                        @foreach ($agendarektor as $agenda)
                            <tr>
                                <td width="2%">{{ $i++ }}</td>
                                <td>{{ $agenda->namakegiatan }}</td>
                                <td>{{ $agenda->penyelenggara }}</td>
                                <td>{{ $agenda->lokasi }}</td>
                                <td width="18%"><center>
                                    @if($agenda->status == 'Hadir')
                                        <button class="btn btn-success btn-sm" disabled>{{ $agenda->status }}</button>
                                        @endif
                                    @if ($agenda->status == 'Tidak Hadir')
                                        <button class="btn btn-danger btn-sm" disabled>{{ $agenda->status }}</button>
                                        @endif
                                    @if ($agenda->status == 'Menunggu Konfirmasi')
                                        <button class="btn btn-warning btn-sm" disabled>{{ $agenda->status }}</button>
                                        @endif
                                    @if ($agenda->status == 'Reschedule')
                                        <button class="btn btn-warning btn-sm" disabled>{{ $agenda->status }}</button>
                                    @endif
                                    @if ($agenda->status == 'Selesai')
                                        <button class="btn btn-secondary btn-sm" disabled>{{ $agenda->status }}</button>
                                        @endif
                                </center></td>
                                @if (auth()->user()->level == 0)
                                <td width="14%">
                                    <center>
                                        <button type="button" class="btn btn-light btn-sm"
                                        onclick="window.location.href='/AgendaRektor'"><i
                                            class="fas fa-eye"></i> Detail</button>
                                        </div>
                                    </center>
                                </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
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
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <div class="col-xl-7 col-lg-7">
                    <div class="card shadow mb-4">
                        <!-- Card Body -->
                        <div class="card-body">
                            <div id="chartMaba"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="card shadow mb-4">
                        <!-- Card Body -->
                        <div class="card-body">
                            <div id="chartMebeler"></div>
                        </div>
                    </div>
                </div>
                <!-- /.Left col -->
                <!-- right col (We are only adding the ID to make the widgets sortable)-->

                <!-- right col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

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

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<script>
    Highcharts.chart('chartMaba', {

        chart: {
            type: 'spline'
        },
        title: {
            text: 'Grafik Jumlah Pendaftar Mahasiswa Baru'
        },
        subtitle: {
            text: 'Akumulasi PMDK, USM, dan Lainnya'
        },
        xAxis: {
            categories:{!!json_encode($categories)!!},
            crosshair: true
        },
        colors:['#043163'],
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah pendaftar'
            }
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Jumlah Pendaftar',
            borderRadius: 2,
            cursor: 'pointer',
            states: {
                select: {
                    color: '#002aff'
                }
            },
            slicesOffset: 0,
            point: {
                events: {
                    click: function (event) {
                        this.select(null, true);
                        console.log(this.series.chart.getSelectedPoints());
                    }
                }
            },
            data: {!!json_encode($data)!!}
        }]
    });
</script>
<script>
    Highcharts.chart('chartMebeler', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Dosen yang Melaksanakan Tugas Belajar'
        },
        subtitle: {
            text: 'Sumber: Badan Administrasi Akademik dan Kemahasiswaan'
        },
        xAxis: {
            categories: {!!json_encode($categoriess)!!},
            crosshair: true
        },
        colors:['#009e05'],
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah Dosen Tugas Belajar'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Dosen Tugas Belajar',
            borderRadius: 2,
            cursor: 'pointer',
            states: {
                select: {
                    color: '#d6921c'
                }
            },
            slicesOffset: 0,
            point: {
                events: {
                    click: function (event) {
                        this.select(null, true);
                        console.log(this.series.chart.getSelectedPoints());
                    }
                }
            },
            data: {!!json_encode($datas)!!}
        }]
    });
</script>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>

<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
</body>

</html>

