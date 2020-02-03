<header>
    <div class="top-nav container">
        <div class="logo"><a href="/">Pagina Ecommerce</a></div>
        @if (! request()->is('checkout'))
        <ul>
            <li><a href="#">Tienda</a></li>
            <li><a href="#">Nosotros</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Carrito</a></li>
        </ul>
        @endif
    </div> <!-- end top-nav -->
</header>
