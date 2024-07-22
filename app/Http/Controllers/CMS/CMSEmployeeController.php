<?php

namespace App\Http\Controllers\CMS;
use App\Models\employee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CMSEmployeeController extends Controller
{
    public function index()
    {
        $employee = DB::table('employee')->select('*');
        $employee = $employee->get();
       
        return view('CMS/employee/employee',compact('employee'));
    }
   
    public function edit($employeeID)
    {
        $employee = employee::findOrFail($employeeID);
        return view('/CMS/employee/employee_update', compact('employee'));
    }

    public function create() {
            return view('/CMS/employee/employee_create');
    }
    public function store(Request $request)
    {
        
        $employee = new employee;
        $employee->employeeName = $request->employeeName; 
        $employee->employeeRole = $request->employeeRole;
        $employee->employeePhone = $request->employeePhone;
        $employee->employeeEmail = $request->employeeEmail;
        $employee->employeeExper = $request->employeeExper;
        $employee->emplyeeImg = $request->emplyeeImg;

        $employee->save();
        return redirect()->action([CMSEmployeeController::class,'index']);
    }

    public function show($employeeID)
    {
        $employee = employee::where('employeeID', '=', $employeeID)->select('*')->first();
        
        return view('/CMS/employee/employee_detail', compact('employee'));
    }
    public function destroy($employeeID)
    {
        $employees = employee::where('employeeID', '=', $employeeID)->delete();
    
        return redirect()->action([CMSEmployeeController::class,'index'])->with('success','Dữ liệu xóa thành công.');
    }
    public function update(Request $request, $employeeID)
    {
        $employee = employee::find($employeeID);
        $employee->employeeName = $request->employeeName; 
        $employee->employeeRole = $request->employeeRole;
        $employee->employeePhone = $request->employeePhone;
        $employee->employeeEmail = $request->employeeEmail;
        $employee->employeeExper = $request->employeeExper;
        $employee->save();
        return redirect()->action([CMSEmployeeController::class,'index']);
    }
   
    
}