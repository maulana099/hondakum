@extends('pengguna.base-pengguna')
<title>HONDA KUMALA KARAWANG</title>
@section('conten1')

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2><b>Honda {{$data_promo->nama_mobil}}</b></h2>
        <ol>
          <li><a href="/">Home</a></li>
          <!-- <li><a href="/honda-kumala/karawang/simulasi-kreditt">Simulasi Kredit</a></li> -->
          <li><a type="button" data-toggle="modal" data-target="#simulasi2">Simulasi Kredit</a></li>
        </ol>
      </div>
    </div>
  </section><!-- End Breadcrumbs -->
  <hr/>
  <br/>
  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container">

      <section id="simulasi" class="breadcrumbs" style="margin-top: -10px; background-color: transparent;">
        <div class="container">
          <div class="d-flex justify-content-between align-items-center">
            <h5><b>Dapatkan promo honda {{$data_promo->nama_mobil}} untuk pembelian di bulan ini</b></h5>
          </div>
        </div>
      </section>
      <hr/>
      <div class="row">
        <div class="col-lg-6">
          <!-- <h2 class="portfolio-title">This is an example of portfolio detail</h2> -->
          <div class="owl-carousel portfolio-details-carousel">
            <img src="{{URL::to('/')}}/public/gambar/{{$data_promo->gambar}}" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-6 portfolio-info">
          <p>Dengan Uang Muka Dan Cicilan Terendah</p>
          <table class="table table-sm">
            <tbody style="background-color: transparent; color: blck;">
              <tr>
                <th>Uang Muka</th>
                <td class="text-center"><b>{{$data_promo->dp}}</b></td>
              </tr>
              <tr>
                <th>Angsuran</th>
                <td class="text-center"><b>{{$data_promo->angsuran}}</b></td>
              </tr>
            </tbody>
          </table>
          <table class="table table-striped table-sm">
            <p>Dapatkan bonus lainnya untuk pembelian honda brio di bulai ini</p>
            @foreach ($data_promo_mobil as $promo)
            <tbody>
              <tr>
                <td><i class="icofont-arrow-right"></i> {{$promo->hadiah}}</td>
              </tr>
            </tbody>
            @endforeach
          </table>
          <p style="color: red;"> * Syarat Dan Ketentuan Berlaku</p>
          <div class="read-more">Kami juga menyediakan alat simulasi kredit agar Anda bisa merencanakan kredit kendaraan Anda bersama kami<a type="button" data-toggle="modal" data-target="#simulasi2"><i class="icofont-arrow-right"></i> Simulasi Kredit</a></div>
        </div>
      </div>

      <!-- End Breadcrumbs -->

    </div>

  </section>
  <!-- End Portfolio Details Section -->
</main>

<div class="modal fade" id="simulasi2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Simulasi Kredit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h1 class="text-center" style="color: red;"><i class="icofont-exclamation-tringle"></i></h1>
        <h6 class="text-center">Sedang Dalam Tahap Maintenance</h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@endsection