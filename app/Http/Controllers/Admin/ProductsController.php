<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::latest()->get();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|unique:products',
            'price' => 'required',
            'discounted_price' => 'required',
            'image_file1' => 'nullable|image',
            'image_file2' => 'nullable|image',
        ]);

        if ($request->hasFile('image_file1')) {

            $file = $request->file('image_file1');
            $filename = $file->getClientOriginalName();
            $name = $file->move(public_path("images"), $filename);
            $path = '/images/' . $filename;
            $request->request->add(['image1' => $path]);
        }
        if ($request->hasFile('image_file2')) {

            $file = $request->file('image_file2');
            $filename = $file->getClientOriginalName();
            $file->move(public_path("images"), $filename);
            $path = '/images/' . $filename;
            $request->request->add(['image2' => $path]);
        }

        Product::create($request->all());
        return redirect()->back()->with('success', 'Product successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        $request->validate([
            'title' => 'required|unique:products,title,' . $product->id,
            'price' => 'required',
            'discounted_price' => 'required',
            'image_file1' => 'nullable|image',
            'image_file2' => 'nullable|image',
        ]);

        if ($request->hasFile('image_file1')) {

            $file = $request->file('image_file1');
            $filename = $file->getClientOriginalName();
            $file->move(public_path("images"), $filename);
            $path = '/images/' . $filename;
            $request->request->add(['image1' => $path]);
        }
        if ($request->hasFile('image_file2')) {

            $file = $request->file('image_file2');
            $filename = $file->getClientOriginalName();
            $file->move(public_path("images"), $filename);
            $path = '/images/' . $filename;
            $request->request->add(['image2' => $path]);
        }

        $product->update($request->all());
        return redirect()->back()->with('message', 'Product successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->back()->with('message', 'Product successfully deleted.');
    }
}
