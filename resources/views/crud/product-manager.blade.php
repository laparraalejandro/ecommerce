@extends('layout')

@section('title', 'product Manager')

@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <a href="{{ url('/') }}">Home</a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span>Administrador de Productos</span>
        </div>
    </div> <!-- end breadcrumbs -->
    
    <div class="product-manager-section container">
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
                <div class="product-manager-buttons">
                    <a href="{{ url('/crud/product-manager/new') }}" class="button">Agregar un Item</a>
                </div>

                <div class="product-manager-table">
                    @foreach ($products as $product)
                        <div class="product-manager-table-row">
                            <div class="product-manager-table-row-left">
                                <a href="{{ route('product-manager-change.show',$product->id)}}"><img src="{{ asset('/storage/storage/product-img/'.$product->image) }}" alt="item" class="product-manager-table-img"></a> 
                            </div>
                            <div class="product-manager-item-details">
                                    <div class="product-manager-table-item"><a href="{{ route('product-manager-change.show',$product->id)}}">{{$product->name}}</a></div>
                                    <div class="product-manager-table-description">{{$product->details}}</div>
                            </div>

                            <div class="product-manager-table-row-left-center">
                                <form action="{{route('product-manager.visible',$product->id)}}" method="POST">
                                    {{csrf_field()}}
                                    <input type="hidden" name="id" value="{{$product->id}}">
                                    <button type="submit" class="button-product-manager-lef-center"><i class="{{$product->visible()}}"></i></button>
                                    {{-- <button type="submit" class="button-product-manager-lef-center"><i class="fa fa-eye-slash"></i></button> --}}
                                </form>
                            </div>

                            <div class="product-manager-table-row-center">
                                {{$product->presentPrice()}}
                            </div>
                            
                            <div class="product-manager-table-row-right">
                                <div class="product-manager-table-actions">

                                    {{-- <a href="#">Editar</a> --}}
                                    <a class="button-product-manager" href="{{ route('product-manager-change.show',$product->id)}}"><i class="fa fa-pencil-square-o"></i></a>
                                    {{-- <a href="#">Remover</a> <br> --}}

                                    <form action="{{ route('product-manager.destroy',$product->id)}}" method="POST">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button type="submit" class="button-product-manager"><i class="fa fa-trash"></i></button>
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

                {{-- <div class="product-manager-buttons">
                    <a href="{{ url('/') }}" class="button">Volver a Home</a>
                </div> --}}

                

            @else
                <div class="spacer"></div>
                <a href="{{ url('product-manager-change.index') }}" class="button">Agregar un Item</a>
                <div class="spacer"></div>
                <h3 {{--class="alert alert-danger"--}}>No hay Item(s) en el Registro</h3> 
                <div class="spacer"></div>
                <div class="product-manager-buttons">
                    <a href="{{ url('/') }}" class="button">Volver a Home</a>
                </div>
            @endif
        </div>

    </div> <!-- end cart-section -->
@endsection
