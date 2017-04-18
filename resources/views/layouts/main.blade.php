<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="CharityFund - Charity & Crowdfunding" />
    <meta name="keywords" content="Vicampro-vip, Agriculture" />
    <meta name="author" content="Vicampro" />

    <title>Vicampro-vip</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('/template/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('/template/css/sb-admin.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{asset('/template/css/plugins/morris.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('/template/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
      body {
        background-color: white;
      }
    </styLe>

</head>

<body>
  <div id="wrapper">
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      @yield('navbar')
      @include('layouts.sidebar')
      <!-- /.navbar-collapse -->
  </nav>
  <div id="page-wrapper">
    @yield('content')
  </div>
  </div>
    <!-- jQuery -->
    <script src="{{asset('template/js/jquery.js')}}"></script>
    <script src="/js/app.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('template/js/bootstrap.min.js')}}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{asset('template/js/plugins/morris/raphael.min.js')}}"></script>
    <script src="{{asset('template/js/plugins/morris/morris.min.js')}}"></script>
    <script src="{{asset('template/js/plugins/morris/morris-data.js')}}"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <script>
    $(function() {
      $( "#datepicker" ).datepicker();
    });
    </script>
    @yield('script')

</body>

</html>
