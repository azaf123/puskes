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

    public function print($id)
    {
        $patient = Patient::find($id);
        $reservation = Reservation::where('patient_id', $id)->get();
     
        return view('print.identitas', compact('patient', 'reservation'));       
    }
    public function printReservasi($id)
    {
     $reservation = Reservation::find($id);
        return view('print.reservasi', compact('reservation'));
    }
    public function generatepdfPatient($id)
    {
        $patient = Patient::find($id);
        $pdf = PDF::loadView('print.identitas', compact('patient'));
        return $pdf->download('identitas-pasien.pdf');
      
    }
    public function generatepdfReservasi($id)
    {
        $reservation = Reservation::find($id);
        $pdf = PDF::loadView('print.reservasi', compact( 'reservation'));
        return $pdf->download('reservasi-pasien.pdf');
    }
    public function index()
    {
        $reservation = Reservation::all();
        return view('print.index');
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
