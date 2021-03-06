<!doctype html>
<html lang="en">
<style>
#rcorners1 {
  border-radius: 5px 30px;
  background: #228B22;
  padding: 15px;
  width: 230px;
  height: 120px;
}

#rcorners2 {
  border-radius: 5px 30px;
  background: #BB0000;
  padding: 15px;
  width: 230px;
  height: 120px;
}

#rcorners3 {
  border-radius: 5px 30px;
  background: #ffbf00;
  padding: 15px;
  width: 230px;
  height: 120px;
}

#rcorners4 {
  border-radius: 5px 30px;
  background: #157BCE;
  padding: 15px;
  width: 230px;
  height: 120px;
}

</style>
<head>
    <title>Dashboard | SCB - @yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="apple-touch-icon" sizes="76x76" href="klorofil/img/logoDoang.png">
    <link rel="icon" type="image/png" sizes="96x96" href="klorofil/img/logoDoang.png">

    @section('css')
        <!-- CSS -->
        {{ Html::style('klorofil/css/bootstrap.min.css')}}
        {{ Html::style('klorofil/css/vendor/icon-sets.css')}}
        {{ Html::style('klorofil/css/main.min.css')}}
        {{ Html::style('klorofil/css/demo.css')}}

        @yield('extra-style')

        <!-- GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    @show
</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <!-- SIDEBAR -->
        @include("layouts/partials/sidebar")
        <!-- END SIDEBAR -->
        <!-- MAIN -->
        <div class="main">
            <!-- NAVBAR -->
            @include('layouts/partials/header')
            <!-- END NAVBAR -->
            <!-- MAIN CONTENT -->
            <div class="main-content">
                @yield('content')

            <div class="container-fluid">
                <!-- OVERVIEW -->
                <div class="panel panel-headline">
                    <div class="panel-heading">
                        <h3 class="panel-title">Selamat Datang,</h3>
                    <h3 class="panel-title"><b> {{Auth::user()->nama}} </b></h3>
                    </div>
                    <div class="panel-body">
                        <div class="col">
                            <div class="col-md-3">
                                    <p id="rcorners1">
                                        <span style="font-size: 125%;"> <font color="white"> Hafalan Juz </font> </span>
                                        <br><span style="font-size: 300%;float: right;padding: 0px 20px 15px 0px"> <font color="white"> 5 </font> </span></br>
                                    </p>
                            </div>
                            <div class="col-md-3">
                                    <p id="rcorners2">
                                        <span style="font-size: 125%;"> <font color="white"> Kegiatan Ekskul </font> </span>
                                        <br><span style="font-size: 300%;float: right;padding: 0px 20px 15px 0px"> <font color="white"> 2 </font> </span></br>
                                    </p>
                            </div>
                            <div class="col-md-3">
                                    <p id="rcorners3">
                                        <span style="font-size: 125%;"> <font color="white"> Keuangan </font> </span>
                                        <br><span style="font-size: 200%;float: right;padding: 0px 0px 15px 0px"> <font color="white"> 2.500.000 </font> </span></br>
                                    </p>
                            </div>
                            <div class="col-md-3">
                                    <p id="rcorners4">
                                        <span style="font-size: 125%;"> <font color="white"> Keuangan </font> </span>
                                        <br><span style="font-size: 200%;float: right;padding: 0px 0px 15px 0px"> <font color="white"> 2.500.000 </font> </span></br>
                                    </p>
                            </div>

                    </div>
                </div>
            </div>


            </div>
            <!-- END MAIN CONTENT -->
            <footer>
                @include('layouts/partials/footer')
            </footer>
        </div>
        <!-- END MAIN -->
    </div>
    <!-- END WRAPPER -->

    @section('script')
    <!-- Javascript -->
        {{ Html::script('klorofil/js/jquery/jquery-2.1.0.min.js') }}
        {{ Html::script('klorofil/js/bootstrap/bootstrap.min.js') }}
        {{ Html::script('klorofil/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}
        {{ Html::script('klorofil/js/plugins/jquery-easypiechart/jquery.easypiechart.min.js') }}
        {{ Html::script('klorofil/js/plugins/chartist/chartist.min.js') }}
        {{ Html::script('klorofil/js/klorofil.min.js') }}

        @yield('extra-script')
    @show


</body>

</html>
