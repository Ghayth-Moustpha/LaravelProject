<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::all();

        return view("services", ["services" => $services]);
    }

    public function show($id)
    {
        $service = Service::findOrFail($id);

        return view("service", ["service" => $service]);
    } 
}