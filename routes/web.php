<?php
use App\Http\Controllers\CMS\CMSEmployeeController;
use App\Http\Controllers\CMS\CMSCustomersController;
use App\Http\Controllers\CMS\CMSServicesController;
use App\Http\Controllers\CMS\CMSOrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\EmployeeController;
use App\Http\Controllers\Front\ServiceController;





#CMS Employee
Route::get('CMS/employee',[CMSEmployeeController::class,'index'])->name('CMS.employee');
Route::get('CMS/employee/edit/{employeeID}', [CMSEmployeeController::class,'edit'])->name('CMS.employee.edit');
Route::get('/CMS/employee/create', [CMSEmployeeController::class,'create'])->name('CMS.employee.create');
Route::post('/CMS/employee/store', [CMSEmployeeController::class,'store'])->name('CMS.employee.store');
Route::get('/CMS/employee/{employeeID}', [CMSEmployeeController::class,'show'])->name('CMS.employee.show');
Route::DELETE('/CMS/employee/destroy/{employeeID}', [CMSEmployeeController::class,'destroy'])->name('CMS.employee.destroy');
Route::patch('CMS/employee/update/{employeeID}',[CMSEmployeeController::class,'update'])->name('CMS.employee.update');

#CMS Customers
Route::get('CMS/customers',[CMSCustomersController::class,'index'])->name('CMS.customers');
Route::get('CMS/customers/edit/{customerID}', [CMSCustomersController::class,'edit'])->name('CMS.customers.edit');
Route::patch('CMS/customers/update/{customerID}',[CMSCustomersController::class,'update'])->name('CMS.customers.update');
Route::get('/CMS/customers/create', [CMSCustomersController::class,'create'])->name('CMS.customers.create');
Route::post('/CMS/customers/store', [CMSCustomersController::class,'store'])->name('CMS.customers.store');
Route::get('/CMS/customers/{customerID}', [CMSCustomersController::class,'show'])->name('CMS.customers.show');
Route::DELETE('/CMS/customers/destroy/{customerID}', [CMSCustomersController::class,'destroy'])->name('CMS.customers.destroy');

#CMS Services
Route::get('CMS/services',[CMSServicesController::class,'index'])->name('CMS.services');
Route::get('CMS/services/edit/{serviceID}', [CMSServicesController::class,'edit'])->name('CMS.services.edit');
Route::get('/CMS/services/create', [CMSServicesController::class,'create'])->name('CMS.services.create');
Route::post('/CMS/services/store', [CMSServicesController::class,'store'])->name('CMS.services.store');
Route::get('/CMS/services/{serviceID}', [CMSServicesController::class,'show'])->name('CMS.services.show');
Route::DELETE('/CMS/services/destroy/{serviceID}', [CMSServicesController::class,'destroy'])->name('CMS.services.destroy');

#CMS order
Route::get('CMS/order',[CMSOrderController::class,'index'])->name('CMS.order');
Route::get('CMS/order/edit/{orderID}', [CMSOrderController::class,'edit'])->name('CMS.order.edit');
Route::get('/CMS/order/create', [CMSOrderController::class,'create'])->name('CMS.order.create');
Route::post('/CMS/order/store', [CMSOrderController::class,'store'])->name('CMS.order.store');
Route::get('/CMS/order/{orderID}', [CMSServicesController::class,'show'])->name('CMS.order.show');
Route::DELETE('/CMS/order/destroy/{orderID}', [CMSOrderController::class,'destroy'])->name('CMS.order.destroy');

#Employee
Route::get('/employees', [EmployeeController::class, 'index']);
Route::get('/doctor-team', function () {
    return view('doctor-team');
});
Route::get('/employees/{employeeID}',[EmployeeController::class,'show']);
Route::get('/doctor-team/{employeeID}', function ($employeeID) {
   
    return view('info-doctor', compact('employeeID'));
});

