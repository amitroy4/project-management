<!DOCTYPE html>
<html lang="en">
    <head>
      <!-- Required meta tags-->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="author" content="">
      <meta name="keywords" content="admin template,html 5 admin template , dmeki admin , dashboard template, bootstrap 5 admin template, responsive admin template">
      <title>Dmeki |Register
      </title>
      <!-- shortcut icon-->
      <link rel="icon" href="{{('admin')}}/assets/images/logo/icon-logo.png" type="image/x-icon">
      <link rel="shortcut icon" href="{{('admin')}}/assets/images/logo/icon-logo.png" type="image/x-icon">
      <!-- Fonts css-->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
      <!-- Font awesome -->
      <link href="{{('admin')}}/assets/css/vendor/font-awesome.css" rel="stylesheet">
      <!-- themify icon-->
      <link href="{{('admin')}}/assets/css/vendor/themify-icons.css" rel="stylesheet">
      <!-- Scrollbar-->
      <link href="{{('admin')}}/assets/css/vendor/simplebar.css" rel="stylesheet">
      <!-- Bootstrap css-->
      <link href="{{('admin')}}/assets/css/vendor/bootstrap.css" rel="stylesheet">
      <!-- Custom css-->
      <link href="{{('admin')}}/assets/css/style.css" id="customstyle" rel="stylesheet">
    </head>
  <body>
    <!-- authentication start-->
    <section class="py-100">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="codex-authbox">
              <div class="auth-header">
                <div class="codex-brand"><a href="index.html"><img class="img-fluid light-logo" src="{{('admin')}}/assets/images/logo/logo.png" alt=""><img class="img-fluid dark-logo" src="{{('admin')}}/assets/images/logo/dark-logo.png" alt=""></a></div>
                <h3>Create your account</h3>
                <h6>Already have an account? <a class="text-primary" href="login">login in here</a></h6>
              </div>
              <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                  <label class="form-label">Name</label>
                  <input class="form-control" id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Enter Your Name">
                </div>
                <div class="form-group">
                  <label class="form-label">Email</label>
                  <input class="form-control" id="email" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Enter Your Email">
                </div>
                <div class="form-group">
                  <label class="form-label" for="Password">Password</label>
                  <div class="input-group group-input">
                    <input class="form-control showhide-password" id="password" type="password" name="password" required autocomplete="new-password" placeholder="Enter Your Password"><span class="input-group-text toggle-show fa fa-eye"></span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="form-label" for="Password">Confirm Password</label>
                  <div class="input-group group-input">
                    <input class="form-control showhide-password" id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Enter Your Password"><span class="input-group-text toggle-show fa fa-eye"></span>
                  </div>
                </div>
                <div class="form-group mb-0">
                  <div class="auth-remember">
                    <div class="form-check custom-chek">
                      <input class="form-check-input" id="agree" type="checkbox" value="" required="">
                      <label class="form-check-label" for="agree">I Agree Terms and conditions</label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-paper-plane"></i> Register</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- authentication end-->
    <!-- back to top start //-->
      <div class="scroll-top"><i class="fa fa-angle-double-up"></i></div>
    <!-- back to top end //-->
      <!-- main jquery-->
      <script src="{{('admin')}}/assets/js/jquery-3.6.0.js"></script>
      <!-- Theme Customizer-->
      <script src="{{('admin')}}/assets/js/layout-storage.js"></script>
      <script src="{{('admin')}}/assets/js/customizer.js"></script>
      <!-- Feather icons js-->
      <script src="{{('admin')}}/assets/js/icons/feather-icon/feather.js"></script>
      <!-- Bootstrap js-->
      <script src="{{('admin')}}/assets/js/bootstrap.bundle.min.js"></script>
      <!-- Scrollbar-->
      <script src="{{('admin')}}/assets/js/vendors/simplebar.js"></script>
      <!-- Custom script-->
      <script src="{{('admin')}}/assets/js/custom-script.js"></script>
  </body>
</html>
