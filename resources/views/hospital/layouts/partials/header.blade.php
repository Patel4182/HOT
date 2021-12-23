<div class="header" style="background-color:#ff6666;">
			<div class="header-left">
				<a href="index-2.html" class="logo">
					<img src="{{asset('hospital/assets/img/logo.png')}}" width="35" height="35" alt=""> <span>Hospital</span>
				</a>
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        
						<span>{{Auth::user()->name}}</span>
                    </a>
					<div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('profile')}}">My Profile</a>
        
						<a class="dropdown-item" href="{{route('logout')}}">Logout</a>
					</div>
                </li>
            </ul>
        </div>