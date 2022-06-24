<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Treatment;
use App\Models\Antrean;
use App\Models\Category;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patient = Patient::where('treatment_id', '!=', '3')->get();
        return view('pasien.index', compact('patient'));
    }
    public function pasienbaru()
    {
       
        $patient = Patient::where('treatment_id', 3)->get();
        return view('pasien.pasienbaru', compact('patient'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $session = session()->get('patient');
        $category = Category::all();
        $treatment = Treatment::all();
        $antrean = Antrean::all();
        return view('pasien.create', compact('category', 'treatment', 'antrean','session'));
    }

    public function createPasienBaru()
    {
        $session = session()->get('patient');
        $category = Category::all();
        $treatment = Treatment::all();
        $antrean = Antrean::all();
        return view('pasien.createPasienBaru', compact('category', 'treatment', 'antrean','session'));
    }

    public function nextpasienbaru()
    {
        $session = session()->get('patient');
        $category = Category::all();
        $treatment = Treatment::all();
        $antrean = Antrean::all();
        return view('pasien.reservation', compact('category', 'treatment', 'antrean' ,'session'));
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
                'noberobat' => 'required',
                'nama' => 'required',
<<<<<<< HEAD
                // 'nik' => 'required',
                'jeniskelamin' => 'required',
                'ttl' => 'required',
                // 'pendidikan' => 'required',
                // 'pekerjaan' => 'required',
                // 'nama_as' => 'required',
                // 'nama_ii' => 'required',
                // 'sukubangsa' => 'required',
                // 'agama' => 'required',
                // 'alamat' => 'required',
                // 'nohp' => 'required',
                // 'goldar' => 'required',
                // 'bahasa' => 'required',
=======
                'jeniskelamin' => 'required',
                'ttl' => 'required',
               
>>>>>>> 8e6a31a7ff5b310ec8057a83e7fc8acf8a579e6e


            ],
            [
                'noberobat.required' => 'No. Obat harus diisi',
                'nama.required' => 'Nama harus diisi',
<<<<<<< HEAD
                // 'nik.required' => 'NIK harus diisi',
                'jeniskelamin.required' => 'Jenis Kelamin harus diisi',
                'ttl.required' => 'TTL harus diisi',
                // 'pendidikan.required' => 'Pendidikan harus diisi',
                // 'pekerjaan.required' => 'Pekerjaan harus diisi',
                // 'nama_as.required' => 'Nama AS harus diisi',
                // 'nama_ii.required' => 'Nama II harus diisi',
                // 'sukubangsa.required' => 'Suku Bangsa harus diisi',
                // 'agama.required' => 'Agama harus diisi',
                // 'alamat.required' => 'Alamat harus diisi',
                // 'nohp.required' => 'No HP harus diisi',
                // 'goldar.required' => 'Goldar harus diisi',
                // 'bahasa.required' => 'Bahasa harus diisi',
=======
               
                'jeniskelamin.required' => 'Jenis Kelamin harus diisi',
                'ttl.required' => 'TTL harus diisi',



>>>>>>> 8e6a31a7ff5b310ec8057a83e7fc8acf8a579e6e
            ]
        );
        

        if(empty($request->session()->get('patient'))) {
            $request->session()->put('patient', $request->all());
        } else {
            $request->session()->forget('patient');
            $request->session()->put('patient', $request->all());
        }
 
        
        return redirect('master-data/reservation/create');
    }

    public function storePasienBaru(Request $request)
    {

        // return $request;
        $request->validate(
            [

                'nama' => 'required',
                'nik' => 'required',
                'jeniskelamin' => 'required',
                'ttl' => 'required',
                'pendidikan' => 'required',
                'pekerjaan' => 'required',
                'nama_as' => 'required',
                'nama_ii' => 'required',
                'sukubangsa' => 'required',
                'agama' => 'required',
                'alamat' => 'required',
                'nohp' => 'required',
                'goldar' => 'required',
                'bahasa' => 'required',

            ],
            [

                'nama.required' => 'Nama harus diisi',
                'nik.required' => 'NIK harus diisi',
                'jeniskelamin.required' => 'Jenis Kelamin harus diisi',
                'ttl.required' => 'TTL harus diisi',
                'pendidikan.required' => 'Pendidikan harus diisi',
                'pekerjaan.required' => 'Pekerjaan harus diisi',
                'nama_as.required' => 'Nama AS harus diisi',
                'nama_ii.required' => 'Nama II harus diisi',
                'sukubangsa.required' => 'Suku Bangsa harus diisi',
                'agama.required' => 'Agama harus diisi',
                'alamat.required' => 'Alamat harus diisi',
                'nohp.required' => 'No HP harus diisi',
                'goldar.required' => 'Goldar harus diisi',
                'bahasa.required' => 'Bahasa harus diisi',
            ]
        );

        Patient ::create(
            [
                'nama_pasien' => $request->nama,
                'nik' => $request->nik,
                'jenis_kelamin' => $request->jeniskelamin,
                'ttl' => $request->ttl,
                'pendidikan' => $request->pendidikan,
                'pekerjaan' => $request->pekerjaan,
                'ibu_istri' => $request->nama_as,
                'ayah_suami' => $request->nama_ii,
                'suku_bangsa' => $request->sukubangsa,
                'agama' => $request->agama,
                'alamat' => $request->alamat,
                'no_hp' => $request->nohp,
                'goldar' => $request->goldar,
                'bahasa' => $request->bahasa,
            ]
        );



        if(empty($request->session()->get('patient'))) {
            $request->session()->put('patient', $request->all());
        } else {
            $request->session()->forget('patient');
            $request->session()->put('patient', $request->all());
          
        }




        return redirect('master-data/reservation-baru/create');
    }

    public function storenextpasienbaru(Request $request)
    {

        $request->validate(
            [

                'poli' => 'required',
                'antrean' => 'required',

            ],
            [
                'poli.required' => 'Poli harus diisi',
                'antrean.required' => 'Antrean harus diisi',
            ]


        );

        // session
        $session = session()->get('patient');
        $session['poli'] = $request->poli;
        $session['antrean'] = $request->antrean;
        session()->put('patient', $session);


        // create pasien
        // dd($session);
        Patient ::create([
           
            'nama_pasien' => $session['nama'],
            'nik' => $session['nik'],
            'jenis_kelamin' => $session['jeniskelamin'],
            'ttl' => $session['ttl'],
            'pendidikan' => $session['pendidikan'],
            'pekerjaan' => $session['pekerjaan'],
            'ibu_istri' => $session['nama_as'],
            'ayah_suami' => $session['nama_ii'],
            'suku_bangsa' => $session['sukubangsa'],
            'agama' => $session['agama'],
            'alamat' => $session['alamat'],
            'no_hp' => $session['nohp'],
            'goldar' => $session['goldar'],
            'bahasa' => $session['bahasa'],
            'category_id' => $session['poli'],
            'antrean_id' => $session['antrean'],
            // 'treatment_id' => $session['noberobat'],

        ]);



        return redirect('master-data/pasienbaru/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        $treatment = Treatment::all();
        return view('pasien.show', compact('patient' ,'treatment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        $category = Category::all();
        $treatment = Treatment::all();
        $antrean = Antrean::all();
        return view('pasien.update', compact('patient', 'category', 'treatment', 'antrean'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        $request->validate(
            [
                'noberobat' => 'required',
                'nama' => 'required',
                'nik' => 'required',
                'jeniskelamin' => 'required',
                'ttl' => 'required',
                'pendidikan' => 'required',
                'pekerjaan' => 'required',
                'nama_as' => 'required',
                'nama_ii' => 'required',
                'sukubangsa' => 'required',
                'agama' => 'required',
                'alamat' => 'required',
                'nohp' => 'required',
                'goldar' => 'required',
                'bahasa' => 'required',
                'keluhan' => 'required',
                'poli' => 'required',
                'antrean' => 'required',
            ],
            [
                'noberobat.required' => 'No. Obat harus diisi',
                'nama.required' => 'Nama harus diisi',
                'nik.required' => 'NIK harus diisi',
                'jeniskelamin.required' => 'Jenis Kelamin harus diisi',
                'ttl.required' => 'TTL harus diisi',
                'pendidikan.required' => 'Pendidikan harus diisi',
                'pekerjaan.required' => 'Pekerjaan harus diisi',
                'nama_as.required' => 'Nama AS harus diisi',
                'nama_ii.required' => 'Nama II harus diisi',
                'sukubangsa.required' => 'Suku Bangsa harus diisi',
                'agama.required' => 'Agama harus diisi',
                'alamat.required' => 'Alamat harus diisi',
                'nohp.required' => 'No HP harus diisi',
                'goldar.required' => 'Goldar harus diisi',
                'bahasa.required' => 'Bahasa harus diisi',
                'keluhan.required' => 'Keluhan harus diisi',
                'poli.required' => 'Poli harus diisi',
                'antrean.required' => 'Antrean harus diisi',

            ]
        );

        Patient::where('id', $patient->id)->update(
            [
                'treatment_id' => $request->noberobat,
                'nama_pasien' => $request->nama,
                'nik' => $request->nik,
                'jeniskelamin' => $request->jeniskelamin,
                'ttl' => $request->ttl,
                'pendidikan' => $request->pendidikan,
                'pekerjaan' => $request->pekerjaan,
                'ayah_suami' => $request->nama_as,
                'ibu_istri' => $request->nama_ii,
                'suku_bangsa' => $request->sukubangsa,
                'agama' => $request->agama,
                'alamat' => $request->alamat,
                'no_hp' => $request->nohp,
                'goldar' => $request->goldar,
                'bahasa' => $request->bahasa,
                'keluhan' => $request->keluhan,
                'category_id' => $request->poli,
                'antrean_id' => $request->antrean,
            ]
        );

        return redirect('master-data/patient')->with('status', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        dd($patient);
        Patient::where('id', $patient->id)->delete();
        return redirect('master-data/pasien')->with('status', 'Data berhasil dihapus');
    }

    public function destroyPasienBaru(Patient $patient)
    {
        Patient::where('id', $patient->id)->delete();
        return redirect('master-data/pasienbaru')->with('status', 'Data berhasil dihapus');
    }

    public function getDataPatient($id)
    {
// get data patient by id
        $patient = Patient::find($id);
        return response()->json($patient);
    }
}
