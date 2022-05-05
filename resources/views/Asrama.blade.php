@include('navuser')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">DASHBOARD REKTOR IT DEL</h1>
    <a href="/Asrama/export_excel" data-target="#dataTable" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-file-export fa-sm text-white-50"></i> Export Data</a>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Asrama Institut Teknologi Del</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Gedung</th>
                        <th>Kategori</th>
                        <th>
                            <center>Jumlah Kamar</center>
                        </th>
                        <th>
                            <center>Kapasitas / Kamar</center>
                        </th>
                        <th>
                            <center>Total</center>
                        </th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama Gedung</th>
                        <th>Kategori</th>
                        <th>
                            <center>Jumlah Kamar</center>
                        </th>
                        <th>
                            <center>Kapasitas / Kamar</center>
                        </th>
                        <th>
                            <center>Total</center>
                        </th>
                        <th>Keterangan</th>
                    </tr>
                </tfoot>
                <tbody>
                    @php $i=1 @endphp
                    @foreach ($asrama as $as)
                        <tr>
                            <td width="5%">{{ $i++ }}</td>
                            <td>{{ $as->namagedung }}</td>
                            <td width="10%">{{ $as->kategori }}</td>
                            <td width="5%">
                                <center>{{ $as->jumlahkamar }}</center>
                            </td>
                            <td width="5%">
                                <center>{{ $as->kapasitasruangan }}</center>
                            </td>
                            <td>
                                <center>{{ $as->total }}</center>
                            </td>
                            <td width="30%">{{ $as->keterangan }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

@include('footeruser')
