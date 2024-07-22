<?php

namespace App\Http\Controllers\CMS;
use App\Models\customers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CMSCustomersController extends Controller
{
    public function index()
    {
        $customers = DB::table('customers')->select('*');
        $customers = $customers->get();
        
        return view('CMS/customers/customers',compact('customers'));
    }
   
    public function edit($customerID)
    {
        $customers = customers::findOrFail($customerID);
        return view('/CMS/customers/customers_update', compact('customers'));
    }
    public function update(Request $request, $customerID)
    {
        $customers = customers::find($customerID);
        $customers->customerName = $request->customerName;
        $customers->dob = $request->dob;
        $customers->customerUsername = $request->customerUsername;
        $customers->customerPassword = $request->customerPassword;
        $customers->customerEmail = $request->customerEmail;
        $customers->customerAddress = $request->customerAddress;
        $customers->customerPhone = $request->customerPhone;

        $customers->save();
        return redirect()->action([CMSCustomersController::class],'index');
    }

    public function create() {
            return view('/CMS/customers/customers_create');
    }
    public function store(Request $request)
    {
        
        $customers = new customers;
        $customers->customerName = $request->customerName; 
        $customers->dob = $request->dob;
        $customers->customerUsername = $request->customerUsername;
        $customers->customerPassword = $request->customerPassword;
        $customers->customerEmail = $request->customerEmail;
        $customers->customerAddress = $request->customerAddress;
        $customers->customerPhone = $request->customerPhone;
        $customers -> role = $request->role;    

        $customers->save();
        return redirect()->action([CMSCustomersController::class,'create']);
    }


    public function show($customerID)
    {
        $customers = customers::where('customerID', '=', $customerID)->select('*')->first();
        
        return view('/CMS/customers/customers_detail', compact('customer'));
    }
    public function destroy($customerID)
    {
        $customers = customers::where('customerID', '=', $customerID)->delete();
    
        return redirect()->action([CMSCustomersController::class,'index'])->with('success','Dữ liệu xóa thành công.');
    }
}