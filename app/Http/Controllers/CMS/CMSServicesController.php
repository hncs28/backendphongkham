<?php

namespace App\Http\Controllers\CMS;
use App\Models\services;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CMSServicesController extends Controller
{
    public function index()
    {
        $services = DB::table('services')->select('*');
        $services = $services->get();
        return view('CMS/services/services',compact('services'));
    }
   
    public function edit($servicesID)
    {
        $services = services::where('servicesID', '=', $servicesID)->get;
        return view('/CMS/services/services_update', compact('services'));
    }

    public function create() {
            return view('/CMS/services/services_create');
    }
    public function store(Request $request)
    {
        
        $services = new services;
        $services->servicesName = $request->servicesName; 
        $services->price = $request->price;
        $services->detail = $request->detail;
        $services->Time = $request->Time;
        $services->emplyeeImg = $request->emplyeeIMG;

        $services->save();
        return redirect()->action([CMSServicesController::class,'index']);
    }

    public function show($serviceID)
    {
        $service = services::where('serviceID', '=', $serviceID)->select('*')->first();
        
        return view('/CMS/services/services_detail', compact('service'));
    }
    public function destroy($servicesID)
    {
        $servicess = services::where('servicesID', '=', $servicesID)->delete();
    
        return redirect()->action([CMSServicesController::class,'index'])->with('success','Dữ liệu xóa thành công.');
    }
}
