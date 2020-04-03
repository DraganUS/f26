@extends('voyager::master')
@section('content')
    <div id="app" class="container">
        <style>
            .container{
                font-family: 'Inconsolata', monospace;
            }
            #productImage{
                height: 300px;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
            .fa-play-circle{
                font-size: 40px;
            }
            .fa-play-circle:hover {
                cursor: pointer;
            }
            canvas {
                position: absolute;
            }</style>
{{--            <video id="video" width="720" height="560" autoplay muted></video>--}}
            <show-image-component products-db="{{json_encode($products)}}"></show-image-component>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
@stop
