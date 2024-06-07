<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PeriodController extends Controller
{
    public function index()
    {
        return view("admin.layouts.periode",[
            "title"=> "Periode",
        ]);
    }
}
