@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <video id="video" width="720" height="560" autoplay muted></video>
        <show-image-component products-db="{{json_encode($products)}}"></show-image-component>
{{--        <video id="video" width="720" height="560" autoplay muted></video>--}}
    </div>
</div>
@endsection
