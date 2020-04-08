@extends('voyager::master')
@section('content')
    <style>
        canvas {
            position: absolute;
            top: 61px;
            left: 266px;
        }
        @media only screen and (max-width: 700px) {
            canvas{
                left: 41px;
            }
        }
    </style>
    <script defer src="/js/face-api.min.js"></script>
    <div id="app" class="container">
            <video id="video" width="320" height="260" autoplay muted></video>
            <show-image-component products-db="{{json_encode($products)}}"></show-image-component>
    </div>
{{--    <script defer src="/js/script.js"></script>--}}
    <script src="{{ asset('js/app.js') }}"></script>
@stop

