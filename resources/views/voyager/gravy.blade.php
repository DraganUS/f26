@extends('voyager::master')
@section('content')
    <div class="container">
        <h2>ads</h2>
        <div class="row justify-content-center">
            <div class="mx-3 "style="z-index: 1">
                <home-main-component></home-main-component>
                <home-2-component></home-2-component>
                <home-3-component></home-3-component>
                <how-it-works-component></how-it-works-component>
            </div>
{{--            <video id="video" width="720" height="560" autoplay muted></video>--}}
{{--            <show-image-component products-db="{{json_encode($products)}}"></show-image-component>--}}
        </div>
    </div>
@stop
