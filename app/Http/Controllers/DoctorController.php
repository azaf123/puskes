<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctor = Doctor::all();
        return view('doctor.index', compact('doctor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctor = Doctor::all();
        return view('doctor.create', compact('doctor'));
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
                'nama' => 'required',
                'alamat' => 'required',
                'spesialisasi' => 'required',
                'nohp' => 'required',
                'foto' => 'required',
            ],
            [
                'nama.required' => 'Nama harus diisi',
                'alamat.required' => 'Alamat harus diisi',
                'spesialisasi.required' => 'Spesialisasi harus diisi',
                'nohp.required' => 'No HP harus diisi',
                'foto.required' => 'Foto harus diisi',
            ]

        );

        $img = $request->file('foto'); //mengambil file dari form
        $filename = time() . "_" . $img->getClientOriginalName(); //mengambil dan mengedit nama file dari form
        $img->move('img', $filename); //proses memasukkan image ke dalam direktori laravel

        Doctor::create(
            [
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'spesialisasi' => $request->spesialisasi,
                'no_hp' => $request->nohp,
                'foto' => $filename,
            ]
        );

        return redirect('master-data/doctor')->with('status', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        return view('doctor.update', compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        $request->validate(
            [
                'nama' => 'required',
                'alamat' => 'required',
                'spesialisasi' => 'required',
                'nohp' => 'required',
                'foto' => 'required',
            ],
            [
                'nama.required' => 'Nama harus diisi',
                'alamat.required' => 'Alamat harus diisi',
                'spesialisasi.required' => 'Spesialisasi harus diisi',
                'nohp.required' => 'No HP harus diisi',
                'foto.required' => 'Foto harus diisi',
            ]

        );
        if ($request->foto != null) {
            $img = $request->file('foto'); //mengambil dari form
            $filename = time() . "_" . $img->getClientOriginalName();
            $img->move('img', $filename);
            Doctor::where('id', $doctor->id)->update(
                [
                    'nama' => $request->nama,
                    'alamat' => $request->alamat,
                    'spesialisasi' => $request->spesialisasi,
                    'no_hp' => $request->nohp,
                    'foto' => $filename,
                ]
            );
        } else {
            Doctor::where('id', $doctor->id)->update(
                [
                    'nama' => $request->nama,
                    'alamat' => $request->alamat,
                    'spesialisasi' => $request->spesialisasi,
                    'no_hp' => $request->nohp,

                ]
            );
        }

        return redirect('master-data/doctor')->with('status', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        Doctor::destroy($doctor->id);
        return redirect('master-data/doctor')->with('status', 'Data berhasil dihapus');
    }
}
