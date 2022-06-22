<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = Article::all();
        return view('article.index', compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.create');
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

        Article::create(
            [
                'judul' => $request->judul,
                'konten' => $request->konten,
                'gambar' => $filename,
            ]
        );

        return redirect('master-data/article')->with('status', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('article.update', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
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
            Article::where('id', $article->id)->update(
                [
                    'judul' => $request->judul,
                    'konten' => $request->konten,
                    'gambar' => $filename,
                ]
            );
        } else {
            Article::where('id', $article->id)->update(
                [
                    'judul' => $request->judul,
                    'konten' => $request->konten,

                ]
            );
        }


        return redirect('master-data/article')->with('status', 'Data berhasil diubah');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {

        Article::destroy('id', $article->id);
        return redirect('/master-data/article')->with('status', ' Data berhasil dihapus');
    }
}
