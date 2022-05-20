@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Akun Pengguna</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Akun Pengguna</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('tambahakun.action') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Nama Pengguna</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="name" name="name" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                    <input type="email" required="required" id="email" name="email" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-9">
                    <input type="password" required="required" id="password" name="password" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Konfirmasi Password</label>
                <div class="col-sm-9">
                    <input type="password" required="required" id="password_confirm" name="password_confirm" class="form-control">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Role</label>
                <div class="col-sm-9">
                    <select class="form-control"  required="required" name="role" aria-label="Default select example" >
                        <option value="Admin">Admin</option>
                        <option value="Rektor">Rektor</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Status</label>
                <div class="col-sm-9">
                    <select class="form-control"  required="required" name="status" aria-label="Default select example" >
                        <option value="1">1</option>
                        <option value="0">0</option>
                    </select>
                </div>
            </div>
    </div>
    <button type="submit" class="btn btn-primary"><i class="fas fa-plus-square"></i> Tambah</button>
    </form>
</div>
<div class="card-body">
</div>


@include('Admin.footeradmin')
