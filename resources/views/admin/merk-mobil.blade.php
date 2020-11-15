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
     <a href="/admin-honda/penjualan/add" class="btn btn-dark"><i class="fa fa-plus"></i> Merk Mobil</a>
    </div>
     <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr class="text-center">
              <th>No</th>
              <th>Gambar</th>
              <th>Nama Mobil</th>
              <th>Harga</th>
              <th>DP</th>
              <th>Angsuran</th>
              <th>Promo / Type</th>
              <th>Action</th>
            </tr>
          </thead>
          <?php $no = 0; ?>
          @foreach ($data_penjualan as $penjualan)
          <?php $no++;  ?>
          <tbody>
            <tr class="text-center">
              <td>{{$no}}</td>
              <td>
                <a href="{{URL::to('/')}}/public/gambar/{{$penjualan->gambar}}">
                  <img src="{{URL::to('/')}}/public/gambar/{{$penjualan->gambar}}" width="80">
                </a>
              </td>
              <td>{{$penjualan->nama_mobil}}</td>
              <td>Rp. {{number_format($penjualan->harga)}}</td>
              <td>{{$penjualan->dp}}</td>
              <td>{{$penjualan->angsuran}}</td>
              <td>
                <a href="/admin-honda/promo/{{$penjualan->id}}/mobil" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-check"></i><i class="fa fa-gift"></i></a>
                <a href="/admin-honda/type/{{$penjualan->id}}/mobil" class="btn btn-dark btn-sm"><i class="glyphicon glyphicon-check"></i><i class="fa fa-plus"></i></a>
              </td>
              <td>
                <a href="/admin-honda/promosi/{{$penjualan->id}}/edit" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-check"></i><i class="fa fa-edit"></i></a>
                <a href="/admin-honda/promosi/{{$penjualan->id}}/hapus" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure .?')"><i class="glyphicon glyphicon-check"></i><i class="fa fa-trash"></i></a>
              </td>
            </tr>
          </tbody>
          @endforeach
        </table>
        {{$data_penjualan->links()}}
      </div>
    </div>
    <div class="card-footer small text-muted"><span>Copyright © Struggle Team 2020</span></div>
  </div>

</div>
@endsection


