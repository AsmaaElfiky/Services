<div class="br-sideleft sideleft-scrollbar">
    <label class="sidebar-label pd-x-10 mg-t-20 op-3">{{App::islocale('en')?'Navigation' :' '}}</label>
    <ul class="br-sideleft-menu">
        <li class="br-menu-item">
            <a href="{{URL::to('admin/')}}" class="br-menu-link ">
                <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
                <span class="menu-item-label">{{App::islocale('en')?'Dashboard' :'لوحة التحكم '}}</span>
            </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->

        @hasrole('super-admin')
        <li class="br-menu-item">
            <a href="{{URL::to('admin/Users')}}" class="br-menu-link {{ is_active('Users') }}">
                <i class="menu-item-icon icon ion-ios-people-outline tx-24"></i>
                <span class="menu-item-label">{{App::islocale('en')?'Users' : 'المستخدمين'}}</span>
            </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
      @endhasrole

      @hasanyrole('super-admin|moderator')
        <li class="br-menu-item">
             <a href="#" class="br-menu-link with-sub {{ is_active('Services') }}">
                <i class="menu-item-icon icon ion-ios-list-outline tx-24"></i>
                <span class="menu-item-label">{{ App::islocale('en')?'Services':'الخدمات' }}</span>
             </a>

        <ul class="br-menu-sub">
             <li class="sub-item"><a href="{{URL::to('admin/Services')}}" class="sub-link ">
            {{ App::islocale('en')?'Services':'الخدمات' }}
                </a>
             </li>
        <li class="sub-item"><a href="{{URL::to('admin/Services/Categories')}}" class="sub-link">{{ App::islocale('en')?'Service Categories':'تصنيفات الخدمات' }}</a></li>
        </li><!-- br-menu-item -->
        @endhasanyrole
    </ul><!-- br-sideleft-menu -->




    <br>
</div><!-- br-sideleft -->
