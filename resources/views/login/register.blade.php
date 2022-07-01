
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Puskesmas 5 Ilir </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('dinda/vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('dinda/vendors/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('dinda/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('dinda/vendors/typicons/typicons.css')}}">
  <link rel="stylesheet" href="{{asset('dinda/vendors/simple-line-icons/css/simple-line-icons.css')}}">
  <link rel="stylesheet" href="{{asset('dinda/vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('dinda/css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('dinda/images/favicon.png')}}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="{{asset('front/images/logonavbar.png')}}" alt="logo">
              </div>
              <h4>Puskesmas 5 Ilir Palembang</h4>
              <h5>Tambah Data Admin</h5>
              <h6 class="fw-light">Silahkan isi!</h6>
              <form action="{{ url('/register') }}" class="pt-3" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="name" name="name"
                        placeholder="Bagian">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="level" name="level"
                        placeholder="level">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Isi Email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="password"
                        name="password" placeholder="Password">
                </div>
                <div class="mt-3">
                  <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="../../index.html">SIGN IN</a>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                </div>
                <div class="text-center mt-4 font-weight-light"> Belum punya akun? <a
                    href="{{ url('/login') }}" class="text-primary">Hubungi Admin</a>
            </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('dinda/vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{asset('dinda/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('dinda/js/off-canvas.js')}}"></script>
  <script src="{{asset('dinda/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('dinda/js/template.js')}}"></script>
  <script src="{{asset('dinda/js/settings.js')}}"></script>
  <script src="{{asset('dinda/js/todolist.js')}}"></script>
  <!-- endinject -->
</body>

