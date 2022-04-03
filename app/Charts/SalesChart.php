<?php

declare (strict_types = 1);

namespace App\Charts;

use App\Models\Order;
use Chartisan\PHP\Chartisan;
use Illuminate\Http\Request;
use ConsoleTVs\Charts\BaseChart;

class SalesChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {

        $mostPurchasedProducts = Order::with('product:id,title')->select('product_id', \DB::raw('COUNT(product_id) as count'))
            ->groupBy('product_id')
            ->orderBy('count', 'desc')
            ->get()
            ->toArray();

        $products = [];
        $mostPurchasedCounts = [];
        foreach ($mostPurchasedProducts as $product) {
            $products[] = $product['product']['title'];
            $mostPurchasedCounts[] = $product['count'];
        }

        return Chartisan::build()
            ->labels($products)
            ->dataset('Most Purcahsed Product', $mostPurchasedCounts);
    }
}
