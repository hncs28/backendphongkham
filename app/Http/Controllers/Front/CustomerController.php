<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Front\customers;
class CustomerController extends Controller
{
    public function getcustomer() {
        $customers = customers::get(['customerName','customerAddress']);
    }
    
}
