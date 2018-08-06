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

    public function showOneService($id)
    {
        return response()->json(Service::find($id));
    }

    public function create(Request $request)
    {
        $service = Service::create($request->all());

        return response()->json($service, 201);
    }

    public function update($id, Request $request)
    {
        $service = Service::findOrFail($id);
        $service->update($request->all());

        return response()->json($service, 200);
    }

    public function delete($id)
    {
        Service::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
