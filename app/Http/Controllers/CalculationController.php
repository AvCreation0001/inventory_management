<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculationController extends Controller
{
    public function productRevenue(Request $request){
        $product = Product::find($request->product_id);
        $product->product_category;
        return response()->json($product);
    }
}
