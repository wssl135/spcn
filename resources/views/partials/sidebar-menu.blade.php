<div class="search-box">
    <input id="search-filter" type="text" name="keyword" placeholder="Search ..">
</div>
<ul class="sidebar-menu-container">
    <li>
        <a class="sidebar-list-title block" data-toggle="collapse" data-target="#eloquent">测试项分类</a>
        <div id="eloquent" class="collapse collapse-top in">
            <ul class="list-sub-items">
                <li><a class="keyword {!! Request::is('eloquent/basic') ? 'active' : '' !!}" href="{!! url('eloquent/basic') !!}">门锁</a></li>
                <li><a class="keyword {!! Request::is('eloquent/basic-columns') ? 'active' : '' !!}" href="{!! url('eloquent/basic-columns') !!}">屏蔽材料</a></li>
                <li><a class="keyword {!! Request::is('eloquent/basic-object') ? 'active' : '' !!}" href="{!! url('eloquent/basic-object') !!}">导电橡胶</a></li>
                <li><a class="keyword {!! Request::is('eloquent/row-details') ? 'active' : '' !!}" href="{!! url('eloquent/row-details') !!}">防水组件</a></li>
                <li><a class="keyword {!! Request::is('eloquent/master') ? 'active' : '' !!}" href="{!! url('eloquent/master') !!}">非金属材料</a></li>
                <li><a class="keyword {!! Request::is('eloquent/count') ? 'active' : '' !!}" href="{!! url('eloquent/count') !!}">密封胶条</a></li>
                <li><a class="keyword {!! Request::is('eloquent/multi-filter-select') ? 'active' : '' !!}" href="{!! url('eloquent/multi-filter-select') !!}">防尘网</a></li>
                <li><a class="keyword {!! Request::is('eloquent/post-column-search') ? 'active' : '' !!}" href="{!! url('eloquent/post-column-search') !!}">隔热棉</a></li>
                <li><a class="keyword {!! Request::is('eloquent/add-edit-remove-column') ? 'active' : '' !!}" href="{!! url('eloquent/add-edit-remove-column') !!}">防水密封胶条</a></li>
                <li><a class="keyword {!! Request::is('eloquent/dt-row') ? 'active' : '' !!}" href="{!! url('eloquent/dt-row') !!}">阻尼转轴</a></li>
                <li><a class="keyword {!! Request::is('eloquent/manual-count') ? 'active' : '' !!}" href="{!! url('eloquent/manual-count') !!}">不锈钢紧固件</a></li>
                <li><a class="keyword {!! Request::is('eloquent/row-num') ? 'active' : '' !!}" href="{!! url('eloquent/row-num') !!}">工艺类</a></li>
            </ul>
        </div>
    </li>
</ul>
