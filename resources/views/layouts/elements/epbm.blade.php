@extends('index')

@section('title')
    Profile
@endsection

@section('extra-style')

@endsection

@section('content')
<div class="container-fluid">
    <div class="panel panel-profile">
        <div class="clearfix">
            <!-- LEFT COLUMN -->
            <div class="profile-left">
                <!-- PROFILE HEADER -->
                <div class="profile-header">
                    <div class="overlay"></div>
                    <div class="profile-main">
                        <img src="klorofil/img/user-medium.png" class="img-circle" alt="Avatar">
                        <h3 class="name">Samuel Gold</h3>
                        <span class="online-status status-available">Available</span>
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
                <!-- PROFILE DETAIL -->
                <div class="profile-detail">
                    <div class="profile-info">
                        <h4 class="heading">Basic Info</h4>
                        <ul class="list-unstyled list-justify">
                            <li>Birthdate <span>24 Aug, 2016</span></li>
                            <li>Mobile <span>(124) 823409234</span></li>
                            <li>Email <span>samuel@mydomain.com</span></li>
                            <li>Website <span><a href="https://www.themeineed.com">www.themeineed.com</a></span></li>
                        </ul>
                    </div>
                </div>
                <!-- END PROFILE DETAIL -->
            </div>
            <!-- END LEFT COLUMN -->
            <!-- RIGHT COLUMN -->
            <div class="profile-right">
                    <div class="table-responsive">
                        <table class="table project-table">
                            <thead>
                                <tr>
                                    <th>Aspek</th>
                                    <th>Progress</th>
                                    <th>Leader</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#">Spot Media</a></td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                                <span>60% Complete</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td><img src="klorofil/img/user2.png" alt="Avatar" class="avatar img-circle"> <a href="#">Michael</a></td>
                                    <td><span class="label label-success">ACTIVE</span></td>
                                </tr>
                                <tr>
                                    <td><a href="#">E-Commerce Site</a></td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;">
                                                <span>33% Complete</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td><img src="klorofil/img/user1.png" alt="Avatar" class="avatar img-circle"> <a href="#">Antonius</a></td>
                                    <td><span class="label label-warning">PENDING</span></td>
                                </tr>
                                <tr>
                                    <td><a href="#">Project 123GO</a></td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;">
                                                <span>68% Complete</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td><img src="klorofil/img/user1.png" alt="Avatar" class="avatar img-circle"> <a href="#">Antonius</a></td>
                                    <td><span class="label label-success">ACTIVE</span></td>
                                </tr>
                                <tr>
                                    <td><a href="#">Wordpress Theme</a></td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                                <span>75%</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td><img src="klorofil/img/user2.png" alt="Avatar" class="avatar img-circle"> <a href="#">Michael</a></td>
                                    <td><span class="label label-success">ACTIVE</span></td>
                                </tr>
                                <tr>
                                    <td><a href="#">Project 123GO</a></td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                                <span>100%</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td><img src="klorofil/img/user1.png" alt="Avatar" class="avatar img-circle" /> <a href="#">Antonius</a></td>
                                    <td><span class="label label-default">CLOSED</span></td>
                                </tr>
                                <tr>
                                    <td><a href="#">Redesign Landing Page</a></td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                                <span>100%</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td><img src="klorofil/img/user5.png" alt="Avatar" class="avatar img-circle" /> <a href="#">Jason</a></td>
                                    <td><span class="label label-default">CLOSED</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                <!-- END AWARDS -->
            </div>
            <!-- END RIGHT COLUMN -->
        </div>
    </div>
    
</div>


@endsection


@section('extra-script')

@endsection