<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\Party;
use LaravelDaily\Invoices\Facades\Invoice;
use LaravelDaily\Invoices\Classes\InvoiceItem;

class InvoiceController extends Controller
{

    public function invoiceGenerate(Request $request){

        $order = Order::with(['product','user'])->findOrFail($request->id);
        $client = new Party([
            'name'          => 'STANIKZIE FOODS PREDICTS ORGANIZATION',
            'phone'         => '+0093 78 1234567',
        ]);

        $customer = new Buyer([
            'name'          => $order->user->name,
            'custom_fields' => [
                'email' => $order->user->email,
            ],
        ]);

        $item = (new InvoiceItem())->title($order->product->title)->pricePerUnit($order->product->discounted_price)->quantity($order->quantity);

        $invoice = Invoice::make()
            ->sequence($order->id)
            ->buyer($customer)
            ->seller($client)
            ->addItem($item);
            // ->logo(public_path('images/logo.png'))
        return $invoice->stream();
    }
}
