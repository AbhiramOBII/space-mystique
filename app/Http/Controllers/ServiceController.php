<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of active services.
     */
    public function index()
    {
        $services = Service::active()->get();
        return view('services.index', compact('services'));
    }

    /**
     * Display the specified service.
     */
    public function show(Service $service)
    {
        // Only show active services on front-end
        if (!$service->isActive()) {
            abort(404);
        }

        return view('services.show', compact('service'));
    }
}
