@extends('index')

@section('title')
    Profile
@endsection

@section('extra-style')

@endsection

@section('content')

@for ($i = 0; $i<3; $i++)
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
                        <img src="/klorofil/img/user-medium.png" class="img-circle" alt="Avatar">
                        <h3 class="name">Nama Guru</h3>
                        <br>
                    </div>
                    <div class="profile-stat">
                        <div class="row">
                            <div class="col-md-4 stat-item">
                                45 <span>Projects</span>
                            </div>
                            <div class="col-md-4 stat-item">
                                15 <span>Awards</span>
                            </div>
                            <div class="col-md-4 stat-item">
                                2174 <span>Points</span>
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
                            <form action = "" method = "GET">
                                <tr>
                                    <td><a href="#">Spot Media</a></td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="Pertanyaan1" id="blankRadio1" value="1" aria-label="...">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="Pertanyaan1" id="blankRadio1" value="2" aria-label="...">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="Pertanyaan1" id="blankRadio1" value="3" aria-label="...">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="Pertanyaan1" id="blankRadio1" value="4" aria-label="...">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="Pertanyaan1" id="blankRadio1" value="5" aria-label="...">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">E-Commerce Site</a></td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="Pertanyaan2" id="blankRadio1" value="1" aria-label="...">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="Pertanyaan2" id="blankRadio1" value="2" aria-label="...">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="Pertanyaan2" id="blankRadio1" value="3" aria-label="...">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="Pertanyaan2" id="blankRadio1" value="4" aria-label="...">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="Pertanyaan2" id="blankRadio1" value="5" aria-label="...">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">Project 123GO</a></td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="Pertanyaan3" id="blankRadio1" value="1" aria-label="...">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="Pertanyaan3" id="blankRadio1" value="2" aria-label="...">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="Pertanyaan3" id="blankRadio1" value="3" aria-label="...">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="Pertanyaan3" id="blankRadio1" value="4" aria-label="...">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="Pertanyaan3" id="blankRadio1" value="5" aria-label="...">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">Wordpress Theme</a></td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="Pertanyaan4" id="blankRadio1" value="1" aria-label="...">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="Pertanyaan4" id="blankRadio1" value="2" aria-label="...">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="Pertanyaan4" id="blankRadio1" value="3" aria-label="...">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="Pertanyaan4" id="blankRadio1" value="4" aria-label="...">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="Pertanyaan4" id="blankRadio1" value="5" aria-label="...">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="#">Project 123GO</a></td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="Pertanyaan5" id="blankRadio1" value="1" aria-label="...">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="Pertanyaan5" id="blankRadio1" value="2" aria-label="...">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="Pertanyaan5" id="blankRadio1" value="3" aria-label="...">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="Pertanyaan5" id="blankRadio1" value="4" aria-label="...">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input position-static" type="radio" name="Pertanyaan5" id="blankRadio1" value="5" aria-label="...">
                                        </div>
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

@endfor
@endsection


@section('extra-script')

@endsection