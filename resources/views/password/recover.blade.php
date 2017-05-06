<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

<!-- Meta Tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="CharityFund - Charity & Crowdfunding" />
<meta name="keywords" content="Vicampro-vip, Agriculture" />
<meta name="author" content="Vicampro" />

<!-- Page Title -->
  <title>Login | VIP| Vicampro Investment Program</title>

<!-- Favicon and Touch Icons -->
<link href="{{asset('img/logon.png')}}" rel="shortcut icon" type="image/png">

<!-- Stylesheet -->
<link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/animate.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/css-plugin-collections.css')}}" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link id="menuzord-menu-skins" href="{{asset('css/menuzord-skins/menuzord-boxed.css')}}" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="{{asset('css/style-main.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="{{asset('css/preloader.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="{{asset('css/custom-bootstrap-margin-padding.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="{{asset('css/responsive.css')}}" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- CSS | Theme Color -->
<link href="{{asset('css/colors/theme-skin-red.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="{{asset('tel/build/css/intlTelInput.css')}}">
<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="">
<div id="wrapper">

  <!-- start main-content -->
  <div class="main-content">
    <!-- Section: home -->
    <section id="home" class="divider bg-lighter">
      <div class="display-table">
        <div class="display-table-cell">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-md-offset-3">
                <div class="col-md-12">
                <div class="text-center mb-15 col-md-4 col-md-offset-4">
                  <a href="/" class=""><img alt="" src="{{asset('images/logon.png')}}"></a>
                </div>
              </div>
                <div class="row">
                  <h4 class="text-theme-colored mt-0" style="width:100%"> Password Recovery</h4>
                  <hr/>
                </div>
                <form action="{{ route('do_password_recovery') }}" name="login-form" class="clearfix" method="post">
                  {{ csrf_field() }}
                  @if (count($errors) > 0)
                      <div class="col-md-12">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <div class="alert alert-danger">
                                      <span>{{$error}}</span>
                                  </div>
                              @endforeach
                          </ul>
                      </div>
                  @endif
                  @if (session('success'))
                      <div class="col-md-12">
                          <div class="alert alert-success">
                              <span>{{session('success')}}</span>
                          </div>
                      </div>
                  @endif

                  @if (session('error'))
                      <div class="col-md-12">
                          <div class="alert alert-danger">
                              <span>{{session('error')}}</span>
                          </div>
                      </div>
                  @endif
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label>Password</label>
                      <input name="password" class="form-control" type="password" placeholder="Password">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label>Confirm Password</label>
                      <input name="confirm_password" class="form-control" type="password" placeholder="Confirm Password">
                    </div>
                  </div>
                  <input name="id" class="form-control" type="hidden" value="{{$id}}">
                  <input name="key" class="form-control" type="hidden" value="{{$code}}">
                  <div class="form-group pull-right mt-10">
                    <button type="submit" class="btn btn-dark btn-sm">Change Password</button>
                  </div>
                </form>
                <div class="row">
                  <div class="col-md-6">
                    <h5><small> Don't have an account yet? <a style="color:red;" href="{{route('register')}}"> Register </a> </small></h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->

<!-- Footer -->
  <footer id="footer" class="footer text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="mb-0">Copyright ©{{date('Y')}} Vicampro. All Rights Reserved</p>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->



<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->

<!-- external javascripts -->
<script src="{{asset('js/jquery-2.2.0.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="{{asset('js/jquery-plugin-collection.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="{{asset('tel/build/js/intlTelInput.min.js')}}"></script>
<script>
  $("#demo").intlTelInput();
  var extension = $("#demo").intlTelInput("getExtension");
  console.log(extension);
  $("#demo").intlTelInput("loadUtils", "lib/libphonenumber/build/utils.js");
 </script>
 <script>
   var button =document.getElementById("submit");
   button.disabled = true;
   var checkbox = document.getElementById("form_checkbox");
   checkbox.onchange = function() {
     button.disabled = !this.checked;
   }
 </script>

</body>
</html>
