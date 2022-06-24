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
        $reservation = Reservation::all()->sortByDesc('id');
        return view('reservasi.index', compact('reservation'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $session = session()->get('patient');
        //   dd($session);
        $patient = Patient::where('id', $session['nama'])->get();
        $category = Category::all();
        $antrean = Antrean::all();
        $treatment = Treatment::where('id', $session['noberobat'])->get();
        $antrean = Antrean::where('status', 'inaktif')->get();
        return view('reservasi.create', compact('category', 'antrean', 'patient', 'treatment'));
    }
    public function reservationBaru()
    {
        $session = session()->get('patient');
        // dd($session);
        $patient = Patient::where('nama_pasien', $session['nama'])->get();
        $category = Category::all();
        $antrean = Antrean::all();
        $treatment = Treatment::all();
        return view('reservasi.reservasi-baru', compact('patient', 'category', 'antrean', 'treatment'));
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
                'keluhan' => 'required',
                'noberobat' => 'required',
                'nama' => 'required',
                'poli' => 'required',
                'antrean' => 'required',

            ],
            [
                'keluhan.required' => 'Keluhan harus diisi',
                'noberobat' => 'Nama harus diisi',
                'nama.required' => 'Nama harus diisi',
                'poli.required' => 'Poli harus diisi',
                'antrean.required' => 'Antrean harus diisi',
            ]
        );

        Reservation::create(
            [
                'keluhan' => $request->keluhan,
                'treatment_id' => $request->noberobat,
                'patient_id' => $request->nama,
                'category_id' => $request->poli,
                'antrean_id' => $request->antrean,

            ]
        );
        if (empty($request->session()->get('patient'))) {
            $request->session()->put('patient', $request->all());
        } else {
            $request->session()->forget('patient');
            $request->session()->put('patient', $request->all());
        }
        Antrean::where('id', $request->antrean)->update([
            'status' => 'aktif',
        ]);

        return redirect('master-data/reservation')->with('success', 'Berhasil ditambahkan');
    }
    public function storeBaru(Request $request)
    {
        // return $request;
        $request->validate(
            [
                
                'keluhan' => 'required',
                'nama' => 'required',
                'poli' => 'required',
                'antrean' => 'required',

            ],
            [
               
                'keluhan.required' => 'Keluhan harus diisi',
                'nama.required' => 'Nama harus diisi',
                'poli.required' => 'Poli harus diisi',
                'antrean.required' => 'Antrean harus diisi',
            ]
        );

        Reservation::create(
            [
                'keluhan' => $request->keluhan,
                'treatment_id' => 3,
                'patient_id' => $request->nama,
                'category_id' => $request->poli,
                'antrean_id' => $request->antrean,

            ]
        );
        if (empty($request->session()->get('patient'))) {
            $request->session()->put('patient', $request->all());
        } else {
            $request->session()->forget('patient');
            $request->session()->put('patient', $request->all());
        }
        Antrean::where('id', $request->antrean)->update([
            'status' => 'aktif',
        ]);

        return redirect('master-data/reservation')->with('success', 'Berhasil ditambahkan');
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

    public function antreanToPoli($id)
    {

        $antrean = Antrean::where('category_id', $id)->where('status', 'inaktif')->get();

        return response()->json($antrean);
    }


    public function treatmentToPasien($id)
    {

        $patient = Patient::where('treatment_id', $id)->get();

        return response()->json($patient);
    }
}
