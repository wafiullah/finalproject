<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Order;

use App\Models\Employee;
use App\Models\Supplier;
use App\Models\PurchaseMaterial;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {

        $totalUsers = User::count();
        $totalEmployees = Employee::count();
        $totalSuppliers = Supplier::count();
$totalOrders = Order::count();

$totalAmountSales = Order::sum('amount');
$totalMaterialPurchaseAmount = PurchaseMaterial::sum('total_amount');
return view('admin.dashboard', compact('totalSuppliers', 'totalUsers', 'totalEmployees', 'totalOrders', 'totalMaterialPurchaseAmount', 'totalAmountSales'));


    }
}
