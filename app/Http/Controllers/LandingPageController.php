<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('active','!=','0')->inRandomOrder()->take(8)->get();
        
        return view('landing-page')->with('products',$products);
    }

    
}
