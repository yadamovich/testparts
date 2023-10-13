<div class="px-4 py-8 max-w-xl">
    <div class="bg-white shadow-2xl" >
        <div>
            <a href="{{ route("products.show", $product->id) }}">
                <img src="storage/products/{{ $product->image }}">
            </a>
        </div>

        <div class="px-4 py-2 mt-2 bg-white">
            @include("products.partials.name", ["product" => $product])
            @include("products.partials.part_type", ["product" => $product])
            @include("products.partials.brand", ["product" => $product])
            @include("products.partials.price", ["product" => $product])

            @include("products.partials.description", ["product" => $product])
        </div>
    </div>
</div>
