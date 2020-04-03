@extends('voyager::master')
@section('content')
    <div id="app" class="container">
        <style scoped>
            @import "{{ asset('css/app.css') }}";
        </style>
{{--            <video id="video" width="720" height="560" autoplay muted></video>--}}
        <show-image-component products-db="{{json_encode($products)}}"></show-image-component>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
@stop
