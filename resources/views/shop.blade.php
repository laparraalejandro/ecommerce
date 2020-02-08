@extends('layout')

@section('title', 'Products')

@section('extra-css')

@endsection

@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <a href="{{ url('/') }}">Home</a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span>Tienda</span>
        </div>
    </div> <!-- end breadcrumbs -->

    <div class="products-section container">
        <div class="sidebar">
            <h3>Por Categoria</h3>
            <ul>
                <li><a href="#">Spa</a></li>
                <li><a href="#">Mochilero</a></li>
                <li><a href="#">All Inclusive</a></li>
                <li><a href="#">Aventura</a></li>
                <li><a href="#">Cabalgata</a></li>
                <li><a href="#">Saltar en Paracaidas</a></li>
                <li><a href="#">Turismo Culinario</a></li>
            </ul>

            <h3>Por Precios</h3>
            <ul>
                <li><a href="#">$0 - $3500</a></li>
                <li><a href="#">$3500 - $7500</a></li>
                <li><a href="#">$7500+</a></li>
            </ul>
        </div> <!-- end sidebar -->
        <div>
            <h1 class="stylish-heading">All Inclusive</h1>
            <div class="products text-center">

                @foreach ($products as $product)
                    <div class="product">
                        <a href="{{ route('shop.show',$product->slug)}}"><img src="/img/{{$product->slug}}.jpg" alt="product"></a>
                        <a href="{{ route('shop.show',$product->slug)}}"><div class="product-name">{{$product->name}}</div></a>
                        <div class="product-price">{{$product->presentPrice()}}</div>
                    </div>
                @endforeach

            </div> <!-- end products -->
        </div>
    </div>


@endsection
