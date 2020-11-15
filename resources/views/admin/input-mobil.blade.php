@extends('admin.base-admin')
<title>HONDA - Admin</title>
@section('conten2')

<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Merk Mobil</li>
  </ol>
  <!-- DataTables Example -->
  <div class="card mb-3">

    <div class="modal-body">
      <h4>Input Merk Mobil</h4>
      <hr/>
      
      <form action="/admin-honda/promosi/tambah" method="post" enctype="multipart/form-data" >
        {{csrf_field()}}
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputState">Nama Mobil</label>
            <select id="Rencana" name="nama_mobil" class="form-control" required="">
              <option> Pilih Mobil </option>
              <option value=" BRIO SATYA "> BRIO SATYA </option>
              <option value="BRIO ">BRIO </option>
              <option value="JAZZ ">JAZZ </option>
              <option value="MOBILIO">MOBILIO </option>
              <option value=" HRV "> HRV </option>
              <option value="BRV ">BRV </option>
              <option value="CRV ">CRV </option>
              <option value="CIVIC ">CIVIC </option>
              <option value="ODYSSEY ">ODYSSEY </option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="inputCity">Gambar</label>
            <input type="file" name="gambar" class="form-control" id="inputCity" required="">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">Harga</label>
            <input type="number" name="harga" class="form-control" required="">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">Dp</label>
            <input type="text" name="dp" class="form-control">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">Angsuran</label>
            <input type="text" name="angsuran" class="form-control">
          </div>
        </div>
        <button type="submit" class="btn btn-dark">Simpan Data</button>
      </form>
      </div>
      <div class="card-footer small text-muted"><span>Copyright © Struggle Team 2020</span></div>
    </div>
  </div>


  @endsection