<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private static $products;
    public function index(Request $request){
        Product::saveProduct($request);
        return back();
    }
    public function productList(){

        self::$products = Product::all();

        return view('product', [
            'products'=>self::$products
        ]);
    }

    public function productDelete(Request $request){
        Product::deleteProduct($request->id);
        return back()->with('message', 'info Deleted');
    }
}
