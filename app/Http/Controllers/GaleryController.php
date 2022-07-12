<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galery = Galery::all()->sortByDesc('id');
        return view('galery.index',compact('galery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'foto'=>'required',
                
            ],
            [
                'foto.required'=>'Gambar harus diisi',
            ]

        );

        $img = $request->file('foto'); //mengambil file dari form
        $filename = time() . "_" . $img->getClientOriginalName(); //mengambil dan mengedit nama file dari form
        $img->move('img', $filename); //proses memasukkan image ke dalam direktori laravel

        Galery::create([
            'gambar' => $filename,
        ]);

        return redirect('master-data/galery')->with('success', 'Data berhasil ditambahkan');

       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function show(Galery $galery)
    {
        return view('galery.detail', compact('galery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function edit(Galery $galery)
    {
        return view('galery.update', compact('galery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galery $galery)
    {
        $request->validate(
            [
                'foto'=>'required',
                
            ],
            [
                'foto.required'=>'Gambar harus diisi',
            ]

        );

        $img = $request->file('foto'); //mengambil file dari form
        $filename = time() . "_" . $img->getClientOriginalName(); //mengambil dan mengedit nama file dari form
        $img->move('img', $filename); //proses memasukkan image ke dalam direktori laravel

        $galery->update([
            'gambar' => $filename,
        ]);


        return redirect('master-data/galery')->with('status', 'Data berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galery $galery)
    {
        Galery::destroy('id', $galery->id);
        return redirect('/master-data/galery')->with('status', ' Data berhasil dihapus');
    }
}
