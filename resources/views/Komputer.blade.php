@include('navuser')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">DASHBOARD REKTOR IT DEL</h1>
    <a href="/Komputer/export_excel" data-target="#dataTable" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
        <i class="fas fa-download fa-sm text-white-50"></i> Download Excel</a>
</div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Komputer Institut Teknologi Del</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Ruangan/Gedung</th>
                            <th>Kategori</th>
                            <th><center>Jumlah</center></th>
                            <th>Penanggung Jawab</th>
                            <th>Jabatan</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1 @endphp
                        @foreach ($komputer as $komp)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{$komp->gedung}}</td>
                            <td>{{$komp->kategori}}</td>
                            <td><center>{{$komp->jumlah}}</center></td>
                            <td>{{$komp->penanggungjawab}}</td>
                            <td>{{$komp->jabatan}}</td>
                            <td>{{$komp->keterangan}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@include('footeruser')
