<?php

namespace App\Http\Controllers\Front;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Front\employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = employee::get(['employeeName', 'employeeID','employeeRole','employeePhone','employeeEmail','employeeExper','employeeImage']);
        
        return response()->json($employees);
        //return respone()->json(compact('employees','data'));
       /* if (!empty($employees)) {
            return response()->json(['data' => $employees, 'data2' =>$anh]);
        }

        return response()->json(['data' => $employees, 'data2' =>$anh]);
        */
    }
    public function show($employeeID)
    {
        $employee = employee::where('employeeID', '=', $employeeID)->get(['employeeName','employeeRole','employeePhone','employeeEmail','employeeExper','employeeImage'])->toArray();
        if ($employee) {
            return response()->json($employee);
        } else {
            return response()->json(['error' => 'Employee not found'], 404);
        }
    }
}
