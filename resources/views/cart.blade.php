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
            <h2>3 items en Carrito de Compras</h2>

            <div class="cart-table">
                <div class="cart-table-row">
                    <div class="cart-table-row-left">
                        <a href="#"><img src="/img/product-image.jpg" alt="item" class="cart-table-img"></a>
                        <div class="cart-item-details">
                            <div class="cart-table-item"><a href="#">Villa la Angostura</a></div>
                            <div class="cart-table-description">6 dias, 7 Noches All Inclusive</div>
                        </div>
                    </div>
                    <div class="cart-table-row-right">
                        <div class="cart-table-actions">
                            <a href="#">Remover</a> <br>
                            <a href="#">Guardar para después</a>
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
                        <div>$7499.99</div>
                    </div>
                </div> <!-- end cart-table-row -->

                <div class="cart-table-row">
                    <div class="cart-table-row-left">
                        <a href="#"><img src="/img/product-image.jpg" alt="item" class="cart-table-img"></a>
                        <div class="cart-item-details">
                            <div class="cart-table-item"><a href="#">Villa la Angostura</a></div>
                            <div class="cart-table-description">6 dias, 7 Noches All Inclusive</div>
                        </div>
                    </div>
                    <div class="cart-table-row-right">
                        <div class="cart-table-actions">
                            <a href="#">Remover</a> <br>
                            <a href="#">Guardar para después</a>
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
                        <div>$7499.99</div>
                    </div>
                </div> <!-- end cart-table-row -->

                <div class="cart-table-row">
                    <div class="cart-table-row-left">
                        <a href="#"><img src="/img/product-image.jpg" alt="item" class="cart-table-img"></a>
                        <div class="cart-item-details">
                            <div class="cart-table-item"><a href="#">Villa la Angostura</a></div>
                            <div class="cart-table-description">6 dias, 7 Noches All Inclusive</div>
                        </div>
                    </div>
                    <div class="cart-table-row-right">
                        <div class="cart-table-actions">
                            <a href="#">Remover</a> <br>
                            <a href="#">Guardar para después</a>
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
                        <div>$7499.99</div>
                    </div>
                </div> <!-- end cart-table-row -->

            </div> <!-- end cart-table -->

            <div class="cart-totals">
                <div class="cart-totals-left">
                    Los pasajes pueden retirarse hablando con su agente de viajes
                </div>

                <div class="cart-totals-right">
                    <div>
                        Subtotal <br>
                        Impuesto <br>
                        <span class="cart-totals-total">Total</span>
                    </div>
                    <div class="cart-totals-subtotal">
                        $21499.97 <br>
                        $2175.00 <br>
                        <span class="cart-totals-total">$24474.97</span>
                    </div>
                </div>
            </div> <!-- end cart-totals -->

            <div class="cart-buttons">
                <a href="{{ url('/products') }}" class="button">Seguir Comprando</a>
                <a href="{{ url('/checkout') }}" class="button-primary">Ir al Checkout</a>
            </div>

            <h2>2 items Guardados para Después</h2>

            <div class="saved-for-later cart-table">
                <div class="cart-table-row">
                    <div class="cart-table-row-left">
                        <a href="#"><img src="/img/product-image.jpg" alt="item" class="cart-table-img"></a>
                        <div class="cart-item-details">
                            <div class="cart-table-item"><a href="#">Villa la Angostura</a></div>
                            <div class="cart-table-description">6 dias, 7 Noches All Inclusive</div>
                        </div>
                    </div>
                    <div class="cart-table-row-right">
                        <div class="cart-table-actions">
                            <a href="#">Remover</a> <br>
                            <a href="#">Guardar para Después</a>
                        </div>
                        {{-- <div>
                            <select class="quantity">
                                <option selected="">1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div> --}}
                        <div>$7499.99</div>
                    </div>
                </div> <!-- end cart-table-row -->

                <div class="cart-table-row">
                    <div class="cart-table-row-left">
                        <a href="#"><img src="/img/product-image.jpg" alt="item" class="cart-table-img"></a>
                        <div class="cart-item-details">
                            <div class="cart-table-item"><a href="#">Villa la Angostura</a></div>
                            <div class="cart-table-description">6 dias, 7 Noches All Inclusive</div>
                        </div>
                    </div>
                    <div class="cart-table-row-right">
                        <div class="cart-table-actions">
                            <a href="#">Remover</a> <br>
                            <a href="#">Guardar para Después</a>
                        </div>
                        {{-- <div>
                            <select class="quantity">
                                <option selected="">1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div> --}}
                        <div>$7499.99</div>
                    </div>
                </div> <!-- end cart-table-row -->

            </div> <!-- end saved-for-later -->

        </div>

    </div> <!-- end cart-section -->

    @include('partials.might-like')


@endsection
