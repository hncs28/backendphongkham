<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Front\order;
class OrderController extends Controller
{
    public function index()
{
    $order = DB::table('order')
                ->join('customers', 'order.customerID', '=', 'customers.customerID')
                ->join('employee', 'order.employeeID', '=','employee.employeeID')
                ->join('services', 'order.serviceID', '=','services.serviceID' )
                ->select('order.*', 'customerName', 'employeeName', 'serviceName')
                ->get();
    return response()->json($order);}

    public function byUser($customerID) {
    
        $userorder = order::where('customerID', '=', $customerID)->select('*')->first();
        if (empty($userorder)) {
            return ('404 NOT FOUND');
        }
        return response() -> json($userorder);    
    }
}

