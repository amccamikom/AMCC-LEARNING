<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Information;
use Illuminate\Http\Request;

class InformationController extends Controller
{

    /**
     * Method For Get Information
     *
     * @return void
     */
    public function index()
    {
        $information = Information::first();

        return view('backend.information', compact('information'));
    }

    /**
     * Method For update information
     *
     * @param Request $request
     * @param Information $information
     * @return void
     */
    public function update(Request $request,Information $information)
    {
        $information->update($request->only('paragraph'));

        return redirect()->back();
    }
}
