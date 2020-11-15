@extends('pengguna.base-pengguna')
<title>HONDA KUMALA - KARAWANG</title>
@section('conten1')

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2><b>Honda {{$data_penjualan->nama_mobil}}</b></h2>

        <ol>
          <li><a href="/">Home</a></li>
          <li><a href="/honda-kumala/karawang/simulasi-kredit">Simulasi Kredit</a></li>
        </ol>
      </div>
    </div>
  </section><!-- End Breadcrumbs -->
  <hr/>
  <br/>
  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container">

      <div class="row">
        <div class="col-lg-6">
          <!-- <h2 class="portfolio-title">This is an example of portfolio detail</h2> -->
          <div class="owl-carousel portfolio-details-carousel">
            <img src="{{URL::to('/')}}/public/gambar/{{$data_penjualan->gambar}}" class="img-fluid" alt="">
            <!-- <img src="{{URL::to('/')}}/gambar/{{$data_penjualan->gambar}}" class="img-fluid" alt=""> -->
          </div>
        </div>

        <div class="col-lg-6 portfolio-info">
          <table class="table table-striped">
            <thead>
              <tr>
                <th class="text-center">Type</th>
                <th class="text-center">Harga</th>
              </tr>
            </thead>
            @foreach ($data_type as $type)
            <tbody>
              <tr>
                <td class="text-center">{{$type->type}}</td>
                <td class="text-center">Rp. {{number_format($type->harga_type)}}</td>
              </tr>
            </tbody>
            @endforeach
          </table>
          <p style="color: red;"> * Harga dapat berubah sewaktu waktu</p>
          <div class="read-more">Kami juga menyediakan alat simulasi kredit agar Anda bisa merencanakan kredit kendaraan Anda bersama kami<a href="#simulasi"><i class="icofont-arrow-right"></i> Simulasi Kredit</a></div>
        </div>
      </div>
    </div>
  </section>

  <section id="simulasi" class="breadcrumbs">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h2><b>Simulasi Kredit</b></h2>
        <ol>
        </ol>
      </div>
    </div>
  </section>

  <section class="portfolio-details">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <h2 class="portfolio-title">Apa yang Bisa Kami Bantu?</h2>
          <h5>Kami Ingin Selalu Ada Dalam Setiap Kehidupan Anda dan Memberikan Pelayanan Terbaik</h5>
          <p>- Pelayanan Terbaik</p>
          <p>- Proses Mudah dan Cepat</p>
          <p>- Diskon Tinggi</p>
          <p>- Berkas Dibantu</p>
        </div>

        <div class="col-lg-6 portfolio-info" style="background-color: #363636; padding: 15px; margin: 15px; border-radius: 15px; color: white;">
          <h4 class="text-center">Ajukan Penawaran</h4>
          <hr/>
          <!-- <form>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Nama</label>
                <input type="email" class="form-control" id="inputEmail4">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">No Hp / Whatshapp</label>
                <input type="password" class="form-control" id="inputPassword4">
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Alamat Kab / Kota</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="">
            </div>
            <div class="form-row">
              <div class="form-group col-md-7">
                <label for="inputState">Mobil Pilihanmu</label>
                <select id="inputState" class="form-control">
                  <option selected>Choose...</option>
                  <option>...</option>
                </select>
              </div>
              <div class="form-group col-md-5">
                <label for="inputCity">Harga</label>
                <input type="text" class="form-control" id="inputCity">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">Uang Muka</label>
                <input type="text" class="form-control" id="inputCity">
              </div>
              <div class="form-group col-md-4">
                <label for="inputState">Tenor</label>
                <select id="inputState" class="form-control">
                  <option selected>Choose...</option>
                  <option>...</option>
                </select>
              </div>
              <div class="form-group col-md-2">
                <label for="inputZip">Bunga</label>
                <input type="text" class="form-control" id="inputZip">
              </div>
            </div>
            <button type="submit" class="btn btn-success">Kirim Penawaran</button>
          </form> -->
          <div class="modal-body">
            <h1 class="text-center" style="color: red;"><i class="icofont-exclamation-tringle"></i></h1>
            <h6 class="text-center">Sedang Dalam Tahap Perbaikan</h6>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- End Portfolio Details Section -->

</main><!-- End #main -->

@endsection