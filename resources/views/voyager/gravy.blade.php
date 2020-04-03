@extends('voyager::master')
@section('content')
    <div id="app" class="container">
                <home-2-component></home-2-component>
{{--            <video id="video" width="720" height="560" autoplay muted></video>--}}
            <show-image-component products-db="{{json_encode($products)}}"></show-image-component>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
@stop
