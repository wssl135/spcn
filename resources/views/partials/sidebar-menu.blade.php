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
                <li><a class="keyword {!! Request::is('eloquent/custom-filter') ? 'active' : '' !!}" href="{!! url('eloquent/custom-filter') !!}">Overriding Global Filter</a></li>
                <li><a class="keyword {!! Request::is('eloquent/advance-filter') ? 'active' : '' !!}" href="{!! url('eloquent/advance-filter') !!}">Advance Global Filter [v5.1++]</a></li>
                <li><a class="keyword {!! Request::is('eloquent/transformer') ? 'active' : '' !!}" href="{!! url('eloquent/transformer') !!}">Fractal Transformer [v5.1++]</a></li>
                <li><a class="keyword {!! Request::is('eloquent/carbon') ? 'active' : '' !!}" href="{!! url('eloquent/carbon') !!}">DateTime/Carbon Objects</a></li>
                <li><a class="keyword {!! Request::is('eloquent/ioc') ? 'active' : '' !!}" href="{!! url('eloquent/ioc') !!}">IOC Container [v5.2++]</a></li>
                <li><a class="keyword {!! Request::is('eloquent/blacklist') ? 'active' : '' !!}" href="{!! url('eloquent/blacklist') !!}">Blacklist Columns [v6.9++]</a></li>
                <li><a class="keyword {!! Request::is('eloquent/whitelist') ? 'active' : '' !!}" href="{!! url('eloquent/whitelist') !!}">Whitelist Columns [v6.9++]</a></li>
                <li><a class="keyword {!! Request::is('eloquent/order-column') ? 'active' : '' !!}" href="{!! url('eloquent/order-column') !!}">Order Column API</a></li>
            </ul>
        </div>
    </li>
    <li>
        <a class="sidebar-list-title block" data-toggle="collapse" data-target="#queryBuilder">工艺类</a>
        <div id="queryBuilder" class="collapse collapse-top in">
            <ul class="list-sub-items">
                <li><a class="keyword {!! Request::is('fluent/basic') ? 'active' : '' !!}" href="{!! url('fluent/basic') !!}">Basic</a></li>
                <li><a class="keyword {!! Request::is('fluent/basic-object') ? 'active' : '' !!}" href="{!! url('fluent/basic-object') !!}">Object Data Source</a></li>
                <li><a class="keyword {!! Request::is('fluent/union') ? 'active' : '' !!}" href="{!! url('fluent/union') !!}">Union Queries</a></li>
                <li><a class="keyword {!! Request::is('fluent/multi-filter-select') ? 'active' : '' !!}" href="{!! url('fluent/multi-filter-select') !!}">Column Search</a></li>
                <li><a class="keyword {!! Request::is('fluent/advance-filter') ? 'active' : '' !!}" href="{!! url('fluent/advance-filter') !!}">Advance Global Filter [v5.1++]</a></li>
                <li><a class="keyword {!! Request::is('fluent/add-edit-remove-column') ? 'active' : '' !!}" href="{!! url('fluent/add-edit-remove-column') !!}">Add/Edit/Remove Column</a></li>
                <li><a class="keyword {!! Request::is('fluent/dt-row') ? 'active' : '' !!}" href="{!! url('fluent/dt-row') !!}">DT Row Option</a></li>
                <li><a class="keyword {!! Request::is('fluent/custom-filter') ? 'active' : '' !!}" href="{!! url('fluent/custom-filter') !!}">Custom Filter</a></li>
                <li><a class="keyword {!! Request::is('fluent/carbon') ? 'active' : '' !!}" href="{!! url('fluent/carbon') !!}">DateTime/Carbon Objects</a></li>
                <li><a class="keyword {!! Request::is('fluent/joins') ? 'active' : '' !!}" href="{!! url('fluent/joins') !!}">Join Queries</a></li>
                <li><a class="keyword {!! Request::is('fluent/ioc') ? 'active' : '' !!}" href="{!! url('fluent/ioc') !!}">IOC Container [v5.2++]</a></li>
            </ul>
        </div>
    </li>
</ul>
