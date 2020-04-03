@extends('voyager::master')
@section('content')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <div id="app" class="container">
{{--            <video id="video" width="720" height="560" autoplay muted></video>--}}
            <show-image-component products-db="{{json_encode($products)}}"></show-image-component>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
@stop
