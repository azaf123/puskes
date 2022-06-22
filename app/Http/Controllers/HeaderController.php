<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $header = Header::all();
        return view('header.index', compact('header'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('header.create');
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

        Header::create(
            [
                'judul' => $request->judul,
                'konten' => $request->konten,
                'gambar' => $filename,
            ]
        );

        return redirect('/master-data/header');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function show(Header $header)
    {
        return view('header.show', compact('header'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function edit(Header $header)
    {
        return view('header.update', compact('header'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Header $header)
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
            Header::where('id', $header->id)->update(
                [
                    'judul' => $request->judul,
                    'konten' => $request->konten,
                    'gambar' => $filename,
                ]
            );
        } else {
            Header::where('id', $header->id)->update(
                [
                    'judul' => $request->judul,
                    'konten' => $request->konten,

                ]
            );
        }


        return redirect('master-data/header')->with('status', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function destroy(Header $header)
    {
        Header::destroy('id', $header->id);
        return redirect('/master-data/header')->with('status', ' Data berhasil dihapus');
    }
}
