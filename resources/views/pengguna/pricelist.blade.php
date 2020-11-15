@extends('pengguna.base-pengguna')
<title>HONDA KUMALA - KARAWANG</title>
@section('conten1')

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2><b>PriceList</b></h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li>PriceList</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container">
      <div class="row">
        <table class="table table-striped">
          <thead>
            <tr>
              <th class="text-center">Type</th>
              <th class="text-center">Harga</th>
            </tr>
          </thead>
          @foreach ($data_pricelist as $list)
          <tbody>

            <tr>
              <!-- <td class="text-center">
                <a href="">
                  <img src="{{ URL::asset('assets/img/team/brio.png')}}" class="img-fluid" alt="" width="100">
                </a>
              </td> -->
              <td class="text-center">{{$list->type}}</td>
              <td class="text-center">Rp. {{number_format($list->harga_type)}}</td>
            </tr>
          </tbody>
          @endforeach
        </table>
        <!-- <div class="col-lg-4 portfolio-info">
          <h3>Project information</h3>
          <ul>
            <li><strong>Category</strong>: Web design</li>
            <li><strong>Client</strong>: ASU Company</li>
            <li><strong>Project date</strong>: 01 March, 2020</li>
            <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
          </ul>

          <p>
            Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
          </p>
        </div> -->

        <!-- <div class="col-lg-4 portfolio-info">
          <h3>Project information</h3>
          <ul>
            <li><strong>Category</strong>: Web design</li>
            <li><strong>Client</strong>: ASU Company</li>
            <li><strong>Project date</strong>: 01 March, 2020</li>
            <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
          </ul>
          <p>
            Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
          </p>
        </div> -->

        <!-- <div class="col-lg-4 portfolio-info">
          <h3>Project information</h3>
          <ul>
            <li><strong>Category</strong>: Web design</li>
            <li><strong>Client</strong>: ASU Company</li>
            <li><strong>Project date</strong>: 01 March, 2020</li>
            <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
          </ul>

          <p>
            Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
          </p>
        </div> -->

      </div>
    </div>

  </section>


  <!-- End Portfolio Details Section -->

</main><!-- End #main -->

@endsection