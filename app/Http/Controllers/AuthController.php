<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('login.login');
    }

    public function registrasi()
    {
        return view('login.register');
    }

    public function registrasiStore(Request $request)
    {
        // return $request;

        $request->validate(
            [
                'bagian' => 'required',
                'name' => 'required|min:5|max:30',
                'email' => 'required|email',
                'password' => 'required|min:8',
                'confirm_password' => 'required|same:password'

            ],
            [
                'bagian.required' => 'Bagian harus diisi',
                'name.required' => 'Nama harus diisi',
                'name.min' => 'Nama minimal 5 karakter',
                'name.max' => 'Nama maksimal 30 karakter',
                'email.required' => 'Email harus diisi',
                'email.email' => 'Email tidak valid',
                'password.required' => 'Password harus diisi',
                'password.min' => 'Password minimal 8 karakter',
                'confirm_password.required' => 'Konfirmasi password harus diisi',
                'confirm_password.same' => 'Konfirmasi password harus sama dengan password'
            ]

        );

        User::create(
            [
                'bagian' => $request->bagian,
                'name' => $request->name,
                'level' => 'admin',
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]
        );

        return redirect('/login');
    }

    public function loginStore(Request $request)
    {
        // dd($request->all());
        // return $request;
        $request->validate(
            [

                'email' => 'required|email',
                'password' => 'required|min:8'
            ],
            [
                'email.required' => 'Email harus diisi',
                'email.email' => 'Email tidak valid',
                'password.required' => 'Password harus diisi',
                'password.min' => 'Password minimal 8 karakter'
            ]
        );

        $user = [
            'email' => $request->email,
            'password' => $request->password
        ];

        Auth::attempt($user);
        if (Auth::check()) {
            return redirect('/master-data/patient');
        } else {
            return redirect('/login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
