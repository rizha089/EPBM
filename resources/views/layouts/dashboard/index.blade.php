@extends('index')

@section('title')
    Dashboard
@endsection

@section('extra-style')

@endsection

@section('content')
<div class="container-fluid">
    <!-- OVERVIEW -->
    <div class="panel panel-headline">
        <div class="panel-heading">
            <h3 class="panel-title">Selamat Datang,</h3>
           <h3 class="panel-title"><b> Muhammad Adam </b></h3> 
        </div>
        <div class="panel-body">
            <div class="col">
                <div class="col-md-3">
                    <div class="metric">
                        <p>
                            <span class="number"> <font color="white"> Hafalan Juz </font> </span>
                            <span class="title"> <font color="white"> 5 </font> </span>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="metric">
                        <p>
                            <span class="number"> <font color="white">Kegiatan Ekskul </font> </span>
                            <span class="title"><font color="white">2 </font> </span>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="metric">
                        <p>
                            <span class="number"> <font color="white"> Keuangan </font> </span>
                            <span class="title"> <font color="white"> 2.500.000 </font> </span>
                        </p>
                    </div>
                </div>
                
        </div>
    </div>
</div>
@endsection


@section('extra-script')

@endsection