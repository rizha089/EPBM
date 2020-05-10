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
                
                @foreach ($mata_pelajaran_filled as $i)  {{-- Ini untuk udh keisi --}}
                    <div class="row-md-3">
                        
                            <div class="metric" style="color:green">
                                <p>
                                    <span class="title">{{$i -> nama_matpel}}</span>
                                </p>
                            </div>
                        
                    </div>
                @endforeach

                @foreach ($mata_pelajaran_unfilled as $i) {{-- Ini untuk belum keisi --}}
                    <div class="row-md-3">
                        <a href="/epbm/isi/{{$i->id}}" style="color: blue">
                            <div class="metric">
                                <p>
                                    <span class="title">{{$i -> nama_matpel}}</span>
                                </p>
                            </div>
                        </a>
                    </div>
                @endforeach





            
                
            </div> 
        </div>
    </div>
</div>

@endsection


@section('extra-script')

@endsection