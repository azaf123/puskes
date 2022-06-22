<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Patient;
use App\Models\Category;
use App\Models\Antrean;
use App\Models\Treatment;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservation = Reservation::all();
        return view('reservasi.index',compact('reservation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        $category = Category::all();
        $antrean = Antrean::all();
        $patient = Patient::all();
        $treatment = Treatment::all();
        return view ('reservasi.create',compact('category','antrean','patient' ,'treatment'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $request->validate(
            [
                'nama'=>'required',
                'poli'=>'required',
                'antrean'=>'required',

            ],
            [
                'nama.required'=>'Nama harus diisi',
                'poli.required'=>'Poli harus diisi',
                'antrean.required'=>'Antrean harus diisi',
            ]
        );

             Reservation::create(
            [
                'patient_id'=>$request->nama,
                'category_id'=>$request->poli,
                'antrean_id'=>$request->antrean,               
                
            ]
        );

        return redirect('master-data/reservation' )->with('success', 'Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        Reservation::destroy('id', $reservation->id);
        Antrean::where('id', $reservation->antrean_id)->update([
            'status' => 'inaktif',
        ]);
        return redirect('/master-data/reservation')->with('status', ' Data berhasil dihapus');
    }

    public function antreanToPoli($id){
        
        $antrean = Antrean::where('category_id',$id)->where('status', 'inaktif')->get();
        
        return response()->json($antrean);
    }
    
    
    public function treatmentToPasien($id){
        
        $patient = Patient::where('treatment_id',$id)->get();
        
        return response()->json($patient);
    }
  
}
