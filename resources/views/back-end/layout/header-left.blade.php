<div class="br-header-left">
    <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
    <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>

    {{--<div class="input-group hidden-xs-down wd-170 transition">--}}
        {{--<input id="searchbox" type="text" class="form-control"   placeholder="Search">--}}

        {{--<span class="input-group-btn">--}}
            {{--<button class="btn btn-secondary" id="search"  type="button" ><i class="fas fa-search"></i></button>--}}
          {{--</span>--}}
    {{--</div>--}}


    <!-- input-group -->
    <div class="input-group hidden-xs-down wd-170 transition">
    <form action="admin/search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
    <input type="text" id="searchbox" class="form-control" name="q"
    placeholder="Search users"> <span class="input-group-btn">
    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i>
    </button>
    </span>
    </div>
    </form>
    </div>


</div>


