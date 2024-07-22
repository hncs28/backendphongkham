<?php

namespace App\Http\Controllers\CMS;
use App\Models\order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CMSOrderController extends Controller
{
    public function index()
{
    $order = DB::table('order')
                ->join('customers', 'order.customerID', '=', 'customers.customerID')
                ->join('employee', 'order.employeeID', '=','employee.employeeID')
                ->join('services', 'order.serviceID', '=','services.serviceID' )
                ->select('order.*', 'customers.customerName', 'employeeName', 'serviceName')
                ->get();

   /* $orders = order::getModel()
                ->with(['customer', 'service', 'employee'])
                ->get();
                dd($order, $orders->first()->customer->customerName); */
                

    return view('CMS/order/order', compact('order'));}
    public function destroy($customerID)
    {
        $order = order::where('customerID', '=', $customerID)->delete();
    
        return redirect()->action([CMSorderController::class,'index'])->with('success','Dữ liệu xóa thành công.');
    }  
}
