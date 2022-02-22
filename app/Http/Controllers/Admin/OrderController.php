<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $orders = Order::with([
            'user',
            'product',
        ])->latest()->get();
        return view('admin.orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $products = Product::all();
        $statuses = Order::STATUSES;
        return view('admin.orders.create', compact('users', 'products', 'statuses'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'product_id' => 'required',
            'quantity' => 'required',
            'order_date' => 'required',
            'user_id' => 'required',
            'status' => 'required',
            'amount' => 'required',
        ]);
        
        Order::create($validated);
        return redirect()->route('admin.orders.index')->with('success', 'Order successfully created.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {

        $users = User::all();
        $products = Product::all();
        $statuses = Order::STATUSES;
        return view('admin.orders.edit', compact('users', 'order', 'products', 'statuses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $validated = $request->validate([
            'product_id' => 'required',
            'quantity' => 'required',
            'order_date' => 'required',
            'user_id' => 'required',
            'status' => 'required',
            'amount' => 'required',
        ]);

        $order->update($validated);
        return redirect()->route('admin.orders.index')->with('success', 'Order successfully updated.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('admin.orders.index')->with('success', 'Order successfully deleted.');
    }
}
