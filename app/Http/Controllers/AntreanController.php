<?php

namespace App\Http\Controllers;

use App\Models\Antrean;
use App\Models\Category;
use Illuminate\Http\Request;

class AntreanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $antrean = Antrean::all()->sortByDesc('id');
        return view('antrean.index', compact('antrean'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $antrean = Antrean::all();
        $category = Category::all();
        return view('antrean.create' , compact('antrean', 'category'));
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
                'noantrean'=>'required',
                'poli'=>'required',

            ],
            [
                'noantrean.required'=>'No Antrean harus diisi',
                'poli.required'=>'Poli harus diisi',

            ]
        );

        Antrean::create(
            [
                'no_antrean'=>$request->noantrean,
                'category_id'=>$request->poli,
                'status'=>'inaktif',
            ]
            
        );
        return redirect('master-data/antrean')->with('status', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Antrean  $antrean
     * @return \Illuminate\Http\Response
     */
    public function show(Antrean $antrean)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Antrean  $antrean
     * @return \Illuminate\Http\Response
     */
    public function edit(Antrean $antrean)
    {
        $category = Category::all();
        return view('antrean.update', compact('antrean', 'category'));
        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Antrean  $antrean
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Antrean $antrean)
    {
        // return $request;
        $request->validate(
            [
                'noantrean'=>'required',
                'poli'=>'required',

            ],
            [
                'noantrean.required'=>'No Antrean harus diisi',
                'poli.required'=>'Poli harus diisi',

            ]
        );

        Antrean::where('id', $antrean->id)->update(
            [
                'no_antrean'=>$request->noantrean,
                'category_id'=>$request->poli,
            ]
            
        );
        return redirect('master-data/antrean')->with('status', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Antrean  $antrean
     * @return \Illuminate\Http\Response
     */
    public function destroy(Antrean $antrean)
    {
        Antrean::destroy('id', $antrean->id);
        return redirect('/master-data/antrean')->with('status', ' Data berhasil dihapus');
    }
}
