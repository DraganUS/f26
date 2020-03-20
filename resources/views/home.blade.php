@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <show-image-component products-db="{{json_encode($products)}}"></show-image-component>
        @foreach($products as $product)
            <div class="container alert-primary">
                <div>{{ $product->title }}</div>
            </div>
        @endforeach
        <video id="video" width="720" height="560" autoplay muted></video>
    </div>
</div>
@endsection
