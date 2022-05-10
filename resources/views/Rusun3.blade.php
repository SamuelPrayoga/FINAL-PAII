@include('navuser')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">DASHBOARD REKTOR IT DEL</h1>
    <a href="/Rusun3/export_excel" data-target="#dataTable" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-file-export fa-sm text-white-50"></i> Export Data</a>
</div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Rusunawa 3 Institut Teknologi Del</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th rowspan="2"><center>No</center></th>
                            <th rowspan="2"><center>Nomor Kamar</center></th>
                            <th rowspan="2"><center>Nama Penghuni</center></th>
                            <th rowspan="2"><center>Jabatan</center></th>
                            <th rowspan="2"><center>Jumlah Kamar</center></th>
                            <th rowspan="2"><center>Kapasitas / Kamar</center></th>
                            <th colspan="4"><center>Jumlah</center></th>
                            <th rowspan="2"><center>Keterangan</center></th>
                        </tr>
                        <tr>
                            <td><center>I/S</center></td>
                            <td><center>ANAK</center></td>
                            <td><center>DLL</center></td>
                            <td><center>Total</center></td>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1 @endphp
                        @foreach ($rusun3 as $rs3 )
                        <tr>
                            <td width="3%">{{ $i++ }}</td>
                            <td width="10%">{{$rs3->nomorkamar }}</td>
                            <td>{{$rs3->namapenghuni }}</td>
                            <td>{{$rs3->jabatan }}</td>
                            <td width="3%"><center>{{$rs3->jumlahkamar }}</center></td>
                            <td width="3%"><center>{{$rs3->kapasitaskamar }}</center></td>
                            <td><center>{{$rs3->istri }}</center></td>
                            <td><center>{{$rs3->anak }}</center></td>
                            <td><center>{{$rs3->dll }}</center></td>
                            <td><center>{{$rs3->total }}</center></td>
                            <td>{{$rs3->keterangan }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@include('footeruser')
