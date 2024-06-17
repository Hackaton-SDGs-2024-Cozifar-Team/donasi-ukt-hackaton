<?php

namespace App\Http\Controllers;

use App\Models\timeline;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $timelines = timeline::all();
        return view('all-role.layouts.index',[
            'timelines'=> $timelines
        ]);
    }
}