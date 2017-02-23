@extends('main')

@section('title','Dashboard')
@section('stylesheet')
    <style>
        .echarts {
        width: 100% !important;
    }
    </style>
@endsection
@section('content')
<div id="app">
    
<!--mini statistics end-->

<mainchart></mainchart>

</div>

@endsection

@section('script')
    <script src="/js/app.js"></script>
@endsection