@extends('layouts.default')
@section('content')
    <div class="jumbotron">
        <p class="lead">
            你现在看到的是犯了严重罪行的罪恶人名单
        </p>
        <p>
            他们分别是
            <strong style="color: red; border: 2px dotted red;">刘锋</strong>
            <strong style="color: green; border:  2px dotted green;">叶子</strong>
            <strong style="color: royalblue; border:  2px dotted royalblue;">张奕圳</strong>
        </p>
        <p>如果遇到他们，请小心。</p>
        <p>
            <a href="{{route('signup')}}" class="btn btn-lg btn-success" role="button">现在举报</a>
        </p>
    </div>
@stop