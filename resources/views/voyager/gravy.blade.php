@extends('voyager::master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <video id="video" width="720" height="560" autoplay muted></video>
            <show-image-component products-db="{{json_encode($products)}}"></show-image-component>
        </div>
    </div>
@stop
