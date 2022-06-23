<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use PDF;

class ReportController extends Controller
{
    public function index()
    {
        $reservation = Reservation::all();
        return view('report.index',compact('reservation'));
    }
    
    public function cetakPertanggalWithoutFungsi($tglawal, $tglakhir){
        // dd($tglawal, $tglakhir);
        $tglpengunjung = Reservation::all()->whereBetween('created_at',[$tglawal,$tglakhir]);
        if($tglpengunjung->count() > 0){
            return view('report.cetak2',compact('tglpengunjung'));
           
        }else{
            return redirect()->back();
        }
        
       
    }
    // public function generatePdf(){
    //     $pdf = PDF::loadView('report.cetak2', compact('tglpengunjung'));
    //     return $pdf->download('pengunjung.pdf');
    // }


}
