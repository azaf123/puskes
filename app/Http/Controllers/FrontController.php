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
use DateTime;
use Illuminate\Support\Facades\Redis;

class FrontController extends Controller
{
    public function index()
    {
        $doctor = Doctor::all();
        $article = Article::all();
        $galery = Galery::limit(3)->get();
        $layanan = Layanan::all();
        $header = Header::all();
        return view('front.tampilan.index', compact('doctor', 'article', 'galery', 'layanan', 'header'));
    }
    public function pendaftaran()
    {
        return view('front.tampilan.pendaftaran');
    }
    public function pendaftaranPasienBaru()
    {
        $treatment = Treatment::all();
        return view('front.tampilan.pendaftaran-pasienbaru', compact('treatment'));
    }

    public function pendaftaranPasienLama()
    {
        $treatment = Treatment::where('id', '!=', '3')->get();
        $patient = Patient::all();
        return view('front.tampilan.pendaftaran-pasienlama', compact('treatment', 'patient'));
    }


    public function storependaftaranPasienBaru(Request $request)
    {
        // return $request;
        $request->validate(
            [

                
                'nama' => 'required',
                'nik' => 'required|unique:patients,nik',
                'jeniskelamin' => 'required',
                'tempatlahirr' => 'required',
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
                'nik.unique' => 'NIK sudah ada',
                'jeniskelamin.required' => 'Jenis Kelamin harus diisi',
                'tempatlahirr.required' => 'TTL harus diisi',
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

        Patient::create(
            [
                'no_rm' =>'Belum Ada',
                'nama_pasien' => $request->nama,
                'nik' => $request->nik,
                'jenis_kelamin' => $request->jeniskelamin,
                'tempatlahirr' => $request->jeniskelamin,
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


        if (empty($request->session()->get('patient'))) {
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

        if (empty($request->session()->get('patient'))) {
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
        $treatment = Treatment::where('id', $session['noberobat'])->get();
        $antrean = Antrean::where('status', 'inaktif')->get();
        return view('front.tampilan.reservasi-lama', compact('patient', 'category', 'antrean', 'treatment', 'antrean', 'treatment'));
    }
    public function reservasi()
    {
        $session = session()->get('patient');
        // dd($session);
        $patient = Patient::where('nama_pasien', '=', $session['nama'])->get();
        $category = Category::all();
        $antrean = Antrean::where('status', 'inaktif')->get();
        return view('front.tampilan.reservasi', compact('patient', 'category', 'antrean'));
    }

    public function reservasiStoreLama(Request $request)
    {
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

        $print = Reservation::create(
            [
                'keluhan' => $request->keluhan,
                'no_rm' => $request->noberobat,
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

        $getdata = Reservation::where('id', $print->id)->first();
        // for tommorow date
        $date = date('d-m-Y', strtotime('+1 day'));
        $getdata->update([
            'created_at' => $date,
        ]);
        
        
        return view('print.print-pendaftaran', compact('getdata', 'date'));
        // return redirect('/print-reservation')->with('success', 'Berhasil ditambahkan');
    }

    public function reservasiStore(Request $request)
    {
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
                'nama.required' => 'Nama harus diisi',
                'poli.required' => 'Poli harus diisi',
                'antrean.required' => 'Antrean harus diisi',
            ]
        );

         $print = Reservation::create(
            [
                'keluhan' => $request->keluhan,
                'no_rm' => $request->noberobat,
                'patient_id' => $request->nama,
                'category_id' => $request->poli,
                'antrean_id' => $request->antrean,

            ]
        );
        Antrean::where('id', $request->antrean)->update([
            'status' => 'aktif',
        ]);

        if (empty($request->session()->get('patient'))) {
            $request->session()->put('patient', $request->all());
        } else {
            $request->session()->forget('patient');
            $request->session()->put('patient', $request->all());
        }
        $getdata = Reservation::where('id', $print->id)->first();
        // dd($getdata);
        $date = date('Y-m-d', strtotime('+1 day'));
        $getdata->update([
            'created_at' => $date,
        ]);
        
        return view('print.print-pendaftaran', compact('getdata'));
        // return redirect('/print-pendaftaran')->with('success', 'Berhasil ditambahkan');

    }


    public function profil()
    {
        return view('front.tampilan.profil');
    }
    public function article()
    {
        $article = Article::all();
        return view('front.tampilan.artikel', compact('article'));
    }
    public function galery()
    {
        $galery = Galery::all();
        return view('front.tampilan.galery', compact('galery'));
    }

    public function pasienReservasi($id)
    {
        $patient = Patient::where('treatment_id', $id)->get();
        return response()->json($patient);
    }
}
