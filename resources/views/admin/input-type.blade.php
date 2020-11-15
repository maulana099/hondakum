@extends('admin.base-admin')
<title>HONDA - Admin</title>
@section('conten2')

<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Type Mobil</li>
  </ol>
  <!-- DataTables Example -->
  <div class="card mb-3">

    <div class="modal-body">
      <h4>Input Type Mobil</h4>
      <hr/>
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="inputState">Merk Mobil</label>
          <input class="form-control" value="{{$data_penjualan->nama_mobil}}" disabled="">
        </div>
      </div>
      <form action="/admin-honda/price-list/{{$data_penjualan->id}}/tambah" method="post" enctype="multipart/form-data" >
        {{csrf_field()}}
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputState">Type</label>
            <input type="text" name="type" class="form-control" required="">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">Harga Type</label>
            <input type="number" name="harga_type" class="form-control" required="">
          </div>
        </div>
        <button type="submit" class="btn btn-dark">Simpan Data</button>
      </form>
    </div>
    <div class="card-footer small text-muted"><span>Copyright © Struggle Team 2020</span></div>
  </div>

</div>


@endsection