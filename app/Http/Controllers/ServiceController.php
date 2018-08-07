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

    public function showOneService($Service_Id)
    {
        return response()->json(Service::find($Service_Id));
    }

    public function create(Request $request)
    {
        $service = Service::create($request->all());

        return response()->json($service, 201);
    }

    public function update($Service_Id, Request $request)
    {
        $service = Service::findOrFail($Service_Id);
        $service->update($request->all());

        return response()->json($service->Service_Active, 200);
    }

    public function delete($Service_Id)
    {
        Service::findOrFail($Service_Id)->delete();
        return response('Deleted Successfully', 200);
    }
}
