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
  <title>Register | VIP| Vicampro Investment Program</title>

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
              <div class="col-md-8 col-md-offset-2">
                <div class="text-center mb-15 col-md-4 col-md-offset-4">
                  <a href="/" class=""><img alt="" src="{{asset('images/logon.png')}}"></a>
                </div>
                <form action="{{route('register_user')}}" name="reg-form" class="register-form col-md-12" method="post">
                  {{ csrf_field() }}
                  <div class="icon-box mb-0 p-0">
                    <a href="#" class="icon icon-bordered icon-rounded icon-sm pull-left mb-0 mr-10">
                      <i class="pe-7s-users"></i>
                    </a>
                    <h4 class="text-gray pt-10 mt-0 mb-30">Don't have an Account? Register Now.</h4>
                  </div>
                  <hr>
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
                    <div class="form-group col-md-6">
                      <label for="form_name">First Name</label>
                      <input id="form_name" name="first_name" class="form-control" type="text">
                    </div>
                    <div class="form-group col-md-6">
                      <label>Last Name</label>
                      <input id="form_email" name="last_name" class="form-control" type="text">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>Email Address</label>
                      <input id="form_email" name="email" class="form-control" type="email">
                    </div>
                    <div class="form-group col-md-6">
                      <label>Confirm Email</label>
                      <input id="form_email" name="confirm_email" class="form-control" type="email">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label>Phone Number</label> <br/>
                      <input id="demo" name="phone_number" class="form-control" type="tel">
                    </div>
                    <input type="hidden" id="hidden" name="code">
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label for="form_choose_password">Choose Password</label>
                      <input id="form_choose_password" name="password" class="form-control" type="password">
                    </div>
                    <div class="form-group col-md-6">
                      <label>Re-enter Password</label>
                      <input id="form_re_enter_password" name="confirm_password" class="form-control" type="password">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="form_checkbox">
                        <input id="form_checkbox" name="terms" type="checkbox" data-toggle="modal" data-target="#myModal">
                        I Accept Terms </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-dark btn-lg btn-block mt-15" type="submit" id="submit">Register Now</button>
                  </div>
                  <small> Already have an account? <a href="{{route('home')}}"> Login </a> </small>
                </form>
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

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-theme-colored text-center" id="myModalLabel">General Terms And Conditions</h4>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <ul class="list-icon font theme-colored rounded">
            <li><i class="fa fa-hand-o-right"></i>Prospective Investor must be above the age of 18 years, although investment can be purchased and held on behalf of a minor.</li>
            <li><i class="fa fa-hand-o-right"></i>Prospective Investor can invest in either Equity or Debt or both at the same time.</li>
            <li><i class="fa fa-hand-o-right"></i>The minimum investment for the debt is N3m for 1ha and maximum investment is N3b for 1000ha.</li>
            <li><i class="fa fa-hand-o-right"></i>Each investor is at liberty to visit the field and inspect the progress of work at the site at anytime.</li>
            <li><i class="fa fa-hand-o-right"></i>Repayment of Principal invested and interest is at the end of the 12 Months period from the date on the certificate.</li>
          </ul>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" id="modal_button">Accept</button>
      </div>
    </div>
  </div>
</div>



<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->

<!-- external javascripts -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
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
