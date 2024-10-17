<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>WorkPro </title>
    <!-- plugins:css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/typicons/typicons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/js/select.dataTables.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/favicon.png') }}">
    <script src="https://kit.fontawesome.com/b1b3bfa8c2.js" crossorigin="anonymous"></script>
    
  </head>
  <body class="with-welcome-text">
    <div class="container-scroller">
     
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
          <div class="me-3">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
              <span class="icon-menu"></span>
            </button>
          </div>
          <div>
            <h3>&nbsp;&nbsp;&nbsp;Work<span style="color: #0505d2;">Pro</span></h3>

            <style>
              h3 {
                font-size: 24px;
              }
            
              @media only screen and (max-width: 768px) {
                h3 {
                  font-size: 20px;
                }
              }
            
              @media only screen and (max-width: 480px) {
                h3 {
                  font-size: 18px;
                }
              }
            
              @media only screen and (max-width: 320px) {
                h3 {
                  font-size: 16px;
                }
              }
            </style>

           
          </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-top">
          <ul class="navbar-nav">
            <li class="nav-item fw-semibold d-none d-lg-block ms-0">
              <h1 class="welcome-text">Hello, <span class="text-black fw-bold">{{ Auth::user()->name }}</span></h1>
              <h3 class="welcome-sub-text">Let’s sprinkle some focus and watch our productivity shine</h3>
             
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
            
            <li class="nav-item d-none d-lg-block">
              <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
                <span class="input-group-addon input-group-prepend border-right">
                  <span class="icon-calendar input-group-text calendar-icon"></span>
                </span>
                <input type="text" class="form-control">
              </div>
            </li>
            <li class="nav-item d-none d-lg-block user-dropdown">
              <a class="nav-link" href="#">
                  <img class="img-xs rounded-circle" src="{{ Auth::user()->file ? asset('storage/files/' . Auth::user()->file) : asset('frontend/assets/images/faces/default.jpg') }}" alt="Profile image">
              </a>
          </li>
          
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      @yield('employee-content')
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('frontend/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <!-- Plugin js for this page -->
    <script src="{{ asset('frontend/assets/vendors/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('frontend/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/template.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/settings.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('frontend/assets/js/jquery.cookie.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/assets/js/dashboard.js') }}"></script>
    
    <!-- <script src="assets/js/Chart.roundedBarCharts.js"></script> -->
    <!-- End custom js for this page-->
  </body>
</html>