<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $layanan = Layanan::all()->sortByDesc('id');
        return view('layanan.index', compact('layanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layanan.create');
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
                'judul' => 'required',
                'konten' => 'required',
                'foto' => 'required',
            ],
            [
                'judul.required' => 'Judul harus diisi',
                'konten.required' => 'Isi harus diisi',
                'foto.required' => 'foto harus diisi',
            ]

        );

        $img = $request->file('foto'); //mengambil file dari form
        $filename = time() . "_" . $img->getClientOriginalName(); //mengambil dan mengedit nama file dari form
        $img->move('img', $filename); //proses memasukkan image ke dalam direktori laravel

        Layanan::create(
            [
                'judul' => $request->judul,
                'konten' => $request->konten,
                'gambar' => $filename,
            ]
        );

        return redirect('master-data/layanan')->with('status', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function show(Layanan $layanan)
    {
        return view('layanan.show', compact('layanan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Layanan $layanan)
    {
        return view('layanan.update', compact('layanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Layanan $layanan)
    {
        // return $request;
        $request->validate(
            [
                'judul' => 'required',
                'konten' => 'required',
                'foto' => 'required',
            ],
            [
                'judul.required' => 'Judul harus diisi',
                'konten.required' => 'Isi harus diisi',
                'foto.required' => 'foto harus diisi',
            ]

        );

        if ($request->foto != null) {
            $img = $request->file('foto'); //mengambil dari form
            $filename = time() . "_" . $img->getClientOriginalName();
            $img->move('img', $filename);
            Layanan::where('id', $layanan->id)->update(
                [
                    'judul' => $request->judul,
                    'konten' => $request->konten,
                    'gambar' => $filename,
                ]
            );
        } else {
            Layanan::where('id', $layanan->id)->update(
                [
                    'judul' => $request->judul,
                    'konten' => $request->konten,

                ]
            );
        }


        return redirect('master-data/layanan')->with('status', 'Data berhasil diubah');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Layanan $layanan)
    {
        // dd($layanan);
        Layanan::destroy('id', $layanan->id);
        return redirect('/master-data/layanan')->with('status', ' Data berhasil dihapus');
    }
}
