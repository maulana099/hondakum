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
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead style="background-color: #8db1ab;">
            <tr class="text-center">
              <th>No</th>
              <th>Merk Mobil</th>
              <th>Type</th>
              <th>Harga</th>
              <th>Action</th>
            </tr>
          </thead>
          <?php $no = 0; ?>
          @foreach ($data_type as $list)
          <?php $no++;  ?>
          <tbody>
            <tr class="text-center">
              <td>{{$no}}</td>
              <td style="background-color: #8db1ab;">{{$list->nama_mobil}}</td>
              <td>{{$list->type}}</td>
              <td>Rp. {{number_format($list->harga_type)}}</td>
              <td>
                <a href="/admin-honda/price-list/{{$list->id}}/hapus" class="btn btn-danger btn-sm" onclick="return confirm('are you sure.?');"><i class="glyphicon glyphicon-check"></i><i class="fa fa-trash"></i></a>
                <a href="/admin-honda/price-list/{{$list->id}}/edit" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-check"></i><i class="fa fa-edit"></i></a>
              </td>
            </tr>
          </tbody>
          @endforeach
        </table>
      </div>
    </div>
    <div class="card-footer small text-muted"><span>Copyright © Struggle Team 2020</span></div>
  </div>

</div>

<!-- Logout Modal-->
<!-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="login.html">Logout</a>
      </div>
    </div>
  </div>
</div> -->
@endsection