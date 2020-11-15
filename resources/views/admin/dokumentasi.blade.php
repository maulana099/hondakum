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
    <!-- <div class="card-header">
      <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal">
       <i class="fas fa fa-plus"></i> Tambahkan Data
     </button>
   </div> -->

   <div class="modal-body">
    <h4>Tambah Data</h4>
    <hr/>
    <form action="/admin-honda/dokumentasi/tambah" method="post" enctype="multipart/form-data" >
      {{csrf_field()}}
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="inputCity">Gambar</label>
          <input type="file" name="foto" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-md-8">
          <label for="inputState">Keterangan</label>
          <input type="text" name="keterangan" class="form-control">
        </div>
      </div>
      <button type="submit" class="btn btn-dark">Save Foto</button>
    </form>
  </div>

  <div class="card-body">
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
        @foreach ($data_dokumentasi as $dok)
        <?php $no++;  ?>
        <tbody>
          <tr class="text-center">
            <td>{{ $no }}</td>
            <td><a href="{{URL::to('/')}}/public/foto/{{$dok->foto}}">
              <img src="{{URL::to('/')}}/public/foto/{{$dok->foto}}" width="80"></a>
            </td>
            <td>{{ $dok->keterangan }}</td>
            <td>
              <a href="/admin-honda/dokumentasi/{{$dok->id}}/edit" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-check"></i><i class="fa fa-edit"></i></a>
              <a href="/admin-honda/dokumentasi/{{$dok->id}}/hapus" class="btn btn-danger btn-sm"  onclick="return confirm('Are You Sure .?')"><i class="glyphicon glyphicon-check"></i><i class="fa fa-trash"></i>
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


<!-- div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT DATA DOKUMENTASI</h5>
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
            <label for="keterangan">Keterangan</label>
            <textarea type="text" class="form-control" placeholder="keterangan"></textarea>
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