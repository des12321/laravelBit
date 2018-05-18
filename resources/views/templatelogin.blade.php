<!DOCTYPE html>
<head>
    <title>BUSINET BY BINANCE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{ asset('css/newstyle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/style.css') }}" rel='stylesheet' type='text/css'/>
    <link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet"/>
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
          rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{ asset('css/font.css') }}" type="text/css"/>
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <!-- //font-awesome icons -->
    <script src="{{ asset('js/jquery2.0.3.min.js') }}"></script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700');

        body {
            font-family: 'Josefin Sans', sans-serif;
            background: #2c3346;
            padding: 60px 0px;
        }

        h1 {
            font-weight: 600;
            font-family: 'Josefin Sans', sans-serif;
            text-transform: capitalize;
            text-align: center;
            color: #FFF;
            margin: 40px 0px;
        }

        .inner-form {
            background: #FFF;
            padding: 80px;
            border-radius: 10px;
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.4);
        }

        label {
            font-weight: 400;
            font-size: 15px;
        }

        .form-control {
            background-color: #f5f5f5;
            box-shadow: none;
            color: #565656;
            font-size: 14px;
            padding: 30px 10px;
            margin-bottom: 30px;
        }

        .btn {
            background: #36d1dc;
            background: -webkit-linear-gradient(to right, #36d1dc, #5b86e5);
            background: linear-gradient(to right, #36d1dc, #5b86e5);
            color: #FFF;
            border-radius: 6px;
            padding: 20px 40px;
            margin: 0 auto;
            display: table;
        }

        .forgot {
            text-align: center;
            margin-top: 30px;
            font-size: 15px;
            text-decoration: underline;
        }

        .nav-tabs {
            border: none;
            margin: 0 auto;
            display: table;
        }

        .nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
            border: none;
            font-size: 16px;
        }

        .nav > li > a {
            font-size: 16px;
            color: #3ec2de;
        }
    </style>
</head>
<body>

<div class="login">
    <div class="container">
        <div class="col-lg-6 col-lg-offset-3">

            <h1 class="horizontal">Businet by binance</h1>


            @yield('content-login')

        </div>
    </div>
</div>

<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/jquery.dcjqaccordion.2.7.js') }}"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
<script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('js/jquery.nicescroll.js') }}"></script>
<!--[if lte IE 8]>
<script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script>
<![endif]-->
<script src="{{ asset('js/jquery.scrollTo.js') }}"></script>
</body>
</html>
