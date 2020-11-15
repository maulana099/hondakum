@extends('admin.base-admin')
<title>HONDA - Admin</title>
@section('conten2')
  

  <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>

        <!-- Icon Cards-->
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-secondary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa fa-camera"></i>
                </div>
                <div class="mr-5">
                  <h5>Data Dokumentasi</h5>
                  <h3><strong>{{$model_dokumentasi['data_count']->count}}</strong></h3>
                </div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="/admin-honda/dokumentasi">
                <span class="float-left">LIHAT</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>

          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-calculator"></i>
                </div>
                <div class="mr-5">
                  <h5>Simulasi Kredit</h5>
                  <h3><strong>0</strong></h3>
                </div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="/admin-honda/simulasi/kredit">
                <span class="float-left">LIHAT</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
            <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-dark o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="far fa-address-book"></i>
                </div>
                <div class="mr-5">
                  <h5>Data Pengunjung</h5>
                  <h3><strong>{{$model_pengunjung['pengunjung_count']->count}}</strong></h3>
                </div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="/admin-honda/pengunjung">
                <span class="float-left">LIHAT</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa fa-car"></i>
                </div>
                <div class="mr-5">
                  <h5>Pengunjung Promo</h5>
                  <h3><strong>{{$model_promo['promo_count']->count}}</strong></h3>
                </div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="/admin-honda/pengunjung/promo">
                <span class="float-left">LIHAT</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>

        </div>

      </div>
@endsection