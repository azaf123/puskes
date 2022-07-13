<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all()->sortByDesc('id');
        return view('kategori.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori.create');
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
              'poli'=>'required',
              'ruangan'=>'required',

            ],
            [
                'poli.required'=>'Poli harus diisi',
                'ruangan.required'=>'Ruangan harus diisi',
            
            ]
        );

        Category::create(
            [
                'nama_kategori'=>$request->poli,
                'ruangan'=>$request->ruangan,
            ]
            
        );
      
        return redirect('/master-data/category')->with('status','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        
        return view('kategori.update', compact('category'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate(
            [
              'poli'=>'required',
              'ruangan'=>'required',

            ],
            [
                'poli.required'=>'Poli harus diisi',
                'ruangan.required'=>'Ruangan harus diisi',
            
            ]
        );

        Category::where('id',$category->id)->update(
            [
                'nama_kategori'=>$request->poli,
                'ruangan'=>$request->ruangan,
            ]
            
        );
      
        return redirect('/master-data/category')->with('status','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        Category::destroy('id', $category->id);
        return redirect('/master-data/category')->with('status', ' Data berhasil dihapus');
    }
}
