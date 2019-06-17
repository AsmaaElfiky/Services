<div class="br-sideleft sideleft-scrollbar">
    <label class="sidebar-label pd-x-10 mg-t-20 op-3">{{App::islocale('en')?'Navigation' :' '}}</label>
    <ul class="br-sideleft-menu">
        <li class="br-menu-item">
            <a href="{{URL::to('admin/')}}" class="br-menu-link active">
                <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
                <span class="menu-item-label">{{App::islocale('en')?'Dashboard' :'لوحة التحكم '}}</span>
            </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->
        <li class="br-menu-item">
            <a href="{{URL::to('admin/Users')}}" class="br-menu-link">
                <i class="menu-item-icon icon ion-ios-people-outline tx-24"></i>
                <span class="menu-item-label">{{App::islocale('en')?'Users' : 'المستخدمين'}}</span>
            </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->

        <li class="br-menu-item">
            <a href="{{URL::to('admin/Services')}}" class="br-menu-link">
                <i class="menu-item-icon icon ion-ios-list-outline tx-24"></i>
                <span class="menu-item-label">{{App::islocale('en')? 'Services':'الخدمات'}}</span>
            </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->

    </ul><!-- br-sideleft-menu -->




    <br>
</div><!-- br-sideleft -->
