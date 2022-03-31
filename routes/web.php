<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\OrderController;

use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\SalaryController;
use App\Http\Controllers\Admin\InvoiceController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\SupplierController;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AttendanceController;
use App\Http\Controllers\Admin\NotificationsController;
use App\Http\Controllers\Admin\ResetPasswordController;
use App\Http\Controllers\Admin\ContactInquiryController;
use App\Http\Controllers\Admin\ForgotPasswordController;
use App\Http\Controllers\Admin\PurchaseMaterialController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
    Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
    Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

    Route::group(['middleware' => 'auth:web'], function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('/profile/update', [AdminController::class, 'updateProfile'])->name('profile.update');
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
       
// Route::get('/users', [UsersController::class, 'index'])->name('users');

        Route::resource('products', ProductsController::class);
        Route::resource('suppliers', SupplierController::class);
        Route::resource('purchase-materials', PurchaseMaterialController::class);
        Route::resource('employees', EmployeeController::class);
        Route::resource('attendance', AttendanceController::class);
        Route::resource('orders', OrderController::class);
        Route::resource('users', UsersController::class);
        Route::resource('contact-inquiries', ContactInquiryController::class);
        Route::resource('employee-salary', SalaryController::class);

        Route::put('attendance/{attendance?}', [AttendanceController::class,'attendanceUpdate'])->name('attendance-update');
        Route::get('attendanc/monthly', [AttendanceController::class,'attendanceMonthly'])->name('attendance-monthly');
        Route::get('employee/attendance', [AttendanceController::class,'employeeAttendance'])->name('employee.attendance');

        Route::get('invoice/{id}', [InvoiceController::class,'invoiceGenerate'])->name('invoice');
        
        
        Route::get('notifications/markall', [NotificationsController::class,'markAllRead'])->name('notifications.markallread');
        Route::get('notifications/markAsRead/{id}/{invoice_id}', [NotificationsController::class,'markAsRead'])->name('notifications.markasread');


    });
});

Route::get('/{vue?}', function () {
    return view('app');
})->where('vue', '[\/\w\.-]*');
