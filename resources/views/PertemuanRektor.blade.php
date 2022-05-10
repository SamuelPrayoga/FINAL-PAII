@include('navuser')

<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Jadwal dan Riwayat Pertemuan Institut Teknologi Del</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kegiatan Pertemuan</th>
                            <th>Lokasi</th>
                            <th>Tanggal</th>
                            <th>Waktu</th>
                            <th>Keterangan</th>
                            <th>Konfirmasi</th>
                            <th>Status Konfirmasi</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Penandatanganan MoU Kerjasama Bidang Teknologi AI dengan Institut Teknologi Bandung</td>
                            <td>Gedung Auditorium ITB</td>
                            <td>15 April 2022</td>
                            <td>Pukul 10.00 WIB</td>
                            <td>Membawa Berkas MoU dan Asistensi Rektorat</td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                    Konfirmasi</button>
                            </td>
                            <td>Hadir</td>
                            <td>Selesai</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Penandatanganan MoU Kerjasama Bidang Teknologi AI dengan Institut Teknologi Sumatera
                            </td>
                            <td>Gedung Auditorium ITERA</td>
                            <td>22 April 2022</td>
                            <td>Pukul 10.00 WIB</td>
                            <td>Membawa Berkas MoU dan Asistensi Rektorat</td>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                    Konfirmasi</button>
                            </td>
                            <td>Hadir</td>
                            <td>Dalam Progress</td>
                        </tr>

                    </tbody>
                </table>
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">

                                <h4 class="modal-title">Konfirmasi Pertemuan Rektor</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-sm-4"><strong>Nama Kegiatan Pertemuan</strong></div>
                                    <div class="col-sm-2">:</div>
                                    <div class="col-md-6">Penandatanganan MoU Kerjasama Bidang Teknologi AI dengan
                                        Institut Teknologi Bandung</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4"><strong>Penyelenggara</strong></div>
                                    <div class="col-sm-2">:</div>
                                    <div class="col-md-6">Institut Teknologi Bandung</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4"><strong>Lokasi</strong></div>
                                    <div class="col-sm-2">:</div>
                                    <div class="col-md-6">Gedung Auditorium ITB</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4"><strong>Tanggal</strong></div>
                                    <div class="col-sm-2">:</div>
                                    <div class="col-md-6">15 April 2022</div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4"><strong>Waktu</strong></div>
                                    <div class="col-sm-2">:</div>
                                    <div class="col-md-6">10.00 WIB</div>
                                </div>
                                <br>
                                <p>Konfirmasi Kehadiran Anda</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="confirm" id="hadir" value="hadir"
                                        required>
                                    <label class="form-check-label" for="hadir">
                                        Hadir
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="confirm" id="tidakhadir"
                                        value="tidakhadir" required>
                                    <label class="form-check-label" for="tidakhadir">
                                        Tidak Dapat Hadir
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="confirm" id="diwakilkan"
                                        value="diwakilkan" required>
                                    <label class="form-check-label" for="diwakilkan">
                                        Hadir Tetapi Diwakilkan
                                    </label>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary">Submit</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('footeruser')
