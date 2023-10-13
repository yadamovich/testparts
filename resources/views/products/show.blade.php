@extends('layout.app')

@section('title', $product->name)

@section('content')
    @include('partials.header')

    <div class="flex justify-center mt-5">
        <p>
            <a href="{{ route("products.index") }}">Back to products</a>
        </p>
    </div>

    <div>
        <div class="m-auto px-4 py-8 max-w-xl">
            <div class="bg-white shadow-2xl" >
                <div class="px-4 py-2 mt-2 bg-white">
                    @include("products.partials.name", ["product" => $product])
                    @include("products.partials.part_type", ["product" => $product])
                    @include("products.partials.brand", ["product" => $product])
                    @include("products.partials.price", ["product" => $product])
                </div>
                <div>
                    <img src="/storage/products/{{ $product->image }}">
                </div>
                <div class="px-4 py-2 mt-2 bg-white">
                    @include("products.partials.description", ["product" => $product])
                </div>
            </div>
        </div>
    </div>
@endsection
