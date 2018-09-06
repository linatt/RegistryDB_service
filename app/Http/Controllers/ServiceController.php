<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function showAllServices()
    {
        return response()->json(Service::all());
    }

    public function showOneService($Service_Name)
    {

      $service = Service::where('Service_Name', '=' , $Service_Name)->firstOrFail();

      $serviceLocation = $service->Service_Location;

        return $serviceLocation;
    }

    public function create(Request $request)
    {
        $service = Service::create($request->all());

        return response()->json($service, 201);
    }

    public function update($Service_Name, Request $request)
    {
        $service = Service::where('Service_Name', '=' , $Service_Name)->firstOrFail();
        $service->update($request->all());

        return response()->json($service->Service_Active, 200);
    }

    public function delete($Service_Id)
    {
        Service::findOrFail($Service_Id)->delete();
        return response('Deleted Successfully', 200);
    }
}
