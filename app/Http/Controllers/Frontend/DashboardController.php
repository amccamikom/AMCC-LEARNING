<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Information;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $information = Information::first();

        return view('frontend.dashboard', compact('information'));
    }
}
