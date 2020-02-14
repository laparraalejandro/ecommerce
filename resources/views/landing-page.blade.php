<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pagina Ecommerce </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    </head>
    <body>
        <header class="with-background">
            <div class="top-nav container">
                <div class="logo">Pagina Ecommerce</div>
                <ul>
                    <li><a href="{{ url('/shop') }}">Tienda |</a></li>
                    <li><a href="#">Nosotros |</a></li>
                    <li><a href="#">Blog |</a></li>
                    <li><a href="{{ route('cart.index') }}">Carrito @if((Cart::instance('default')->count())>0)<span class="cart-count"><span> {{Cart::instance('default')->count()}}</span></span> @endif </a></li>
                </ul>
            </div> <!-- end top-nav -->
            <div class="hero container">
                <div class="hero-copy">
                    <h1>Pagina Ecommerce DH Grupo II</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda nulla aspernatur aliquid!</p>
                    <div class="hero-buttons">
                        <a href="{{route('crud-landing.index')}}" class="button button-white">Login</a>
                        <a href="#" class="button button-white">Botón2</a>
                    </div>
                </div> <!-- end hero-copy -->

                <div class="hero-image">
                    {{-- <img src="/img/hero-image.png" alt="hero image"> --}}
                </div> <!-- end hero-image -->
            </div> <!-- end hero -->
        </header>

        <div class="featured-section">

            <div class="container">
                <h1 class="text-center">Pagina Ecommerce</h1>

                <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore vitae nisi, consequuntur illum dolores cumque pariatur quis provident deleniti nesciunt officia est reprehenderit sunt aliquid possimus temporibus enim eum hic.</p>

                <div class="text-center button-container">
                    <a href="#" class="button">Destacado</a>
                    <a href="#" class="button">A la Venta</a>
                </div>

                {{-- <div class="tabs">
                    <div class="tab">
                        Featured
                    </div>
                    <div class="tab">
                        On Sale
                    </div>
                </div> --}}

                <div class="products text-center">
                    @foreach ($products as $product)
                        <div class="product">
                            <a href="{{ route('shop.show',$product->slug)}}"><img src="/img/{{$product->slug}}.jpg" alt="product"></a>
                            <a href="{{ route('shop.show',$product->slug)}}"><div class="product-name">{{$product->name}}</div></a>
                            <div class="product-price">{{$product->presentPrice()}}</div>
                        </div>
                    @endforeach
                </div> <!-- end products -->

                <div class="text-center button-container">
                    <a href="{{ url('/shop') }}" class="button">Ver más ofertas</a>
                </div>

            </div> <!-- end container -->

        </div> <!-- end featured-section -->

        <div class="blog-section">
            <div class="container">
                <h1 class="text-center">Nuestro Blog</h1>

                <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore vitae nisi, consequuntur illum dolores cumque pariatur quis provident deleniti nesciunt officia est reprehenderit sunt aliquid possimus temporibus enim eum hic.</p>

                <div class="blog-posts">
                    <div class="blog-post" id="blog1">
                        <a href="#"><img src="/img/blog1.jpg" alt="Blog Image"></a>
                        <a href="#"><h2 class="blog-title">Blog Post 1</h2></a>
                        <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, tenetur numquam ipsam reiciendis.</div>
                    </div>
                    <div class="blog-post" id="blog2">
                        <a href="#"><img src="/img/blog2.jpg" alt="Blog Image"></a>
                        <a href="#"><h2 class="blog-title">Blog Post 2</h2></a>
                        <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, tenetur numquam ipsam reiciendis.</div>
                    </div>
                    <div class="blog-post" id="blog3">
                        <a href="#"><img src="/img/blog3.jpg" alt="Blog Image"></a>
                        <a href="#"><h2 class="blog-title">Blog Post 3</h2></a>
                        <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, tenetur numquam ipsam reiciendis.</div>
                    </div>
                </div>
            </div> <!-- end container -->
        </div> <!-- end blog-section -->

        @include('partials.footer')


    </body>
</html>