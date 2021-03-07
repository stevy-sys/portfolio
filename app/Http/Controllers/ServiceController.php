<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $service = Service::all();
        return view('page.service',['service' => $service]);
    }
}
