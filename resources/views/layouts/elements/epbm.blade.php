@extends('index')

@section('title')
    Profile
@endsection

@section('extra-style')

@endsection

@section('content')

@foreach ($matpel_guru as $g)
    <div class="container-fluid">
        <div class="panel panel-profile">
            <div class="clearfix">
                <!-- LEFT COLUMN -->
                <div class="profile-left">
                    <!-- PROFILE HEADER -->
                    <br>
                    <div class="profile-header">
                        <div class="overlay"></div>
                        <div class="profile-main">
                            {{-- <img src="/klorofil/img/user-medium.png" class="img-circle" alt="Avatar"> --}}
                            <h3 class="name">{{$g->guru->nama}}</h3>
                            <br>
                        </div>
                        <div class="profile-stat">
                            <div class="row">
                                <div class="col-md-6 stat-item">
                                {{$g->guru->nip}} <span>NIP</span>
                                </div>
                                <div class="col-md-6 stat-item">
                                    30 <span>Umur</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PROFILE HEADER -->
                </div>
                <!-- END LEFT COLUMN -->

                <!-- RIGHT COLUMN -->
                <div class="profile-right">
                        <div class="table-responsive">
                            <table class="table project-table">
                                <thead>
                                    <tr>
                                        <th>Aspek-aspek</th>
                                        <th>Sangat Buruk</th>
                                        <th>Buruk</th>
                                        <th>Cukup baik</th>
                                        <th>Baik</th>
                                        <th>Sangat baik</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <form action = "/rating/mata-pelajaran/guru/set-rating" method = "POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id_siswa" value="{{ Auth::user()->id}}">
                                    <input type="hidden" name="id_guru" value=" {{ $g->guru->id }} ">
                                    <input type="hidden" name="id_matpel" value=" {{$g->mata_pelajaran->id}} ">

                                    @foreach ($tanya as $t)
                                    <tr>
                                        <td>{{$t->list_pertanyaan}}</td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="radio" name="pertanyaan{{$t->id}}" id="{{$t->id}}" value="1" aria-label="..." required>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="radio" name="pertanyaan{{$t->id}}" id="{{$t->id}}" value="2" aria-label="...">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="radio" name="pertanyaan{{$t->id}}" id="{{$t->id}}" value="3" aria-label="...">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="radio" name="pertanyaan{{$t->id}}" id="{{$t->id}}" value="4" aria-label="...">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input position-static" type="radio" name="pertanyaan{{$t->id}}" id="{{$t->id}}" value="5" aria-label="...">
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach

                                    <tr>
                                        <td colspan="6">
                                            <input type="submit" value="Submit" name="submit" type="Submit">
                                        </td>
                                    </tr>
                                    </form>
                                </tbody>
                            </table>
                        </div>
                    <!-- END AWARDS -->
                </div>
                <!-- END RIGHT COLUMN -->
            </div>
        </div>

    </div>
@endforeach
@endsection


@section('extra-script')

@endsection
