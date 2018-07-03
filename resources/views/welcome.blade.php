@extends('app')

@section('content')
<div class="row">
	<div class="col-md-9">
		<h1>二级物料SPCN测试项目</h1>
		<h3 >SPCN需满足华为对应技术规范性能要求及产品整机可靠性测试要求。</h3>
		<p>
			所有二级物料SPCN测试项目必须遵循此平台中的相关要求。
		</p>
        <pre>
此处增加SPCN相关要求。
        </pre>
	</div>
    <div class="col-md-3">
        <div class="row">
            @include('partials.quick-links')
        </div>
    </div>
</div>
@endsection

