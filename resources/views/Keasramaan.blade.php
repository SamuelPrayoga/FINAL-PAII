@include('navuser')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">DASHBOARD REKTOR IT DEL</h1>
    <a href="/Keasramaan/export_excel" data-target="#dataTable" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-download fa-sm text-white-50"></i> Download Excel</a>
</div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Keasramaan Institut Teknologi Del</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>ID Keasramaan</th>
                            <th>Pendidikan Terakhir</th>
                            <th>Jabatan</th>
                            <th>Asrama</th>
                            <th>Asal</th>
                            <th>No.Telepon</th>
                            <th>Aktif Start</th>
                            <th>Aktif End</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1 @endphp
                        @foreach($keasramaan as $ke)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{$ke->nama}}</td>
                            <td>{{$ke->keasramaanID}}</td>
                            <td>{{$ke->pendidikan}}</td>
                            <td>{{$ke->jabatan}}</td>
                            <td>{{$ke->asrama}}</td>
                            <td>{{$ke->asal}}</td>
                            <td>{{$ke->notelp}}</td>
                            <td>{{ date('d M Y', strtotime($ke->aktifstart))}}</td>
                            <td>{{ date('d M Y', strtotime($ke->aktifend))}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@include('footeruser')
