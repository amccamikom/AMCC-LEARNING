<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{

    public function index()
    {
        $information = Information::first();

        return view('backend.information', compact('information'));
    }

    public function update(Request $request,Information $information)
    {
        $information->update($request->only('paragraph'));

        return redirect()->back();
    }
}
