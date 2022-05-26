<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Dashboard Rektor IT Del</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
    <!-- Tempusdominus Bootstrap 4 -->
    <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">


</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#"
                        role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/beranda" class="brand-link">
                <img src="{{asset('dist/img/itdel.png')}}" alt="IT Del Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">DASHBOARD REKTOR</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">

                    <div class="image">
                        <img src="{{ asset(Auth::user()->avatar)}}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        @auth
                        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                        @endauth
                    </div>

                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu">
                            <a href="/beranda" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">AGENDA REKTOR</li>
                        <li class="nav-item">
                            <a href="/AgendaRektor" class="nav-link">
                                <i class="nav-icon fa fa-calendar"></i>
                                <p>
                                    Agenda Rektor
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">SUMBER DAYA MANUSIA</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-graduation-cap"></i>
                                <p>
                                    Data Dosen
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/DosenAktif" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dosen Aktif</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/DosenTugasBelajar" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Dosen Tugas Belajar</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-users"></i>
                                <p>
                                    Staff dan Asisten Dosen
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/Staff" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Staff</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/AsistenDosen" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Asisten Dosen</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/Keasramaan" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Keasramaan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/Pegawai" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pegawai</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-user"></i>
                                <p>
                                    Mahasiswa
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/MahasiswaAktif" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Mahasiswa Aktif</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/MahasiswaAlumni" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Mahasiswa AAlumni</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-header">SARANA PRASARANA KAMPUS</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-building"></i>
                                <p>
                                    Gedung dan Bangunan
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/ListGedung" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>List Gedung</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/KapasitasRuanganKelas" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Kapasitas Ruangan Kelas</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/Kantin" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Kantin</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/PerumahanDalam" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Perumahan Dalam</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/PerumahanLuar" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Perumahan Luar</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-home"></i>
                                <p>
                                    Asrama dan Rusunawa
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/Asrama" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Asrama/Rusunawa</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/Rusun3" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Rusunawa 3</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-suitcase"></i>
                                <p>
                                    Inventaris Kampus
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/Komputer" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Komputer</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/Kendaraan" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Kendaraan Kampus</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-header">ASET KAMPUS</li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-archive"></i>
                                <p>
                                    Penambahan Aset
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/Mebeler" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Mebeler</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/AlatTulis" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Alat Tulis/PC/Notebook</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/AudioVisual" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Audio Visual</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/PeralatanRumahTangga" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Peralatan Rumah Tangga</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/PersediaanKampus" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Persediaan Kampus</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/AlatLaboratorium" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Peralatan Laboratorium</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/Jaringan" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Jaringan Kampus</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/PerlengkapanMaintanance" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Maintanance</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/PerlengkapanTaman" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Perlengkapan Taman</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-recycle"></i>
                                <p>
                                    Pemusnahan Aset
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/DisposalMebeler" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Mebeler</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/DisposalAlatTulis" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Alat Tulis/PC/Notebook</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/DisposalAudioVisual" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Audio Visual</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/DisposalPeralatanRumahTangga" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Peralatan Rumah Tangga</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/DisposalPersediaanKampus" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Persediaan Kampus</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/DisposalAlatLaboratorium" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Peralatan Laboratorium</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/DisposalJaringan" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Jaringan Kampus</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/DisposalPerlengkapanMaintanance" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Maintanance</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/DisposalPerlengkapanTaman" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Perlengkapan Taman</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
