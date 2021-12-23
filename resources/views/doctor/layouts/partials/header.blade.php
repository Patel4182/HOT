 <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " style="position:fixed;color:black;">
        <div class="container-fluid" >
         
          <div class="collapse navbar-collapse justify-content-end" >
           
            <ul class="navbar-nav" >
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <h4><i class="fa fa-user"></i><b> {{Auth::user()->name}}</b></h4>
                  
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="{{route('docprofile')}}">Profile</a>
                  <a class="dropdown-item" href="{{route('logout')}}">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>