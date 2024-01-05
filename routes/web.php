<?php
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DistributionController;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ItemController;
use App\Http\Controllers\Backend\PurchaseController;
use App\Http\Controllers\Backend\PurchaseDetailController;
use App\Http\Controllers\Backend\StockController;
use App\Http\Controllers\Backend\VendorController;
use App\Http\Controllers\DashboadController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;


Route::get('/',[AuthController::class,'loginFrom'])->name('login.form');
Route::post('/login',[AuthController::class,'login'])->name('admin.login');

Route::prefix('admin')->group(function () {
    Route::middleware(['auth'])->group(function () {
        
        Route::get('/dashboard',[HomeController::class, 'home'])->name('dashboard');
    
        Route::get('/logout',[AuthController::class,'logout'])->name('logout');



        Route::get('dashboard',[DashboadController::class,'dashboard'])->name('dashboard');
        
        Route::controller(CategoryController::class)->group(function(){
            Route::get('categories/list','list')->name('category.list');
            Route::get('categories/create','create')->name('category.create');
            Route::post('categories/store','store')->name('category.store');
            Route::get('categories/view/{categoryId}','view')->name('category.view');
            Route::get('categories/edit/{categoryId}','edit')->name('category.edit');
            Route::put('categories/update/{categoryId}','update')->name('category.update');
            Route::get('categories/delete/{categoryId}','delete')->name('category.delete');
        });
        
        Route::controller(ItemController::class)->group(function(){
            Route::get('items/list','list')->name('item.list');
            Route::get('items/create','create')->name('item.create');
            Route::post('items/store','store')->name('item.store');
            Route::get('items/view/{itemId}','view')->name('item.view');
            Route::get('items/edit/{itemId}','edit')->name('item.edit');
            Route::put('items/update/{itemId}','update')->name('item.update');
            Route::get('items/delete/{itemId}','delete')->name('item.delete');
        });
        
        Route::controller(StockController::class)->group(function(){
            Route::get('stocks/list','list')->name('stock.list');
            Route::get('stocks/create','create')->name('stock.create');
            Route::post('stocks/store','store')->name('stock.store');
            Route::get('stocks/view/{stockId}','view')->name('stock.view');
            Route::get('stocks/edit/{stockId}','edit')->name('stock.edit');
            Route::put('stocks/update/{stockId}','update')->name('stock.update');
            Route::get('stocks/delete/{stockId}','delete')->name('stock.delete');
        });

        Route::controller(EmployeeController::class)->group(function(){
            Route::get('employees/list','list')->name('employee.list');
            Route::get('employees/create','create')->name('employee.create');
            Route::post('employees/store','store')->name('employee.store');
            Route::get('employees/view/{employeeId}','view')->name('employee.view');
            Route::get('employees/edit/{employeeId}','edit')->name('employee.edit');
            Route::put('employees/update/{employeeId}','update')->name('employee.update');
            Route::get('employees/delete/{employeeId}','delete')->name('employee.delete');
        });

            Route::controller(DistributionController::class)->group(function(){
            Route::get('distributes/list','list')->name('distribute.list');
            Route::get('distributes/create','create')->name('distribute.create');
            Route::post('distributes/store','store')->name('distribute.store');
            Route::get('distributes/view/{distributeId}','view')->name('distribute.view');
            Route::get('distributes/edit/{distributeId}','edit')->name('distribute.edit');
            Route::put('distributes/update/{distributeId}','update')->name('distribute.update');
            Route::get('distributes/delete/{distributeId}','delete')->name('distribute.delete');
        });

        
        Route::controller(VendorController::class)->group(function(){
            Route::get('vendor/list','list')->name('vendor.list');
            Route::get('vendor/create','create')->name('vendor.create');
            Route::post('vendor/store','store')->name('vendor.store');
            Route::get('vendor/view/{vendorId}','view')->name('vendor.view');
            Route::get('vendor/edit/{vendorId}','edit')->name('vendor.edit');
            Route::put('vendor/update/{vendorId}','update')->name('vendor.update');
            Route::get('vendor/delete/{vendorId}','delete')->name('vendor.delete');
        });

        
        Route::controller(PurchaseController::class)->group(function(){
            Route::get('purchase/list','list')->name('purchase.list');
            Route::get('purchase/create','create')->name('purchase.create');
            Route::post('purchase/checkout','checkout')->name('purchase.checkout');
            Route::post('purchase/store','store')->name('purchase.store');

            Route::get('purchase/view/{purchaseId}','view')->name('purchase.view');
            Route::get('purchase/edit/{purchaseId}','edit')->name('purchase.edit');
            Route::put('purchase/update/{purchaseId}','update')->name('purchase.update');
            Route::get('purchase/delete/{purchaseId}','delete')->name('purchase.delete');
        });

        
        Route::controller(PurchaseDetailController::class)->group(function(){
            Route::get('purchase-details/list','list')->name('purchase-detail.list');
            Route::get('purchase-details/create','create')->name('purchase-detail.create');
            Route::post('purchase-details/store','store')->name('purchase-detail.store');
            Route::get('purchase-details/view/{purchase-detailId}','view')->name('purchase-detail.view');
            Route::get('purchase-details/edit/{purchase-detailId}','edit')->name('purchase-detail.edit');
            Route::put('purchase-details/update/{purchase-detailId}','update')->name('purchase-detail.update');
            Route::get('purchase-details/delete/{purchase-detailId}','delete')->name('purchase-detail.delete');
        });

        Route::controller(ReportController::class)->group(function(){
            Route::get('report/report','Report')->name('report');
            Route::get('report/search','ReportSearch')->name('report.search');
           
        });


    });  
});
