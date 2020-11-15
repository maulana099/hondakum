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
    <li class="breadcrumb-item active">Update - Promo Mobil</li>
  </ol>

  <div class="card mb-3"> 
   <div class="modal-body">
    <h4>Edit Data Promo</h4>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputCity">Merk Mobil</label>
        <input type="text" name="nama_mobil" class="form-control" id="inputCity" value="{{$data_penjualan->nama_mobil}}" disabled="">
      </div>

      <div class="form-group col-md-4">
        <label for="inputCity">DP</label>
        <input type="text" name="dp" class="form-control" id="inputCity" value="{{$data_penjualan->dp}}" disabled="">
      </div>

      <div class="form-group col-md-4">
        <label for="inputCity">Angsuran</label>
        <input type="text" name="angsuran" class="form-control" id="inputCity" value="{{$data_penjualan->angsuran}}" disabled="">
      </div>
    </div>
  
  <form action="/admin-honda/promo/{{$data_promo->id}}/mobil/update" method="post" enctype="multipart/form-data" >
    {{csrf_field()}}
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="inputCity">Hadiah</label>
        <input type="text" name="hadiah" class="form-control" id="inputCity" value="{{$data_promo->hadiah}}">
      </div>
    </div>
    <button type="submit" class="btn btn-dark">Update promo</button>
  </form>
  </div>
</div>
<div class="card-footer small text-muted"><span>Copyright © Struggle Team 2020</span></div>
</div>

</div>

@endsection