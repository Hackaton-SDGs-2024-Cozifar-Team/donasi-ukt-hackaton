<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TimelineRequest;
use App\Models\timeline;
use Illuminate\Http\Request;

class TimelineController extends Controller
{
    public function index()
    {
        $timeline =timeline::all();
        return view("admin.layouts.timeline",[
            "title"=> "Time Line",
            "timelines"=> $timeline
        ]);
    }

    public function create()
    {
        return view("admin.layouts.add-timeline",[
            "title"=> "Time Line",
        ]);
    }

    public function store(TimelineRequest $request)
    {
        foreach ($request->title_timeline as $key => $value) {
            timeline::create([
                "stages"=> $key+1,
                "id_periode"=> 1,
                "title_timeline"=> $value,
                "start"=> $request->start[$key],
                "deadline"=> $request->deadline[$key],
                "description"=> $request->description[$key],
            ]);
        }

        return redirect()->route("timeline.index")->with("success","Data berhasil ditambahkan");
    }
}
