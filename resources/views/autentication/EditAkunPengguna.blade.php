@include('Admin.navadmin')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Akun Pengguna</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Akun Pengguna</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('dataakunpengguna.updateakunpengguna', $editakunpengguna->user_id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Nama Pengguna</label>
                <div class="col-sm-9">
                    <input type="text" required="required" id="name" name="name" class="form-control" value="{{$editakunpengguna->name}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                    <input type="email" required="required" id="email" name="email" class="form-control" value="{{$editakunpengguna->email}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Level</label>
                <div class="col-sm-9">
                    <select class="form-control"  required="required" name="level" aria-label="Default select example" >
                        <option value="{{$editakunpengguna->level}}">{{$editakunpengguna->level}}</option>
                        <option value="1">1</option>
                        <option value="0">0</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Status</label>
                <div class="col-sm-9">
                    <select class="form-control"  required="required" name="status" aria-label="Default select example" >
                        <option value="{{$editakunpengguna->status}}">{{$editakunpengguna->status}}</option>
                        <option value="Default User">Default User</option>
                        <option value="Added User">Added User</option>
                    </select>
                </div>
            </div>
            <!--<div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Avatar</label>
                <div class="col-sm-9">
                  <input class="form-control" id="formFileMultiple"  name="avatar" type="file" id="formFileMultiple" multiple >{{$editakunpengguna->avatar}}
                </div>
            </div>-->
    </div>
    <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
    </form>
</div>
<div class="card-body">
</div>


@include('Admin.footeradmin')
