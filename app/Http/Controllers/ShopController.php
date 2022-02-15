<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Resources\ProductsResource;

class ShopController extends Controller
{

    public function getProducts(Request $request){

        $products = Product::latest()->get();

        return ProductsResource::collection($products);
    }

    public function getSingleProduct(Request $request){

        $product = Product::where([
            'id' => $request->id
        ])->first();

        return new ProductsResource($product);
    }
}
