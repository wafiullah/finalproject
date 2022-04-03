<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Order;
use App\Models\PurchaseMaterial;
use App\Models\Supplier;
use App\Models\User;

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
