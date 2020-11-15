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
    <li class="breadcrumb-item active">Update - Type {{$data_penjualan->nama_mobil}}</li>
  </ol>

  <div class="card mb-3">

   <div class="modal-body">
    <h4>Edit Type {{$data_penjualan->nama_mobil}}</h4>
    <hr/>
    <form action="/admin-honda/price-list/{{$data_type->id}}/update" method="post" enctype="multipart/form-data" >
        {{csrf_field()}}
        <div class="form-row">
          <!-- <div class="form-group col-md-4">
            <label for="inputState">Merk Mobil</label>
            <input type="" name="">
          </div> -->
          <div class="form-group col-md-4">
            <label for="inputCity">Type Mobil</label>
            <input type="text" name="type" class="form-control" id="inputCity" value="{{$data_type->type}}">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">Harga</label>
            <input type="number" name="harga_type" class="form-control" value="{{$data_type->harga_type}}">
          </div>
        </div>
        <button type="submit" class="btn btn-dark">Save Foto</button>
      </form>
  </div>
  <div class="card-footer small text-muted"><span>Copyright © Struggle Team 2020</span></div>
</div>

</div>

@endsection