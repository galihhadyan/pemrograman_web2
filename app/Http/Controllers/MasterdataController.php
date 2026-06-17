<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterdataController extends Controller
{
    public function index()
    {
        return view('master-data.main');
    }

    public function edit()
    {
        return view('master-data.edit');
    }

    public function delete()
    {
        return "Delete Master Data";
    }
}
