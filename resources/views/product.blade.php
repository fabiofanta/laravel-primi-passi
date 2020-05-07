@php
    $products_array = config('products');
    $product = $products_array[$id];
@endphp

@extends('layouts.layout')
@section('title')
        {{$product['titolo']}}
@endsection
@section('main')
<main>
    <div class="fullwidth-container profile-container">
        <div class="profile container">
            <div class="product-title">
                <h3>{{$product['titolo']}}</h3>
            </div>
            <div class="product-raw-pic">
                <img src="{{$product['src-h']}}" alt="{{$product['titolo']}}">
            </div>
            <div class="product-pack-pic">
                <img src="{{$product['src-p']}}" alt="{{$product['titolo']}}">
            </div>
            <div class="product-description">
                <p>{{!!$product['descrizione']!!}}</p>
            </div>
        </div>
    </div>
</main>
@endsection
