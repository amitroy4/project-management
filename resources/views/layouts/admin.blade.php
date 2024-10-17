<!DOCTYPE html>
<html lang="en">
    <head>
      <!-- Required meta tags-->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="author" content="">
      <meta name="keywords" content="admin template,html 5 admin template , dmeki admin , dashboard template, bootstrap 5 admin template, responsive admin template">
      <title>Dmeki |Dashboard
      </title>
      <!-- shortcut icon-->
      <link rel="icon" href="{{asset('admin')}}/assets/images/logo/icon-logo.png" type="image/x-icon">
      <link rel="shortcut icon" href="{{asset('admin')}}/assets/images/logo/icon-logo.png" type="image/x-icon">
      <!-- Fonts css-->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
      <!-- Font awesome -->
      <link href="{{asset('admin')}}/assets/css/vendor/font-awesome.css" rel="stylesheet">
      <!-- themify icon-->
      <link href="{{asset('admin')}}/assets/css/vendor/themify-icons.css" rel="stylesheet">
      <!-- flag icon-->
      <link href="{{asset('admin')}}/assets/css/vendor/flag-icon/flag-icon.css" rel="stylesheet">
      <!-- Scrollbar-->
      <link href="{{asset('admin')}}/assets/css/vendor/simplebar.css" rel="stylesheet">
      <!-- Bootstrap css-->
      <link href="{{asset('admin')}}/assets/css/vendor/bootstrap.css" rel="stylesheet">
      <!-- Custom css-->
      <link href="{{asset('admin')}}/assets/css/style.css" id="customstyle" rel="stylesheet">
    </head>
  <body class="darkmode">
      <!-- Loader Start-->
        <div class="codex-loader">
          <div class="linespinner"></div>
        </div>
      <!-- Loader End-->
      <!-- Header Start-->
      @include('layouts.topbar')
      <!-- Header End-->
      <!-- sidebar start-->
      @include('layouts.sidebar')
      <!-- sidebar end-->
    <div class="themebody-wrap">
      <!-- breadcrumb start-->
      <div class="codex-breadcrumb">
        <div class="breadcrumb-contain">
          <div class="left-breadcrumb">
            <ul class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="index.html">
                  <h1>Dashboard</h1></a></li>
              <li class="breadcrumb-item active"><a href="javascript:void(0);">Default</a></li>
            </ul>
          </div>
          <div class="right-breadcrumb">
            <ul>
              <li>
                <div class="bread-wrap"><i class="fa fa-clock-o"></i></div><span class="liveTime"></span>
              </li>
              <li>
                <div class="bread-wrap"><i class="fa fa-calendar"></i></div><span class="getDate"></span>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- breadcrumb end-->
      <!-- theme body start-->
      @yield('content')
      <!-- theme body end-->
    </div>
    <!-- footer start-->
      <footer class="codex-footer">
        <p>Copyright 2022-23 © dmeki All rights reserved.</p>
      </footer>
    <!-- footer end-->
    <!-- back to top start //-->
      <div class="scroll-top"><i class="fa fa-angle-double-up"></i></div>
    <!-- back to top end //-->
      <!-- main jquery-->
      <script src="{{asset('admin')}}/assets/js/jquery-3.6.0.js"></script>
      <!-- Theme Customizer-->
      <script src="{{asset('admin')}}/assets/js/layout-storage.js"></script>
      <script src="{{asset('admin')}}/assets/js/customizer.js"></script>
      <!-- Feather icons js-->
      <script src="{{asset('admin')}}/assets/js/icons/feather-icon/feather.js"></script>
      <!-- Bootstrap js-->
      <script src="{{asset('admin')}}/assets/js/bootstrap.bundle.min.js"></script>
      <!-- Scrollbar-->
      <script src="{{asset('admin')}}/assets/js/vendors/simplebar.js"></script>
      <!-- apex chart-->
      <script src="{{asset('admin')}}/assets/js/vendors/chart/apexcharts.js"></script>
      <!-- dashboard-->
      <script src="{{asset('admin')}}/assets/js/dashboard/dashboard.js"></script>
      <!-- Custom script-->
      <script src="{{asset('admin')}}/assets/js/custom-script.js"></script>
  </body>
</html>
