<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Treatment;
use App\Models\Antrean;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
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
        $patient = Patient::where('no_rm', '!=', 'Belum Ada')->get()->sortBydesc('id');
        return view('pasien.index', compact('patient'));
    }
    public function pasienbaru()
    {
       
        $patient = Patient::where('no_rm','=', 'Belum Ada')->get()->sortByDesc('id');

        return view('pasien.pasienbaru', compact('patient'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $norm = $this->getLastCode();
        $session = session()->get('patient');
        $category = Category::all();
        $treatment = Treatment::all();
        $antrean = Antrean::all();
        $patient = Patient::all();
        // dd($norm);
        return view('pasien.create', compact('category', 'treatment', 'antrean','session', 'norm','patient'));
    }

    public function createPasienBaru()
    {
        $norm = $this->getLastCode();
        $session = session()->get('patient');
        $category = Category::all();
        $treatment = Treatment::all();
        $antrean = Antrean::all();
        return view('pasien.createPasienBaru', compact('category', 'treatment', 'antrean','session','norm'));
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
                'jeniskelamin' => 'required',
                'ttl' => 'required',
               


            ],
            [
                'noberobat.required' => 'No. Obat harus diisi',
                'nama.required' => 'Nama harus diisi',
               
                'jeniskelamin.required' => 'Jenis Kelamin harus diisi',
                'ttl.required' => 'TTL harus diisi',



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
                'no_rm' => 'required',


                'nama' => 'required',
                'nik' => 'required|unique:patients,nik',

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


                'no_rm.required' => 'No. RM harus diisi',
                'nama.required' => 'Nama harus diisi',
                'nik.required' => 'NIK harus diisi',
                'nik.unique' => 'NIK sudah terdaftar',
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
                'no_rm' => $request->no_rm,
                'nama_pasien' => $request->nama,
                'nik' => $request->nik,
                'jenis_kelamin' => $request->jeniskelamin,
                'ttl' => $request->ttl,
                'pendidikan' => $request->pendidikan,
                'pekerjaan' => $request->pekerjaan,
                'ibu_istri' => $request->nama_ii,
                'ayah_suami' => $request->nama_as,
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

    public function getLastCode(){
        $datas =  DB::select("SELECT MAX(RIGHT(no_rm, 4)) as lastcode FROM patients");
        $kd = "";
        if ($datas){
            foreach ($datas as $k) {
                $tmp = ((int)$k->lastcode)+1;
                $kd = sprintf("%04s", $tmp);
            }
        } else {
            
            $kd = "0001";
            
        }
        return "A". $kd;
    }
  

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        return view('pasien.detail', compact('patient'));   
    }
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
    //    dd($patient);
    $norm = $this->getLastCode();
        $category = Category::all();
        $treatment = Treatment::all();
        $antrean = Antrean::all();
        return view('pasien.update', compact('patient', 'category', 'treatment', 'antrean','norm'));
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
        // return $request;
        $request->validate(
            [
                'noberobat' => 'required',
                'nama' => 'required',
                'nik' => 'required|unique:patients,nik',
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
                'noberobat.required' => 'No. Obat harus diisi',
                'nama.required' => 'Nama harus diisi',
                'nik.required' => 'NIK harus diisi',
                'nik.unique' => 'NIK sudah ada',
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

        Patient::where('id', $patient->id)->update(
            [
                'no_rm' => $request->noberobat,
                'nama_pasien' => $request->nama,
                'nik' => $request->nik,
                'jenis_kelamin' => $request->jeniskelamin,
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
               
            ]
        );

    //    if treatment_id == 3 return pasienbaru
        if ($request->noberobat == 3) {
            return redirect('master-data/pasienbaru/');
        } else {
            return redirect('master-data/patient/');
        }
        
        // return redirect('master-data/pasienbaru')->with('status', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        // dd($patient);
        Patient::where('id', $patient->id)->delete();
            //    if treatment_id == 3 return pasienbaru
            if ($patient->no_rm == 'Belum Ada') {
                return redirect('master-data/pasienbaru/');
            } else {
                return redirect('master-data/patient/');
            }
        // return redirect('master-data/patient')->with('status', 'Data berhasil dihapus');
        
    }


    public function getDataPatient($id)
    {
// get data patient by id
        $patient = Patient::find($id);
        return response()->json($patient);
    }
}
