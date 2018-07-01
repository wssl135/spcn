<div class="search-box">
    <input id="search-filter" type="text" name="keyword" placeholder="Search ..">
</div>
<ul class="sidebar-menu-container">
    <li>
        <a class="sidebar-list-title block" data-toggle="collapse" data-target="#eloquent">门锁</a>
        <div id="eloquent" class="collapse collapse-top in">
            <ul class="list-sub-items">
                <li><a class="keyword {!! Request::is('eloquent/basic') ? 'active' : '' !!}" href="{!! url('eloquent/basic') !!}">技术规范可靠性要求</a></li>
                <li><a class="keyword {!! Request::is('eloquent/basic-columns') ? 'active' : '' !!}" href="{!! url('eloquent/basic-columns') !!}">产品整机集成可靠性要求</a></li>
            </ul>
        </div>
    </li>
</ul>
