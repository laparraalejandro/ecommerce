<div class="might-like-section">
    <div class="container">
        <h2>También Podría interesarte</h2>
        <div class="might-like-grid">

            @foreach ($mightAlsoLike as $product)
                <a href="{{ route('shop.show',$product->id)}}" class="might-like-product">
                    <img src="{{ asset('/storage/storage/product-img/'.$product->image) }}" alt="product">
                    <div class="might-like-product-name">{{$product->name}}</div>
                    <div class="might-like-product-price">{{$product->presentPrice()}}</div>
                </a>
            @endforeach
            
        </div>
    </div>
</div>
