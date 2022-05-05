@include('navuser')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">DASHBOARD REKTOR IT DEL</h1>
    <a href="/ListGedung/export_excel" data-target="#dataTable" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-file-export fa-sm text-white-50"></i> Export Data</a>
</div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List Bangunan dan Pemakaian Ruangan Institut Teknologi Del</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Penomoran Gedung</th>
                            <th>Nama Gedung</th>
                            <th>Nama Ruangan</th>
                            <th>Kapasitas Ruangan</th>
                            <th>Lokasi Meja</th>
                            <th>Nama Pemakai Ruangan</th>
                            <th>Terisi</th>
                            <th>Ketersediaan</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Penomoran Gedung</th>
                            <th>Nama Gedung</th>
                            <th>Nama Ruangan</th>
                            <th>Kapasitas Ruangan</th>
                            <th>Lokasi Meja</th>
                            <th>Nama Pemakai Ruangan</th>
                            <th>Terisi</th>
                            <th>Ketersediaan</th>
                            <th>Keterangan</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($listgedung as $list )
                        @php $i=1 @endphp
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{$list->penomoran}}</td>
                            <td>{{$list->namagedung}}</td>
                            <td>{{$list->namaruangan}}</td>
                            <td>{{$list->kapasitasruangan}}</td>
                            <td>{{$list->lokasimeja}}</td>
                            <td>{{$list->namapemakai}}</td>
                            <td>{{$list->terisi}}</td>
                            <td>{{$list->ketersediaan}}</td>
                            <td>{{$list->keterangan}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@include('footeruser')
