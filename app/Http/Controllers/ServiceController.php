<?php

namespace App\Http\Controllers;

use App\Http\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $service = Service::all();
        return view('page.service',['service' => $service]);
    }
}
