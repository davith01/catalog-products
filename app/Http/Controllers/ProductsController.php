<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function get_products(Request $request)
    {
        $products = \App\Product::with('category')->get();
        return response()->json( $products , 200); 
    }
}
