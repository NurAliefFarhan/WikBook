<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
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
            return redirect('/dashboardUser/user')->with('successLogin', "Selamat anda telah success login"); 
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

    public function logout()
    {
        // menghapus history login
        Auth::logout();
        // mengarahkan ke halaman login lagi
        return redirect('/')->with('successLogout', 'Berhasil logout dari account!');
    }

    public function admin() 
    {
        // return view('dashboardAdmin.admin');
        // $users = User::where([
        //     ['id', '=', Auth::user()->id]])->get();  
        //tampilin file index di folder dashboard dan bawa data dari variable yang namanya todos ke fil tersebut
        // $users = User::all();
        return view('dashboardAdmin.admin'); 
    }

    public function userAdmin()
    {
        $users = User::all();
        return view('dashboardAdmin.user', compact('users'));
    }

    public function user()
    {
        return view('dashboard.dashboard-user');
    }


    public function book() 
    {
        $libraries = Library::all();
        return view('dashboardAdmin.book', compact('libraries'));
    }

    public function inputBook(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5',
            'writer' => 'required|min:5|max:20',
            'publisher' => 'required|min:5|max:20',
            'isbn' => 'required|min:15|max:17',
            'categoryBook' => 'required',
            'synopsis' => 'required',
            'file' => "required",
            'category' => 'required|min:5|max:12',
        ]);
        // tambah data ke db bagian table users
        Library::create([
            'title' => $request->title,
            'writer' => $request->writer,
            'publisher' => $request->publisher,
            'isbn' => $request->isbm,
            'categoryBook' => $request->categoryBook,
            'synopsis' => $request->synopsis,
            'file' => $request->file,
            'category' => $request->category,
            'status' => 0, 
            // 'password' => Hash::make($request->password), //request password itu adalah password  
        ]);
        return redirect('/dashboardAdmin/book')->with('successAdd', 'berhasil membuat category!'); //mereturn / lewat / , bukan lewat name yang diberikan 
    }

    public function category()
    {
        $category = Category::all(); 
        return view('dashboardAdmin.category', compact('category'));
    }

    public function inputCategory(Request $request)
    {
        $request->validate([
            'category' => 'required|min:5|max:12',
        ]);
        // tambah data ke db bagian table users
        Category::create([
            'category' => $request->category,
            'status' => 0, 
            // 'password' => Hash::make($request->password), //request password itu adalah password  
        ]);
        return redirect('/dashboardAdmin/category')->with('successAdd', 'berhasil membuat category!'); //mereturn / lewat / , bukan lewat name yang diberikan 
    }

    public function categoryDestroy($id)
    {
        Category::where('id', '=', $id)->delete(); 
        return redirect()->route('category')->with('successDelete', 'Berhasil menghapus data account'); 

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
    public function edit($id)
    {
        //menampilkan form edit data
        //ambil data dari db yang idnya sama dengan id yang dikirim dari routenya
        $user = User::Where('id', $id)->first();
        // lalu tampilkan halaman dari view edit dengan mengirim data yang ada di variable todo
        return view('dashboardAdmin.edit', compact('user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|min:9|max:25',
            'email' => 'required',
            'kota' => 'required',
            'nohp' => 'required|min:10|max:13',
            'password' => 'required|min:6|max:13',
        ]);
        // tambah data ke db bagian table users
        User::where('id', $id)->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'kota' => $request->kota,
            'nohp' => $request->nohp,  
            'password' => $request->password,
        ]);
        return redirect()->route('userAdmin')->with('successUpdate', 'berhasil Mengupdate data akun!'); //mereturn / lewat / , bukan lewat name yang diberikan 

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id', '=', $id)->delete(); 
        return redirect()->route('admin')->with('successDelete', 'Berhasil menghapus data account'); 

    }

}

