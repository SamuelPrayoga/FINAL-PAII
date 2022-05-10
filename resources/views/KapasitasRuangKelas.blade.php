@include('navuser')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">DASHBOARD REKTOR IT DEL</h1>
    <a href="/KapasitasRuanganKelas/export_excel" data-target="#dataTable" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-file-export fa-sm text-white-50"></i> Export Data</a>
</div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Kapasitas Ruangan Institut Teknologi Del</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Ruangan</th>
                            <th>Keterangan</th>
                            <th>Luas(m<sup>2</sup>)</th>
                            <th>Kapasitas Normal</th>
                            <th>Perkiraan Kursi, Meja Hasil Survei Langsung (Sosial Distancing)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kapasitasruangankelas as $kapasitas)
                        @php $i=1 @endphp
                        <tr>
                            <td width="2%">{{ $i++ }}</td>
                            <td width="15%">{{$kapasitas->ruangan}}</td>
                            <td>{{$kapasitas->keterangan}}</td>
                            <td><center>{{$kapasitas->luas}}</center></td>
                            <td><center>{{$kapasitas->kapasitasnormal}}</center></td>
                            <td><center>{{$kapasitas->perkiraan}}</center></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@include('footeruser')
