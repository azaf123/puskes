<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Treatment;
use App\Models\Patient;
use App\Models\Category;
use App\Models\Antrean;

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

    //   print reservation
    public function printPendaftaran(Reservation $reservation)
    {
        $session= session()->get('patient');
        
        return view('print.print-pendaftaran', compact('reservation'));
    }

    public function generatepdfPendaftaran(Reservation $reservation)
    {
        $pdf = PDF::loadView('print.print-pendaftaran', compact('reservation'));
        return $pdf->download('pendaftaran.pdf');
    }   // end print reservation

}
