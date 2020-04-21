@extends('voyager::master')
@section('content')
    <style>
        canvas {
            position: absolute;
            top: 612px;
            right: 5px;
        }
        video{
            position: absolute;
            top: 612px;
            right: 5px;
            overflow: hidden;
        }
    </style>
        @if (Route::has('login'))

            @auth
                <script defer src="/js/face-api.min.js"></script>
                <div id="app" class="container ">
                    <video id="video" width="320" height="260" autoplay muted></video>
                    <show-image-component style="margin-right: 241px;" products-db="{{json_encode($products)}}" id-db="{{json_encode($id)}}"></show-image-component>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
                <script>
                    window.EventBus = new Vue();
                    console.log(EventBus, 'tu smo ');
                </script>
                <script defer src="/js/script.js"></script>
                <script src="{{ asset('js/app.js') }}"></script>
            @else
                <div id="app">

                </div>
            @endauth
        @endif
@stop

