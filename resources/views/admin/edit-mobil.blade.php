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
    <li class="breadcrumb-item active">Update - Merk Mobil</li>
  </ol>

  <div class="card mb-3">

   <div class="modal-body">
    <h4>edit Data</h4>
    <form action="/admin-honda/promosi/{{$data_penjualan->id}}/update" method="post" enctype="multipart/form-data" >
      {{csrf_field()}}
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">Gambar</label>
          <input type="file" name="gambar" class="form-control" id="inputCity" value="{{$data_penjualan->gambar}}" >
          <input type="hidden" name="hidden_gambar" class="form-control" id="inputCity" value="{{$data_penjualan->gambar}}" >
        </div>
        <div class="form-group col-md-6">
          <label for="inputState">Nama Mobil</label>
          <select id="Rencana" name="nama_mobil" class="form-control">
              <option value="{{$data_penjualan->nama_mobil}}"> {{$data_penjualan->nama_mobil}} </option>
              <option value=" BRIO SATYA "> BRIO SATYA </option>
              <option value="BRIO ">BRIO </option>
              <option value="JAZZ ">JAZZ </option>
              <option value="MOBILIO">MOBILIO </option>
              <option value=" HRV "> HRV </option>
              <option value="BRV ">BRV </option>
              <option value="CRV ">CRV </option>
              <option value="CIVIC ">CIVIC </option>
            </select>
        </div>
        <div class="form-group col-md-4">
          <label for="inputState">Harga Mobil</label>
          <input type="number" name="harga" class="form-control" value="{{$data_penjualan->harga}}" >
        </div>
        <div class="form-group col-md-4">
          <label for="inputState">DP</label>
          <input type="text" name="dp" class="form-control" value="{{$data_penjualan->dp}}" >
        </div>
        <div class="form-group col-md-4">
          <label for="inputState">Angsuran</label>
          <input type="text" name="angsuran" class="form-control" value="{{$data_penjualan->angsuran}}" >
        </div>
      </div>
      <button type="submit" class="btn btn-dark">Update Mobil</button>
    </form>
  </div>
  <div class="card-footer small text-muted"><span>Copyright © Struggle Team 2020</span></div>
</div>

</div>

@endsection