<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$products = Product::where('active','!=','0')->inRandomOrder()->paginate(9);

        $products = Product::where('active','!=','0')->paginate(9);
        
        return view('shop')->with('products',$products);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $product = Product::where('id',$id)->firstOrFail();
        $product = Product::where('id',$id)->firstOrFail();
        $mightAlsoLike = Product::where('id','!=',$id)->where('active','!=','0')->mightAlsoLike()->get();

        return view('product')->with([
                'product'=> $product,
                'mightAlsoLike'=> $mightAlsoLike,
            ]);
    }
    
}
