@include('navuser')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">DASHBOARD REKTOR IT DEL</h1>
    <a href="/Staff/export_excel" data-target="#dataTable" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-file-export fa-sm text-white-50"></i> Export Data</a>
</div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Staff Institut Teknologi Del</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Staff</th>
                            <th>Nama Staff</th>
                            <th>Bagian</th>
                            <th>Jabatan</th>
                            <th>Pendidikan Terakhir</th>
                            <th>Aktif Start</th>
                            <th>Aktif End</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1 @endphp
                        @foreach( $staf as $st)
                        <tr>
                            <td width="2%">{{ $i++ }}</td>
                            <td>{{ $st->stafID}}</td>
                            <td>{{ $st->namastaf}}</td>
                            <td>{{ $st->bagian}}</td>
                            <td>{{ $st->jabatan}}</td>
                            <td width="15%">{{ $st->pendidikan}}</td>
                            <td>{{ $st->aktifstart}}</td>
                            <td>{{ $st->aktifend}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@include('footeruser')
