@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Asrama dan Rusunawa</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Asrama</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Gedung</th>
                        <th>Kategori</th>
                        <th>Jumlah Kamar</th>
                        <th>Kapasitas/Kamar</th>
                        <th>Total</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1 @endphp
                    @foreach ($asrama as $as)
                        <tr>
                            <td width="5%">{{ $i++ }}</td>
                            <td>{{ $as->namagedung }}</td>
                            <td>{{ $as->kategori }}</td>
                            <td width="5%">{{ $as->jumlahkamar }}</td>
                            <td width="5%">{{ $as->kapasitasruangan }}</td>
                            <td width="5%">{{ $as->total }}</td>
                            <td width="20%">{{ $as->keterangan }}</td>
                            <td width="18%">
                                <button type="button" class="btn btn-warning"
                                    onclick="window.location.href='/dataasrama/editasrama/{{ $as->id }}'"><i
                                        class="fas fa-edit"></i>
                                    Edit</button>
                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target="#myModal{{ $as->id }}"><i class="fas fa-trash-alt"></i>
                                    Hapus</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button type="button" class="btn btn-primary" onclick="window.location.href='/tambahasrama'"><i
                    class="fas fa-plus-square"></i> Tambah Data</button>
        </div>
    </div>
</div>
<div class="card-body">
</div>

<!-- Modal -->
@foreach ($asrama as $as)
<div class="modal fade" id="myModal{{ $as->id }}" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Hapus Data Asrama</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin menghapusnya?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger"
                    onclick="window.location.href='/dataasrama/deleteasrama/{{ $as->id }}'">Hapus</button>
            </div>
        </div>
    </div>
</div>
@endforeach


@include('Admin.footeradmin')
