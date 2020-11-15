@extends('admin.base-admin')
<title>HONDA - Admin</title>
@section('conten2')
<!-- DataTables Example -->
<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Update - Dokumentasi</li>
  </ol>

  <div class="card mb-3">

   <div class="modal-body">
    <h4>edit Data</h4>
    <form action="/admin-honda/dokumentasi/{{$data_dokumentasi->id}}/update" method="post" enctype="multipart/form-data" >
      {{csrf_field()}}
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="inputCity">Gambar</label>
          <input type="file" name="foto" class="form-control" id="inputCity" value="{{$data_dokumentasi->foto}}" >
           <input type="hidden" name="hidden_foto" class="form-control" id="inputCity" value="{{$data_dokumentasi->foto}}" >
        </div>
        <div class="form-group col-md-8">
          <label for="inputState">Keterangan</label>
          <input type="text" name="keterangan" class="form-control" value="{{$data_dokumentasi->keterangan}}" >
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Update Dokumentasi</button>
    </form>
  </div>

  
  <div class="card-footer small text-muted"><span>Copyright © Struggle Team 2020</span></div>
</div>

</div>

@endsection