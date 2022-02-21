<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductComment;
use App\Http\Resources\ProductsResource;

class ShopController extends Controller
{

    public function getProducts(Request $request){

        $products = Product::latest()->get();

        return ProductsResource::collection($products);
    }

    public function getSingleProduct(Request $request){

        $product = Product::with('comments')->withAvg('comments','rating')->where([
            'id' => $request->id
        ])->first();

        return new ProductsResource($product);
    }

    public function storeProductComment(Request $request){

        $validated  = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'comment' => 'required',
            'product_id' => 'required',
            'rating' => 'required',
        ]);
        ProductComment::create($validated);

        return response()->json(['status'=>true,'message' => 'Rating successfully saved.']);
    }
}
