@include('navuser')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">DASHBOARD REKTOR IT DEL</h1>
    <a href="/PeralatanRumahTangga/export_excel" data-target="#dataTable" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-file-export fa-sm text-white-50"></i> Export Data</a>
</div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Penambahan Aset Peralatan Rumah Tangga Institut Teknologi Del</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Item Barang</th>
                            <th>Tipe Barang</th>
                            <th>Kode Aset</th>
                            <th>Jumlah Unit</th>
                            <th>No PR</th>
                            <th>No PO</th>
                            <th>Nilai Invoice</th>
                            <th>Umur Ekonomis</th>
                            <th>Depresiasi/Bulan</th>
                            <th>Sumber Dana</th>
                            <th>Akumulasi Depresiasi</th>
                            <th>Nilai Buku</th>
                            <th>Lokasi</th>
                            <th>Unit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1 @endphp
                        @foreach ($peralatan as $per)
                        <tr>
                            <td width="5%">{{ $i++ }}</td>
                            <td>{{$per->itembarang}}</td>
                            <td>{{$per->tipebarang}}</td>
                            <td>{{$per->kodeaset}}</td>
                            <td width="7%">{{$per->jumlahunit}}</td>
                            <td width="7%">{{$per->nopr}}</td>
                            <td>{{$per->nopo}}</td>
                            <td>{{$per->nilaiinvoice}}</td>
                            <td>{{$per->umurekonomis}}</td>
                            <td>{{$per->depresiasi}}</td>
                            <td>{{$per->sumberdana}}</td>
                            <td>{{$per->akumulasidepresiasi}}</td>
                            <td>{{$per->nilaibuku}}</td>
                            <td>{{$per->lokasi}}</td>
                            <td>{{$per->unit}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@include('footeruser')
