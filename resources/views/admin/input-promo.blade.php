@extends('admin.base-admin')
<title>HONDA - Admin</title>
@section('conten2')

<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Promo Mobil</li>
  </ol>
  <!-- DataTables Example -->
  <div class="card mb-3">

    <div class="modal-body">
      <h4>Input Promo Mobil</h4>
      <hr/>

      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="inputState">Merk Mobil</label>
          <input class="form-control" value="{{$data_penjualan->nama_mobil}}" disabled="">
        </div>
      </div>
      
      <form action="/admin-honda/tambah/promo/{{$data_penjualan->id}}/mobil" method="post" enctype="multipart/form-data" >
        {{csrf_field()}}      
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputState">Hadiah</label>
            <input type="text" name="hadiah" class="form-control">
          </div>
        </div>
        <button type="submit" class="btn btn-dark">Simpan Promo</button>
      </form>
      </div>
      <div class="card-footer small text-muted"><span>Copyright © Struggle Team 2020</span></div>
    </div>
  </div>


  @endsection