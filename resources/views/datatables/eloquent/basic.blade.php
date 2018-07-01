@extends('datatables.template')

@section('demo')
<table id="users-table" class="table table-condensed">
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

@section('controller')
    public function getBasic()
    {
        return view('datatables.eloquent.basic');
    }

    public function getBasicData()
    {
        $users = User::select(['id','name','email','created_at','updated_at']);

        return Datatables::of($users)->make();
    }
@endsection

@section('js')
    $(function() {
        $('#users-table').DataTable({
            processing: true,
            searching: true,
            serverSide: true,
            aLengthMenu: [[25,50,75,100,-1],[25,50,75,100,"All"]],
            ajax: '{{ url("eloquent/basic-data") }}'
        });
    });
@endsection
