@include('Admin.navadmin')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Agenda Rektor</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table " id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kegiatan</th>
                        <th>Penyelenggara</th>
                        <th>Lokasi</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Status</th>
                        <th>Keterangan</th>
                        <th>
                            <center>Action</center>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1 @endphp
                    @foreach ($agendarektor as $agenda)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $agenda->namakegiatan }}</td>
                            <td>{{ $agenda->penyelenggara }}</td>
                            <td>{{ $agenda->lokasi }}</td>
                            <td>{{ $agenda->tanggal }}</td>
                            <td>{{ $agenda->waktu }} WIB</td>
                            <td>{{ $agenda->status }}</td>
                            <td>{{ $agenda->keterangan }}</td>
                            <td width="9%">
                                <center>
                                    <button type="button" class="btn btn-transparent-dark btn-sm" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                            class="fas fa-ellipsis-v"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <button class="dropdown-item" onclick="window.location.href='/dataagendarektor/editagendarektor/{{ $agenda->id }}'">Edit</button>
                                          </div>
                                    <button type="button" class="btn btn-transparent-dark btn-sm" data-toggle="modal"
                                        data-target="#myModal{{ $agenda->id }}"><i class="fas fa-trash-alt"></i>
                                        </button>
                                </center>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button type="button" class="btn btn-primary btn-sm" onclick="window.location.href='/tambahagendarektor'"><i
                    class="fas fa-plus-square"></i> Tambah Data</button>
        </div>
    </div>
</div>
<div class="card-body">
</div>

@foreach ($agendarektor as $agenda)
    <!-- Modal -->
    <div class="modal fade" id="myModal{{ $agenda->id }}" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title">Hapus Data Agenda dan Pertemuan Rektor</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapusnya?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondar btn-smy" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-danger btn-sm"
                        onclick="window.location.href='/dataagendarektor/deleteagendarektor/{{ $agenda->id }}'">Hapus</button>
                </div>
            </div>

        </div>
    </div>
@endforeach

@include('Admin.footeradmin')
