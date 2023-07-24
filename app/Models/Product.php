<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    use HasFactory;
    private static $product;
    public static function saveProduct($request){
        self::$product = new Product();
        self::$product->name = $request->name;
        self::$product->category_id = $request->category_id;
        self::$product->price = $request->price;
        self::$product->description = $request->description;
        self::$product->image = $request->image;

        self::$product->save();
    }

    public static function deleteProduct($id){
        self::$product= Product::find($id);
        self::$product->delete();
    }
}
