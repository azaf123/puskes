<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use PDF;

class PrintController extends Controller
{
    public function index()
    {
        $reservation = Reservation::all();
        return view('print.index');
    }

    public function generatepdf()
    {

        $data = Reservation::all();
        $pdf = PDF::loadView('print.index', compact('data'));
        return $pdf->download('pendaftaran.pdf');
    }

}
