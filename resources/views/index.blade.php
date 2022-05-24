@include('navuser')
<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Content Row -->
    <!-- Content Row -->
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Mahasiswa Aktif</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $mahasiswaaktif }}</div>
                            @if (auth()->user()->level == 0)
                            <a class="text-xs font-weight-bold text-secondary mb-1" href="/MahasiswaAktif">
                                Lihat Selengkapnya
                            </a>
                            @endif
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Dosen Aktif</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $dosenaktif }}</div>
                            @if (auth()->user()->level == 0)
                            <a class="text-xs font-weight-bold text-secondary mb-1" href="/DosenAktif">
                                Lihat Selengkapnya
                            </a>
                            @endif
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Dosen Tugas Belajar</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $dosentugas }}</div>
                            @if (auth()->user()->level == 0)
                                <a class="text-xs font-weight-bold text-secondary mb-1" href="/DosenTugasBelajar">
                                    Lihat Selengkapnya
                                </a>
                            @endif
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Asrama dan Rusunawa</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $asrama }}</div>
                            @if (auth()->user()->level == 0)
                            <a class="text-xs font-weight-bold text-secondary mb-1" href="/Asrama">Lihat
                                Selengkapnya
                            </a>
                            @endif
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-home fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header  py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-priarmy">Agenda Rektor Terbaru</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="data" width="100%" cellspacing="2">
                            <thead>
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
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-7 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Body -->
                <div class="card-body">
                    <div id="chartMaba"></div>
                </div>
            </div>
        </div>
        <!-- Area Chart -->
        <div class="col-xl-5 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Body -->
                <div class="card-body">
                    <div id="chartMebeler"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- Footer -->
<footer class="sticky-footer bg-white border-bottom-secondary">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Dashboard Rektor Institut Teknologi Del</span>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="{{ route('logout') }}">Logout</a>
            </div>
        </div>
    </div>
</div>
{{-- ChartStyle --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>

<script src="https://code.highcharts.com/highcharts.js"></script>

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
        colors:['#ffd900'],
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
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>
<!-- Page level custom scripts -->
<!--<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>-->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>

</body>

</html>
