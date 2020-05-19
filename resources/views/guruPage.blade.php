<!doctype html>
<html lang="en">

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
                        <br>
                        <p class="h4"><b>Mata Pelajaran Yang Diampu:</b></p>
                        <ul>
                            @foreach ($matpel as $m)
                                <li><h4>{{$m}}</h4></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="panel panel-headline">
                    @for ($i = 0; $i < count($matpel); $i++)
                    <div class="panel-heading">
                        <h3 class="panel-title">Hasil Evaluasi Untuk Mata Pelajaran:</h3>
                        <h3 class="panel-title"><b>{{$matpel[$i]}}</b></h3>
                    </div>
                        @for($j = 0; $j < count($pertanyaan); $j++)
                            <div class="panel-body">
                                <div class="col">
                                    <p class="h3" style="font-size: 30px;">{{ $pertanyaan[$j] }}</p>
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <td><p class="h3"><b>Nilai</b></p></td>
                                                <th scope="col"><p class="h3"><b>Sangat Kurang Baik</b></p></th>
                                                <th scope="col"><p class="h3"><b>Kurang Baik</b></p></th>
                                                <th scope="col"><p class="h3"><b>Cukup Baik</b></p></th>
                                                <th scope="col"><p class="h3"><b>Baik</b></p></th>
                                                <th scope="col"><p class="h3"><b>Sangat Baik</b></p></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><p class="h3"><b>Jumlah</b></p></td>
                                                @for($k = 0; $k < 5; $k++)
                                                <td><p class="h3">{{$nilai[$i][$j][0][$k]}}</p></td>
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td><p class="h3"><b>Rata-Rata</b></p></td>
                                                <td style="padding-left: 8px"><p class="h3">{{ ((1 * $nilai[$i][$j][0][0]) + (2 * $nilai[$i][$j][0][1]) + (3 * $nilai[$i][$j][0][2]) + (4 * $nilai[$i][$j][0][3]) + (5 * $nilai[$i][$j][0][4])) / (100) }}</p></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        @endfor
                    <div class="panel-heading">
                        <h3 class="panel-title">Rata-Rata Keseluruhan: {{$rata[$i]}}</h3>
                    </div>
                    <br><br><br><br>
                    @endfor
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
