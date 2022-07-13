<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('user.update', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate(
            [
                'bagian' => 'required',
                'name' => 'required|min:5|max:30',
                'email' => 'required|email',
             

            ],
            [
                'bagian.required' => 'Bagian harus diisi',
                'name.required' => 'Nama harus diisi',
                'name.min' => 'Nama minimal 5 karakter',
                'name.max' => 'Nama maksimal 30 karakter',
                'email.required' => 'Email harus diisi',
                'email.email' => 'Email tidak valid',
               ]

        );

        User::where('id', $user->id)->update(
            [
                'bagian' => $request->bagian,
                'name' => $request->name,
                'level' => 'admin',
             ]
        );
        return redirect('master-data/user')->with('status', 'Data berhasil diubah');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        // dd($user);
        User::where('id', $user->id)
        ->delete();
        // User::destroy('id', $user->id);
        return redirect('/master-data/user')->with('status', 'Berhasil Dihapus');
    }
}
