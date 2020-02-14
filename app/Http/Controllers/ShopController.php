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
        $products = Product::where('active','!=','0')->inRandomOrder()->take(9)->get();
        
        return view('shop')->with('products',$products);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::where('slug',$slug)->firstOrFail();
        $mightAlsoLike = Product::where('slug','!=',$slug)->where('active','!=','0')->mightAlsoLike()->get();

        return view('product')->with([
                'product'=> $product,
                'mightAlsoLike'=> $mightAlsoLike,
            ]);
    }
    
}
