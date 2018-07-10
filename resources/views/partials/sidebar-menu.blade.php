<div class="search-box">
    <input id="search-filter" type="text" name="keyword" placeholder="Search ..">
</div>
<ul class="sidebar-menu-container">
    <li>
        <a class="sidebar-list-title block" data-toggle="collapse" data-target="#eloquent">门锁</a>
        <div id="eloquent" class="collapse collapse-top in">
            <ul class="list-sub-items" style="padding-left: 10px;">
                <li><a class="keyword {!! Request::is('eloquent/l0102-locker') ? 'active' : '' !!}" href="{!! url('eloquent/l0102-locker') !!}">L-01/02门锁</a></li>
                <li><a class="keyword {!! Request::is('eloquent/l21-locker') ? 'active' : '' !!}" href="{!! url('eloquent/l21-locker') !!}">L-21门锁</a></li>
                <li><a class="keyword {!! Request::is('eloquent/hw2802-locker') ? 'active' : '' !!}" href="{!! url('eloquent/hw2802-locker') !!}">HW-2802防水摇把锁</a></li>
                <li><a class="keyword {!! Request::is('eloquent/small-circle-locker') ? 'active' : '' !!}" href="{!! url('eloquent/small-circle-locker') !!}">防水小圆锁</a></li>
                <li><a class="keyword {!! Request::is('eloquent/dkba04804078-locker') ? 'active' : '' !!}" href="{!! url('eloquent/dkba04804078-locker') !!}">DKBA04804078扣锁</a></li>
            </ul>
        </div>
    </li>
    <li>
        <a class="sidebar-list-title block" data-toggle="collapse" data-target="#shield">屏蔽材料</a>
        <div id="shield" class="collapse collapse-top in">
            <ul class="list-sub-items" style="padding-left: 10px;">
                <li><a class="keyword {!! Request::is('shield/fabric') ? 'active' : '' !!}" href="{!! url('shield/fabric') !!}">导电布</a></li>
                <li><a class="keyword {!! Request::is('shield/plate') ? 'active' : '' !!}" href="{!! url('shield/plate') !!}">波导板</a></li>
                <li><a class="keyword {!! Request::is('shield/finger') ? 'active' : '' !!}" href="{!! url('shield/finger') !!}">屏蔽簧片</a></li>
            </ul>
        </div>
    </li>
    <li>
        <a class="sidebar-list-title block" data-toggle="collapse" data-target="#rubber">导电橡胶</a>
        <div id="rubber" class="collapse collapse-top in">
            <ul class="list-sub-items" style="padding-left: 10px;">
                <li><a class="keyword {!! Request::is('rubber/conductive') ? 'active' : '' !!}" href="{!! url('rubber/conductive') !!}">导电布</a></li>
                <li><a class="keyword {!! Request::is('rubber/fip') ? 'active' : '' !!}" href="{!! url('rubber/fip') !!}">FIP导电胶</a></li>
            </ul>
        </div>
    </li>
</ul>
