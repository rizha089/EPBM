<div class="sidebar">
            <div class="brand">
                <a href="index.html"><img src="klorofil/img/logoSCB.png" alt="Logo" class="img-responsive logo"></a>
            </div>
            <div class="sidebar-scroll">
                <nav>
                    <ul class="nav">
                        <li><a href="{{route('dashboard')}}" {{Route::is('dashboard')?'class=active':''}}><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                        <li><a href="{{route('elements')}}" {{Route::is('elements')?'class=active':''}}><i class="lnr lnr-code"></i> <span>EPBM Pengajar</span></a></li>
                        <li><a href="{{route('profile')}}" {{Route::is('profile')?'class=active':''}}>Profile</a></li>
                        <li><a href="{{route('login')}}" {{Route::is('login')?'class=active':''}}>Login</a></li>
                        <li><a href="{{route('register')}}" {{Route::is('login')?'class=active':''}}>Register</a></li>
                    </ul>
                </nav>
            </div>
        </div>