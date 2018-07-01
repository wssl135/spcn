<div class="search-box">
    <input id="search-filter" type="text" name="keyword" placeholder="Search ..">
</div>
<ul class="sidebar-menu-container">
    <li>
        <a class="sidebar-list-title block" data-toggle="collapse" data-target="#eloquent">门锁</a>
        <div id="eloquent" class="collapse collapse-top in">
            <ul class="list-sub-items">
                <li><a class="keyword {!! Request::is('eloquent/basic') ? 'active' : '' !!}" href="{!! url('eloquent/basic') !!}">L-01/02门锁</a></li>
                <li><a class="keyword {!! Request::is('eloquent/basic-columns') ? 'active' : '' !!}" href="{!! url('eloquent/master') !!}">L-21门锁</a></li>
                <li><a class="keyword {!! Request::is('eloquent/basic-columns') ? 'active' : '' !!}" href="{!! url('eloquent/basic-columns') !!}">HW-2802防水摇把锁</a></li>
                <li><a class="keyword {!! Request::is('eloquent/basic-columns') ? 'active' : '' !!}" href="{!! url('eloquent/basic-columns') !!}">防水小圆锁</a></li>
                <li><a class="keyword {!! Request::is('eloquent/basic-columns') ? 'active' : '' !!}" href="{!! url('eloquent/basic-columns') !!}">DKBA04804078扣锁</a></li>
            </ul>
        </div>
    </li>
</ul>
