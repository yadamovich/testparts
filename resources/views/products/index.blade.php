@extends('layout.app')

@section('title', 'Products')

@section('content')
    @include('partials.header')

    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-10 mb-20">
        @foreach($products as $product)
            @include("products.item", ["product" => $product])
        @endforeach
    </div>
    <div class="md:container md:mx-auto">
        {{ $products->links() }}
    </div>
@endsection
