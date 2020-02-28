<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class ProductManagerChangeController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $new_or_alter='Nuevo';
        $categories = Category::where('active','!=','0')->get();
        
        return view('/crud/product-manager-change')
            ->with([
                'new_or_alter'=>$new_or_alter,
                'categories'=>$categories,
                ]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
         //Validation
        $rules=array(
             'name' => 'required|max:25|min:3|unique:products,name',
             'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
             'details'=> 'required|max:50|min:3',
             'price' => 'required|min:0|regex:/^\d*(\.\d{2})?$/',
             'description'=> 'sometimes|nullable|max:255|min:0'
        );
         $messages=array(
             'required' => 'Debe completar el campo :attribute',
             'min' => 'El campo :attribute debe tener un minimo de :min caracteres',
             'max' => 'El campo :attribute debe tener un maxímo de :max caracteres',
             'price.regex' => 'El campo :attribute debe ser un numero con hasta 2 decimales',
             'price.min' => 'El precio del producto no puede ser negativo',
             'image.max' => 'El archivo subido no puede superar los 10MB',
             'image.mimes' => 'Formato de imagen no valido',
             'name.unique' => 'Ya existe un Producto registrado con este nombre'
        );

        $validator = Validator::make($req->all(), $rules, $messages);

        if ($validator->fails()) {
            Session::flash('error_message', $validator->messages()->first());
            return redirect()->back()->withInput();

       }

        //Get product data
        $newProduct = new Product();

        $newProduct->name=$req['name'];
        $newProduct->slug=trim($req['name']);

        $rute = $req->file('image')->store('public/storage/product-img');
        $fileName=basename($rute);
        $newProduct->image=$fileName;
        $newProduct->details=$req['details'];
        $newProduct->price=(($req['price'])*100);
        
        if(trim($req['description'])!=''){
            $newProduct->description=$req['description'];
        }else{
            $newProduct->description='Sin descripcion disponible';
        }

        $newProduct->user_id=1;

        if($req['active']=='visible'){
            $newProduct->active=1;
        }else{
            $newProduct->active=0;
        }

        //Save new product in DB
        $newProduct->save();

        //Return View Product-manager with success message
        return redirect('/crud/product-manager')
            ->with('success_message','Se ha registrado el nuevo producto!');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Category::where('active','!=','0')->get();
        $product=Product::find($id);
        $new_or_alter=$product->name;

        return view('/crud/product-manager-change')
            ->with([
                'new_or_alter'=>$new_or_alter,
                'product'=>$product,
                'categories'=>$categories,
                ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $req)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
         //Validation
         $rules=array(
            'name' => 'required|max:25|min:3',
            'image' => 'sometimes|nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'details'=> 'required|max:50|min:3',
            'price' => 'required|min:0|regex:/^\d*(\.\d{2})?$/',
            'description'=> 'sometimes|nullable|max:255|min:0'
       );
        $messages=array(
            'required' => 'Debe completar el campo :attribute',
            'min' => 'El campo :attribute debe tener un minimo de :min caracteres',
            'max' => 'El campo :attribute debe tener un maxímo de :max caracteres',
            'price.regex' => 'El campo :attribute debe ser un numero con hasta 2 decimales',
            'price.min' => 'El precio del producto no puede ser negativo',
            'image.max' => 'El archivo subido no puede superar los 10MB',
            'image.mimes' => 'Formato de imagen no valido',
            'name.unique' => 'Ya existe un Producto registrado con este nombre'
       );

        $validator = Validator::make($req->all(), $rules, $messages);

        if ($validator->fails()) {
           Session::flash('error_message', $validator->messages()->first());
           return redirect()->back()->withInput();
        }

        //Get product data
        $editProduct = Product::findOrFail($id); 

        $editProduct->name=$req['name'];
        $editProduct->slug=trim($req['name']);

        if ($req->file('image')!=''){
            $rute = $req->file('image')->store('public/storage/product-img');
            $fileName=basename($rute);
            $editProduct->image=$fileName;
        }

        $editProduct->details=$req['details'];
        $editProduct->price=(($req['price'])*100);
       
        if(trim($req['description'])!=''){
            $editProduct->description=$req['description'];
        }else{
            $editProduct->description='Sin descripcion disponible';
        }

        if($req['active']=='visible'){
            $editProduct->active=1;
        }else{
            $editProduct->active=0;
        }

        //Save new product in DB
        $editProduct->save();

        //Return View Product-manager with success message
        return redirect('/crud/product-manager')
           ->with('success_message','Se ha Editado el Producto!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
 
    }
}
