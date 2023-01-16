<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon; 


class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function lending() 
    {
        return view('dashboard.lending');
    }

    public function login() 
    {
        return view('dashboard.login');
    }

    public function auth(Request $request)
    {
        $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required',
        ],[
            'email.exists' => "This email doesn't exists",
        ]);

        $user = $request->only('email', 'password');
        if (Auth::attempt($user)) {
            return redirect('/dashboard/user')->with('successLogin', "Selamat anda telah success login"); 
        } else {
            // db('salah');
            return redirect('/login')->with('loginFail', "Gagal login, periksa dan coba lagi!");
        }
    }

    public function register() 
    {
        return view('dashboard.register');
    }

    public function inputRegister(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:9|max:25',
            'email' => 'required',
            'kota' => 'required',
            'nohp' => 'required|min:10|max:13',
            'password' => 'required|min:6|max:13',
        ]);
        // tambah data ke db bagian table users
        User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'kota' => $request->kota,
            'nohp' => $request->nohp,
            'status' => 0, 
            'password' => Hash::make($request->password), //request password itu adalah password  
        ]);
        return redirect('/login')->with('success', 'berhasil membuat akun!'); //mereturn / lewat / , bukan lewat name yang diberikan 

        //return redirect('/cetakpdf')->with('success', 'Anda berhasil membuat akun!'); 
        // $ppdbs = User::latest()->first(); 
        // return view('dashboardStudent.cetakpdf', compact('ppdbs'));
    }


    public function user()
    {
        return view('dashboard.dashboard-user');
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
     * @param  \App\Models\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function show(Library $library)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function edit(Library $library)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Library $library)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function destroy(Library $library)
    {
        //
    }
}
