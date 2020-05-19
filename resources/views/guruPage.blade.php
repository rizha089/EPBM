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
                    </div>
                    <div class="panel-body">
                        <div class="col">
                            <div class="col-md-3">
                                <div class="metric">
                                    <p>
                                        <span class="number"> <font color="black"> ID Guru </font> </span>
                                        <span class="title"> <font color="black"> {{ Auth::user()->id }} </font> </span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="metric">
                                    <p>
                                        <span class="number"> <font color="black">Mata Pelajaran Yang Diampu</font> </span>
                                    <span class="title"><font color="black">{{ count($matpel) }}</font> </span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="metric">
                                    <p>
                                        <span class="number"> <font color="black"> Jumlah Pertanyaan </font> </span>
                                        <span class="title"> <font color="black"> {{ count($pertanyaan) }} </font> </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-headline">
                    @for ($i = 0; $i < 1; $i++)
                    <div class="panel-heading">
                        <h3 class="panel-title">Hasil Evaluasi Untuk Mata Pelajaran:</h3>
                        <h3 class="panel-title"><b>{{$matpel[$i]}}</b></h3>
                    </div>
                        @for($j = 0; $j < count($pertanyaan); $j++)
                            <div class="panel-body">
                                <div class="col">
                                    <div class="col-md-3">
                                        <div class="metric">
                                            <p>Pertanyaan: {{ $pertanyaan[$j] }}</p>
                                            <svg></svg>
                                            <script src="https://d3js.org/d3.v4.min.js"></script>
                                            <script>
                                                const margin = 60;
                                                const width = 300 - 2 * margin;
                                                const height = 200 - 2 * margin;
                                                // var svgWidth = 500;
                                                // var svgHeight = 300;

                                                var svg = d3.select('svg')
                                                    .attr("width", 300)
                                                    .attr("height", 200)
                                                    // .attr("class", "bar-chart");

                                                const chart = svg.append('g')
                                                    .attr('transform', `translate(${margin}, ${margin})`);

                                                const yScale = d3.scaleLinear()
                                                    .range([height, 0])
                                                    .domain([0, 100])

                                                const xScale = d3.scaleBand()
                                                    .range([0, width])
                                                    .domain(['N1', 'N2', 'N3', 'N4', 'N5'])
                                                    .padding(0.2)

                                                var list = <?php echo json_encode($nilai[$i][$j][0]) ?>;

                                                var pertanyaans = [
                                                    { nilai: "N1", jumlah: list[0]},
                                                    { nilai: "N2", jumlah: list[1]},
                                                    { nilai: "N3", jumlah: list[2]},
                                                    { nilai: "N4", jumlah: list[3]},
                                                    { nilai: "N5", jumlah: list[4]},
                                                ];

                                                chart.append('g')
                                                    .call(d3.axisLeft(yScale));

                                                chart.append('g')
                                                    .attr('transform', `translate(0, ${height})`)
                                                    .call(d3.axisBottom(xScale));

                                                chart.selectAll()
                                                    .data(pertanyaans)
                                                    .enter()
                                                    .append("rect")
                                                    .attr("x", (s) => xScale(s.nilai))
                                                    .attr("y", (s) => yScale(s.jumlah))
                                                    .attr('height', (s) => height - yScale(s.jumlah))
                                                    .attr('width', xScale.bandwidth())
                                                    .style('fill', '#045c3c')

                                                svg.append('text')
                                                    .attr('x', -(height / 2) - margin)
                                                    .attr('y', margin / 2.4)
                                                    .attr('transform', 'rotate(-90)')
                                                    .attr('text-anchor', 'middle')
                                                    .text('Jumlah')

                                                svg.append('text')
                                                    .attr('x', width / 2 + margin)
                                                    .attr('y', 40)
                                                    .attr('text-anchor', 'middle')
                                                    .text('Nilai yang didapatkan')
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
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
