@extends('app')

@section('content')
<h1 class="" style="">{{ $title }}</h1>
<div class="tabs">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#tech">技术规范可靠性要求</a></li>
        <li><a data-toggle="tab" href="#product">产品整机集成可靠性要求</a></li>
    </ul>
    <div class="tab-content">
         <div class="tab-pane active" id="tech">
            @yield('tech')
        </div>
        <div class="tab-pane" id="product">
            @yield('product')
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script type="text/javascript">
@yield('js')
</script>
@endpush
