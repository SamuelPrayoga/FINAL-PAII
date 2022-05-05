@include('navuser')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">DASHBOARD REKTOR IT DEL</h1>
    <a href="/PerumahanLuar/export_excel" data-target="#dataTable" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
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
                            <th>No</th>
                            <th>Nama Perumahan</th>
                            <th>Jumlah Kamar</th>
                            <th>Kapasitas / Kamar</th>
                            <th>Jumlah</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Perumahan</th>
                            <th>Jumlah Kamar</th>
                            <th>Kapasitas / Kamar</th>
                            <th>Jumlah</th>
                            <th>Keterangan</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php $i=1 @endphp
                        @foreach ($perumahanluar as $luar)
                        <tr>
                            <td width="2%">{{ $i++ }}</td>
                            <td>{{ $luar->namaperumahan }}</td>
                            <td width="5%"><center>{{ $luar->jumlahkamar }}</center></td>
                            <td width="5%"><center>{{ $luar->kapasitaskamar }}</center></td>
                            <td width="5%"><center>{{ $luar->jumlah }}</center></td>
                            <td>{{ $luar->keterangan }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@include('footeruser')
