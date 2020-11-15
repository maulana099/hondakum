@extends('admin.base-admin')
<title>HONDA - Admin</title>
@section('conten2')


<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Simulasi Kredit</li>
  </ol>
  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nama</th>
              <th>Nomer HP</th>
              <th>Alamat</th>
              <th>Mobil Pilihan</th>
              <th>Harga</th>
              <th>Uang Muka</th>
              <th>Tenor Perbulan</th>
              <th>Bunga</th>
              <th>Hasil Cicilan</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Bang Bedoy</td>
              <td>08xxxxxxx</td>
              <td>CKM City</td>
              <td>CRV</td>
              <td>Rp. 400.000.000</td>
              <td>Rp. 200.000.000</td>
              <td>48</td>
              <td>30%</td>
              <td>Rp. 5.416.000</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="card-footer small text-muted"><span>Copyright © Struggle Team 2020</span></div>
  </div>

</div>

<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT DATA POPULER</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label>Gambar</label>
            <input class="form-control" type="file" name="gambar">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Type</label>
            <input type="text" class="form-control" placeholder="Type">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div> -->
@endsection