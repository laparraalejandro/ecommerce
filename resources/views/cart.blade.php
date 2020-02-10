@extends('layout')

@section('title', 'Shopping Cart')

@section('extra-css')

@endsection

@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <a href="{{ url('/') }}">Home</a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span>Carrito de Compras</span>
        </div>
    </div> <!-- end breadcrumbs -->

    <div class="cart-section container">
        <div>

            @if(session()->has('success_message'))
                <div class="alert alert-success">
                    {{session()->get('success_message')}}
                </div>
            @endif

            @if(count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors as $error)
                            <li>{{$error}}</li>  
                        @endforeach
                    </ul>
                </div>
            @endif



            @if (Cart::count()>0)
                
                <h2>{{Cart::count()}} item(s) en Carrito de Compras</h2>

                <div class="cart-table">

                    @foreach (Cart::content() as $item)
                        <div class="cart-table-row">
                            <div class="cart-table-row-left">
                                <a href="{{route('shop.show',$item->model->slug)}}"><img src="{{asset('/img/'.$item->model->slug.'.jpg')}}" alt="item" class="cart-table-img"></a>
                                <div class="cart-item-details">
                                    <div class="cart-table-item"><a href="{{route('shop.show',$item->model->slug)}}">{{$item->model->name}}</a></div>
                                    <div class="cart-table-description">{{$item->model->details}}</div>
                                </div>
                            </div>
                            <div class="cart-table-row-right">
                                <div class="cart-table-actions">
                                    {{-- <a href="#">Remover</a> <br> --}}

                                    <form action="{{route('cart.destroy',$item->rowId)}}" method="POST">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button type="submit" class="cart-options">Quitar</button>
                                    </form>

                                    {{-- <a href="#">Guardar para después</a> --}}

                                    <form action="{{route('cart.switchToSaveForLater',$item->rowId)}}" method="POST">
                                        {{csrf_field()}}
                                        <button type="submit" class="cart-options">Guardar para después</button>
                                    </form>

                                </div>
                                <div>
                                    <select class="quantity">
                                        <option selected="">1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div>{{$item->model->presentPrice()}}</div>
                            </div>
                        </div> <!-- end cart-table-row -->
                    @endforeach

                </div> <!-- end cart-table -->

                <div class="cart-totals">
                    <div class="cart-totals-left">
                        Los pasajes pueden retirarse hablando con su agente de viajes
                    </div>

                    <div class="cart-totals-right">
                        <div>
                            Subtotal <br>
                            Impuesto (21%) <br>
                            <span class="cart-totals-total">Total</span>
                        </div>
                        <div class="cart-totals-subtotal">
                            {{presentPrice(Cart::subtotal())}} <br>
                            {{presentPrice(Cart::tax())}} <br>
                            <span class="cart-totals-total">{{presentPrice(Cart::total())}}</span>
                        </div>
                    </div>
                </div> <!-- end cart-totals -->

                <div class="cart-buttons">
                    <a href="{{route('shop.index')}}" class="button">Seguir Comprando</a>
                    <a href="{{ url('/checkout') }}" class="button-primary">Ir al Checkout</a>
                </div>

            @else
                 <h3 {{--class="alert alert-danger"--}}>No hay Item(s) en el Carrito!</h3> 
                <div class="spacer"></div>
                <a href="{{route('shop.index')}}" class="button">Seguir Comprando</a>
                <div class="spacer"></div>
            @endif




            @if (Cart::instance('saveForLater')->count()>0)
                
            <h2>{{Cart::instance('saveForLater')->count()}} item(s) Guardados para Después</h2>

            <div class="saved-for-later cart-table">

                @foreach (Cart::instance('saveForLater')->content() as $item)
                    <div class="cart-table-row">
                        <div class="cart-table-row-left">
                            <a href="{{route('shop.show',$item->model->slug)}}"><img src="{{asset('/img/'.$item->model->slug.'.jpg')}}" alt="item" class="cart-table-img"></a>
                            <div class="cart-item-details">
                                <div class="cart-table-item"><a href="{{route('shop.show',$item->model->slug)}}">{{$item->model->name}}</a></div>
                                <div class="cart-table-description">{{$item->model->details}}</div>
                            </div>
                        </div>
                        <div class="cart-table-row-right">
                            <div class="cart-table-actions">
                                {{-- <a href="#">Remover</a> <br> --}}

                                <form action="{{route('saveForLater.destroy',$item->rowId)}}" method="POST">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button type="submit" class="cart-options">Quitar</button>
                                </form>

                                {{-- <a href="#">Mover al Carrito</a> --}}
                                <form action="{{route('saveForLater.switchToCart',$item->rowId)}}" method="POST">
                                    {{csrf_field()}}
                                    <button type="submit" class="cart-options">Mover al Carrito</button>
                                </form>

                            </div>
                            <div>{{$item->model->presentPrice()}}</div>
                        </div>
                    </div> <!-- end cart-table-row -->
                @endforeach

            </div> <!-- end saved-for-later -->

            @else
                <h3>No hay Item(s) Guardados para Después!</h3>
            @endif

        </div>

    </div> <!-- end cart-section -->

    @include('partials.might-like')


@endsection
