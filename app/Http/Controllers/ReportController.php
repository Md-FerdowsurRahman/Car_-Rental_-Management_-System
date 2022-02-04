<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
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
            $rents = Rent::with(['user', 'car', 'rentplace', 'returnplace'])
                ->whereBetween('created_at', [$request->from, $request->to])
                ->where('rent_status', $request->status)
                ->get();
        } else {
            $rents = Rent::with(['user', 'car', 'rentplace', 'returnplace'])
                ->whereBetween('created_at', [$request->from, $request->to])
                ->get();
        }
        // dump($parcels->toArray());
        // dump($request->parcels?->toArray());
        $data = $rents->toArray();
        view()->share('rents', $rents);
        $pdf = PDF::loadView('report', $data);
        return $pdf->download('report_' . now()->format('Y/m/d h:i A') . '.pdf');
    }
}