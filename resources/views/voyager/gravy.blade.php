@extends('voyager::master')
@section('content')
    <style>
        canvas {
            position: absolute;
            top: 61px;
            right: 1px;
        }
        video{
            position: absolute;
            top: 61px;
            right: 1px;
            overflow: hidden;
        }
        /*@media only screen and (max-width: 700px) {*/
        /*    canvas{*/

        /*    }*/
        /*}*/
    </style>
    <script defer src="/js/face-api.min.js"></script>
    <div id="app" class="container ">
            <video id="video" width="320" height="260" autoplay muted></video>
            <show-image-component products-db="{{json_encode($products)}}"></show-image-component>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
        window.EventBus = new Vue();
        console.log(EventBus, 'tu smo ');
    </script>
    <script defer src="/js/script.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
@stop

