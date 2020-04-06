@extends('voyager::master')
@section('content')
    <style>
        canvas {
            position: absolute;
            top: 68px;
            left: 244px;
        }
    </style>
    <script defer src="/js/face-api.min.js"></script>
    <video id="video" width="320" height="260" autoplay muted></video>
    <script defer src="/js/script.js"></script>
    <div id="app" class="container">
            <show-image-component products-db="{{json_encode($products)}}"></show-image-component>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
@stop

