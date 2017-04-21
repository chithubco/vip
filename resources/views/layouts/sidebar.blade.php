<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
@if(!Sentinel::guest())
   @if(Sentinel::inRole('user'))
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            @if($user->profile_picture_path == null)
            <div>
               <img class="center-block img-responsive img-thumbnail" src="{{asset('images/avatar.png')}}" alt="profile pix" width="100px" height="100px" style="margin-top:20px;"/>
            </div>
            @else
             <div>
                <img class="center-block img-responsive img-thumbnail" src="{{$user->profile_picture_path}}" alt="profile pix" width="100px" height="100px" style="margin-top:20px;"/>
             </div>
             @endif
             <br/>
              <li class="@yield('dashboard_active')">
                  <a href="{{route('user_dashboard')}}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
              </li>
              <li class="@yield('profile_active')">
                  <a href="{{route('user_profile')}}"><i class="fa fa-user"></i> Update Profile</a>
              </li>
              <li class="@yield('express_interest')">
                  <a href="{{route('express_interest')}}"><i class="fa fa-folder"></i>Expression of Interest </a>
              </li>
              <li class="@yield('registration')">
                  <a href="{{route('registration')}}"><i class="fa fa-pencil-square-o"></i>VIP Registration </a>
              </li>
          </ul>
      </div>
      @elseif(Sentinel::inRole('admin'))
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
          @if($user->profile_picture_path == null)
          <div>
             <img class="center-block img-responsive img-thumbnail" src="{{asset('images/avatar.png')}}" alt="profile pix" width="100px" height="100px" style="margin-top:20px;"/>
          </div>
          @else
           <div>
              <img class="center-block img-responsive img-thumbnail" src="{{$user->profile_picture_path}}" alt="profile pix" width="100px" height="100px" style="margin-top:20px;"/>
           </div>
           @endif
           <br/>
            <li class="@yield('dashboard_active')">
                <a href="{{route('admin_dashboard')}}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>
            <li class="@yield('manage_users_active')">
                <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-user" aria-hidden="true"></i> Manage Users <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="demo" class="collapse">
                    <li>
                        <a href="{{route('all_users')}}">View Users</a>
                    </li>
                    <li>
                        <a href="{{route('users_interest')}}">Expression Of interest</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
  @endif
@endif
