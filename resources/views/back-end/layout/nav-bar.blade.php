<nav class="nav">

    <div class="dropdown">
        <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
            <span class="logged-name hidden-md-down">{{Auth::user()->name}}</span>
            <img src="{{url(Auth::user()->image)}}" class="wd-32 rounded-circle" alt="">
            <span class="square-10 bg-success"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-header wd-250">
            <div class="tx-center">
                <a href=""><img src="{{url(Auth::user()->image)}}" class="wd-80 rounded-circle" alt=""></a>
                <h6 class="logged-fullname">{{Auth::user()->name}}</h6>
                <p>{{Auth::user()->email}}</p>
            </div>
            <hr>
            <ul class="list-unstyled user-profile-nav">
                <li><a href="{{route('Users.edit',Auth::user()->id)}}"><i class="icon ion-ios-person"></i> Edit Profile</a></li>
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="icon ion-power"></i> {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                 </li>
            </ul>
        </div><!-- dropdown-menu -->
    </div><!-- dropdown -->
</nav>
