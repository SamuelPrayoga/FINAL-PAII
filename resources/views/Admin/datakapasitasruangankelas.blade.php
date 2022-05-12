@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Gedung dan Bangunan</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Kapasitas Ruangan</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Ruangan</th>
                        <th>Keterangan</th>
                        <th>Luas (m<sup>2</sup>)</th>
                        <th>Kapasitas Normal</th>
                        <th>Perkiraan Kursi, Meja Hasil survei Langsung (Social Distancing)</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1 @endphp
                    @foreach ($kapasitasruangankelas as $kapasitas)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $kapasitas->ruangan }}</td>
                            <td>{{ $kapasitas->keterangan }}</td>
                            <td>{{ $kapasitas->luas }}</td>
                            <td>{{ $kapasitas->kapasitasnormal }}</td>
                            <td>{{ $kapasitas->perkiraan }}</td>
                            <td width="18%">

                                <button type="button" class="btn btn-warning"
                                    onclick="window.location.href='/datakapasitasruangankelas/editkapasitasruangankelas/{{ $kapasitas->id }}'"><i
                                        class="fas fa-edit"></i>
                                    Edit</button>
                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target="#myModal{{ $kapasitas->id }}"><i class="fas fa-trash-alt"></i>
                                    Hapus</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button type="button" class="btn btn-primary" onclick="window.location.href='/tambahkapasitasruangankelas'"><i
                    class="fas fa-plus-square"></i> Tambah Data</button>
        </div>
    </div>
</div>
<div class="card-body">
</div>

<!-- Modal -->
@foreach ($kapasitasruangankelas as $kapasitas)
<div class="modal fade" id="myModal{{ $kapasitas->id }}" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Hapus Data Komentar</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapusnya?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger"
                    onclick="window.location.href='/datakapasitasruangankelas/deletekapasitasruangankelas/{{ $kapasitas->id }}'">Hapus</button>
            </div>
        </div>
    </div>
</div>
@endforeach

@include('Admin.footeradmin')
