@extends('admin.base-admin')
<title>HONDA - Admin</title>
@section('conten2')

<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Pengunjung Promo</li>
  </ol>
  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr class="text-center" style="background-color: #30475e; color: white;">
              <th>No</th>
              <th>Kabupaten / Kota</th>
              <th>Nama</th>
              <th>No Hp</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <?php $no = 0; ?>
          @foreach ($pengunjung_promo as $promo)
          <?php $no++;  ?>
          <tbody>
            <tr class="text-center">
              <td>{{ $no}}</td>
              <td>{{ $promo->kabupaten}}</td>
              <td>{{ $promo->nama}}</td>
              <td>{{ $promo->no_hp}}</td>
              <td>
                <a href="/admin-honda/pengunjung/promo/{{$promo->id}}/hapus" class="btn btn-danger" onclick="return confirm('Are You Sure.?')" ><i class="fa fa-trash"></i></a>
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