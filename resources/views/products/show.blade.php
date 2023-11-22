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

            <div>
                <section class="rounded-b-lg mt-4">
                    <form method="POST" action="{{ route("review", $product->id) }}">
                        @csrf

                        <textarea name="text" class="w-full shadow-inner p-4 border-0 mb-4 rounded-lg focus:shadow-outline text-2xl @error('text') border-red-500 @enderror" placeholder="Your review..." spellcheck="false"></textarea>

                        @error('text')
                        <p class="text-red-500">{{ $message }}</p>
                        @enderror

                        <button type="submit" class="font-bold py-2 px-4 w-full bg-purple-400 text-lg text-white shadow-md rounded-lg ">Write</button>
                    </form>

                    <div id="task-comments" class="pt-4">
                        @foreach($product->reviews as $review)
                            <div class="bg-white rounded-lg p-3  flex flex-col justify-center items-center md:items-start shadow-lg mb-4">
                                <div class="flex flex-row justify-center mr-2">
                                    <h3 class="text-purple-600 font-semibold text-lg text-center md:text-left ">{{ $review->user->name }}</h3>
                                </div>

                                <p style="width: 90%" class="text-gray-600 text-lg text-center md:text-left ">{{ $review->text }}</p>
                            </div>
                        @endforeach
                    </div>
                </section>
            </div>

        </div>
    </div>
@endsection
