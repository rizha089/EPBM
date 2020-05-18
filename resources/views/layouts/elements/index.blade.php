@extends('index')

@section('title')
    Dashboard
@endsection

@section('extra-style')

@endsection

@section('content')
<style>

<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
span{
    font-family: 'Montserrat', sans-serif;
}
</style>

#belumterisi {
  border: 1px solid gray;
  border-radius: 5px;
  background: #ffc107;
  padding: 15px;
  width: 1150px;
  height: 95px;
}

#terisi {
  border: 1px solid gray;
  border-radius: 5px;
  background: #28a745;
  padding: 15px;
  width: 1150px;
  height: 95px;
}

</style>

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
                        <a style="color: black">
                                <p id="terisi">
                                <span style="font-size: 90%"> <font color="black"> Mata Pelajaran </font> </span>
                                <br><span style="font-size: 230%">{{$i -> nama_matpel}}</span></br>
                                </p>
                        </a>
                    </div>
                @endforeach

                @foreach ($mata_pelajaran_unfilled as $i) {{-- Ini untuk belum keisi --}}
                    <div class="row-md-3">
                        <a href="/epbm/isi/{{$i->id}}" style="color: black">
                                <p id="belumterisi">
                                <span style="font-size: 90%"> <font color="black"> Mata Pelajaran </font> </span>
                                <br><span style="font-size: 230%">{{$i -> nama_matpel}}</span></br>
                                </p>
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
