@extends('voyager::master')
@section('content')
    <div id="app" class="container">
{{--            <video id="video" width="720" height="560" autoplay muted></video>--}}
{{--        <script defer src="/js/face-api.min.js"></script>--}}
        <show-image-component products-db="{{json_encode($products)}}"></show-image-component>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
@stop
