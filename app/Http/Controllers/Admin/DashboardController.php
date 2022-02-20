<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Employee;
use App\Models\Supplier;
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
        return view('admin.dashboard', compact('totalSuppliers', 'totalUsers', 'totalEmployees'));

    }
}
