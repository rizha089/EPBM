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
            <h3 class="panel-title">Pilih Mata Pelajaran</h3>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="row-md-3">
                    <div class="metric">
                        <p>Mata Pelajaran</p>
                        <p>
                            <span class="title">Matematika</span>
                        </p>
                    </div>
                </div>
                <div class="row-md-3">
                    <div class="metric">
                        <p>Mata Pelajaran</p>
                        <p>
                            <span class="title">Bahasa Indonesia</span>
                        </p>
                    </div>
                </div>
                <div class="row-md-3">
                    <div class="metric">
                        <p>Mata Pelajaran</p>
                        <p>
                            <span class="title">Ilmu Pengetahuan Alam</span>
                        </p>
                    </div>
                </div>
                <div class="row-md-3">
                    <div class="metric">
                        <p>Mata Pelajaran</p>
                        <p>
                            <span class="title">Ilmu Pengetahuan Sosial</span>
                        </p>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection


@section('extra-script')

@endsection