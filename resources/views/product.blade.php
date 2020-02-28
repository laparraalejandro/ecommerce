@extends('layout')

@section('title', $product->name)

@section('extra-css')

@endsection

@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/shop') }}"><i class="fa fa-chevron-right breadcrumb-separator"></i>
                <span>Tienda</span></a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span>{{$product->name}}</span>
        </div>
    </div> <!-- end breadcrumbs -->

    <div class="product-section container">
        <div class="product-section-image">
            <img src="{{ asset('/storage/storage/product-img/'.$product->image)}}" alt="product">
        </div>
        <div class="product-section-information">
            <h1 class="product-section-title">{{$product->name}}</h1>
            <br>
            <div class="product-section-subtitle">{{$product->details}}</div>
            <div class="product-section-price">{{$product->presentPrice()}}</div>     

            <p>{{$product->description}}</p>
 
            <p>&nbsp;</p>

            {{-- <a href="{{ url('/cart') }}" class="button">Añadir al Carrito</a> --}}

            <form action="{{route('cart.store')}}" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$product->id}}">
                <input type="hidden" name="name" value="{{$product->name}}">
                <input type="hidden" name="price" value="{{$product->price}}">
                <button type="submit" class="button button-form">Añadir al Carrito</button>
            </form>

        </div>
    </div> <!-- end product-section -->

    @include('partials.might-like')


@endsection
