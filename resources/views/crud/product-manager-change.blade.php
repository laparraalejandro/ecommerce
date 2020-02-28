@extends('layout')

@section('title', $new_or_alter)

@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/crud/product-manager') }}"><i class="fa fa-chevron-right breadcrumb-separator"></i><span>Administrador de productos</span></a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span>{{ $new_or_alter }}</span>
        </div>
    </div> <!-- end breadcrumbs -->
  
    <!-- suceess and fail messanges -->
        <div class="product-manager-change-title">
            @if(session()->has('error_message'))
                <div class="alert alert-danger">
                    {{session()->get('error_message')}}
                </div>
            @endif
        </div> <!-- end suceess and fail messanges -->
    
    @if (isset($product))
    <!-- alter product-manager-change -->
    <form action="{{route('product-manager-change.update',$product->id)}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}

        <div class="product-manager-change-title"><h1>EDITAR PRODUCTO</h1></div>

        <div class="product-manager-change-section container">

            <div class="product-manager-change-section-image">
                <label for="file-input">
                    <img id="product-image" src="{{ asset('/storage/storage/product-img/'.$product->image) }}" alt="producto">
                </label>
                <input id="file-input" style="display: none;" type="file" name="image" accept="image/gif, image/jpeg, image/png" onchange="readURL(this);">
            </div>

            <div class="product-manager-change-section-information">
                <h1><input class="product-manager-change-section-title  product-manager-change-input" type="text" class="form-control form-alter" name="name" value="{{$product->name}}"></h1>
                <div><input class="product-manager-change-section-subtitle  product-manager-change-input" type="text" class="form-control form-alter" name="details" value="{{$product->details}}"></div>
                <div><input id="id1" class="product-manager-change-section-price  product-manager-change-input" type="currency" class="form-control form-alter" name="price" value="{{$product->presentPrice()}}"></div>     

                <p><textarea class="product-manager-change-section-description product-manager-change-input" rows="5" cols="50" name="description">{{$product->description}}</textarea></p>

                
                <div class="container">
                    <div class="row">
                        <div class="col-6 col-md-4">
                            <label >Seleccione Categoria(s) : </label>
                                {!! Multiselect::select(
                                    'categories', 
                                    $categories->pluck('name', 'id'),
                                    isset($product) ? $product->categories()->pluck('id') : [], 
                                    ['placeholder' => 'Elija una o más categorias'],
                                    ['class' => 'select-class multiselect'],
                                ) !!}
                        </div>
                    </div>
                </div>

                <!-- droplist multipicker -->

                <!-- end droplist multipicker -->


                <!-- checkbox visible in store -->
                <div class="form-check">
                    @if ($product->active==1)
                        <input type="checkbox" class="form-check-input" name="active" value="visible" id="visible" checked>
                        <label class="form-check-label" for="visible">Producto Visible en la Tienda</label>
                    @else
                        <input type="checkbox" class="form-check-input" name="active" value="visible" id="visible">
                        <label class="form-check-label" for="visible">Producto Visible en la Tienda</label>
                    @endif
                </div><!-- end checkbox visible in store -->

                <p>&nbsp;</p>


                <button type="submit" class="button-product-manager-submit">Guardar Cambios</button>
            </div>

        </div> <!-- end product-manager-change-section -->
    </form>
    


    @else
    <!-- new product-manager-change -->
    <form action="{{route('product-manager-change.create')}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}

        <div class="product-manager-change-title"><h1>NUEVO PRODUCTO</h1></div>

        <div class="product-manager-change-section container">
            <div class="product-manager-change-section-image">
                <label for="file-input">
                    <img id="product-image" src="/storage/storage/product-img/new.jpg" alt="nuevo producto">
                </label>
                <input id="file-input" style="display: none;" type="file" name="image" accept="image/gif, image/jpeg, image/png" onchange="readURL(this);">
            </div>

            <div class="product-manager-change-section-information">
                <h1><input class="product-manager-change-section-title  product-manager-change-input" type="text" class="form-control form-alter" name="name" placeholder="Nombre del producto" value="{{old('name')}}"></h1>
                <div><input class="product-manager-change-section-subtitle  product-manager-change-input" type="text" class="form-control form-alter" name="details" placeholder="Detalle del producto" value="{{old('details')}}"></div>
                <div><input id="id1" class="product-manager-change-section-price  product-manager-change-input" type="currency" class="form-control form-alter" name="price" placeholder="$ 99.99" value="{{old('price')}}"></div>     

                <p><textarea class="product-manager-change-section-description product-manager-change-input" rows="5" cols="50" name="description" placeholder="Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe nesciunt quisquam molestias eum incidunt facilis odio laborum. Dicta dolores, harum dolore blanditiis recusandae quo nostrum.">{{old('description')}}</textarea></p>
                
                <!-- droplist multipicker -->
                <div class="container">
                    <div class="row">
                        <div class="col-6 col-md-4">
                            <label class="product-manager-change-multipicker">Seleccione Categoria(s)</label>
                            <select class="selectpicker  form-control" multiple>
                                @foreach ($categories as $category)
                                    <option>{{$category->name}}</option>
                                @endforeach
                          </select>
                        </div>
                    </div>
                </div>
                <!-- end droplist multipicker -->
                
                <!-- checkbox visible in store -->
                @if (old('active')!='visible')
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="active" value="visible" id="visible">
                        <label class="form-check-label" for="visible">Producto Visible en la Tienda</label>
                    </div>
                @else
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="active" value="visible" id="visible" checked>
                        <label class="form-check-label" for="visible">Producto Visible en la Tienda</label>
                    </div>
                @endif<!-- end checkbox visible in store -->

                

                <p>&nbsp;</p>

                <button type="submit" class="button-product-manager-submit">Crear Producto</button>
            </div>
        </div> <!-- end product-manager-change-section -->
    </form>
    @endif

    <!-- Script code Multiselect -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="vendor/andrechalom/laravel-multiselect/resources/assets/js/multiselect.js"></script>
    <!-- More script code -->
    <script>
        //Change image after selecting file
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#product-image')
                        .attr('src', e.target.result)
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        //Currency format
        // var currencyInput = document.querySelector('input[type="currency"]');
        // var currency = 'ARS'; // https://www.currency-iso.org/dam/downloads/lists/list_one.xml

        // currencyInput.addEventListener('focus', onFocus);
        // currencyInput.addEventListener('blur', onBlur);

        // function localStringToNumber( s ){
        //     return Number(String(s).replace(/[^0-9.-]+/g,""));
        // }

        // function onFocus(e){
        // var value = e.target.value;
        // e.target.value = value ? localStringToNumber(value) : '';
        // }

        // function onBlur(e){
        // var value = e.target.value;

        // const options = {
        //     maximumFractionDigits : 2,
        //     currency              : currency,
        //     style                 : "currency",
        //     currencyDisplay       : "symbol"
        // }
        
        // e.target.value = value 
        //     ? localStringToNumber(value).toLocaleString(undefined, options)
        //     : ''
        // }
    </script>
    
@endsection

