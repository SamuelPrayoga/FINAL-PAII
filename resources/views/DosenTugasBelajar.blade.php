@include('navuser')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">DASHBOARD REKTOR IT DEL</h1>
    <a href="/DosenTugasBelajar/export_excel" data-target="#dataTable" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-download fa-sm text-white-50"></i> Download Excel</a>
</div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Dosen Tugas Belajar</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIDN</th>
                            <th>Prodi</th>
                            <th>Lokasi Tugas Belajar</th>
                            <th>Program</th>
                            <th>Program Studi</th>
                            <th>Mulai Tugas Belajar</th>
                            <th>Rencana Aktif Kembali</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1 @endphp
                        @foreach ($dosentugas as $dostug )
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $dostug->namaDosen}}</td>
                            <td>{{ $dostug->nidn}}</td>
                            <td>{{ $dostug->prodi}}</td>
                            <td>{{ $dostug->lokasi}}</td>
                            <td>{{ $dostug->program}}</td>
                            <td>{{ $dostug->programStudi}}</td>
                            <td>{{ date('d M Y', strtotime($dostug->mulaiTugas)) }}</td>
                            <td>{{ date('d M Y', strtotime($dostug->rencanaAktif))}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@include('footeruser')
