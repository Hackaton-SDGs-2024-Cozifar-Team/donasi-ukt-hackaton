<?php

namespace App\Http\Controllers\Admin;

use App\Models\Periode;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PeriodController extends Controller
{
    public function index()
    {
        $periode = Periode::all()->sortByDesc('id_periode');

        return view("admin.layouts.periode", [
            "title" => "Periode",
            "periode" => $periode
        ]);
    }

    public function create()
    {
        return view("admin.layouts.add_periode", [
            "title" => "Tambah Periode"
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'school_year' => 'required|max:10',
            'status_period' => 'required|max:20',
        ]);

        $newPeriode = Periode::create($validatedData);

        Periode::where('id_periode', '!=', $newPeriode->id_periode)
            ->update(['status_period' => 'Tidak Aktif']);

        return redirect()->route('periode.index');
    }
}
