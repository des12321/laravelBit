<!DOCTYPE html>
<html>
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
    } 
    </script>
    <!-- bootstrap-css -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css')}}" rel='stylesheet' type='text/css'/>
    <link href="{{ asset('css/style-responsive.css')}}" rel="stylesheet"/>
    <!-- font CSS 
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
          rel='stylesheet' type='text/css'>-->
    <!-- font-awesome icons -->
    <link href="{{ asset('css/font.css')}}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{ asset('css/morris.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/newstyle.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/mdb.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/dataTables.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/j query.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- calendar -->
    <link href="{{ asset('css/monthly.css')}}" rel="stylesheet" >
    <!-- //calendar -->
    <!-- //font-awesome icons -->
    <script src="{{ asset('js/jquery2.0.3.min.js')}}"></script>
    <script src="{{ asset('js/raphael-min.js')}}"></script>
    <script src="{{ asset('js/morris.js')}}"></script>
</head>
<body>
<section id="container">
@include('layout.header')
@include('layout.menu')
    <!--main content start-->
    <section id="main-content">
    @yield('content')
        <!-- footer -->
        <div class="footer">
            <div class="wthree-copyright">
                <p>© 2017 Visitors. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
            </div>
        </div>
        <!-- / footer -->
    </section>
    <!--main content end-->
</section>
<script src="{{ asset('js/jquery-3.3.1.js') }}"></script>
<script src="{{ asset('js/bootstrap.js')}}"></script>
<script src="{{ asset('js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript">
    $('.dataTableGeneric').dataTable();
</script>

<script src="{{ asset('js/mdb.min.js')}}"></script>
<script src="{{ asset('js/popper.min.js')}}"></script>
<script src="{{ asset('js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{ asset('js/scripts.js')}}"></script>
<script src="{{ asset('js/jquery.slimscroll.js')}}"></script>
<script src="{{ asset('js/jquery.nicescroll.js')}}"></script>
<!--[if lte IE 8]>
<script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="{{ asset('js/jquery.scrollTo.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/monthly.js')}}"></script>
@yield('scripts')
<!-- //calendar -->
</body>
</html>
