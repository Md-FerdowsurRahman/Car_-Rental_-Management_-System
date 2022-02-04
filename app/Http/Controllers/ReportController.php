<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $rents = false;
        return view('reports', compact('rents'));
    }
    public function getReport(Request $request)
    {
        // dd($request->all());
        if ($request->status) {
            $rents = Rent::with(['user', 'car', 'rentplace', 'returnplace'])
                ->whereBetween('created_at', [$request->from, $request->to])
                ->where('rent_status', $request->status)
                ->get();
        } else {
            $rents = Rent::with(['user', 'car', 'rentplace', 'returnplace'])
                ->whereBetween('created_at', [$request->from, $request->to])
                ->get();
        }
        // dd($rents);
        return view('reports', compact('rents'));
    }
    public function downloadPdf(Request $request)
    {
        // dd($request->all());
        if ($request->status) {
            $parcels = Parcel::with(['user', 'sendBranch', 'receiveBranch'])
                ->whereBetween('created_at', [$request->from, $request->to])
                ->where('status', $request->status)
                ->get();
        } else {
            $parcels = Parcel::with(['user', 'sendBranch', 'receiveBranch'])
                ->whereBetween('created_at', [$request->from, $request->to])
                ->get();
        }
        // dump($parcels->toArray());
        // dump($request->parcels?->toArray());
        $data = $parcels->toArray();
        view()->share('parcels', $parcels);
        $pdf = PDF::loadView('report', $data);
        return $pdf->download('report_' . now()->format('Y/m/d h:i A') . '.pdf');
    }
}
