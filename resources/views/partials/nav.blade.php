<header>
    <div class="top-nav container">
        <div class="logo"><a href="/">Pagina Ecommerce</a></div>
        @if (! request()->is('checkout'))
        <ul>
            <li><a href="{{ route('shop.index') }}">Tienda</a></li>
            <li><a href="#">Nosotros</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="{{ route('cart.index') }}">Carrito @if((Cart::instance('default')->count())>0)<span class="cart-count"><span> {{Cart::instance('default')->count()}}</span></span> @endif </a></li>
        </ul>
        @endif
    </div> <!-- end top-nav -->
</header>
