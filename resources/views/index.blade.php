<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
  <meta name="description" content="CharityFund - Charity & Crowdfunding" />
  <meta name="keywords" content="Vicampro-vip, Agriculture, potato, potatoes, vicampro" />
  <meta name="author" content="Vicampro" />

  <!-- Page Title -->
  <title>VIP| Vicampro Investment Program</title>

  <!-- Favicon and Touch Icons -->
  <link href="{{asset('images/logon.png')}}" rel="shortcut icon" type="image/png">
  <!-- Stylesheet -->
  <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('css/animate.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('css/css-plugin-collections.css')}}" rel="stylesheet" />
  <!-- CSS | menuzord megamenu skins -->
  <link id="menuzord-menu-skins" href="{{asset('css/menuzord-skins/menuzord-boxed.css')}}" rel="stylesheet" />
  <!-- CSS | Main style file -->
  <link href="{{asset('css/style-main.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('css/style-main-dark.css')}}" rel="stylesheet" type="text/css">
  <!-- CSS | Preloader Styles -->
  <link href="{{asset('css/preloader.css')}}" rel="stylesheet" type="text/css">
  <!-- CSS | Custom Margin Padding Collection -->
  <link href="{{asset('css/custom-bootstrap-margin-padding.css')}}" rel="stylesheet" type="text/css">
  <!-- CSS | Responsive media queries -->
  <link href="{{asset('css/responsive.css')}}" rel="stylesheet" type="text/css">
  <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
  <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

  <!-- Revolution Slider 5.x CSS settings -->
  <link href="{{asset('js/revolution-slider/css/settings.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('js/revolution-slider/css/layers.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('js/revolution-slider/css/navigation.css')}}" rel="stylesheet" type="text/css" />

  <!-- CSS | Theme Color -->
  <link href="{{asset('css/colors/theme-skin-red.css')}}" rel="stylesheet" type="text/css">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <style>
  </style>
<![endif]-->
<style>
  .img-fullwidth {
    width: 100%;
    height: 168px!important;
}
.thumbnail{
  height: 345px!important
}
</style>
</head>

<body class="has-side-panel side-panel-left fullwidth-page">
  <div class="body-overlay"></div>
  <div id="side-panel" class="dark" data-bg-img="{{asset('images/bg/bg8.jpg')}}">
    <div class="side-panel-wrap">
      <div id="side-panel-trigger-close" class="side-panel-trigger"><a href="#"><i class="icon_close font-30"></i></a></div>
      <a href="javascript:void(0)"><img alt="logo" src="{{asset('images/logon.png')}}"></a>
      <div class="clearfix"></div>
      <div class="row-fluid">
        <h4 class="text-theme-colored mt-0"> Login</h4>
        <hr>
        <p>Welcome To VIP Kindly Login</p>
        <form action="{{ route('post_login') }}" name="login-form" class="clearfix" method="post">
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
              <label for="form_username_email">Username/Email</label>
              <input id="form_username_email" name="email" class="form-control" type="text">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-12">
              <label for="form_password">Password</label>
              <input id="form_password" name="password" class="form-control" type="password">
            </div>
          </div>
          <div class="checkbox pull-left mt-15">
            <label for="form_checkbox">
            <input id="form_checkbox" name="form_checkbox" type="checkbox">
            Remember me </label>
          </div>
          <div class="form-group pull-right mt-10">
            <button type="submit" class="btn btn-dark btn-sm">Login</button>
          </div>
        </form>
      </div>
      <p>Copyright &copy;2017 VIcampro</p>
    </div>
  </div>
  </div>

  <div id="wrapper" class="clearfix">
    <!-- preloader -->
    <div id="preloader">
      <div id="spinner">
        <div class="preloader-equalizer">
          <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div>
      </div>
      <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
    </div>

    <!-- Header -->
    <header class="header">
      <div class="header-top bg-deep sm-text-center">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="widget no-border m-0">
                <ul class="styled-icons icon-sm sm-text-center">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-9">
              <div class="widget no-border m-0">
                <ul class="list-inline pull-right sm-pull-none sm-text-center">
                  <li class="sm-display-block mt-sm-10 mb-sm-10">
                    <a class="btn btn-colored btn-flat btn-theme-colored" href="{{route('register')}}" style="float: none;margin: 0px;display: block">Register</a>
                  </li>
                  <li class="sm-display-block mt-sm-10 mb-sm-10">
                    <a class="btn btn-colored btn-flat btn-theme-colored" style="float: none;margin: 0px;"
                      href="{{route('get_login')}}">Login</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="header-nav">
        <div class="header-nav-wrapper navbar-scrolltofixed bg-lightest">
          <div class="container">
            <nav id="menuzord-right" class="menuzord orange bg-lightest">
              <a class="menuzord-brand" href="javascript:void(0)">
                <img src="{{asset('images/logon.png')}}" alt="">
              </a>
              <ul class="menuzord-menu onepage-nav">
                <li class="active"><a href="#home">Home</a> </li>
                <li><a href="#about">About</a></li>
                <li><a href="#investments">Investments</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#volunteers">Volunteers</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#client">Client</a></li>
                <li><a href="#blog">Updates</a></li>
                <li><a href="#faq">FAQ</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>

    <!-- Start main-content -->
    <div class="main-content">
      <!-- Section: home -->
      <section id="home" class="divider">
        <div class="container-fluid p-0">

          <!-- Slider Revolution Start -->
          <div class="rev_slider_wrapper">
            <div class="rev_slider" data-version="5.0">
              <ul>
                <li data-index="rs-3" data-transition="random" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="1000"
                  data-thumb="http://placehold.it/1920x1280" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500"
                  data-fsslotamount="7" data-saveperformance="off" data-title="Intro" data-description="">
                  <!-- MAIN IMAGE -->
                  <img src="{{asset('images/farmslide.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg"
                    data-bgparallax="6" data-no-retina>
                  <!-- LAYERS -->

                  <!-- LAYER NR. 1 -->
                  <div class="tp-caption tp-shape tp-shapewrapper col-xs-12 tp-resizeme" id="rs-3-layer-1" data-x="['middle']" data-hoffset="['0']"
                    data-y="['middle']" data-voffset="['0']" data-width="550" data-height="300" data-whitespace="nowrap" data-transform_idle="o:1;"
                    data-transform_in="y:[0%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                    data-transform_out="y:[0%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:100px;y:[0%];s:inherit;e:inherit;"
                    data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500" data-responsive_offset="on" style="z-index: 5;">
                    <div class="fluid-video-wrapper">
                      <div class="fluid-width-video-wrapper" style="padding-top: 56.25%;">
                        <iframe src="https://www.youtube.com/embed/Nmce9eCo3CE" frameborder="0" allowfullscreen="" id="fitvid0"></iframe>
                      </div>
                    </div>
                  </div>
                </li>

                <!-- SLIDE 1 -->
                <li data-index="rs-1" data-transition="random" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="1000"
                  data-thumb="http://placehold.it/1920x1280" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500"
                  data-fsslotamount="7" data-saveperformance="off" data-title="Intro" data-description="">
                  <!-- MAIN IMAGE -->
                  <img src="{{asset('images/vip_slide1.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg"
                    data-bgparallax="6" data-no-retina>
                  <!-- LAYERS -->

                  <!-- LAYER NR. 1 -->
                  <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme" id="rs-1-layer-1" data-x="['left']" data-hoffset="['30']" data-y="['middle']"
                    data-voffset="['0']" data-width="600" data-height="300" data-whitespace="nowrap" data-transform_idle="o:1;"
                    data-transform_in="y:[0%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                    data-transform_out="y:[0%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:100px;y:[0%];s:inherit;e:inherit;"
                    data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500" data-responsive_offset="on" style="z-index: 5;background-color:rgba(255, 255, 255, 0.8);border-color:rgba(0, 0, 0, 0);">
                  </div>

                  <!-- LAYER NR. 2 -->
                  <div class="tp-caption tp-resizeme text-uppercase text-theme-colored font-raleway" id="rs-1-layer-2" data-x="['left']" data-hoffset="['60']"
                    data-y="['middle']" data-voffset="['-75']" data-fontsize="['58']" data-lineheight="['70']" data-width="none"
                    data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;s:500" data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                    data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none"
                    data-responsive_offset="on" style="z-index: 7; white-space: nowrap; font-weight:800;">VIP (Vicampro <br>Investment Plan)
                  </div>

                  <!-- LAYER NR. 3 -->
                  <div class="tp-caption tp-resizeme text-black-55" id="rs-1-layer-3" data-x="['left']" data-hoffset="['60']" data-y="['middle']"
                    data-voffset="['20']" data-fontsize="['16']" data-lineheight="['28']" data-width="none" data-height="none"
                    data-whitespace="nowrap" data-transform_idle="o:1;s:500" data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                    data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1400" data-splitin="none" data-splitout="none"
                    data-responsive_offset="on" style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">Transformation of Agricultural Sector in Nigeria Through Inclusive <br>Participation - Crowd Funding By
                    Vicampro Farms LTD
                  </div>

                  <!-- LAYER NR. 4 -->
                  <div class="tp-caption tp-resizeme" id="rs-1-layer-4" data-x="['left']" data-hoffset="['60']" data-y="['middle']" data-voffset="['75']"
                    data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1400" data-splitin="none" data-splitout="none"
                    data-responsive_offset="on" style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-flat btn-sm btn-theme-colored" href="#">Donate Now</a>
                  </div>
                </li>

                <!-- SLIDE 2 -->
                <li data-index="rs-2" data-transition="random" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="1000"
                  data-thumb="http://placehold.it/1920x1280" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500"
                  data-fsslotamount="7" data-saveperformance="off" data-title="Intro" data-description="">
                  <!-- MAIN IMAGE -->
                  <img src="{{asset('images/vipslide2.jpg')}}" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg"
                    data-bgparallax="6" data-no-retina>
                  <!-- LAYERS -->

                  <!-- LAYER NR. 1 -->
                  <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme" id="rs-1-layer-1" data-x="['center']" data-hoffset="['0']" data-y="['middle']"
                    data-voffset="['0']" data-width="600" data-height="300" data-whitespace="nowrap" data-transform_idle="o:1;"
                    data-transform_in="y:[0%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                    data-transform_out="y:[0%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:100px;y:[0%];s:inherit;e:inherit;"
                    data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500" data-responsive_offset="on" style="z-index: 5;background-color:rgba(255, 255, 255, 0.8);border-color:rgba(0, 0, 0, 0);">
                  </div>

                  <!-- LAYER NR. 2 -->
                  <div class="tp-caption tp-resizeme text-uppercase text-theme-colored font-raleway pl-40 pr-40" id="rs-1-layer-2" data-x="['center']"
                    data-hoffset="['0']" data-y="['middle']" data-voffset="['-75']" data-fontsize="['58']" data-lineheight="['70']"
                    data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;s:500" data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                    data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000" data-splitin="none" data-splitout="none"
                    data-responsive_offset="on" style="z-index: 7; white-space: nowrap; font-weight:800; border-radius:45px;">Crowd Funding
                  </div>

                  <!-- LAYER NR. 3 -->
                  <div class="tp-caption tp-resizeme text-center text-black-555" id="rs-1-layer-3" data-x="['center']" data-hoffset="['0']"
                    data-y="['middle']" data-voffset="['0']" data-fontsize="['16']" data-lineheight="['28']" data-width="none"
                    data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;s:500" data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                    data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1400" data-splitin="none" data-splitout="none"
                    data-responsive_offset="on" style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">Simply the practice of funding a project<br> or venture by raising funds <br>from a large number of people.
                  </div>

                  <!-- LAYER NR. 4 -->
                  <div class="tp-caption tp-resizeme" id="rs-1-layer-4" data-x="['center']" data-hoffset="['0']" data-y="['middle']" data-voffset="['75']"
                    data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1400" data-splitin="none" data-splitout="none"
                    data-responsive_offset="on" style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-sm btn-flat btn-theme-colored" href="#">Donate Now</a>
                  </div>
                </li>
              </ul>
            </div>
            <!-- end .rev_slider -->
          </div>

        </div>
      </section>

      <!-- Section: about -->
      <section id="about" class="bg-lighter">
        <div class="container">
              <h2 class="text-theme-colored mt-0">Crowdfunding Approach</h2>
          <div class="row">
                <div class="col-md-3">
                <div class="thumbnail">
                  <img class="img-fullwidth" src="{{asset('images/equity.png')}}" alt="...">
                  <div class="caption">
                    <h4 class="title text-theme-colored mt-0">Equity Crowd Funding</h4>
                    <p>Enables participants to invest in a company and becomes shareholder.</p>
                  </div>
                  </div>
                </div>
                <div class="col-md-3">
                <div class="thumbnail">
                  <a href="#"><img class="img-fullwidth" src="{{asset('images/debt.png')}}" alt="..."></a>
                  <div class="caption">
                    <h4 class="title text-theme-colored mt-0">Debt-based Crowdfunding</h4>
                    <p>This is also referred to as crowd
                  lending. It allows participants to fund a project or venture with a guaranteed payment of the amount invested
                  and interest agreed upon.</p>
                  </div>
                  </div>
                </div>
                <div class="col-md-3">
                <div class="thumbnail">
                  <a href="#"><img class="img-fullwidth" src="{{asset('images/our_approach.png')}}" alt="..."></a>
                  <div class="caption">
                    <h4 class="title text-theme-colored mt-0">Debt Crowdfunding-Interest based</h4>
                    <p>This allows for a fixed
                  interest payment. The principal and interest is paid at maturity (12 months) to the participant.</p>
                  </div>
                </div>
                </div>
                <div class="col-md-3">
                <div class="thumbnail">
                  <a href="#"><img class="img-fullwidth" src="{{asset('images/approach.png')}}" alt="..."></a>
                  <div class="caption">
                    <h4 class="title text-theme-colored mt-0">Debt Crowdfunding-Profit based</h4>
                    <p>This is designed for investors
                  that do not support interest-based transactions. The principal and proportion of pre-determined earned
                  profit is paid to the investor at maturity (12 Months).</p>
                  </div>
                  </div>
                </div>
              </div>
          <img src="{{asset('images/crowd.png')}}" class="img-absolute row">
            <div class="row">
            <div class="col-md-6">
              <h4 class="text-theme-colored mt-20 mb-5">VIP Process Flow</h4>
              <ul class="list theme-colored angle-double-right mb-sm-30">
                <li>The Vicampro Team has discussion with the prospective Investor on the VIP Project and submits the Application form for completion by the Applicant. </li>
                <li>The Investor pays the specified amount into Vicampro’s dedicated account and attaches evidence of payment together with the completed application forms to Vicampro.</li>
                <li>Vicampro issues a Certificate of Investment, which contains the commencement and maturity dates, as well as hectares allocated.</li>
                <li>The investor or the duly assigned representative can visit the farm at anytime for inspection.</li>
                <li>At maturity, both the principal investment and interest will be paid back to the investor’s specified account.</li>
                <li>The investment is terminated upon full payment of principal and interest.</li>
                <li>This can be rolled over for another period of 12 months via a letter of notification and subject to Vicampro’s approval.</li>
              </ul>
            </div>
            <div class="col-md-6">
              <h4 class="text-theme-colored mt-20 mb-5">How do I invest In Vicampro<span class="theme-colored">?</span></h4>
              <ul class="list theme-colored angle-double-right mb-sm-30">
                <li>Prospective Investor visits the website and completes an online expression of interest form and submit.</li>
                <li>Prospective Investor will be granted access to a dropbox to review the approved term sheet, uploaded pitch video, investor deck, business plan, financial statements, subscription agreement, shareholder agreement and all other relevant documents to guide investment decision.</li>
                <li>The investor completes the shareholder agreement form (Equity crowdfunding) or subscription form (Debt crowdfunding). He/She makes payment to the dedicated account and uploads evidence of payment together with the completed form on the portal.</li>
                <li>All completed applications will be reviewed and approved based on first payment basis at close of the investment window. Successful Applicants will be issued Share Certificates (Equity) and Subscription Certificate (Debt).</li>
              </ul>
            </div>
            </div>
          <img src="{{asset('images/obj.png')}}" class="img-absolute row">
          <div class="row">
            <div class="col-md-6">
              <h4 class="text-theme-colored mt-20 mb-5">VIP Objectives</h4>
              <ul class="list theme-colored angle-double-right mb-sm-30">
                <li>Creating Food Security</li>
                <li>Creating 30,000 direct Jobs</li>
                <li>Creating wealth</li>
                <li>Rural prosperity</li>
                <li>Economic enhancement</li>
                <li>Agricultural Sector development</li>
                <li>A new sustainable partnership model in Agriculture</li>
                <li>Development of export capacity</li>
              </ul>
            </div>
            <div class="col-md-6">
              <h4 class="text-theme-colored mt-20 mb-5">Benefits of VIP to Participants</h4>
              <ul class="list theme-colored angle-double-right mb-sm-30">
                <li>Wealth Maximization</li>
                <li>High return on investment with less risks</li>
                <li>Opportunity for Debt to Equity conversion</li>
                <li>A paradigm shift into Agricultural investment</li>
              </ul>
            </div>
          </div>
          <div class="col-md-12 text-center">
            <h4 class="text-theme-colored mt-20 mb-5">VIP Modalities</h4>
            <ul class="list theme-colored angle-double-right mb-sm-30">
              <li>Opportunity is available to selected few individuals, Co-operative Societies, SMEs, Pension Funds administrators and Government at all levels.</li>
              <li>The Investment window opens on Tuesday 2nd May, 2017 and closes Friday 30th June, 2017.</li>
              <li>The Investment closes immediately the last (1000th) hectare is acquired without regards to the closing date of 30th June, 2017.</li>
              <li>Allotment will be considered on the basis of “first come first serve”.</li>
              <li>The commencement date for the investment is 1st July, 2017 and the Maturity date is 30th June, 2018.</li>
              <li>Payment of principal and interest will be due on 1st July, 2018.</li>
            </ul>
          </div>
            </div>
          </div>
        </div>
      </section>

      <section id="pricing" class="bg-lighter">
        <div class="container">
          <div class="section-content">
            <div class="row">
              <h2 class="text-theme-colored mt-0 text-center">VIP Brief Summary</h2>
              <div class="col-xs-12 col-sm-3 hidden-xs col-md-3 mb-sm-40">
                <div class="pricing-table">
                  <div class="table-price clearfix">
                    <h3 class="pull-left font-24 pl-20"></h3>
                    <div class="text-hover-theme-colored font-24 text-black-555 p-15 mt-15 font-weight-700">PLATFORMS</span></div>
                  </div>
                  <ul class="table-list bg-lightest">
                    <li><i class="icon_check"></i><span class="font-13 font-weight-700">LAND ALLOCATION (ha)</span></li>
                    <li><i class="icon_close"></i><span class="font-13 font-weight-700">MAXIMUM INVESTMENT (N)</span></li>
                    <li><i class="icon_check"></i><span class="font-13 font-weight-700">TENURE (MONTHS)</span></li>
                    <li><i class="icon_close"></i><span class="font-13 font-weight-700">EXPECTED ROI-INTEREST (%)</span></li>
                    <li><i class="icon_close"></i><span class="font-13 font-weight-700">EXPECTED ROI-PROFIT SHARE(%)</span></li>
                  </ul>
                </div>
              </div>
              <div class="col-xs-12 col-sm-3 col-md-3 mb-sm-40 hvr-float-shadow">
                <div class="pricing-table">
                  <div class="table-price clearfix">
                    <div class="bg-theme-colored font-24 text-white p-15 mt-15">VIP-CLASSIC</span></div>
                  </div>
                  <ul class="table-list text-center bg-lightest">
                    <li><i class="icon_check"></i><span class="font-13">1-10<span class="hidden-lg hidden-md hidden-sm">(ha) Land Allocation</span></span></li>
                    <li><i class="icon_check"></i><span class="font-13">30M<span class="hidden-lg hidden-md hidden-sm">(N) Maximum Investment</span></span></li>
                    <li><i class="icon_check"></i><span class="font-13">12<span class="hidden-lg hidden-md hidden-sm">(Months) Tenure</span></span></li>
                    <li><i class="icon_check"></i><span class="font-13">30<span class="hidden-lg hidden-md hidden-sm">(%) Expected Roi-Interest</span></span></li>
                    <li><i class="icon_check"></i><span class="font-13">40<span class="hidden-lg hidden-md hidden-sm">(%) Expected Roi-Profit</span></span></li>
                  </ul>
                  <a href="#" class="btn btn-dark btn-theme-colored btn-flat font-16 mt-0">Subscribe</a>
                </div>
              </div>
              <div class="col-xs-12 col-sm-3 col-md-3 mb-sm-40 hvr-float-shadow">
                <div class="pricing-table">
                  <div class="table-price clearfix">
                    <div class="bg-theme-colored font-24 text-white p-15 mt-15">VIP-PREMIUM</span></div>
                  </div>
                  <ul class="table-list text-center bg-lightest">
                    <li><i class="icon_check"></i><span class="font-13">11-100<span class="hidden-lg hidden-md hidden-sm">(ha) Land Allocation</span></span></li>
                    <li><i class="icon_check"></i><span class="font-13">300M<span class="hidden-lg hidden-md hidden-sm">(N) Maximum Investment</span></span></li>
                    <li><i class="icon_check"></i><span class="font-13">12<span class="hidden-lg hidden-md hidden-sm">(Months) Tenure</span></span></li>
                    <li><i class="icon_check"></i><span class="font-13">35<span class="hidden-lg hidden-md hidden-sm">(%) Expected Roi-Interest</span></span></li>
                    <li><i class="icon_check"></i><span class="font-13">45<span class="hidden-lg hidden-md hidden-sm">(%) Expected Roi-Profit</span></span></li>
                  </ul>
                  <a href="#" class="btn btn-dark btn-theme-colored btn-flat font-16 mt-0">Subscribe</a>
                </div>
              </div>
              <div class="col-xs-12 col-sm-3 col-md-3 mb-sm-40 hvr-float-shadow">
                <div class="pricing-table">
                  <div class="table-price clearfix">
                    <div class="bg-theme-colored font-24 text-white p-15 mt-15">VIP-PLATINUM</span></div>
                  </div>
                  <ul class="table-list text-center bg-lightest">
                    <li><i class="icon_check"></i><span class="font-13">101-1000<span class="hidden-lg hidden-md hidden-sm">(ha) Land Allocation</span></span></li>
                    <li><i class="icon_check"></i><span class="font-13">3B<span class="hidden-lg hidden-md hidden-sm">(N) Maximum Investment</span></span></li>
                    <li><i class="icon_check"></i><span class="font-13">12<span class="hidden-lg hidden-md hidden-sm">(Months) Tenure</span></span></li>
                    <li><i class="icon_check"></i><span class="font-13">40<span class="hidden-lg hidden-md hidden-sm">(%) Expected Roi-Interest</span></span></li>
                    <li><i class="icon_check"></i><span class="font-13">50<span class="hidden-lg hidden-md hidden-sm">(%) Expected R0i-Profit</span></span></li>
                  </ul>
                  <a href="#" class="btn btn-dark btn-theme-colored btn-flat font-16 mt-0">Subscribe</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Section: Causes -->
      <section id="investments">
        <div class="container pb-80">
          <div class="section-title text-center">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <h3 class="text-theme-colored text-uppercase mt-0">Our Investments</h3>
                <div class="title-icon">
                  <i class="flaticon-charity-hand-holding-a-heart"></i>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
              </div>
            </div>
          </div>
          <div class="row mtli-row-clearfix">
            <div class="col-sm-6 col-md-3 col-lg-3">
              <div class="causes bg-lighter box-hover-effect effect1 maxwidth500 mb-sm-30">
                <div class="thumb">
                  <img class="img-fullwidth" alt="" src="{{asset('images/author.jpg')}}">
                </div>
                <div class="progress-item mt-0">
                  <div class="progress mb-0">
                    <div class="progress-bar" data-percent="84"></div>
                  </div>
                </div>
                <div class="causes-details clearfix border-bottom p-15 pt-10">
                  <h5><a href="#">Sponsor an investment Today</a></h5>
                  <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Praesent quos sit.</p>
                  <ul class="list-inline clearfix mt-20">
                    <li class="pull-left pr-0">Raised: $1890</li>
                    <li class="text-theme-colored pull-right pr-0">Goal: $2500</li>
                  </ul>
                  <div class="mt-10">
                    <a class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10" href="#">Sponsor</a>
                    <div class="pull-right mt-15"><i class="fa fa-heart-o text-theme-colored"></i> 89 Sponsors</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
              <div class="causes bg-lighter box-hover-effect effect1 maxwidth500 mb-sm-30">
                <div class="thumb">
                  <img class="img-fullwidth" alt="" src="{{asset('images/author.jpg')}}">
                </div>
                <div class="progress-item mt-0">
                  <div class="progress mb-0">
                    <div class="progress-bar" data-percent="85"></div>
                  </div>
                </div>
                <div class="causes-details clearfix border-bottom p-15 pt-10">
                  <h5><a href="#">Sponsor an investment today</a></h5>
                  <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Praesent quos sit.</p>
                  <ul class="list-inline clearfix mt-20">
                    <li class="pull-left pr-0">Raised: $1890</li>
                    <li class="text-theme-colored pull-right pr-0">Goal: $2500</li>
                  </ul>
                  <div class="mt-10">
                    <a class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10" href="#">Sponsor</a>
                    <div class="pull-right mt-15"><i class="fa fa-heart-o text-theme-colored"></i> 89 Sponsors</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
              <div class="causes bg-lighter box-hover-effect effect1 maxwidth500 mb-sm-30">
                <div class="thumb">
                  <img class="img-fullwidth" alt="" src="{{asset('images/author.jpg')}}">
                </div>
                <div class="progress-item mt-0">
                  <div class="progress mb-0">
                    <div class="progress-bar" data-percent="86"></div>
                  </div>
                </div>
                <div class="causes-details clearfix border-bottom p-15 pt-10">
                  <h5><a href="#">Sponsor an Investment today</a></h5>
                  <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Praesent quos sit.</p>
                  <ul class="list-inline clearfix mt-20">
                    <li class="pull-left pr-0">Raised: $1890</li>
                    <li class="text-theme-colored pull-right pr-0">Goal: $2500</li>
                  </ul>
                  <div class="mt-10">
                    <a class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10" href="#">Sponsor</a>
                    <div class="pull-right mt-15"><i class="fa fa-heart-o text-theme-colored"></i> 89 Sponsors</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
              <div class="causes bg-lighter box-hover-effect effect1 maxwidth500 mb-sm-30">
                <div class="thumb">
                  <img class="img-fullwidth" alt="" src="{{asset('img/author.jpg')}}">
                </div>
                <div class="progress-item mt-0">
                  <div class="progress mb-0">
                    <div class="progress-bar" data-percent="87"></div>
                  </div>
                </div>
                <div class="causes-details clearfix border-bottom p-15 pt-10">
                  <h5><a href="#">Sponsor an Investment today</a></h5>
                  <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Praesent quos sit.</p>
                  <ul class="list-inline clearfix mt-20">
                    <li class="pull-left pr-0">Raised: $1890</li>
                    <li class="text-theme-colored pull-right pr-0">Goal: $2500</li>
                  </ul>
                  <div class="mt-10">
                    <a class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10" href="#">Sponsor</a>
                    <div class="pull-right mt-15"><i class="fa fa-heart-o text-theme-colored"></i> 89 Sponsors</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- divider: Emergency Services -->
      <section class="divider parallax layer-overlay overlay-deep" data-stellar-background-ratio="0.2" data-bg-img="{{asset('images/pic33.jpg')}}">
        <div class="container">
          <div class="section-content text-center">
            <div class="row">
              <div class="col-md-12">
                <h3 class="mt-0">How you can help us</h3>
                <h2>Just call at <span class="text-theme-colored">(01) 234 5678</span> to make an Investment Today</h2>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section: featured project -->
      <section id="features">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-4">
              <h4 class="text-uppercase line-bottom mt-0">Featured Project</h4>
              <div class="featured-project-carousel owl-nav-top">
                <div class="item">
                  <div class="causes bg-lighter box-hover-effect effect1 sm-maxwidth500 mb-sm-30">
                    <div class="thumb">
                      <img class="img-fullwidth" alt="" src="{{asset('images/author.jpg')}}">
                    </div>
                    <div class="progress-item mt-0">
                      <div class="progress mb-0">
                        <div class="progress-bar" data-percent="85"></div>
                      </div>
                    </div>
                    <div class="causes-details clearfix border-bottom p-15 pt-10">
                      <p class="mb-10 mt-5"><span class="text-uppercase text-theme-colored"><strong>Charity Hospital:</strong></span> Lorem ipsum
                        dolor sit amet, consectetur adipisicing elit. Praesentium quos aspernatur cupiditate commodi sunt
                        illo.</p>
                      <div class="donate-details">
                        <a class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10" href="#">Sponsor</a>
                        <ul class="pull-right list-inline mt-15">
                          <li>Raised: $1890</li>
                          <li>Goal: $2500</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="causes bg-lighter box-hover-effect effect1 sm-maxwidth500 mb-sm-30">
                    <div class="thumb">
                      <img class="img-fullwidth" alt="" src="{{asset('images/features.jpg')}}">
                    </div>
                    <div class="progress-item mt-0">
                      <div class="progress mb-0">
                        <div class="progress-bar" data-percent="85"></div>
                      </div>
                    </div>
                    <div class="causes-details clearfix border-bottom p-15 pt-10">
                      <p class="mb-10 mt-5"><span class="text-uppercase text-theme-colored"><strong>Charity Hospital:</strong></span> Lorem ipsum
                        dolor sit amet, consectetur adipisicing elit. Praesentium quos aspernatur cupiditate commodi sunt
                        illo.</p>
                      <div class="donate-details">
                        <a class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10" href="#">Sponsor</a>
                        <ul class="pull-right list-inline mt-15">
                          <li>Raised: $1890</li>
                          <li>Goal: $2500</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="causes bg-lighter box-hover-effect effect1 sm-maxwidth500 mb-sm-30">
                    <div class="thumb">
                      <img class="img-fullwidth" alt="" src="{{asset('images/features.jpg')}}">
                    </div>
                    <div class="progress-item mt-0">
                      <div class="progress mb-0">
                        <div class="progress-bar" data-percent="85"></div>
                      </div>
                    </div>
                    <div class="causes-details clearfix border-bottom p-15 pt-10">
                      <p class="mb-10 mt-5"><span class="text-uppercase text-theme-colored"><strong>Charity Hospital:</strong></span> Lorem ipsum
                        dolor sit amet, consectetur adipisicing elit. Praesentium quos aspernatur cupiditate commodi sunt
                        illo.</p>
                      <div class="donate-details">
                        <a class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10" href="#">Donate</a>
                        <ul class="pull-right list-inline mt-15">
                          <li>Raised: $1890</li>
                          <li>Goal: $2500</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <h4 class="text-uppercase line-bottom mt-0">Became a Volunteer</h4>
              <div class="volunteer-wrapper border-bottom sm-maxwidth500 clearfix pb-15 mb-sm-30">
                <div class="fluid-video-wrapper">
                  <iframe src="//player.vimeo.com/video/22029657?title=0&amp;byline=0&amp;portrait=0" height="210" title="Volunteer policy"
                    allowfullscreen></iframe>
                </div>
                <p class="mb-10 mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium quos aspernatur cupiditate commodi
                  sunt illo, dolorum iste molestias.</p>
                <p>
                  <a href="#" class="btn btn-dark btn-theme-colored btn-flat btn-sm pull-left mt-10">Join Us</a>
                  <span class="pull-right ml-10 mt-12 font-14">volunteers</span>
                  <span class="animate-number pull-right font-20 text-theme-colored lineheight-20 mt-5" data-value="2598657" data-animation-duration="2500">0</span>
                </p>
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <h4 class="text-uppercase line-bottom mt-0">Events</h4>
              <div class="bxslider bx-nav-top">
                <div class="event media sm-maxwidth400 p-15 mt-0 mb-15">
                  <div class="row">
                    <div class="col-xs-3 p-0">
                      <div class="thumb pl-15">
                        <img alt="..." src="{{asset('images/features.jpg')}}" class="media-object">
                      </div>
                    </div>
                    <div class="col-xs-6 p-0 pl-15">
                      <div class="event-content">
                        <h5 class="media-heading text-uppercase"><a href="#">Gear up for giving</a></h5>
                        <ul>
                          <li><i class="fa fa-clock-o"></i> at 5.00 pm - 7.30 pm</li>
                          <li> <i class="fa fa-map-marker"></i> 25 Newyork City.</li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-xs-3 pr-0">
                      <div class="event-date text-center">
                        <ul>
                          <li class="font-36 text-theme-colored font-weight-700">28</li>
                          <li class="font-20 text-center text-uppercase">Feb</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="event media sm-maxwidth400 p-15 mt-0 mb-15">
                  <div class="row">
                    <div class="col-xs-3 p-0">
                      <div class="thumb pl-15">
                        <img alt="..." src="{{asset('images/member-1.jpg')}}" class="media-object">
                      </div>
                    </div>
                    <div class="col-xs-6 p-0 pl-15">
                      <div class="event-content">
                        <h5 class="media-heading text-uppercase"><a href="#">Gear up for giving</a></h5>
                        <ul>
                          <li><i class="fa fa-clock-o"></i> at 5.00 pm - 7.30 pm</li>
                          <li> <i class="fa fa-map-marker"></i> 25 Newyork City.</li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-xs-3 pr-0">
                      <div class="event-date text-center">
                        <ul>
                          <li class="font-36 text-theme-colored font-weight-700">28</li>
                          <li class="font-20 text-center text-uppercase">Feb</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="event media sm-maxwidth400 p-15 mt-0 mb-15">
                  <div class="row">
                    <div class="col-xs-3 p-0">
                      <div class="thumb pl-15">
                        <img alt="..." src="{{asset('images/features.jpg')}}" class="media-object">
                      </div>
                    </div>
                    <div class="col-xs-6 p-0 pl-15">
                      <div class="event-content">
                        <h5 class="media-heading text-uppercase"><a href="#">Gear up for giving</a></h5>
                        <ul>
                          <li><i class="fa fa-clock-o"></i> at 5.00 pm - 7.30 pm</li>
                          <li> <i class="fa fa-map-marker"></i> 25 Newyork City.</li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-xs-3 pr-0">
                      <div class="event-date text-center">
                        <ul>
                          <li class="font-36 text-theme-colored font-weight-700">28</li>
                          <li class="font-20 text-center text-uppercase">Feb</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="event media sm-maxwidth400 p-15 mt-0 mb-15">
                  <div class="row">
                    <div class="col-xs-3 p-0">
                      <div class="thumb pl-15">
                        <img alt="..." src="{{asset('images/member-1.jpg')}}" class="media-object">
                      </div>
                    </div>
                    <div class="col-xs-6 p-0 pl-15">
                      <div class="event-content">
                        <h5 class="media-heading text-uppercase"><a href="#">Gear up for giving</a></h5>
                        <ul>
                          <li><i class="fa fa-clock-o"></i> at 5.00 pm - 7.30 pm</li>
                          <li> <i class="fa fa-map-marker"></i> 25 Newyork City.</li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-xs-3 pr-0">
                      <div class="event-date text-center">
                        <ul>
                          <li class="font-36 text-theme-colored font-weight-700">28</li>
                          <li class="font-20 text-center text-uppercase">Feb</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="event media sm-maxwidth400 p-15 mt-0 mb-15">
                  <div class="row">
                    <div class="col-xs-3 p-0">
                      <div class="thumb pl-15">
                        <img alt="..." src="{{asset('images/features.jpg')}}" class="media-object">
                      </div>
                    </div>
                    <div class="col-xs-6 p-0 pl-15">
                      <div class="event-content">
                        <h5 class="media-heading text-uppercase"><a href="#">Gear up for giving</a></h5>
                        <ul>
                          <li><i class="fa fa-clock-o"></i> at 5.00 pm - 7.30 pm</li>
                          <li> <i class="fa fa-map-marker"></i> 25 Newyork City.</li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-xs-3 pr-0">
                      <div class="event-date text-center">
                        <ul>
                          <li class="font-36 text-theme-colored font-weight-700">28</li>
                          <li class="font-20 text-center text-uppercase">Feb</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="event media sm-maxwidth400 p-15 mt-0 mb-15">
                  <div class="row">
                    <div class="col-xs-3 p-0">
                      <div class="thumb pl-15">
                        <img alt="..." src="{{asset('images/author.jpg')}}" class="media-object">
                      </div>
                    </div>
                    <div class="col-xs-6 p-0 pl-15">
                      <div class="event-content">
                        <h5 class="media-heading text-uppercase"><a href="#">Gear up for giving</a></h5>
                        <ul>
                          <li><i class="fa fa-clock-o"></i> at 5.00 pm - 7.30 pm</li>
                          <li> <i class="fa fa-map-marker"></i> 25 Newyork City.</li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-xs-3 pr-0">
                      <div class="event-date text-center">
                        <ul>
                          <li class="font-36 text-theme-colored font-weight-700">28</li>
                          <li class="font-20 text-center text-uppercase">Feb</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section: Volunteer -->
      <section id="volunteers" class="divider parallax layer-overlay overlay-deep" data-stellar-background-ratio="0.2" data-bg-img="{{asset('images/pic33.jpg')}}">
        <div class="container pb-80">
          <div class="section-title text-center">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <h3 class="text-uppercase mt-0">Our Volunteers</h3>
                <div class="title-icon">
                  <i class="flaticon-charity-hand-holding-a-heart"></i>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
              </div>
            </div>
          </div>
          <div class="section-content">
            <div class="row multi-row-clearfix">
              <div class="col-sm-6 col-md-3 mb-sm-60 text-left sm-text-center">
                <div class="volunteer border bg-white-fa maxwidth400 p-30">
                  <div class="thumb"><img alt="" src="{{asset('images/features.jpg')}}" class="img-fullwidth"></div>
                  <div class="info">
                    <h4 class="name"><a href="#">Hasan Jacobson</a></h4>
                    <h6 class="occupation">Businessman</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit dictum nobis.</p>
                    <hr>
                    <ul class="styled-icons icon-sm icon-dark icon-theme-colored mt-10 mb-0">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 mb-sm-60 text-left sm-text-center">
                <div class="volunteer border bg-white-fa maxwidth400 p-30">
                  <div class="thumb"><img alt="" src="{{asset('images/member-1.jpg')}}" class="img-fullwidth"></div>
                  <div class="info">
                    <h4 class="name"><a href="#">Hasan Jacobson</a></h4>
                    <h6 class="occupation">Businessman</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit dictum nobis.</p>
                    <hr>
                    <ul class="styled-icons icon-sm icon-dark icon-theme-colored mt-10 mb-0">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 mb-sm-60 text-left sm-text-center">
                <div class="volunteer border bg-white-fa maxwidth400 p-30">
                  <div class="thumb"><img alt="" src="{{asset('images/author.jpg')}}" class="img-fullwidth"></div>
                  <div class="info">
                    <h4 class="name"><a href="#">Hasan Jacobson</a></h4>
                    <h6 class="occupation">Businessman</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit dictum nobis.</p>
                    <hr>
                    <ul class="styled-icons icon-sm icon-dark icon-theme-colored mt-10 mb-0">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3 mb-sm-60 text-left sm-text-center">
                <div class="volunteer border bg-white-fa maxwidth400 p-30">
                  <div class="thumb"><img alt="" src="{{asset('images/features.jpg')}}" class="img-fullwidth"></div>
                  <div class="info">
                    <h4 class="name"><a href="#">Hasan Jacobson</a></h4>
                    <h6 class="occupation">Businessman</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit dictum nobis.</p>
                    <hr>
                    <ul class="styled-icons icon-sm icon-dark icon-theme-colored mt-10 mb-0">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- divider: Donate Now -->
      <section class="divider parallax" data-stellar-background-ratio="0.4" data-bg-img="{{asset('images/pic33.jpg')}}">
        <div class="container pt-0 pb-0">
          <div class="row">
            <div class="col-md-7">
              <div class="bg-theme-colored-transparent-deep p-40">
                <h4 class="text-uppercase line-bottom">Make An Investment Now!</h4>

                <!-- Paypal Both Onetime/Recurring Form Starts -->
                <form id="paypal_donate_form_onetime_recurring" class="form-text-white">
                  <div class="row">


                    <div class="col-md-12">
                      <div class="form-group mb-20">
                        <label><strong>Payment Type</strong></label> <br>
                        <label class="radio-inline">
                        <input type="radio" checked="" value="one_time" name="payment_type">
                        One Time
                      </label>
                        <label class="radio-inline">
                        <input type="radio" value="recurring" name="payment_type">
                        Recurring
                      </label>
                      </div>
                    </div>

                    <div class="col-sm-12" id="donation_type_choice">
                      <div class="form-group mb-20">
                        <label><strong>Sponsorship Type</strong></label>
                        <div class="radio mt-5">
                          <label class="radio-inline">
                          <input type="radio" value="D" name="t3" checked="">
                          Daily</label>
                          <label class="radio-inline">
                          <input type="radio" value="W" name="t3">
                          Weekly</label>
                          <label class="radio-inline">
                          <input type="radio" value="M" name="t3">
                          Monthly</label>
                          <label class="radio-inline">
                          <input type="radio" value="Y" name="t3">
                          Yearly</label>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-12">
                      <div class="form-group mb-20">
                        <label><strong>I Want to Sponsor a</strong></label>
                        <select name="item_name" class="form-control">
                        <option value="Educate Children">Startup</option>
                        <option value="Child Camps">Establishent</option>
                      </select>
                      </div>
                    </div>

                    <div class="col-sm-12">
                      <div class="form-group mb-20">
                        <label><strong>Currency</strong></label>
                        <select name="currency_code" class="form-control">
                        <option value="">Select Currency</option>
                        <option value="USD" selected="selected">USD - U.S. Dollars</option>
                        <option value="AUD">AUD - Australian Dollars</option>
                        <option value="BRL">BRL - Brazilian Reais</option>
                        <option value="GBP">GBP - British Pounds</option>
                        <option value="HKD">HKD - Hong Kong Dollars</option>
                        <option value="HUF">HUF - Hungarian Forints</option>
                        <option value="INR">INR - Indian Rupee</option>
                        <option value="ILS">ILS - Israeli New Shekels</option>
                        <option value="JPY">JPY - Japanese Yen</option>
                        <option value="MYR">MYR - Malaysian Ringgit</option>
                        <option value="MXN">MXN - Mexican Pesos</option>
                        <option value="TWD">TWD - New Taiwan Dollars</option>
                        <option value="NGN">NGN - Nigerian Naira</option>
                        <option value="NZD">NZD - New Zealand Dollars</option>
                        <option value="NOK">NOK - Norwegian Kroner</option>
                        <option value="PHP">PHP - Philippine Pesos</option>
                        <option value="PLN">PLN - Polish Zlotys</option>
                        <option value="RUB">RUB - Russian Rubles</option>
                        <option value="SGD">SGD - Singapore Dollars</option>
                        <option value="SEK">SEK - Swedish Kronor</option>
                        <option value="CHF">CHF - Swiss Francs</option>
                        <option value="THB">THB - Thai Baht</option>
                        <option value="TRY">TRY - Turkish Liras</option>
                      </select>
                      </div>
                    </div>

                    <div class="col-sm-12">
                      <div class="form-group mb-20">
                        <label><strong>How much do you want to donate?</strong></label>
                        <select name="amount" class="form-control">
                          <option value="20">20</option>
                          <option value="50">50</option>
                          <option value="100">100</option>
                          <option value="200">200</option>
                          <option value="500">500</option>
                          <option value="other">Other Amount</option>
                      </select>
                        <div id="custom_other_amount">
                          <label><strong>Custom Amount:</strong></label>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-12">
                      <div class="form-group mb-20">
                        <button type="submit" class="btn btn-flat btn-dark mt-10 pl-30 pr-30" data-loading-text="Please wait...">Sponsor</button>
                      </div>
                    </div>
                  </div>
                </form>

                <!-- Script for Donation Form Custom Amount -->
                <script type="text/javascript">
                  $(document).ready(function (e) {
                    var $donation_form = $("#paypal_donate_form_onetime_recurring");
                    //toggle custom amount
                    var $custom_other_amount = $donation_form.find("#custom_other_amount");
                    $custom_other_amount.hide();
                    $donation_form.find("select[name='amount']").change(function () {
                      var $this = $(this);
                      if ($this.val() == 'other') {
                        $custom_other_amount.show().append(
                          '<div class="input-group"><span class="input-group-addon">$</span> <input id="input_other_amount" type="text" name="amount" class="form-control" value="100"/></div>'
                        );
                      } else {
                        $custom_other_amount.children(".input-group").remove();
                        $custom_other_amount.hide();
                      }
                    });

                    //toggle donation_type_choice
                    var $donation_type_choice = $donation_form.find("#donation_type_choice");
                    $donation_type_choice.hide();
                    $("input[name='payment_type']").change(function () {
                      if (this.value == 'recurring') {
                        $donation_type_choice.show();
                      } else {
                        $donation_type_choice.hide();
                      }
                    });


                    // submit form on click
                    $donation_form.on('submit', function (e) {
                      $("#paypal_donate_form-onetime").submit();
                      var item_name = $donation_form.find("select[name='item_name'] option:selected").val();
                      var currency_code = $donation_form.find("select[name='currency_code'] option:selected").val();
                      var amount = $donation_form.find("select[name='amount'] option:selected").val();
                      var t3 = $donation_form.find("input[name='t3']:checked").val();

                      if (amount == 'other') {
                        amount = $donation_form.find("#input_other_amount").val();
                      }

                      // submit proper form now
                      if ($("input[name='payment_type']:checked", $donation_form).val() == 'recurring') {
                        var recurring_form = $('#paypal_donate_form-recurring');

                        recurring_form.find("input[name='item_name']").val(item_name);
                        recurring_form.find("input[name='currency_code']").val(currency_code);
                        recurring_form.find("input[name='a3']").val(amount);
                        recurring_form.find("input[name='t3']").val(t3);

                        recurring_form.find("input[type='submit']").trigger('click');

                      } else if ($("input[name='payment_type']:checked", $donation_form).val() == 'one_time') {
                        var onetime_form = $('#paypal_donate_form-onetime');

                        onetime_form.find("input[name='item_name']").val(item_name);
                        onetime_form.find("input[name='currency_code']").val(currency_code);
                        onetime_form.find("input[name='amount']").val(amount);

                        onetime_form.find("input[type='submit']").trigger('click');
                      }
                      return false;
                    });

                  });

                </script>



                <!-- Paypal Onetime Form -->
                <form id="paypal_donate_form-onetime" class="hidden" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                  <input type="hidden" name="cmd" value="_donations">
                  <input type="hidden" name="business" value="vip@vicampro.com">

                  <input type="hidden" name="item_name" value="Sponsorship For Investments">
                  <!-- updated dynamically -->
                  <input type="hidden" name="currency_code" value="USD">
                  <!-- updated dynamically -->
                  <input type="hidden" name="amount" value="20">
                  <!-- updated dynamically -->

                  <input type="hidden" name="no_shipping" value="1">
                  <input type="hidden" name="cn" value="Comments...">
                  <input type="hidden" name="tax" value="0">
                  <input type="hidden" name="lc" value="US">
                  <input type="hidden" name="bn" value="PP-DonationsBF">
                  <input type="hidden" name="return" value="http://www.vicampro.com/vip/thankyou.html">
                  <input type="hidden" name="cancel_return" value="http://www.vicampro.com/vip/paymentcancel.html">
                  <input type="hidden" name="notify_url" value="http://www.vicampro.com/vip/notifypayment.php">
                  <input type="submit" name="submit">
                </form>

                <!-- Paypal Recurring Form -->
                <form id="paypal_donate_form-recurring" class="hidden" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                  <input type="hidden" name="cmd" value="_xclick-subscriptions">
                  <input type="hidden" name="business" value="vip@vicampro.com">

                  <input type="hidden" name="item_name" value="Sponsorship For Investments">
                  <!-- updated dynamically -->
                  <input type="hidden" name="currency_code" value="USD">
                  <!-- updated dynamically -->
                  <input type="hidden" name="a3" value="20">
                  <!-- updated dynamically -->
                  <input type="hidden" name="t3" value="D">
                  <!-- updated dynamically -->


                  <input type="hidden" name="p3" value="1">
                  <input type="hidden" name="rm" value="2">
                  <input type="hidden" name="src" value="1">
                  <input type="hidden" name="sra" value="1">
                  <input type="hidden" name="no_shipping" value="0">
                  <input type="hidden" name="no_note" value="1">
                  <input type="hidden" name="lc" value="US">
                  <input type="hidden" name="bn" value="PP-DonationsBF">
                  <input type="hidden" name="return" value="http://www.vicampro.com/vip/thankyou.html">
                  <input type="hidden" name="cancel_return" value="http://www.vicampro.com/vip/paymentcancel.html">
                  <input type="hidden" name="notify_url" value="http://www.vicampro.com/vip/notifypayment.php">
                  <input type="submit" name="submit">
                </form>
                <!-- Paypal Both Onetime/Recurring Form Ends -->

              </div>
            </div>
            <div class="col-md-5">
            </div>
          </div>
        </div>
      </section>

      <!-- divider: Gallery -->
      <section id="gallery" class="divider bg-lighter">
        <div class="container">
          <div class="section-title text-center">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <h3 class="text-uppercase mt-0">Gallery</h3>
                <div class="title-icon">
                  <i class="flaticon-charity-hand-holding-a-heart"></i>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
              </div>
            </div>
          </div>
          <div class="section-content">
            <div class="row">
              <div class="col-md-12">
                <div class="gallery-isotope grid-7 gutter-small clearfix" data-lightbox="gallery">
                  <!-- Portfolio Item Start -->
                  <div class="gallery-item">
                    <div class="thumb">
                      <img alt="project" src="{{asset('images/author.jpg')}}" class="img-fullwidth">
                      <div class="overlay-shade"></div>
                      <div class="icons-holder">
                        <div class="icons-holder-inner">
                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="images/gallery/gallery-lg1.jpg" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Portfolio Item End -->

                  <!-- Portfolio Item Start -->
                  <div class="gallery-item">
                    <div class="thumb">
                      <img alt="project" src="{{asset('images/features.jpg')}}" class="img-fullwidth">
                      <div class="overlay-shade"></div>
                      <div class="icons-holder">
                        <div class="icons-holder-inner">
                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="images/gallery/gallery-lg2.jpg" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Portfolio Item End -->

                  <!-- Portfolio Item Start -->
                  <div class="gallery-item">
                    <div class="thumb">
                      <img alt="project" src="{{asset('images/member-1.jpg')}}" class="img-fullwidth">
                      <div class="overlay-shade"></div>
                      <div class="icons-holder">
                        <div class="icons-holder-inner">
                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="images/gallery/gallery-lg3.jpg" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Portfolio Item End -->

                  <!-- Portfolio Item Start -->
                  <div class="gallery-item">
                    <div class="thumb">
                      <img alt="project" src="{{asset('images/author.jpg')}}" class="img-fullwidth">
                      <div class="overlay-shade"></div>
                      <div class="icons-holder">
                        <div class="icons-holder-inner">
                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="images/gallery/gallery-lg4.jpg" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Portfolio Item End -->

                  <!-- Portfolio Item Start -->
                  <div class="gallery-item">
                    <div class="thumb">
                      <img alt="project" src="img/features.jpg" class="img-fullwidth">
                      <div class="overlay-shade"></div>
                      <div class="icons-holder">
                        <div class="icons-holder-inner">
                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="images/gallery/gallery-lg5.jpg" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Portfolio Item End -->

                  <!-- Portfolio Item Start -->
                  <div class="gallery-item">
                    <div class="thumb">
                      <img alt="project" src="{{asset('images/member-1.jpg')}}" class="img-fullwidth">
                      <div class="overlay-shade"></div>
                      <div class="icons-holder">
                        <div class="icons-holder-inner">
                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="images/gallery/gallery-lg6.jpg" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Portfolio Item End -->

                  <!-- Portfolio Item Start -->
                  <div class="gallery-item">
                    <div class="thumb">
                      <img alt="project" src="{{asset('images/author.jpg')}}" class="img-fullwidth">
                      <div class="overlay-shade"></div>
                      <div class="icons-holder">
                        <div class="icons-holder-inner">
                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="images/gallery/gallery-lg7.jpg" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Portfolio Item End -->

                  <!-- Portfolio Item Start -->
                  <div class="gallery-item">
                    <div class="thumb">
                      <img alt="project" src="{{asset('images/features.jpg')}}" class="img-fullwidth">
                      <div class="overlay-shade"></div>
                      <div class="icons-holder">
                        <div class="icons-holder-inner">
                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="images/gallery/gallery-lg8.jpg" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Portfolio Item End -->

                  <!-- Portfolio Item Start -->
                  <div class="gallery-item">
                    <div class="thumb">
                      <img alt="project" src="{{asset('images/member-1.jpg')}}" class="img-fullwidth">
                      <div class="overlay-shade"></div>
                      <div class="icons-holder">
                        <div class="icons-holder-inner">
                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="images/gallery/gallery-lg9.jpg" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Portfolio Item End -->

                  <!-- Portfolio Item Start -->
                  <div class="gallery-item">
                    <div class="thumb">
                      <img alt="project" src="{{asset('images/author.jpg')}}" class="img-fullwidth">
                      <div class="overlay-shade"></div>
                      <div class="icons-holder">
                        <div class="icons-holder-inner">
                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="images/gallery/gallery-lg10.jpg" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Portfolio Item End -->

                  <!-- Portfolio Item Start -->
                  <div class="gallery-item">
                    <div class="thumb">
                      <img alt="project" src="{{asset('images/features.jpg')}}" class="img-fullwidth">
                      <div class="overlay-shade"></div>
                      <div class="icons-holder">
                        <div class="icons-holder-inner">
                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="images/gallery/gallery-lg11.jpg" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Portfolio Item End -->

                  <!-- Portfolio Item Start -->
                  <div class="gallery-item">
                    <div class="thumb">
                      <img alt="project" src="{{asset('images/member-1.jpg')}}" class="img-fullwidth">
                      <div class="overlay-shade"></div>
                      <div class="icons-holder">
                        <div class="icons-holder-inner">
                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="images/gallery/gallery-lg12.jpg" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Portfolio Item End -->

                  <!-- Portfolio Item Start -->
                  <div class="gallery-item">
                    <div class="thumb">
                      <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                      <div class="overlay-shade"></div>
                      <div class="icons-holder">
                        <div class="icons-holder-inner">
                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="images/gallery/gallery-lg13.jpg" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Portfolio Item End -->

                  <!-- Portfolio Item Start -->
                  <div class="gallery-item">
                    <div class="thumb">
                      <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                      <div class="overlay-shade"></div>
                      <div class="icons-holder">
                        <div class="icons-holder-inner">
                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="images/gallery/gallery-lg14.jpg" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Portfolio Item End -->

                  <!-- Portfolio Item Start -->
                  <div class="gallery-item">
                    <div class="thumb">
                      <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                      <div class="overlay-shade"></div>
                      <div class="icons-holder">
                        <div class="icons-holder-inner">
                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="images/gallery/gallery-lg15.jpg" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Portfolio Item End -->

                  <!-- Portfolio Item Start -->
                  <div class="gallery-item">
                    <div class="thumb">
                      <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                      <div class="overlay-shade"></div>
                      <div class="icons-holder">
                        <div class="icons-holder-inner">
                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="images/gallery/gallery-lg16.jpg" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Portfolio Item End -->

                  <!-- Portfolio Item Start -->
                  <div class="gallery-item">
                    <div class="thumb">
                      <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                      <div class="overlay-shade"></div>
                      <div class="icons-holder">
                        <div class="icons-holder-inner">
                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="images/gallery/gallery-lg17.jpg" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Portfolio Item End -->

                  <!-- Portfolio Item Start -->
                  <div class="gallery-item">
                    <div class="thumb">
                      <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                      <div class="overlay-shade"></div>
                      <div class="icons-holder">
                        <div class="icons-holder-inner">
                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="images/gallery/gallery-lg18.jpg" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Portfolio Item End -->

                  <!-- Portfolio Item Start -->
                  <div class="gallery-item">
                    <div class="thumb">
                      <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                      <div class="overlay-shade"></div>
                      <div class="icons-holder">
                        <div class="icons-holder-inner">
                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="images/gallery/gallery-lg19.jpg" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Portfolio Item End -->

                  <!-- Portfolio Item Start -->
                  <div class="gallery-item">
                    <div class="thumb">
                      <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                      <div class="overlay-shade"></div>
                      <div class="icons-holder">
                        <div class="icons-holder-inner">
                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="images/gallery/gallery-lg1.jpg" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Portfolio Item End -->

                  <!-- Portfolio Item Start -->
                  <div class="gallery-item">
                    <div class="thumb">
                      <img alt="project" src="http://placehold.it/155x106" class="img-fullwidth">
                      <div class="overlay-shade"></div>
                      <div class="icons-holder">
                        <div class="icons-holder-inner">
                          <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                            <a href="images/gallery/gallery-lg2.jpg" data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Portfolio Item End -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section: Testimonials and Logo -->
      <section id="client" class="divider parallax layer-overlay overlay-light" data-stellar-background-ratio="0.2" data-bg-img="{{asset('images/pic33.jpg')}}">
        <div class="container pt-0 pb-0">
          <div class="row equal-height">
            <div class="col-md-7">
              <div class="display-table-parent pr-90 pl-90">
                <div class="display-table">
                  <div class="display-table-cell">
                    <div class="clients text-center pt-30 pb-20 bg-lightest-transparent">
                      <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-4">
                          <img src="{{asset('images/sponsors/schneider.png')}}" alt="" width="100" class="mb-10">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-4">
                          <img src="{{asset('images/sponsors/syngenta.png')}}" alt="" width="100" class="mb-10">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-4">
                          <img src="{{asset('images/sponsors/eima.png')}}" alt="" width="100" class="mb-10">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-4">
                          <img src="{{asset('images/sponsors/europlant.png')}}" alt="" width="100" class="mb-10">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-4">
                          <img src="{{asset('images/sponsors/grimme.png')}}" alt="" width="100" class="mb-10">
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-4">
                          <img src="{{asset('images/sponsors/2iE_logo.png')}}" alt="" width="100" class="mb-10">
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                    <div class="mt-30">
                      <h4 class="text-uppercase mb-5">Subscribe to our newsletter</h4>
                      <!-- Mailchimp Subscription Form-->
                      <form id="mailchimp-subscription-form" class="newsletter-form mt-10">
                        <label class="display-block" for="mce-EMAIL"></label>
                        <div class="input-group">
                          <input type="email" id="mce-EMAIL" data-height="43px" class="form-control input-lg" placeholder="Your Email" name="EMAIL"
                            value="">
                          <span class="input-group-btn">
                          <button type="submit" class="btn btn-flat btn-lg btn-colored btn-theme-colored m-0" data-height="43px">Subscribe</button>
                        </span>
                        </div>
                      </form>

                      <!-- Mailchimp Subscription Form Validation-->
                      <script type="text/javascript">
                        $('#mailchimp-subscription-form').ajaxChimp({
                          callback: mailChimpCallBack,
                          url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
                        });

                        function mailChimpCallBack(resp) {
                          // Hide any previous response text
                          var $mailchimpform = $('#mailchimp-subscription-form'),
                            $response = '';
                          $mailchimpform.children(".alert").remove();
                          if (resp.result === 'success') {
                            $response =
                              '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                              resp.msg + '</div>';
                          } else if (resp.result === 'error') {
                            $response =
                              '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
                              resp.msg + '</div>';
                          }
                          $mailchimpform.prepend($response);
                        }

                      </script>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-5 bg-light-transparent">
              <div class="pt-50 pb-50 pl-20 pr-20">
                <h4 class="line-bottom text-uppercase mt-0">Our Sponsors Say</h4>
                <div class="testimonial-carousel owl-nav-top">
                  <div class="item">
                    <div class="testimonial-wrapper text-center">
                      <div class="thumb"><img class="img-circle" alt="" src="http://placehold.it/135x135"></div>
                      <div class="content pt-10">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat turpis nec leo pellentesque
                          tincidunt adipiscing elit.</p>
                        <i class="fa fa-quote-right font-36 mt-10 text-gray-lightgray"></i>
                        <h5 class="author text-theme-colored mb-0">Catherine Grace</h5>
                        <h6 class="title text-gray mt-0 mb-15">Designer</h6>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="testimonial-wrapper text-center">
                      <div class="thumb"><img class="img-circle" alt="" src="http://placehold.it/135x135"></div>
                      <div class="content pt-10">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat turpis nec leo pellentesque
                          tincidunt adipiscing elit.</p>
                        <i class="fa fa-quote-right font-36 mt-10 text-gray-lightgray"></i>
                        <h5 class="author text-theme-colored mb-0">Catherine Grace</h5>
                        <h6 class="title text-gray mt-0 mb-15">Designer</h6>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="testimonial-wrapper text-center">
                      <div class="thumb"><img class="img-circle" alt="" src="http://placehold.it/135x135"></div>
                      <div class="content pt-10">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat turpis nec leo pellentesque
                          tincidunt adipiscing elit.</p>
                        <i class="fa fa-quote-right font-36 mt-10 text-gray-lightgray"></i>
                        <h5 class="author text-theme-colored mb-0">Catherine Grace</h5>
                        <h6 class="title text-gray mt-0 mb-15">Designer</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section: News -->
      <section id="blog" class="bg-lighter">
        <div class="container pb-80">
          <div class="section-title text-center">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <h3 class="text-uppercase mt-0">Latest updates</h3>
                <div class="title-icon">
                  <i class="flaticon-charity-hand-holding-a-heart"></i>
                </div>
                <p>Activities of our members and their interests<br> voluptatem obcaecati!</p>
              </div>
            </div>
          </div>
          <div class="section-content">
            <div class="row">
              <div class="col-md-4">
                <article class="post clearfix maxwidth600 mb-sm-30">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> <img src="http://placehold.it/360x220" alt="" class="img-responsive img-fullwidth"> </div>
                    <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                      <div class="display-table">
                        <div class="display-table-cell">
                          <ul>
                            <li><a class="text-white" href="#"><i class="fa fa-thumbs-o-up"></i> 265 <br> Likes</a></li>
                            <li class="mt-20"><a class="text-white" href="#"><i class="fa fa-comments-o"></i> 72 <br> comments</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="entry-content border-1px p-20">
                    <h5 class="entry-title mt-0 pt-0"><a href="#">Sponsor an interest today</a></h5>
                    <p class="text-left mb-20 mt-15 font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    <a class="btn btn-flat btn-colored btn-theme-colored btn-sm pull-left" href="#">Read more</a>
                    <ul class="list-inline entry-date pull-right font-12 mt-5">
                      <li><a class="text-theme-colored" href="#">Admin |</a></li>
                      <li><span class="text-theme-colored">Nov 13, 2015</span></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                </article>
              </div>
              <div class="col-md-4">
                <article class="post clearfix maxwidth600 mb-sm-30">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> <img src="http://placehold.it/360x220" alt="" class="img-responsive img-fullwidth"> </div>
                    <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                      <div class="display-table">
                        <div class="display-table-cell">
                          <ul>
                            <li><a class="text-white" href="#"><i class="fa fa-thumbs-o-up"></i> 265 <br> Likes</a></li>
                            <li class="mt-20"><a class="text-white" href="#"><i class="fa fa-comments-o"></i> 72 <br> comments</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="entry-content border-1px p-20">
                    <h5 class="entry-title mt-0 pt-0"><a href="#">Sponsor an interest today</a></h5>
                    <p class="text-left mb-20 mt-15 font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    <a class="btn btn-flat btn-colored btn-theme-colored btn-sm pull-left" href="#">Read more</a>
                    <ul class="list-inline entry-date pull-right font-12 mt-5">
                      <li><a class="text-theme-colored" href="#">Admin |</a></li>
                      <li><span class="text-theme-colored">Nov 13, 2015</span></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                </article>
              </div>
              <div class="col-md-4">
                <article class="post clearfix maxwidth600 mb-sm-30">
                  <div class="entry-header">
                    <div class="post-thumb thumb"> <img src="http://placehold.it/360x220" alt="" class="img-responsive img-fullwidth"> </div>
                    <div class="entry-meta meta-absolute text-center pl-15 pr-15">
                      <div class="display-table">
                        <div class="display-table-cell">
                          <ul>
                            <li><a class="text-white" href="#"><i class="fa fa-thumbs-o-up"></i> 265 <br> Likes</a></li>
                            <li class="mt-20"><a class="text-white" href="#"><i class="fa fa-comments-o"></i> 72 <br> comments</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="entry-content border-1px p-20">
                    <h5 class="entry-title mt-0 pt-0"><a href="#">Sponsor an interest today</a></h5>
                    <p class="text-left mb-20 mt-15 font-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                    <a class="btn btn-flat btn-colored btn-theme-colored btn-sm pull-left" href="#">Read more</a>
                    <ul class="list-inline entry-date pull-right font-12 mt-5">
                      <li><a class="text-theme-colored" href="#">Admin |</a></li>
                      <li><span class="text-theme-colored">Nov 13, 2015</span></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="faq">
        <div class="container">
          <div class="col-md-6 col-md-offset-3 text-center">
            <h2 class="text-theme-colored font-36">FAQ</h2>
          </div>
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div id="accordion1" class="panel-group accordion transparent">
                <div class="panel">
                  <div class="panel-title">
                    <a data-parent="#accordion1" data-toggle="collapse" href="#accordion11" class="collapsed" aria-expanded="false">
                    <span class="open-sub"></span> <strong>Q. What do you mean by item and end product?</strong></a>
                  </div>
                  <div id="accordion11" class="panel-collapse collapse" role="tablist" aria-expanded="false" style="height: 0px;">
                    <div class="panel-content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam officia dolor rerum enim doloremque
                        iusto eos atque tempora dignissimos similique, quae, maxime sit accusantium delectus, maiores officiis
                        vitae fuga sunt repellendus. Molestiae quae, ducimus ut tenetur nobis id quam autem quibusdam commodi
                        inventore laborum libero officiis</p>
                      <p>Accusantium a laboriosam cumque consequatur voluptates fuga assumenda corporis amet. Vitae placeat
                        architecto ipsa cumque fugiat, atque molestiae perferendis quasi quaerat iste voluptate quas dicta
                        corporis, incidunt quibusdam quia odit unde, rem harum quis! Optio debitis veniam quibusdam, culpa
                        quia, aperiam cupiditate perspiciatis repellat similique saepe magnam quaerat iusto obcaecati doloremque,
                        dolor praesentium.</p>
                    </div>
                  </div>
                </div>
                <div class="panel">
                  <div class="panel-title">
                    <a class="collapsed" data-parent="#accordion1" data-toggle="collapse" href="#accordion12" aria-expanded="false">
                    <span class="open-sub"></span> <strong>Q. What are some examples of permitted end products?</strong></a>
                  </div>
                  <div id="accordion12" class="panel-collapse collapse" role="tablist" aria-expanded="false" style="height: 0px;">
                    <div class="panel-content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam officia dolor rerum enim doloremque
                        iusto eos atque tempora dignissimos similique, quae, maxime sit accusantium delectus, maiores officiis
                        vitae fuga sunt repellendus. Molestiae quae, ducimus ut tenetur nobis id quam autem quibusdam commodi
                        inventore laborum libero officiis</p>
                      <p>Accusantium a laboriosam cumque consequatur voluptates fuga assumenda corporis amet. Vitae placeat
                        architecto ipsa cumque fugiat, atque molestiae perferendis quasi quaerat iste voluptate quas dicta
                        corporis, incidunt quibusdam quia odit unde, rem harum quis! Optio debitis veniam quibusdam, culpa
                        quia, aperiam cupiditate perspiciatis repellat similique saepe magnam quaerat iusto obcaecati doloremque,
                        dolor praesentium.</p>
                    </div>
                  </div>
                </div>
                <div class="panel">
                  <div class="panel-title">
                    <a data-parent="#accordion1" data-toggle="collapse" href="#accordion13" class="collapsed" aria-expanded="false">
                    <span class="open-sub"></span> <strong>Q. Am I allowed to modify the item that I purchased?</strong></a>
                  </div>
                  <div id="accordion13" class="panel-collapse collapse" role="tablist" aria-expanded="false">
                    <div class="panel-content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam officia dolor rerum enim doloremque
                        iusto eos atque tempora dignissimos similique, quae, maxime sit accusantium delectus, maiores officiis
                        vitae fuga sunt repellendus. Molestiae quae, ducimus ut tenetur nobis id quam autem quibusdam commodi
                        inventore laborum libero officiis</p>
                      <p>Accusantium a laboriosam cumque consequatur voluptates fuga assumenda corporis amet. Vitae placeat
                        architecto ipsa cumque fugiat, atque molestiae perferendis quasi quaerat iste voluptate quas dicta
                        corporis, incidunt quibusdam quia odit unde, rem harum quis! Optio debitis veniam quibusdam, culpa
                        quia, aperiam cupiditate perspiciatis repellat similique saepe magnam quaerat iusto obcaecati doloremque,
                        dolor praesentium.</p>
                    </div>
                  </div>
                </div>
                <div class="panel">
                  <div class="panel-title">
                    <a data-parent="#accordion1" data-toggle="collapse" href="#accordion14" class="collapsed" aria-expanded="false">
                    <span class="open-sub"></span> <strong>Q. What does non-exclusive mean?</strong></a>
                  </div>
                  <div id="accordion14" class="panel-collapse collapse" role="tablist" aria-expanded="false">
                    <div class="panel-content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam officia dolor rerum enim doloremque
                        iusto eos atque tempora dignissimos similique, quae, maxime sit accusantium delectus, maiores officiis
                        vitae fuga sunt repellendus. Molestiae quae, ducimus ut tenetur nobis id quam autem quibusdam commodi
                        inventore laborum libero officiis</p>
                      <p>Accusantium a laboriosam cumque consequatur voluptates fuga assumenda corporis amet. Vitae placeat
                        architecto ipsa cumque fugiat, atque molestiae perferendis quasi quaerat iste voluptate quas dicta
                        corporis, incidunt quibusdam quia odit unde, rem harum quis! Optio debitis veniam quibusdam, culpa
                        quia, aperiam cupiditate perspiciatis repellat similique saepe magnam quaerat iusto obcaecati doloremque,
                        dolor praesentium.</p>
                    </div>
                  </div>
                </div>
                <div class="panel">
                  <div class="panel-title">
                    <a data-parent="#accordion1" data-toggle="collapse" href="#accordion15" class="collapsed" aria-expanded="false">
                    <span class="open-sub"></span> <strong>Q. What is a single application?</strong></a>
                  </div>
                  <div id="accordion15" class="panel-collapse collapse" role="tablist" aria-expanded="false">
                    <div class="panel-content">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam officia dolor rerum enim doloremque
                        iusto eos atque tempora dignissimos similique, quae, maxime sit accusantium delectus, maiores officiis
                        vitae fuga sunt repellendus. Molestiae quae, ducimus ut tenetur nobis id quam autem quibusdam commodi
                        inventore laborum libero officiis</p>
                      <p>Accusantium a laboriosam cumque consequatur voluptates fuga assumenda corporis amet. Vitae placeat
                        architecto ipsa cumque fugiat, atque molestiae perferendis quasi quaerat iste voluptate quas dicta
                        corporis, incidunt quibusdam quia odit unde, rem harum quis! Optio debitis veniam quibusdam, culpa
                        quia, aperiam cupiditate perspiciatis repellat similique saepe magnam quaerat iusto obcaecati doloremque,
                        dolor praesentium.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Section: Contact -->
      <section id="contact">
        <div class="container pb-80">
          <div class="section-title text-center">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <h3 class="text-uppercase mt-0">Contact Us</h3>
                <div class="title-icon">
                  <i class="flaticon-charity-hand-holding-a-heart"></i>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
              </div>
            </div>
          </div>
          <div class="section-content">
            <div class="row pt-30">
              <div class="col-md-5">

                <!-- Google Map HTML Codes -->
                <div data-address="121 King Street, Melbourne Victoria 3000 Australia" data-popupstring-id="#popupstring1" class="map-canvas autoload-map"
                  data-mapstyle="style2" data-height="500" data-latlng="9.71666667,8.91666667" data-title="sample title" data-zoom="12"
                  data-marker="images/map-marker.png">
                </div>
                <div class="map-popupstring hidden" id="popupstring1">
                  <div class="text-center">
                    <h3 class="text-theme-colored">Vip Head Office</h3>
                    <p>Located next to WAYE Foundation, Doi, Du,</p>
                  </div>
                </div>

              </div>

              <div class="col-md-7">
                <h3 class="mt-0 mb-30">Interested in discussing?</h3>

                <!-- Contact Form -->
                <form id="contact_form" name="contact_form" class="" action="includes/sendmail.php" method="post">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="form_name">Name <small>*</small></label>
                        <input id="form_name" name="form_name" class="form-control" type="text" placeholder="Enter Name" required="">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="form_email">Email <small>*</small></label>
                        <input id="form_email" name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="form_name">Subject <small>*</small></label>
                        <input id="form_subject" name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="form_phone">Phone</label>
                        <input id="form_phone" name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="form_name">Message</label>
                    <textarea id="form_message" name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                  </div>
                  <div class="form-group">
                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                    <button type="submit" class="btn btn-dark btn-theme-colored btn-flat" data-loading-text="Please wait...">Send your message</button>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- end main-content -->

    <!-- Footer -->
    <footer id="footer" class="footer pb-0" data-bg-img="{{asset('images/footer-bg.png')}}" data-bg-color="#000000">
      <div class="container pb-20">
        <div class="row multi-row-clearfix">
          <div class="col-sm-6 col-md-3">
            <div class="widget dark"> <img alt="" src="{{asset('images/logon.png')}}">
              <p class="font-12 mt-10 mb-10"></p>
              <a class="btn btn-default btn-transparent btn-xs btn-flat mt-5" href="#">Read more</a>
              <ul class="styled-icons icon-sm icon-bordered icon-circled clearfix mt-20">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-behance"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="widget dark">
              <h5 class="widget-title line-bottom">Twitter Feed</h5>
              <div class="twitter-feed list-border clearfix" data-username="Envato" data-count="2"></div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="widget dark">
              <h5 class="widget-title line-bottom">Quick Contact</h5>
              <form id="footer_quick_contact_form" name="footer_quick_contact_form" class="quick-contact-form" action="includes/quickcontact.php"
                method="post">
                <div class="form-group">
                  <input id="form_email" name="form_email" class="form-control" type="text" required="" placeholder="Enter Email">
                </div>
                <div class="form-group">
                  <textarea id="form_message" name="form_message" class="form-control" required="" placeholder="Enter Message" rows="3"></textarea>
                </div>
                <div class="form-group">
                  <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                  <button type="submit" class="btn btn-default btn-transparent btn-xs btn-flat mt-0" data-loading-text="Please wait...">Send Message</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid bg-theme-colored p-20">
        <div class="row text-center">
          <div class="col-md-12">
            <p class="text-white font-11 m-0">Copyright &copy;2017 Vicampro. All Rights Reserved</p>
          </div>
        </div>
      </div>
    </footer>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  </div>
  <!-- end wrapper -->

  <!-- Footer Scripts -->

  <!-- external javascripts -->
  <script src="{{asset('js/jquery-2.2.0.min.js')}}"></script>
  <!-- Google Map Javascript Codes -->
  <script src="http://maps.google.com/maps/api/js?key=AIzaSyAYWE4mHmR9GyPsHSOVZrSCOOljk8DU9B4"></script>
  <script src="{{asset('js/google-map-init.js')}}"></script>
  <!--<script src="js/jquery-ui.min.js"></script>-->
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <!-- JS | jquery plugin collection for this theme -->
  <script src="{{asset('js/jquery-plugin-collection.js')}}"></script>

  <!-- Revolution Slider 5.x SCRIPTS -->
  <script src="{{asset('js/revolution-slider/js/jquery.themepunch.tools.min.js')}}"></script>
  <script src="{{asset('js/revolution-slider/js/jquery.themepunch.revolution.min.js')}}"></script>
  <!-- JS | Custom script for all pages -->
  <script src="{{asset('js/custom.js')}}"></script>

  <!-- SLIDER REVOLUTION 5.0 EXTENSIONS
      (Load Extensions only on Local File Systems !
       The following part can be removed on Server for On Demand Loading) -->
  <!-- Contact Form Validation-->
  <script type="text/javascript">
      $("#contact_form").validate({
          submitHandler: function (form) {
              var form_btn = $(form).find('button[type="submit"]');
              var form_result_div = '#form-result';
              $(form_result_div).remove();
              form_btn.before(
                  '<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>'
              );
              var form_btn_old_msg = form_btn.html();
              form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
              $(form).ajaxSubmit({
                  dataType: 'json',
                  success: function (data) {
                      if (data.status == 'true') {
                          $(form).find('.form-control').val('');
                      }
                      form_btn.prop('disabled', false).html(form_btn_old_msg);
                      $(form_result_div).html(data.message).fadeIn('slow');
                      setTimeout(function () {
                          $(form_result_div).fadeOut('slow')
                      }, 6000);
                  }
              });
          }
      });

  </script>

  <!-- Quick Contact Form Validation-->
  <script type="text/javascript">
      $("#footer_quick_contact_form").validate({
          submitHandler: function (form) {
              var form_btn = $(form).find('button[type="submit"]');
              var form_result_div = '#form-result';
              $(form_result_div).remove();
              form_btn.before(
                  '<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>'
              );
              var form_btn_old_msg = form_btn.html();
              form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
              $(form).ajaxSubmit({
                  dataType: 'json',
                  success: function (data) {
                      if (data.status == 'true') {
                          $(form).find('.form-control').val('');
                      }
                      form_btn.prop('disabled', false).html(form_btn_old_msg);
                      $(form_result_div).html(data.message).fadeIn('slow');
                      setTimeout(function () {
                          $(form_result_div).fadeOut('slow')
                      }, 6000);
                  }
              });
          }
      });

  </script>
  <!-- end .rev_slider_wrapper -->
  <script>
      $(document).ready(function (e) {
          var revapi = $(".rev_slider").revolution({
              sliderType: "standard",
              sliderLayout: "auto",
              dottedOverlay: "none",
              delay: 5000,
              navigation: {
                  keyboardNavigation: "off",
                  keyboard_direction: "horizontal",
                  mouseScrollNavigation: "off",
                  onHoverStop: "off",
                  touch: {
                      touchenabled: "on",
                      swipe_threshold: 75,
                      swipe_min_touches: 1,
                      swipe_direction: "horizontal",
                      drag_block_vertical: false
                  },
                  arrows: {
                      style: "gyges",
                      enable: true,
                      hide_onmobile: false,
                      hide_onleave: true,
                      hide_delay: 200,
                      hide_delay_mobile: 1200,
                      tmp: '',
                      left: {
                          h_align: "left",
                          v_align: "center",
                          h_offset: 0,
                          v_offset: 0
                      },
                      right: {
                          h_align: "right",
                          v_align: "center",
                          h_offset: 0,
                          v_offset: 0
                      }
                  },
                  bullets: {
                      enable: true,
                      hide_onmobile: true,
                      hide_under: 800,
                      style: "hebe",
                      hide_onleave: false,
                      direction: "horizontal",
                      h_align: "center",
                      v_align: "bottom",
                      h_offset: 0,
                      v_offset: 30,
                      space: 5,
                      tmp: '<span class="tp-bullet-image"></span><span class="tp-bullet-imageoverlay"></span><span class="tp-bullet-title"></span>'
                  }
              },
              responsiveLevels: [1240, 1024, 778],
              visibilityLevels: [1240, 1024, 778],
              gridwidth: [1170, 1024, 778, 480],
              gridheight: [620, 768, 960, 720],
              lazyType: "none",
              parallax: {
                  origo: "slidercenter",
                  speed: 1000,
                  levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                  type: "scroll"
              },
              shadow: 0,
              spinner: "off",
              stopLoop: "on",
              stopAfterLoops: 0,
              stopAtSlide: -1,
              shuffle: "off",
              autoHeight: "off",
              fullScreenAutoWidth: "off",
              fullScreenAlignForce: "off",
              fullScreenOffsetContainer: "",
              fullScreenOffset: "0",
              hideThumbsOnMobile: "off",
              hideSliderAtLimit: 0,
              hideCaptionAtLimit: 0,
              hideAllCaptionAtLilmit: 0,
              debugMode: false,
              fallbacks: {
                  simplifyAll: "off",
                  nextSlideOnWindowFocus: "off",
                  disableFocusListener: false,
              }
          });
      });

  </script>
  <!-- Slider Revolution Ends -->
  <script type="text/javascript" src="{{asset('js/revolution-slider/js/extensions/revolution.extension.actions.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/revolution-slider/js/extensions/revolution.extension.carousel.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/revolution-slider/js/extensions/revolution.extension.migration.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/revolution-slider/js/extensions/revolution.extension.navigation.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/revolution-slider/js/extensions/revolution.extension.parallax.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/revolution-slider/js/extensions/revolution.extension.video.min.js')}}"></script>
</body>

</html>
