@include('navuser')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">DASHBOARD REKTOR IT DEL</h1>
    <a href="/MahasiswaAlumni/export_excel" data-target="#dataTable" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-file-export fa-sm text-white-50"></i> Export Data</a>
</div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa Alumni Institut Teknologi Del</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Program Studi</th>
                            <th>NIM</th>
                            <th>Nama Alumni</th>
                            <th>Angkatan</th>
                            <th>Tahun Lulus</th>
                            <th>Lokasi Kerja</th>
                            <th>Posisi</th>
                            <th>No.Telepon</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1 @endphp
                        @foreach($mahasiswaalumni as $alumni)
                        <tr>
                            <td width="2%">{{ $i++ }}</td>
                            <td>{{ $alumni->prodi }}</td>
                            <td>{{ $alumni->nim }}</td>
                            <td>{{ $alumni->nama }}</td>
                            <td width="7%">{{ $alumni->angkatan }}</td>
                            <td width="7%">{{ $alumni->lulus }}</td>
                            <td>{{ $alumni->lokasikerja }}</td>
                            <td>{{ $alumni->posisi }}</td>
                            <td>{{ $alumni->notelp }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@include('footeruser')
