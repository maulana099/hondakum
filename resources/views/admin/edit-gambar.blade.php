@extends('admin.base-admin')
<title>HONDA - Admin</title>
@section('conten2')
<!-- DataTables Example -->
<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="/">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Update - Photos Sidebar</li>
  </ol>

  <div class="card mb-3">

   <div class="modal-body">
    <hr/>
    <form action="/admin-honda/gambar/{{$data_photos->id}}/update" method="post" enctype="multipart/form-data" >
        {{csrf_field()}}
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputCity">Photos</label>
            <input type="file" name="photos" class="form-control" id="inputCity" value="{{$data_photos->photos}}">
            <input type="hidden" name="hidden_photos" class="form-control" id="inputCity" value="{{$data_photos->photos}}">
          </div>
          <div class="form-group col-md-5">
            <label for="inputState">Keterangan</label>
            <input type="text" name="caption" class="form-control" value="{{$data_photos->caption}}">
          </div>
        </div>
        <button type="submit" class="btn btn-dark">Update Foto</button>
      </form>
  </div>
  <div class="card-footer small text-muted"><span>Copyright © Struggle Team 2020</span></div>
</div>

</div>

@endsection