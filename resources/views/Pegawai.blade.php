@include('navuser')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">DASHBOARD REKTOR IT DEL</h1>
    <a href="/Pegawai/export_excel" data-target="#dataTable" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-file-export fa-sm text-white-50"></i> Export Data</a>
</div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Pegawai Institut Teknologi Del</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>ID Pegawai</th>
                            <th>Bagian</th>
                            <th>Jabatan</th>
                            <th>Pendidikan Terakhir</th>
                            <th>Alamat</th>
                            <th>No.Telepon</th>
                            <th>Aktif End</th>
                            <th>Aktif Start</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1 @endphp
                        @foreach($pegawai as $peg)
                        <tr>
                            <td width="2%">{{ $i++ }}</td>
                            <td>{{ $peg->nama }}</td>
                            <td>{{ $peg->pegawaiID }}</td>
                            <td>{{ $peg->bagian }}</td>
                            <td>{{ $peg->jabatan }}</td>
                            <td>{{ $peg->pendidikan }}</td>
                            <td>{{ $peg->alamat }}</td>
                            <td>{{ $peg->notelp }}</td>
                            <td>{{ date('d M Y', strtotime($peg->aktifstart)) }}</td>
                            <td>{{ date('d M Y', strtotime($peg->aktifend)) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@include('footeruser')
