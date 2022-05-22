@include('navuser')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">DASHBOARD REKTOR IT DEL</h1>
    <a href="/AgendaRektor/export_excel" data-target="#dataTable" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-file-export fa-sm text-white-50"></i> Export Data</a>
</div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">[Terbaru] Agenda dan Kegiatan Rektor</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="data" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Kegiatan</th>
                            <th>Penyelenggara</th>
                            <th>Lokasi</th>
                            <th>Mulai</th>
                            <th>Selesai</th>
                            <th>Status</th>
                            <th>Keterangan</th>
                            <th><center>Konfirmasi</center></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1 @endphp
                        @foreach ($agendaterbaru as $agenda )
                        <tr>
                            <td width="2%">{{ $i++ }}</td>
                            <td>{{ $agenda->namakegiatan }}</td>
                            <td>{{ $agenda->penyelenggara }}</td>
                            <td>{{ $agenda->lokasi }}</td>
                            <td>{{ date('l, d M Y', strtotime($agenda->tanggal)) }}</td>
                            <td>{{ ($agenda->waktu) }} WIB</td>
                            <td width="18%">
                                @if($agenda->status == 'Hadir')
                                    <button class="btn btn-success btn-sm" disabled>{{ $agenda->status }}</button>
                                    @endif
                                @if ($agenda->status == 'Tidak Hadir')
                                    <button class="btn btn-danger btn-sm" disabled>{{ $agenda->status }}</button>
                                    @endif
                                @if ($agenda->status == 'Menunggu Konfirmasi')
                                    <button class="btn btn-warning btn-sm" disabled>{{ $agenda->status }}</button>
                                    @endif
                                @if ($agenda->status == 'Selesai')
                                    <button class="btn btn-primary btn-sm" disabled>{{ $agenda->status }}</button>
                                    @endif
                        </td>
                            <td>{{ $agenda->keterangan }}</td>
                            <td width="14%"><center>
                                <button type="button" class="btn btn-info btn-sm"
                                onclick="window.location.href='/AgendaRektor/editagendarektors/{{ $agenda->id }}'"><i
                                    class="fas fa-wrench"></i>
                                Konfirmasi</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Agenda dan Kegiatan Rektor</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kegiatan</th>
                            <th>Penyelenggara</th>
                            <th>Lokasi</th>
                            <th>Mulai</th>
                            <th>Selesai</th>
                            <th>Status</th>
                            <th>Keterangan</th>
                            <th><center>Konfirmasi</center></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i=1 @endphp
                        @foreach ($agendarektor as $agenda )
                        <tr>
                            <td width="2%">{{ $i++ }}</td>
                            <td>{{ $agenda->namakegiatan }}</td>
                            <td>{{ $agenda->penyelenggara }}</td>
                            <td>{{ $agenda->lokasi }}</td>
                            <td>{{ date('l, d M Y', strtotime($agenda->tanggal)) }}</td>
                            <td>{{ ($agenda->waktu) }} WIB</td>
                            <td width="18%">
                                    @if($agenda->status == 'Hadir')
                                        <button class="btn btn-success btn-sm" disabled>{{ $agenda->status }}</button>
                                        @endif
                                    @if ($agenda->status == 'Tidak Hadir')
                                        <button class="btn btn-danger btn-sm" disabled>{{ $agenda->status }}</button>
                                        @endif
                                    @if ($agenda->status == 'Menunggu Konfirmasi')
                                        <button class="btn btn-warning btn-sm" disabled>{{ $agenda->status }}</button>
                                        @endif
                                    @if ($agenda->status == 'Selesai')
                                        <button class="btn btn-primary btn-sm" disabled>{{ $agenda->status }}</button>
                                        @endif
                            </td>
                            <td>{{ $agenda->keterangan }}</td>
                            <td width="14%"><center>
                                <button type="button" class="btn btn-light btn-sm"
                                onclick="window.location.href='/AgendaRektor/editagendarektors/{{ $agenda->id }}'"><i
                                    class="fas fa-wrench"></i>
                                Konfirmasi</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@include('footeruser')
