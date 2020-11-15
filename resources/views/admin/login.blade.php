<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Login</title>

  <!-- Custom fonts for this template-->
  <link href="{{ URL::asset('/public/admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="{{ URL::asset('/public/admin/css/sb-admin.css')}}" rel="stylesheet">

</head>

<body class="bg-secondary">
 <h3 style="color:#000000; margin-top: 50px;"><strong><center>SELAMAT DATANG</center></strong></h3>
 <h3 style="color:#000000; margin-top: 10px;"></i><strong><center>SISTEM ADMIN HONDA KUMALA KARAWANG</center></strong></h3>
 <div class="container">
  <div class="card card-login mx-auto mt-5">
    <div class="card-body">
      @if(\Session::has('alert'))
      <div class="alert alert-danger">
        <div>{{Session::get('alert')}}</div>
      </div>
      @endif
      @if(\Session::has('alert-success'))
      <div class="alert alert-success">
        <div>{{Session::get('alert-success')}}</div>
      </div>
      @endif
      <form action="/admin-honda/login/berhasil" method="post">
        {{ csrf_field() }}
        <th><center><img src="{{ URL::asset('/public/admin/img/honda-logo.png')}}" width="100px" align="center" alt=""></center></th><br>
        <div class="form-group">
          <div class="form-label-group">
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
            <label for="inputEmail">Email</label>
          </div>
        </div>
        <div class="form-group">
          <div class="form-label-group">
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
            <label for="inputPassword">Password</label>
          </div>
        </div>
        <button class="btn btn-primary btn-block" type="submit" >Login</button>
      </form>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="{{ URL::asset('/public/admin/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ URL::asset('/public/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ URL::asset('/public/admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@include('sweet::alert')


</body>

</html>
