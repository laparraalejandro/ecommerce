@extends('layout')

@section('title', 'Product')

@section('extra-css')

@endsection

@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <a href="#">Home</a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span>Tienda</span>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span>Villa la Angostura</span>
        </div>
    </div> <!-- end breadcrumbs -->

    <div class="product-section container">
        <div class="product-section-image">
            <img src="{{ asset('img/product-image.jpg') }}" alt="product">
        </div>
        <div class="product-section-information">
            <h1 class="product-section-title">Villa la Angostura</h1>
            <div class="product-section-subtitle">6 dias, 7 noches All Inclusive</div>
            <div class="product-section-price">$7499.99</div>

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facere facilis praesentium eaque et eum, illo repudiandae quia adipisci, soluta voluptatum. Reprehenderit inventore, sed a voluptatibus enim optio cum repellat?
            </p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas magni accusantium, sapiente dicta iusto ut dignissimos atque placeat tempora iste.</p>

            <p>&nbsp;</p>

            <a href="#" class="button">Añadir al Carrito</a>
        </div>
    </div> <!-- end product-section -->

    @include('partials.might-like')


@endsection
