<ul class="nav">
    <li class="nav-item  {{ Request::segment(1) === 'admin' ? 'active' : null }} ">
        <a class="nav-link" href="{{URL::to('admin')}}">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
        </a>
    </li>
    @can('admin',Auth::user())
    <li class="nav-item {{ is_active('Users')}} ">
        <a class="nav-link" href="{{URL::to('admin/Users')}}">
            <i class="material-icons">person</i>
            <p>Users</p>
        </a>
    </li>
@endcan
   @can('trips',Auth::user())
    <li class="nav-item  {{ is_active('Trips')}} ">
        <a class="nav-link" href="{{URL::to('admin/Trips')}}">
            <i class="material-icons">content_paste</i>
            <p>Trips</p>
        </a>
    </li>
    @endcan

    <li class="nav-item  {{ is_active('Hotels')}} ">
        <a class="nav-link" href="{{URL::to('admin/Hotels')}}">
            <i class="material-icons">location_ons</i>
            <p>Hotels</p>
        </a>
    </li>

    @can('categories',Auth::user())
    <li class="nav-item {{  is_active('Categories') }}  ">
        <a class="nav-link" href="{{URL::to('admin/Categories')}}">
            <i class="material-icons">library_books</i>
            <p>Categories</p>
        </a>
    </li>
@endcan

</ul>
