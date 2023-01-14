<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use App\Http\Resources\ServicesResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServicesController extends Controller
{

    public function allServices()
    {
        $services = Service::with('category')->with('variations')->get();

        return ServicesResource::collection( $services );
    }

    public function indexPageServices(): AnonymousResourceCollection
    {
        $services = Service::whereIn('id', [1, 2, 6])->with('category')->with('variations')->get();

        return ServicesResource::collection( $services );
    }
}
