@include('navuser')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">DASHBOARD REKTOR IT DEL</h1>
    <a href="/PerumahanDalam/export_excel" data-target="#dataTable" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-file-export fa-sm text-white-50"></i> Export Data</a>
</div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Perumahan Dalam Institut Teknologi Del</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th rowspan="2">
                                <center>No</center>
                            </th>
                            <th rowspan="2">Nama Perumahan</th>
                            <th rowspan="2">Nama Penghuni</th>
                            <th rowspan="2"><center>Jabatan</center></th>
                            <th rowspan="2"><center>Jumlah Kamar</center></th>
                            <th rowspan="2"><center>Kapasitas / Kamar</center></th>
                            <th colspan="4"><center>Jumlah</center></th>
                            <th rowspan="2">Keterangan</th>
                        </tr>
                        <tr>
                            <td>I/S</td>
                            <td>ANAK</td>
                            <td>DLL</td>
                            <td>Total</td>
                        </tr>

                    </thead>
                    <tbody>
                        @php $i=1 @endphp
                        @foreach ($perumahandalam as $dalam)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $dalam->namaperumahan}}</td>
                            <td>{{ $dalam->namapenghuni}}</td>
                            <td>{{ $dalam->jabatan}}</td>
                            <td width="5%"><center>{{ $dalam->jumlahkamar}}</center></td>
                            <td width="5%"><center>{{ $dalam->kapasitaskamar}}</center></td>
                            <td><center>{{ $dalam->istri}}</center></td>
                            <td><center>{{ $dalam->anak}}</center></td>
                            <td><center>{{ $dalam->dll}}</center></td>
                            <td><center>{{ $dalam->total}}</center></td>
                            <td>{{ $dalam->keterangan}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@include('footeruser')
