@extends('datatables.template')

@section('tech')
<table id="plate-table" class="table table-condensed">
    <caption class="alert alert-success">
        <p>
            <strong>重要提醒: </strong>SPCN需满足华为对应技术规范性能要求及产品整机可靠性测试要求。
        </p>
    </caption>
    <thead>
    <tr>
        <th rowspan="2" style="text-align: center; vertical-align: middle;">序号</th>
        <th rowspan="2" style="text-align: center; vertical-align: middle;">分类</th>
        <th colspan="4" style="text-align: center;">技术规范可靠性要求</th>
    </tr>
    <tr>
        <th style="text-align: center;">可靠性测试项</th>
        <th style="text-align: center;">测试报告要求（是否需要第三方报告）</th>
        <th style="text-align: center;">测试方法及判定标准</th>
    </tr>
    </thead>
</table>
@endsection

@section('product')
<style type="text/css"> 
.table>tbody>tr>td {
    vertical-align: middle;
}
</style>
<table id="product-table" class="table table-condensed">
    <caption class="alert alert-success">
        <p>
            <strong>重要提醒: </strong>SPCN需满足华为对应技术规范性能要求及产品整机可靠性测试要求。
        </p>
    </caption>
    <thead>
    <tr>
        <th rowspan="2" style="text-align: center; vertical-align: middle;">序号</th>
        <th rowspan="2" style="text-align: center; vertical-align: middle;">分类</th>
        <th colspan="4" style="text-align: center;">产品整机集成可靠性要求</th>
    </tr>
    <tr>
        <th style="text-align: center;">产品整机集成可靠性测试项</th>
        <th style="text-align: center;">参考标准或测试方法</th>
        <th style="text-align: center;">判定标准</th>
    </tr>
    </thead>
</table>
@endsection

@section('js')
    $(function() {
        $('#plate-table').DataTable({
            processing: true,
            searching: true,
            serverSide: true,
            aLengthMenu: [[10,20,50,100,-1],[10,20,50,100,"All"]],
            ajax: '{{ url("shield/plate-data") }}'
        });
        $('#product-table').DataTable({
            processing: true,
            searching: true,
            serverSide: true,
            bLengthChange: true,
            aLengthMenu: [[10,20,50,100,-1],[10,20,50,100,"All"]],
            ajax: '{{ url("shield/plate-product-data") }}'
        });
    });
@endsection
