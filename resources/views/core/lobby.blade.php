@extends('template')
@section('styles')

@endsection
@section ('content')
    <section class="wrapper">
        <!-- //market-->
        <div class="nav">
            <div class="row">
                <div id="routeFillTopBanner" data-route="{{ route('user.fillTopBanner') }}"></div>
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 ">
                        <div class="panel-header market-update-block ">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="row">
                                        <div class="col-md-8">
                                                <span style="font-size:50px" class="font-color-header text-center"><i
                                                            class="fa fa-star"></i>  0/3
                                               </span>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <p class="center-block">ADVANCED</p>
                                            </div>
                                            <div class="row">
                                                <p class="center-block advanceValor" ></p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class=" col-md-4">
                                    <div class="center-block">
                                        <img class="center-block" src="images/basicM.png" width="80px">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="col-md-3">
                                        <h3 style="font-size:50px;">
                                            <i class="fa fa-dollar"></i>
                                        </h3>
                                    </div>
                                    <div class="col-md-9">
                                        <p style="font-size:12px;" class="">Dolares</p>
                                        <h4 class="montoDolares"></h4>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="col-md-3">
                                        <h3 style="font-size:50px;">
                                            <i class="fa fa-btc"></i>
                                        </h3>
                                    </div>
                                    <div class="col-md-9">
                                        <p class="" style="font-size:10px;">BITCOIN</p>
                                        <h4 class="montoBitCoin"></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="market-updates">
            <div class="col-md-3 market-update-gd">
                <div>
                    <div class="panel panel-blue">
                        <div>
                            <div class="header-color" style="background-color: #dfbc60;">
                                <div class="row center-block">
                                    <div class="col-md-2 center-block">
                                        <span class="fa fa-users text-center" style=""></span>
                                    </div>
                                    <div class="center-block col-md-10 ">
                                        <span class="text-center" style="font-size:10px;">ADVANCED BITCOINER</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="market-update-block clr-block-5">
                            <div class="row ">
                                <div class="col-md-4">
                                    <h3 class="text-center">0</h3>
                                    <p class="text-center font-panel1">Referidos</p>
                                </div>
                                <div class="col-md-4">
                                    <img class="center-block" src="images/rango1.png" width="50px">
                                </div>
                                <div class="col-md-4">
                                    <h3 class="text-center">0/1</h3>
                                    <p class="text-center font-panel1">progreso</p>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="progress">
                                        <div data-percentage="0%" style="width: 60%;"
                                             class="progress-bar progress-bar-info" role="progressbar"
                                             aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
            <div class="col-md-3 market-update-gd">
                <div class="">
                    <div>
                        <div class="panel panel-blue">
                            <div>
                                <div class="header-color" style="background-color: #dfbc60;">
                                    <div class="row center-block">
                                        <div class="col-md-2">
                                            <span class="fa fa-users text-center" style=""></span>
                                        </div>
                                        <div class="col-md-10">
                                                <span class="text-center "
                                                      style="font-size:10px;">ADVANCED BITCOINER</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="market-update-block clr-block-5">
                                <div class="row ">
                                    <div class="col-md-4">
                                        <h3 class="text-center">0</h3>
                                        <p class="text-center font-panel1">Referidos</p>
                                    </div>
                                    <div class="col-md-4">
                                        <img class="center-block" src="images/rango2.png" width="50px">
                                    </div>
                                    <div class="col-md-4">
                                        <h3 class="text-center">0/1</h3>
                                        <p class="text-center font-panel1">progreso</p>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="progress">
                                            <div data-percentage="0%" style="width: 50%;"
                                                 class="progress-bar progress-bar-success" role="progressbar"
                                                 aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-3 market-update-gd">
                <div class="">
                    <div>
                        <div class="panel panel-blue">
                            <div>
                                <div class="header-color" style="background-color: #dfbc60;">
                                    <div class="row center-block">
                                        <div class="col-md-2">
                                            <span class="fa fa-users text-center" style=""></span>
                                        </div>
                                        <div class="col-md-10">
                                                <span class="text-center"
                                                      style="font-size:10px;">ADVANCED BITCOINER</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="market-update-block clr-block-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h3 class="text-center">0</h3>
                                        <p class="text-center font-panel1">Referidos</p>
                                    </div>
                                    <div class="col-md-4 ">
                                        <img class="center-block" src="images/rango2.png" width="50px">
                                    </div>
                                    <div class="col-md-4">
                                        <h3 class="text-center">0/1</h3>
                                        <p class="text-center font-panel1">progreso</p>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="progress">
                                            <div data-percentage="0%" style="width: 40%;"
                                                 class="progress-bar progress-bar-warning" role="progressbar"
                                                 aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="col-md-3 market-update-gd">
                <div class="">
                    <div>
                        <div class="panel panel-blue">
                            <div>
                                <div class="header-color" style="background-color: #dfbc60;">
                                    <div class="row center-block">
                                        <div class="col-md-2">
                                            <span class="fa fa-users text-center" style=""></span>
                                        </div>
                                        <div class="col-md-10">
                                                <span class="text-center"
                                                      style="font-size:10px;">ADVANCED BITCOINER</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="market-update-block clr-block-5">
                                <div class="  ">

                                    <div class="row">
                                        <div class="col-md-4">
                                            <h3 class="text-center">0</h3>
                                            <p class="text-center font-panel1">Referidos</p>
                                        </div>
                                        <div class="col-md-4">
                                            <img class="center-block" src="images/rango2.png" width="50px">
                                        </div>
                                        <div class="col-md-4">
                                            <h3 class="text-center">0/1</h3>
                                            <p class="text-center font-panel1">progreso</p>
                                        </div>
                                    </div>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="progress">
                                                <div data-percentage="0%" style="width: 60%;"
                                                     class="progress-bar progress-bar-info" role="progressbar"
                                                     aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>


            <div class="clearfix"></div>
        </div>
        <!-- //market-->
        <div class="row">
            <div class="panel-body">
                <div class="col-md-6 w3ls-graph">
                    <!--agileinfo-grap-->
                    <div class="agileinfo-grap">
                        <div class="agileits-box">
                            <header class="agileits-box-header clearfix">
                                <div class="toolbar">
                                    <span><i class="fa fa-user"></i></span><span>Bono Generacional</span>
                                </div>
                            </header>
                            <div class="agileits-box-body clearfix">
                                <div class="table-responsive">
                                    <table class="table dataTableGeneric"
                                    >
                                        <thead>
                                        <tr>
                                            <th data-breakpoints="xs">Generación</th>
                                            <th>Básico</th>
                                            <th>Businet</th>
                                            <th data-breakpoints="xs">Trader</th>
                                            <th data-breakpoints="xs sm md" data-title="DOB">Trader Senior</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr data-expanded="true">
                                            <td>1</td>
                                            <td>Dennise</td>
                                            <td>Fuhrman</td>
                                            <td>High School History Teacher</td>

                                            <td>July 25th 1960</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Elodia</td>
                                            <td>Weisz</td>
                                            <td>Wallpaperer Helper</td>

                                            <td>March 30th 1982</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Raeann</td>
                                            <td>Haner</td>
                                            <td>Internal Medicine Nurse Practitioner</td>

                                            <td>February 26th 1966</td>
                                        </tr>

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--//agileinfo-grap-->

                </div>
                <div class="col-md-6 w3ls-graph">
                    <!--agileinfo-grap-->
                    <div class="agileinfo-grap">
                        <div class="agileits-box">
                            <header class="agileits-box-header clearfix">


                                <div class="toolbar">
                                    <span><i class="fa fa-user"></i></span><span>Estadistica de Trading Automatizado</span>
                                </div>
                            </header>
                            <div class="agileits-box-body clearfix">
                                <div class="table-responsive">
                                    <table class="table dataTableGeneric">
                                        <thead>
                                        <tr>
                                            <th data-breakpoints="xs">Generación</th>
                                            <th>Utilidad BTC</th>
                                            <th>Valor XYZ</th>
                                            <th data-breakpoints="xs">Valor XYZ</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr data-expanded="true">
                                            <td>1</td>
                                            <td>Dennise</td>
                                            <td>Fuhrman</td>
                                            <td>High School History Teacher</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Elodia</td>
                                            <td>Weisz</td>
                                            <td>Wallpaperer Helper</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Raeann</td>
                                            <td>Haner</td>
                                            <td>Internal Medicine Nurse Practitioner</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--//agileinfo-grap-->
                </div>
            </div>
        </div>
        <div class="market-updates">
            <div class=" col-md-3 market-update-gd ">
                <div class=" panel-final market-update-block clr-block-1">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-lg-6 col-md-6">
                            <img src="images/rango1.png" width="90x">
                        </div>
                        <div class="col-md-6">
                            <p class="size-font-panel text-center" style="font-size: 13px;">TRADING</p>
                            <p class="size-font-panel text-center" style="font-size: 10px;">AUTOMATIZADO</p>
                            <h3 class="text-center">0.007</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class=" col-md-3 market-update-gd">
                <div class="panel-final  market-update-block clr-block-2">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="images/businetM.png" width="90px">
                        </div>
                        <div class="col-md-6">
                            <p class="size-font-panel text-center" style="font-size: 13px;">UTILIDAD</p>
                            <p class="size-font-panel text-center" style="font-size: 13px;">DE MATRIZ</p>
                            <h3 class="text-center">0.007</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-3 market-update-gd">
                <div class="panel-final market-update-block clr-block-3">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="images/tradeM.png" width="90px">
                        </div>
                        <div class="col-md-6">
                            <p class="size-font-panel text-center" style="font-size: 13px;">BONO DE</p>
                            <p class="size-font-panel text-center" style="font-size: 12px;">GENERACIONAL</p>
                            <h3 class="text-center">0.007</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="col-md-3 market-update-gd">
                <div class="panel-final market-update-block clr-block-4">
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-lg-6 col-md-6">
                            <img src="images/seniorM.png" width="90px">
                        </div>
                        <div class="col-md-6">
                            <p class="size-font-panel text-center" style="font-size: 13px;">AVANCE</p>
                            <p class="size-font-panel text-center" style="font-size: 13px;">DE RANGO</p>
                            <h3 class="text-center">0.007</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>

    </section>

@endsection
@section('scripts')
    <script>
        var route = $('#routeFillTopBanner').data('route');
        console.log(route)
        $.ajax({
            url: route,
            dataType: 'json'
        }).done(function (response) {
            console.log(response)
            console.log(response.data)
            $('.advanceValor').append(response.data.value)
            $('.montoDolares').append(response.data.biz_saldo_usd)
            $('.montoBitCoin').append(response.data.biz_saldo_btc)
        }).fail(function () {
            var holo = 2234455;
            console.log(holo)
        });
    </script>
@endsection