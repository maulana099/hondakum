@extends('pengguna.base-pengguna')
<title>HONDA KUMALA - KARAWANG</title>
@section('conten1')

<main id="main">
  <!-- ======= Breadcrumbs ======= -->
  <section id="galeri" class="testimonials section-bg">
    <br/>
    <hr/>
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>PROMO</h2>
        <p>Lihat Promo dan dapatkan Cicilan Terendah dengan Mobil Honda Pilihanmu</p>
      </div>
      <div class="owl-carousel testimonials-carousel" data-aos="fade-up" data-aos-delay="200">
        @foreach($data_penjualan as $penjualan)
        <div class="testimonial-wrap">
          <div class="testimonial-item">
            <img class="d-block w-100" src="{{URL::to('/')}}/gambar/{{$penjualan->gambar}}" alt="Mobil Honda">
            <div class="text-center">
              <h3>{{$penjualan->nama_mobil}}</h3>
              <h4>Rp. {{number_format($penjualan->harga)}}</h4>
              <br/>
              <a href="/honda-kumala/karawang/{{$penjualan->id}}/details-promo"><i class="icofont-gift"></i> Detail Promo</a>&nbsp; &nbsp;
              <a href="tel:+6289671409965"><i class="icofont-phone"></i> Hubungi</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section><!-- End Testimonials Section -->

</main><!-- End #main -->

@endsection