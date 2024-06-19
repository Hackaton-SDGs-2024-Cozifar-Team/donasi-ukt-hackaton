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

    public function edit($id)
    {
        $timeline =timeline::where("id_timeline",$id)->first();
        return view("admin.layouts.edit-timeline",[
            "title"=> "Edit timeline",
            "timeline"=> $timeline
        ]);
    }    

    public function update(Request $request, $id)
    {
        $request->validate([
            "stages"=> "required",
            "title_timeline"=> "required",
            "start"=> "required",
            "deadline"=> "required",
            "description"=> "required",
        ]);

        $timeline = timeline::where("id_timeline",$id)->first();
        $timeline->stages = $request->stages;
        $timeline->title_timeline = $request->title_timeline;
        $timeline->start = $request->start;
        $timeline->deadline = $request->deadline;
        $timeline->id_periode = 1;
        $timeline->description = $request->description;
        $timeline->save();

        return redirect()->route("timeline.index")->with("success","Data berhasil ditambahkan");
    }

    public function destroy($id)
    {
        $timeline = timeline::where("id_timeline",$id)->first();
        $timeline->delete();
        return redirect()->route("timeline.index")->with("success","Data berhasil dihapus");
    }
}
