<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;  
use App\Models\Patient;
use App\Models\Category;
use App\Models\Antrean;
use App\Models\Article;
use App\Models\Reservation;
use App\Models\Galery;
use App\Models\Treatment;
use App\Models\Layanan;
use App\Models\Header;
use Illuminate\Support\Facades\Redis;

class FrontController extends Controller
{
    public function index()
    {
        $doctor = Doctor::all();
        $article = Article::all();
        $galery = Galery::all();
        $layanan = Layanan::all();
        $header = Header::all();
        return view('front.tampilan.index' , compact('doctor', 'article', 'galery','layanan','header'));
    }
    public function pendaftaran()
    {
        return view('front.tampilan.pendaftaran');
    }
    public function pendaftaranPasienBaru()
    {
        $treatment = Treatment::all();
        return view('front.tampilan.pendaftaran-pasienbaru' , compact('treatment'));
    }

    public function pendaftaranPasienLama()
    {
        $treatment = Treatment::all();
        return view('front.tampilan.pendaftaran-pasienlama' , compact('treatment'));
    }


    public function storependaftaranPasienBaru(Request $request)
    {
        // return $request;
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
                'treatment_id' => $request->noberobat,
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

        
        return redirect('/reservasi/create')->with('success', 'Pendaftaran berhasil');
    }
    public function storependaftaranPasienLama(Request $request)
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
                'nik.required' => 'NIK harus diisi',
                'ttl.required' => 'TTL harus diisi',
                
            ]
        );

        if(empty($request->session()->get('patient'))) {
            $request->session()->put('patient', $request->all());
        } else {
            $request->session()->forget('patient');
            $request->session()->put('patient', $request->all());
          
        }

        return redirect('/reservasi-lama/create');

        
    }

    public function reservasiLama()
    {
        $session = session()->get('patient');
        // dd($session);
        $patient = Patient::where('id', $session['nama'])->get();
        $category = Category::all();
        $antrean = Antrean::all();
    $treatment =Treatment::where('id', $session['noberobat'])->get();
        $antrean = Antrean::where('status','inaktif')->get();
        return view('front.tampilan.reservasi-lama', compact('patient', 'category', 'antrean','treatment', 'antrean', 'treatment'));
    }
    public function reservasi()
    {
        $session = session()->get('patient');
        // dd($session);
        $patient = Patient::where('nama_pasien', '=', $session['nama'])->get();
        $category = Category::all();
        $antrean = Antrean::where('status','inaktif')->get();
        return view('front.tampilan.reservasi', compact('patient', 'category', 'antrean'));
    }

    public function reservasiStoreLama(Request $request)
    {
        $request->validate(
            [
                'noberobat' => 'required',
                'nama'=>'required',
                'poli'=>'required',
                'antrean'=>'required',

            ],
            [
                'noberobat' => 'Nama harus diisi',
                'nama.required'=>'Nama harus diisi',
                'poli.required'=>'Poli harus diisi',
                'antrean.required'=>'Antrean harus diisi',
            ]
        );

             Reservation::create(
            [
                'treatment_id' => $request->noberobat,
                'patient_id'=>$request->nama,
                'category_id'=>$request->poli,
                'antrean_id'=>$request->antrean,               
                
            ]
        );
        Antrean::where('id',$request->antrean)->update([
            'status'=>'aktif',
        ]);

        

        return redirect('/' )->with('success', 'Berhasil ditambahkan');
    }
    public function reservasiStore(Request $request)
    {
        $request->validate(
            [
                'noberobat' => 'required',
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
                'treatment_id' => $request->noberobat,
                'patient_id'=>$request->nama,
                'category_id'=>$request->poli,
                'antrean_id'=>$request->antrean,               
                
            ]
        );
        Antrean::where('id',$request->antrean)->update([
            'status'=>'aktif',
        ]);


        return redirect('/' )->with('success', 'Berhasil ditambahkan');
    }
    

    public function profil()
    {
        return view('front.tampilan.profil');
    }
    public function article()
    {
        $article = Article::all();
        return view('front.tampilan.artikel' ,compact('article'));
    }
    public function galery()
    {
        $galery = Galery::all();
        return view('front.tampilan.galery' ,compact('galery'));
    }

    public function pasienReservasi($id){

        
        $patient = Patient::where('treatment_id',$id)->get();
        return response()->json($patient);
    }
}
