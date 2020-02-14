@extends('layout')

@section('title', 'Product Admin')

@section('extra-css')

@endsection

@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <a href="{{ url('/') }}">Home</a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span>Administrador de Productos</span>
        </div>
    </div> <!-- end breadcrumbs -->

    <div class="crudland-section container">
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



            @if (count($allProducts)>0)

                <h2>{{count($allProducts)}} item(s) en el Registro</h2>

                <div class="crudland-table">
                    @foreach ($products as $product)
                        <div class="crudland-table-row">
                            <div class="crudland-table-row-left">
                                <a href="#"><img src="/img/{{$product->slug}}.jpg" alt="item" class="crudland-table-img"></a> 
                                <div class="crudland-item-details">
                                    <div class="crudland-table-item"><a href="#">{{$product->name}}</a></div>
                                    <div class="crudland-table-description">{{$product->details}}</div>
                                </div>
                            </div>

                            <div class="crudland-table-row-center">
                                {{$product->presentPrice()}}
                            </div>
                            
                            <div class="crudland-table-row-right">
                                <div class="crudland-table-actions">

                                    {{-- <a href="#">Editar</a> --}}

                                    <form action="" method="POST">
                                        <button type="submit" class="button-crudland"><i class="fa fa-pencil-square-o"></i></button>
                                    </form>
                                    {{-- <a href="#">Remover</a> <br> --}}

                                    <form action="" method="POST">
                                        <button type="submit" class="button-crudland"><i class="fa fa-trash"></i></button>
                                    </form>


                                </div>
                                
                            </div>
                        </div> <!-- end cart-table-row -->
                    @endforeach

                </div> <!-- end cart-table -->
                <div class="spacer"></div>
                    <!-- enable pagination with own styles-->
                    <div>
                        {{ $products->links('vendor.pagination.bootstrap-4') }}
                    </div>
                <div class="crudland-buttons">
                    <a href="{{ url('/') }}" class="button">Volver a Home</a>
                </div>

                

            @else
                <h3 {{--class="alert alert-danger"--}}>No hay Item(s) en el Registro</h3> 
                <div class="spacer"></div>
                <a href="{{ url('/') }}" class="button">Volver a Home</a>
                <div class="spacer"></div>
            @endif
            


        </div>

    </div> <!-- end cart-section -->




@endsection
