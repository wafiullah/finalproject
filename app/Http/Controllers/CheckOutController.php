<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Notifications\OrderPlaced;

class CheckOutController extends Controller
{
    //

    public function placeOrder(Request $request){
        
        $orderData = $request->all();
        $cart = $orderData['cart'][0];
        $shipping = $orderData['shipping'];


        $order = new Order();
        $order->product_id = $cart['id'];
        $order->quantity = $cart['quantity'];
        $order->amount = $cart['quantity'] * $cart['price'];
        $order->order_date = date('Y-m-d');
        $order->address = $shipping['address'];
        $order->city = $shipping['city'];
        $order->state = $shipping['state'];
        $order->phone = $shipping['address'];
        $order->payment_method = $orderData['paymentMethod'];
        $order->notes = $orderData['notes'];
        $order->user_id = $orderData['userId'];
        $order->save();

        $admin = Admin::find(2);
        $admin->notify(new OrderPlaced($order));
        
        return response()->json(['status' => true,'message' => 'Order successfully placed.']);

    }
}
