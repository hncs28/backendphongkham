<?php

use App\Http\Controllers\Front\OrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\EmployeeController;
use App\Http\Controllers\Front\ServiceController;
use App\Http\Controllers\Front\CustomerController;

Route::get('employees/{employeeID}',[EmployeeController::class,'show']);
Route::get('employees', [EmployeeController::class, 'index']);
#Services
Route::get('getservices',[ServiceController::class,'index']);
Route::get('getservices/{serviceID}',[ServiceController::class,'show']);
#Order
Route::get('getorder',[OrderCOntroller::class, 'index']);
Route::get('getorder/{customerID}',[OrderController::class,'byUser']);