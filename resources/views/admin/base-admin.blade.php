<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>HONDA - Admin</title>

  <link href="{{ URL::asset('admin/img/Honda-logo.png')}}" rel="icon">
  <link href="{{ URL::asset('admin/img/Honda-logo.png')}}" rel="apple-touch-icon">

  <!-- Custom fonts for this template-->
  <link href="{{ URL::asset('admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="{{ URL::asset('admin/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ URL::asset('admin/css/sb-admin.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <th>
      <center>
        <img src="{{ URL::asset('admin/img/honda-logo.png')}}" width="50px" align="center">
      </center>
    </th>&emsp;
    <a class="navbar-brand mr-1" href="index.html">
      <strong></strong>
    </a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i> {{auth()->user()->nama_lengkap}}
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/admin-honda">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin-honda/penjualan">
          <i class="fas fa-car"></i>
          <span>Merk Mobil</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/admin-honda/dokumentasi">
            <i class="fas fa-camera"></i>
            <span>Dokumentasi</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin-honda/pricelist">
              <i class="fas fa-fw fa-table"></i>
              <span>Type Mobil</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/admin-honda/simulasi/kredit">
                <i class="fas fa-calculator"></i>
                <span>Simulasi Kredit</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/admin-honda/pengunjung">
                  <i class="far fa-address-book"></i>
                  <span>Pengunjung</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/admin-honda/pengunjung/promo">
                    <i class="far fa-address-book"></i>
                    <span>Pengunjung Promo</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/admin-honda/promo">
                      <i class="fas fa fa-search-dollar"></i>
                      <span>Promo Mobil</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/admin-honda/gambar">
                      <i class="fas fa fa-camera"></i>
                      <span>Gambar</span></a>
                    </li>
                    <div style="padding: 20px">
                      <a href="/admin-honda/edit/profile/{{auth()->user()->id}}" class="btn btn-success">Profile</a>
                      <a href="/admin-honda/logout" class="btn btn-danger">Logout</a>
                    </div>
                  </ul>

                  <div id="content-wrapper">

                    @yield('conten2')

                    <!-- Sticky Footer -->
                  <!-- <footer class="sticky-footer">
                    <div class="container my-auto">
                      <div class="copyright text-center my-auto">
                        <span>Copyright © Struggle Team 2020</span>
                      </div>
                    </div>
                  </footer> -->

                </div>
                <!-- /.content-wrapper -->

              </div>
              <!-- /#wrapper -->

              <!-- Scroll to Top Button-->
              <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
              </a>

              <!-- Logout Modal-->
              <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                      <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Bootstrap core JavaScript-->
              <script src="{{ URL::asset('admin/jquery/jquery.min.js')}}"></script>
              <script src="{{ URL::asset('admin/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

              <!-- Core plugin JavaScript-->
              <script src="{{ URL::asset('admin/jquery-easing/jquery.easing.min.js')}}"></script>

              <!-- Page level plugin JavaScript-->
              <script src="{{ URL::asset('admin/chart.js/Chart.min.js')}}"></script>
              <script src="{{ URL::asset('admin/datatables/jquery.dataTables.js')}}"></script>
              <script src="{{ URL::asset('admin/datatables/dataTables.bootstrap4.js')}}"></script>

              <!-- Custom scripts for all pages-->
              <script src="{{ URL::asset('admin/js/sb-admin.min.js')}}"></script>

              <!-- Demo scripts for this page-->
              <script src="{{ URL::asset('admin/js/demo/datatables-demo.js')}}"></script>
              <script src="{{ URL::asset('admin/js/demo/chart-area-demo.js')}}"></script>
              <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
              @include('sweet::alert')

            </body>

            </html>
