<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\InvoiceItem;
use LaravelDaily\Invoices\Classes\Party;
use LaravelDaily\Invoices\Facades\Invoice;

class InvoiceController extends Controller
{

    public function invoiceGenerate(Request $request)
    {

        $order = Order::with(['product', 'user'])->findOrFail($request->id);
        $client = new Party([
            'name' => 'Online Afghan Store',
            'phone' => '+93 73 094 4532 ',
        ]);

        $customer = new Buyer([
            'name' => $order->user->name,
            'custom_fields' => [
                'email' => $order->user->email,
            ],
        ]);

        $item = (new InvoiceItem())->title($order->product->title)
        ->pricePerUnit($order->product->discounted_price)
        ->quantity($order->quantity)
        ->discountByPercent($order->discount);

        $invoice = Invoice::make()
            ->sequence($order->id)
            ->buyer($customer)
            ->seller($client)
                ->setCustomData($item->discount)
            ->addItem($item);
        // ->logo(public_path('images/logo/logo.jpg'));
        return $invoice->download();
        // return $invoice->toHtml();
    }
}
