@include('navuser')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">DASHBOARD REKTOR IT DEL</h1>
    <a href="/KendaraanKampus/export_excel" data-target="#dataTable" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-file-export fa-sm text-white-50"></i> Export Data</a>
</div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Kendaraan Kampus Institut Teknologi Del</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No.Plat Kendaraan</th>
                            <th>Driver</th>
                            <th>Penanggungjawab</th>
                            <th><center>Jenis Kendaraan</center></th>
                            <th>Operasional</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1 @endphp
                        @foreach ($kendaraan as $kend )
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td width="12%">{{$kend->noplat}}</td>
                            <td>{{$kend->driver}}</td>
                            <td>{{$kend->penanggungjawab}}</td>
                            <td><center>{{$kend->jeniskendaraan}}</center></td>
                            <td>{{$kend->operasional}}</td>
                            <td>{{$kend->keterangan}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@include('footeruser')
