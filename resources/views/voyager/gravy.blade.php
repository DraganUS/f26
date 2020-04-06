@extends('voyager::master')
@section('content')
    <script defer src="/js/face-api.min.js"></script>
    <div id="app" class="container">
            <video id="video" width="720" height="560" autoplay muted></video>
            <show-image-component products-db="{{json_encode($products)}}"></show-image-component>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
@stop
