<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\HourController;
use App\Http\Controllers\Backend\SaleController;
use App\Http\Controllers\Backend\TranslationController;
use App\Http\Controllers\Backend\ScheduleController;
use App\Http\Controllers\Backend\BackupController;

use App\Http\Controllers\Backend\Setup\FeeCategoryController;
use App\Http\Controllers\Backend\Setup\FeeAmountControllere;
use App\Http\Controllers\Backend\Student\RegistrationFeeController;
use App\Http\Controllers\Backend\Student\MonthlyFeeController;
use App\Http\Controllers\Backend\Student\ExamFeeController;
use App\Http\Controllers\Backend\Account\StudentFeeController;

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

Route::get('/', function () {
    return view('auth.login');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

Route::get('/admin/logout', [AdminController::class, 'Logout'])->name('admin.logout');

 
Route::group(['middleware' => 'auth'],function(){


    // User Management All Routes 
   
    Route::prefix('users')->group(function(){
        Route::get('/view', [UserController::class, 'UserView'])->name('user.view');
        Route::get('/add', [UserController::class, 'UserAdd'])->name('users.add');
        Route::post('/store', [UserController::class, 'UserStore'])->name('users.store');
        Route::get('/edit/{id}', [UserController::class, 'UserEdit'])->name('users.edit');
        Route::post('/update/{id}', [UserController::class, 'UserUpdate'])->name('users.update');
        Route::get('/delete/{id}', [UserController::class, 'UserDelete'])->name('users.delete');
   }); 

   /// User Profile and Change Password 
    Route::prefix('profile')->group(function(){
        Route::get('/view', [ProfileController::class, 'ProfileView'])->name('profile.view');
        Route::get('/edit', [ProfileController::class, 'ProfileEdit'])->name('profile.edit');
        Route::post('/store', [ProfileController::class, 'ProfileStore'])->name('profile.store');
        Route::get('/password/view', [ProfileController::class, 'PasswordView'])->name('password.view');
        Route::post('/password/update', [ProfileController::class, 'PasswordUpdate'])->name('password.update');
    }); 
    
    // Customer Management All Routes 
   
      Route::prefix('customers')->group(function(){
        Route::get('/view', [CustomerController::class, 'CustomerView'])->name('customer.view');
        Route::get('/add', [CustomerController::class, 'CustomerAdd'])->name('customer.add');
        Route::post('/store', [CustomerController::class, 'CustomerStore'])->name('customer.store');
        Route::get('/edit/{id}', [CustomerController::class, 'CustomerEdit'])->name('customer.edit');
        Route::post('/update/{id}', [CustomerController::class, 'CustomerUpdate'])->name('customer.update');
        Route::get('/delete/{id}', [CustomerController::class, 'CustomerDelete'])->name('customer.delete');
   }); 

    // Hour Management All Routes 
   
    Route::prefix('hours')->group(function(){
        Route::get('/view', [HourController::class, 'HourView'])->name('hour.view');
        Route::get('/list', [HourController::class, 'HourList'])->name('hour.list');
        Route::get('/add', [HourController::class, 'HourAdd'])->name('hour.add');
        Route::post('/store', [HourController::class, 'HourStore'])->name('hour.store');
        Route::get('/edit/{id}', [HourController::class, 'HourEdit'])->name('hour.edit');
        Route::post('/update/{id}', [HourController::class, 'HourUpdate'])->name('hour.update');
        Route::get('/delete/{id}', [HourController::class, 'HourDelete'])->name('hour.delete');
   }); 

   // Sale Management All Routes 
   
   Route::prefix('sales')->group(function(){
    Route::get('/view', [SaleController::class, 'SaleView'])->name('sale.view');
    Route::get('/list', [SaleController::class, 'SaleList'])->name('sale.list');
    Route::get('/add', [SaleController::class, 'SaleAdd'])->name('sale.add');
    Route::post('/store', [SaleController::class, 'SaleStore'])->name('sale.store');
    Route::get('/edit/{id}', [SaleController::class, 'SaleEdit'])->name('sale.edit');
    Route::post('/update/{id}', [SaleController::class, 'SaleUpdate'])->name('sale.update');
    Route::get('/delete/{id}', [SaleController::class, 'SaleDelete'])->name('sale.delete');
}); 

// Translation Management All Routes 
   
Route::prefix('translations')->group(function(){
    Route::get('/view', [TranslationController::class, 'TranslationView'])->name('translation.view');
}); 


// Schedule Management All Routes 
   
Route::prefix('schedules')->group(function(){
    Route::get('/view', [ScheduleController::class, 'ScheduleView'])->name('schedule.view');
}); 


// Backup Management All Routes 
   
Route::prefix('backups')->group(function(){
    Route::get('/view', [BackupController::class, 'BackupView'])->name('backup.view');
}); 

// Fee Category Routes 

Route::get('fee/category/view', [FeeCategoryController::class, 'ViewFeeCat'])->name('fee.category.view');

Route::get('fee/category/add', [FeeCategoryController::class, 'FeeCatAdd'])->name('fee.category.add');

Route::post('fee/category/store', [FeeCategoryController::class, 'FeeCatStore'])->name('store.fee.category');

Route::get('fee/category/edit/{id}', [FeeCategoryController::class, 'FeeCatEdit'])->name('fee.category.edit');

Route::post('fee/category/update/{id}', [FeeCategoryController::class, 'FeeCategoryUpdate'])->name('update.fee.category');

Route::get('fee/category/delete/{id}', [FeeCategoryController::class, 'FeeCategoryDelete'])->name('fee.category.delete');

// Fee Category Amount Routes 

Route::get('fee/amount/view', [FeeAmountControllere::class, 'ViewFeeAmount'])->name('fee.amount.view');

Route::get('fee/amount/add', [FeeAmountControllere::class, 'AddFeeAmount'])->name('fee.amount.add');

Route::post('fee/amount/store', [FeeAmountControllere::class, 'StoreFeeAmount'])->name('store.fee.amount');

Route::get('fee/amount/edit/{fee_category_id}', [FeeAmountControllere::class, 'EditFeeAmount'])->name('fee.amount.edit');

Route::post('fee/amount/update/{fee_category_id}', [FeeAmountControllere::class, 'UpdateFeeAmount'])->name('update.fee.amount');

Route::get('fee/amount/details/{fee_category_id}', [FeeAmountControllere::class, 'DetailsFeeAmount'])->name('fee.amount.details');


}); // End Middleare Auth Route 