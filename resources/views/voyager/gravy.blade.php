@extends('voyager::master')
@section('content')
    <script defer src="/js/face-api.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <div id="app" class="container">
            <show-image-component products-db="{{json_encode($products)}}"></show-image-component>
    </div>
    <video id="video" width="720" height="560" autoplay muted></video>
    <script defer src="/js/script.js"></script>
@stop
