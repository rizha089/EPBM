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
        <div class="sidebar">
            <div class="brand">
                <a href="/admin"><img src="/klorofil/img/logoSCB.png" alt="Logo" class="img-responsive logo"></a>
            </div>
            <div class="sidebar-scroll">
                <nav>
                    <ul class="nav">

                        <li><a href="{{route('admin')}}" {{Route::is('admin')?'class=active':''}}><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                        <li><a href="{{route('daftarsiswa')}}" {{Route::is('daftarsiswa')?'class=active':''}}><i class="lnr lnr-code"></i> <span>Daftar Siswa</span></a></li>
                        <li><a href="{{route('daftarguru')}}" {{Route::is('daftarguru')?'class=active':''}}><i class="lnr lnr-user"></i> <span>Daftar Guru</span></a></li>
                        <li><a href="{{route('daftarmatpel')}}" {{Route::is('daftarmatpel')?'class=active':''}}><i class="lnr lnr-user"></i> <span>Daftar Mata Pelajaran</span></a></li>
                        <li><a href="{{route('export')}}" {{Route::is('export')?'class=active':''}}><i class="lnr lnr-user"></i> <span>Export Excel</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <!-- END SIDEBAR -->
        <!-- MAIN -->
        <div class="main">
            <!-- NAVBAR -->

            <!-- END NAVBAR -->
            <!-- MAIN CONTENT -->
            <div class="main-content">
                @yield('content')

            <div class="container-fluid">
                <!-- OVERVIEW -->
                <div class="panel panel-headline">
                    <div class="panel-heading">
                        <h3 class="panel-title">DAFTAR GURU</h3>

                </div>

                <body>
        <div class="container-fluid">
            <div class="card mt-5">
                <div class="card-body">
                    <!-- <a href="/pegawai/tambah" class="btn btn-primary">Input Guru</a> -->
                    <br/>
                    <br/>
                    <table class='table table-bordered'>
			<thead>
				<tr>
					<th>No</th>
					<th>ID Siswa</th>
					<th>ID Guru</th>
					<th>ID Matpel</th>
                    <th>Soal 1</th>
                    <th>Soal 2</th>
                    <th>Soal 3</th>
                    <th>Soal 4</th>
                    <th>Soal 5</th>
                    <th>Soal 6</th>
                    <th>Soal 7</th>
                    <th>Soal 8</th>
                    <th>Soal 9</th>
                    <th>Rata-rata</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1 @endphp
				@foreach($rating as $s)
				<tr>
					<td>{{ $i++ }}</td>
					<td>{{$s->id_siswa}}</td>
					<td>{{$s->id_guru}}</td>
					<td>{{$s->id_matpel}}</td>
                    <td>{{$s->pertanyaan1}}</td>
                    <td>{{$s->pertanyaan2}}</td>
                    <td>{{$s->pertanyaan3}}</td>
                    <td>{{$s->pertanyaan4}}</td>
                    <td>{{$s->pertanyaan5}}</td>
                    <td>{{$s->pertanyaan6}}</td>
                    <td>{{$s->pertanyaan7}}</td>
                    <td>{{$s->pertanyaan8}}</td>
                    <td>{{$s->pertanyaan9}}</td>
                    <td>{{$s->averageRate}}</td>
                </tr>
				@endforeach
			</tbody>
		</table>
                </div>
            </div>
        </div>
    </body>

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
