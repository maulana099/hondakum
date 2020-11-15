@extends('pengguna.base-pengguna')
<title>RIAN HONDA KUMALA</title>
@section('conten1')

<section id="hero" class="d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <h1 data-aos="fade-up">DAPATKAN PROMO TERBAIK DARI KAMI</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Dengan Uang Muka dan Cicilan Terendah
          </h2>
          <div data-aos="fade-up" data-aos-delay="800">
            <a type="button" class="btn-get-started scrollto" data-toggle="modal" data-target="#exampleModalCenter"><i class="icofont-gift"></i> Lihat Promo</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="{{ URL::to('/')}}/public/foto/{{$data_sidebar->photos}}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>
  </section>

  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle"><b>Lihat Promo dan dapatkan Cicilan Terendah</b> dengan Mobil Honda Pilihanmu</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" style="color: red;">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/tambah/data/promo" method="post">
            {{csrf_field()}}
            <div class="form-group">
              <label for="exampleFormControlInput1">Nama</label>
              <input type="text" class="form-control" name="nama" id="exampleFormControlInput1" required="" >
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Kabupaten / Kota</label>
              <select class="form-control" id="exampleFormControlSelect1" name="kabupaten" required="" >
                <option>Kab / Kota</option>
                <option value="Kota Bekasi">Kota Bekasi</option>
                <option value="Kab. Bekasi">Kab. Bekasi</option>
                <option value="Karawang">Karawang</option>
                <option value="Purwakarta">Purwakarta</option>
                <option value="Subang">Subang</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">No Telp</label>
              <input type="number" class="form-control" name="no_hp" id="exampleFormControlInput1" required="" >
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-dark"><i class="icofont-gift"></i> Lihat Promo</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- end modal -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients clients">
      <div class="container">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6">
            <img src="{{ URL::asset('/public/assets/img/team/brio-logo.png')}}" class="img-fluid" alt="" data-aos="zoom-in">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="{{ URL::asset('/public/assets/img/team/city.png')}}" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="{{ URL::asset('/public/assets/img/team/logo-brv.png')}}" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="200">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="{{ URL::asset('/public/assets/img/team/civic-logo.png')}}" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="300">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="{{ URL::asset('/public/assets/img/team/jazz-logo.png')}}" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="400">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="{{ URL::asset('/public/assets/img/team/mobilio.png')}}" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="500">
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->
    <br/>
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <!-- <div class="section-title" data-aos="fade-up">
          <h2>Services</h2>
          <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fug</p>
        </div> -->

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <a href="#pricelist">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon"><i class="icofont-car"></i></div>
                <h4 class="title">Merk Mobil Honda</h4>
                <p class="description">Honda memiliki tipe mobil beragam yang bisa kamu pilih sesuai kebutuhan. Cari mobil impianmu bersama kami</p>
              </div>
            </a>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <!-- <a href="/honda-kumala/karawang/simulasi-kredit"> -->
              <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <div class="icon"><i class="bx bx-file"></i></div>
                <h4 class="title">Simulasi Kredit</h4>
                <p class="description">Cari tahu besaran kredit mobil impianmu dengan simulasi kredit Honda.</p>
              </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
              <a href="#contact">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                  <div class="icon"><i class="icofont-ui-contact-list"></i></div>
                  <h4 class="title">Kontak Kami</h4>
                  <p class="description">Sales terbaik rekomendasi kami siap untuk melayani pembelian mobil Honda impian Anda.</p>
                </div>
              </a>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
              <a href="/honda-kumala/karawang/pricelist">
                <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                  <div class="icon"><i class="icofont-price"></i></div>
                  <h4 class="title">PriceList</h4>
                  <p class="description">Kami berusaha menjangkau semua pelanggan dengan memberikan rentang harga mobil honda yang bersahabat.</p>
                </div>
              </a>
            </div>

          </div>

        </div>
      </section><!-- End Services Section -->

      <!-- ======= More Services Section ======= -->
      <section id="more-services" class="more-services">
        <div class="container">
          <div class="row">
            @foreach ($data_populer as $pop)
            <div class="col-md-6 d-flex align-items-stretch mt-4">
              <div class="card" data-aos="fade-up" data-aos-delay="100" style="background-image: url('{{URL::to('/')}}/public/foto/{{$pop->foto_populer}}');">
                <div class="card-body">
                  <!-- <h5 class="card-title"><a href="">Nive Lodo</a></h5> -->
                  <!-- <p class="card-text">Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores.</p> -->
                  <div class="read-more" style="color: white;"><b>{{$pop->ket_populer}}</b></div>
                </div>
              </div>
            </div>
            @endforeach
            
         </div>


       </div>
     </section><!-- End More Services Section -->

     <!-- ======= Team Section ======= -->
     <section id="pricelist" class="team section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>HONDA</h2>
          <p>Pilih Mobil Honda Impianmu</p>
        </div>

        <div class="row">
          @foreach($data_penjualan as $penjualan)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="{{URL::to('/')}}/public/gambar/{{$penjualan->gambar}}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>{{$penjualan->nama_mobil}}</h4>
                <span style="font-size: 20px;">Rp. {{number_format($penjualan->harga)}}</span>
                <hr/>
                <a href="tel:+628 2299432130" class="" style="color: black;"><i class="icofont-phone""></i> Call Us</a>
                &nbsp; &nbsp; &nbsp; &nbsp;
                <a href="/honda-kumala/karawang/{{$penjualan->id}}/details" class="" style="color: black;"><i class="icofont-info"></i> Details</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <div class="section-title" data-aos="fade-up">
          <p style="background-color: black;">{{$data_penjualan->links()}}</p>
        </div>
      </div>
    </section><!-- End Team Section -->

    <!-- ======= Testimonials Section ======= -->

<!-- <section id="counts" class="counts">
    <div class="container">

      <div class="row">
        <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-xl-start" data-aos="fade-right" data-aos-delay="150">
          <img src="{{ URL::asset('/public/assets/img/team/didin maulana.jpg')}}" width="180">
        </div>

        <div class="col-xl-7 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
          <div class="content d-flex flex-column justify-content-center">
            <div class="row">
              <div class="col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="icofont-simple-smile"></i>
                  <span data-toggle="counter-up">65</span>
                  <p><strong>Happy Clients</strong> consequuntur voluptas nostrum aliquid ipsam architecto ut.</p>
                </div>
              </div>

              <div class="col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="icofont-document-folder"></i>
                  <span data-toggle="counter-up">85</span>
                  <p><strong>Projects</strong> adipisci atque cum quia aspernatur totam laudantium et quia dere tan</p>
                </div>
              </div>

              <div class="col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="icofont-clock-time"></i>
                  <span data-toggle="counter-up">12</span>
                  <p><strong>Years of experience</strong> aut commodi quaerat modi aliquam nam ducimus aut voluptate non vel</p>
                </div>
              </div>

              <div class="col-md-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="icofont-award"></i>
                  <span data-toggle="counter-up">15</span>
                  <p><strong>Awards</strong> rerum asperiores dolor alias quo reprehenderit eum et nemo pad der</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section> -->
  <!-- End Counts Section -->
  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

    <!--   <div class="section-title" data-aos="fade-up">
        <h2>Kirim Pesan</h2>
      </div> -->

      <div class="row">
        <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <h4 class="text-center">Rian Alfian</h4>
          <hr/>
          <div class="contact-about" style="margin-right: 20px;">
            <img src="{{ URL::asset('/public/assets/img/team/Didin Maulana.jpg')}}" class="text-center" width="250">
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
          <h4 class="text-center">Alamat</h4>
          <hr/>
          <div class="info">
            <div>
              <i class="ri-map-pin-line"></i>
              <p>Jl. Arteri Interchange Tol Karawang Barat, Sukamakmur, Kec. Telukjambe Timur,.<br>Kabupaten Karawang, Jawa Barat 41361</p>
            </div>

            <div>
              <i class="ri-mail-send-line"></i>
              <p><a href="mailto:rianalfian30@gmail.com"> Rianalfian30@gmail.com</a></p>
            </div>

            <div>
              <i class="ri-phone-line"></i>&nbsp; &nbsp;<a href="tel:+628 2299432130">+628 229943 2130</a>
            </div>
            <br/>
            <br/>
          </div>
        </div>

        <div class="col-lg-5 col-md-12" data-aos="fade-up">
          <h4 class="text-center">Send Message</h4>
          <hr/>
          <form action="/data/pelanggan/honda" method="post" enctype="multipart/form-data" >
            {{csrf_field()}}
            <div class="form-group">
              <input type="text" name="nama" class="form-control" id="name" placeholder="Nama Lengkap" required="" />
            </div>
            <div class="form-group">
               <select class="form-control" id="exampleFormControlSelect1" name="kabupaten" required="">
                <option>Kab / Kota</option>
                <option value="Kota Bekasi">Kota Bekasi</option>
                <option value="Kab. Bekasi">Kab. Bekasi</option>
                <option value="Karawang">Karawang</option>
                <option value="Purwakarta">Purwakarta</option>
                <option value="Subang">Subang</option>
              </select>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="pekerjaan" id="subject" placeholder="Pekerjaan" required=""  />
            </div>
            <div class="form-group">
              <input type="number" class="form-control" name="no_hp" placeholder="No Hp / Whatshapp" required="">
            </div>
            <div class="form-group">
              <select id="Rencana" name="rencana" class="form-control">
                <option value="Rencana">Rencana</option>
                <option value="Ya">Ya</option>
                <option value="Tidak">Tidak</option>
              </select>
            </div>
            <div class="form-group">
              <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3" placeholder="Message"></textarea>
            </div>
            <button type="submit" class="btn btn-dark">Send Message</button>

          </form>

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

  <section id="galeri" class="testimonials section-bg">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>GALLERY</h2>
        <p>Dokumentasi Delivery pada Layanan Kami</p>
      </div>

      <div class="owl-carousel testimonials-carousel" data-aos="fade-up" data-aos-delay="200">
        @foreach ($data_dokumentasi as $dok)
        <div class="testimonial-wrap">
          <div class="testimonial-item">
            <a href="{{URL::to('/')}}/public/foto/{{$dok->foto}}">
              <img src="{{URL::to('/')}}/public/foto/{{$dok->foto}}" width="80">
            </a>
          </div>
        </div>
        @endforeach
      </div>

    </div>
  </section><!-- End Testimonials Section -->

</main><!-- End #main -->




@endsection