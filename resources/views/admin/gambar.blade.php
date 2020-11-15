@extends('admin.base-admin')
<title>HONDA - Admin</title>
@section('conten2')
<!-- DataTables Example -->
<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Dokumentasi</li>
  </ol>

  <div class="card mb-3">
  <div class="card-body">
    <h5>TABLE SIDEBAR</h5>
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr class="text-center">
            <th>No</th>
            <th>Gambar</th>
            <th>Keterangan</th>
            <th>Action</th>
          </tr>
        </thead>
        <?php $no = 0; ?>
        @foreach ($data_photos as $poto)
        <?php $no++;  ?>
        <tbody>
          <tr class="text-center">
            <td>{{ $no }}</td>
            <td><a href="{{URL::to('/')}}/public/foto/{{$poto->photos}}">
              <img src="{{URL::to('/')}}/public/foto/{{$poto->photos}}" width="80"></a>
            </td>
            <td>{{ $poto->caption }}</td>
            <td>
              <a href="/admin-honda/gambar/{{$poto->id}}/edit" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-check"></i><i class="fa fa-edit"></i></a>
              <a href="/admin-honda/gambar/{{$poto->id}}/hapus" class="btn btn-danger btn-sm"  onclick="return confirm('Are You Sure .?')"><i class="glyphicon glyphicon-check"></i><i class="fa fa-trash"></i>
              </a>
            </td>
          </tr>
        </tbody>
        @endforeach
      </table>
    </div>
    <hr/>
    <h5>TABLE POPULER</h5>
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr class="text-center">
            <th>No</th>
            <th>Gambar</th>
            <th>Keterangan</th>
            <th>Action</th>
          </tr>
        </thead>
        <?php $no = 0; ?>
        @foreach ($data_populer as $populer)
        <?php $no++;  ?>
        <tbody>
          <tr class="text-center">
            <td>{{ $no }}</td>
            <td><a href="{{URL::to('/')}}/public/foto/{{$populer->foto_populer}}">
              <img src="{{URL::to('/')}}/public/foto/{{$populer->foto_populer}}" width="80"></a>
            </td>
            <td>{{ $populer->ket_populer }}</td>
            <td>
              <a href="/admin-honda/populer/{{$populer->id}}/edit" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-check"></i><i class="fa fa-edit"></i></a>
              <a href="/admin-honda/populer/{{$populer->id}}/hapus" class="btn btn-danger btn-sm"  onclick="return confirm('Are You Sure .?')"><i class="glyphicon glyphicon-check"></i><i class="fa fa-trash"></i>
              </a>
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