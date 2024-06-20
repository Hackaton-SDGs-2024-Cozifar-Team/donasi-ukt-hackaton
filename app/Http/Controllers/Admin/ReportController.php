<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DetailDonation;
use App\Models\DonationRegistration;
use App\Models\Periode;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        $tgl_awal = $request->input('tgl_awal');
        $tgl_akhir = $request->input('tgl_akhir');
        $id_periode = $request->input('periode');
        $id_periode1 = $request->input('periode1');

        $periode = Periode::orderBy('school_year', 'desc')->get();

        $donaturQuery = DetailDonation::query();

        if ($id_periode) {
            $donaturQuery->where('id_periode', $id_periode);
        }

        if ($tgl_awal) {
            $donaturQuery->whereDate('donation_date', '>=', $tgl_awal);
        }
        if ($tgl_akhir) {
            $donaturQuery->whereDate('donation_date', '<=', $tgl_akhir);
        }

        $id_periode1 = $request->input('periode1');

        $penerima = DonationRegistration::query();

        if ($id_periode1) {
            $penerima->where('id_periode', $id_periode1);
        }

        $penerima_donasi = $penerima->orderBy('id_periode', 'desc')->get();
        $donatur = $donaturQuery->orderBy('donation_date', 'desc')->get();

        return view("admin.layouts.report", [
            "title" => "Laporan",
            "periode" => $periode,
            "donatur" => $donatur,
            "penerima_donasi" => $penerima_donasi,
            "selected_periode" => $id_periode,
            "selected_tgl_awal" => $tgl_awal,
            "selected_tgl_akhir" => $tgl_akhir
        ]);
    }
}
