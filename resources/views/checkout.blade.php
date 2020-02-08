@extends('layout')

@section('title', 'Checkout')

@section('extra-css')

@endsection

@section('content')

    <div class="container">

        <h1 class="checkout-heading stylish-heading">Checkout</h1>
        <div class="checkout-section">
            <div>
                <form action="#">
                    <h2>Detalles Facturación</h2>

                    <div class="form-group">
                        <label for="email">Correo Eléctronico</label>
                        <input type="email" class="form-control" id="email" name="email" value="">
                    </div>
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" value="">
                    </div>
                    <div class="form-group">
                        <label for="address">Dirección</label>
                        <input type="text" class="form-control" id="address" name="address" value="">
                    </div>

                    <div class="half-form">
                        <div class="form-group">
                            <label for="city">Ciudad</label>
                            <input type="text" class="form-control" id="city" name="city" value="">
                        </div>
                        <div class="form-group">
                            <label for="province">Provincia</label>
                            <input type="text" class="form-control" id="province" name="province" value="">
                        </div>
                    </div> <!-- end half-form -->

                    <div class="half-form">
                        <div class="form-group">
                            <label for="postalcode">Codigo Postal</label>
                            <input type="text" class="form-control" id="postalcode" name="postalcode" value="">
                        </div>
                        <div class="form-group">
                            <label for="phone">Teléfono</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="">
                        </div>
                    </div> <!-- end half-form -->

                    <div class="spacer"></div>

                    <h2>Detalles de Pago</h2>

                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" id="name" name="name" value="">
                    </div>
                    <div class="form-group">
                        <label for="address">Dirección</label>
                        <input type="text" class="form-control" id="address" name="address" value="">
                    </div>

                    <div class="half-form">
                        <div class="form-group">
                            <label for="expiry">Vencimiento</label>
                            <input type="text" class="form-control" id="expiry" name="expiry" placeholder="MM/DD">
                        </div>
                        <div class="form-group">
                            <label for="cvc">Código Seguridad</label>
                            <input type="text" class="form-control" id="cvc" name="cvc" value="">
                        </div>
                    </div> <!-- end half-form -->

                    <div class="spacer"></div>

                    <input type="submit" class="button-primary full-width" value="Completar Pedido">


                </form>
            </div>



            <div class="checkout-table-container">
                <h2>Su Pedido</h2>

                <div class="checkout-table">
                    <div class="checkout-table-row">
                        <div class="checkout-table-row-left">
                            <img src="/img/product-image.jpg" alt="item" class="checkout-table-img">
                            <div class="checkout-item-details">
                                <div class="checkout-table-item">Villa la Angostura</div>
                                <div class="checkout-table-description">6 dias, 7 noches All inclusive</div>
                                <div class="checkout-table-price">$7499.99</div>
                            </div>
                        </div> <!-- end checkout-table -->

                        <div class="checkout-table-row-right">
                            <div class="checkout-table-quantity">1</div>
                        </div>
                    </div> <!-- end checkout-table-row -->

                    <div class="checkout-table-row">
                        <div class="checkout-table-row-left">
                            <img src="/img/product-image.jpg" alt="item" class="checkout-table-img">
                            <div class="checkout-item-details">
                                <div class="checkout-table-item">Villa la Angostura</div>
                                <div class="checkout-table-description">6 dias, 7 noches All inclusive</div>
                                <div class="checkout-table-price">$7499.99</div>
                            </div>
                        </div> <!-- end checkout-table -->

                        <div class="checkout-table-row-right">
                            <div class="checkout-table-quantity">1</div>
                        </div>
                    </div> <!-- end checkout-table-row -->

                    <div class="checkout-table-row">
                        <div class="checkout-table-row-left">
                            <img src="/img/product-image.jpg" alt="item" class="checkout-table-img">
                            <div class="checkout-item-details">
                                <div class="checkout-table-item">Villa la Angostura</div>
                                <div class="checkout-table-description">6 dias, 7 noches All inclusive</div>
                                <div class="checkout-table-price">$7499.99</div>
                            </div>
                        </div> <!-- end checkout-table -->

                        <div class="checkout-table-row-right">
                            <div class="checkout-table-quantity">1</div>
                        </div>
                    </div> <!-- end checkout-table-row -->

                </div> <!-- end checkout-table -->

                <div class="checkout-totals">
                    <div class="checkout-totals-left">
                        Subtotal <br>
                        Descuento (10OFF - 10%) <br>
                        Impuesto <br>
                        <span class="checkout-totals-total">Total</span>

                    </div>

                    <div class="checkout-totals-right">
                        $7499.97 <br>
                        -$750.00 <br>
                        $975.00 <br>
                        <span class="checkout-totals-total">$8474.97</span>

                    </div>
                </div> <!-- end checkout-totals -->

                <a href="#" class="have-code">Tienes Cupón?</a>

                <div class="have-code-container">
                    <form action="#">
                        <input type="text">
                        <input type="submit" class="button" value="Aplicar">
                    </form>
                </div>
            </div>

        </div> <!-- end checkout-section -->
    </div>

@endsection
