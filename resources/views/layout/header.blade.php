<!--header start-->
<header class="header fixed-top clearfix">
    <!--logo start-->
    <div class="brand">
        <a href="index.html" class="logo">
            <img src="images/dashboard-logo2.png" width="170px">
        </a>
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars"></div>
        </div>
    </div>
    <div class="nav notify-row " id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu center-block">
            <!-- settings start -->

            <!-- settings end -->
            <!-- inbox dropdown start-->
            <li id="header_inbox_bar" class="dropdown">
                <div class="row">
                    <div class="col-md-4">
                        <div class="col-md-3">
                            <h3 class="font-color-header" style="font-size:25px;">
                                <i class="fa fa-btc"></i>
                            </h3>
                        </div>
                        <div class="col-md-9">
                            <p class="font-color-header" style="font-size:10px;">TRIMESTRE</p>
                            <h4 class="font-color-header">0.00000580</h4>
                        </div>
                    </div>
                    <div class="col-md-4">

                        <p class="font-color-header" style="font-size:10px;">ULTIMO MES</p>
                        <h4 class="font-color-header">0.00000580</h4>

                    </div>
                    <div class="col-md-4">
                        <p class="font-color-header" style="font-size:10px;">ESTA SEMANA</p>
                        <h4 class="font-color-header">0.00000580</h4>
                    </div>
                </div>
            </li>
            <!-- inbox dropdown end -->
            <!-- notification dropdown start-->
            <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
    </div>


    <div class="top-nav clearfix">
        <!--search & user info start-->
        <ul class="nav pull-right top-menu">
            <!-- user login dropdown start-->
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <img alt="" src="images/basicM.png">
                    <span class="username font-color1">Johancaruci</span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu extended logout">
                    <li><a href="#"><i class=" fa fa-suitcase .icon-color"></i>Perfil</a></li>
                    <li><a href="#"><i class="fa fa-cog .icon-color"></i> Configuración</a></li>
                    <li><a href="{{ route('auth.logout') }}"><i class="fa fa-key .icon-color"></i>Cerrar Sesión</a>
                    </li>
                </ul>
            </li>
            <!-- user login dropdown end -->

        </ul>
        <!--search & user info end-->
    </div>
</header>
<!--header end-->