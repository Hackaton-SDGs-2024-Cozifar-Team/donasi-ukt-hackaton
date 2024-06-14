<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TimelineController extends Controller
{
    public function index()
    {
        return view("admin.layouts.timeline",[
            "title"=> "Time Line",
        ]);
    }

    public function create()
    {
        return view("admin.layouts.add-timeline",[
            "title"=> "Time Line",
        ]);
    }
}
