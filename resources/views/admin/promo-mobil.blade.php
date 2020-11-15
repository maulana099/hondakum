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
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead style="background-color: #c1a57b; color: white;">
            <tr class="text-center">
              <th>No</th>
              <th>Merk Mobil</th>
              <th>dp</th>
              <th>Angsuran</th>
              <th>Hadiah</th>
              <th>Action</th>
            </tr>
          </thead>
          <?php $no = 0; ?>
          @foreach ($data_promo as $promo)
          <?php $no++;  ?>
          <tbody>
            <tr class="text-center">
              <td>{{$no}}</td>
              <td style="background-color: teal; color: white;">{{$promo->nama_mobil}}</td>
              <td>{{$promo->dp}}</td>
              <td>{{$promo->angsuran}}</td>
              <td>{{$promo->hadiah}}</td>
              <td>
                <a href="/admin-honda/promo/{{$promo->id}}/mobil/hapus" class="btn btn-danger btn-sm" onclick="return confirm('are you sure.?');"><i class="glyphicon glyphicon-check"></i><i class="fa fa-trash"></i></a>
                <a href="/admin-honda/promo/{{$promo->id}}/mobil/edit" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-check"></i><i class="fa fa-edit"></i></a>
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
@endsection