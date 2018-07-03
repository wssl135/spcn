<div class="search-box">
    <input id="search-filter" type="text" name="keyword" placeholder="Search ..">
</div>
<ul class="sidebar-menu-container">
    <li>
        <a class="sidebar-list-title block" data-toggle="collapse" data-target="#eloquent">门锁</a>
        <div id="eloquent" class="collapse collapse-top in">
            <ul class="list-sub-items">
                <li><a class="keyword {!! Request::is('eloquent/l0102-locker') ? 'active' : '' !!}" href="{!! url('eloquent/l0102-locker') !!}">L-01/02门锁</a></li>
                <li><a class="keyword {!! Request::is('eloquent/l21-locker') ? 'active' : '' !!}" href="{!! url('eloquent/l21-locker') !!}">L-21门锁</a></li>
                <li><a class="keyword {!! Request::is('eloquent/hw2802-locker') ? 'active' : '' !!}" href="{!! url('eloquent/hw2802-locker') !!}">HW-2802防水摇把锁</a></li>
                <li><a class="keyword {!! Request::is('eloquent/small-circle-locker') ? 'active' : '' !!}" href="{!! url('eloquent/small-circle-locker') !!}">防水小圆锁</a></li>
                <li><a class="keyword {!! Request::is('eloquent/dkba04804078-locker') ? 'active' : '' !!}" href="{!! url('eloquent/dkba04804078-locker') !!}">DKBA04804078扣锁</a></li>
            </ul>
        </div>
    </li>
</ul>
