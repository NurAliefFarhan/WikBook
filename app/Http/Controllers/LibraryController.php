<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

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
            return redirect('/wikbook/dashboardUser/user')->with('successLogin', "Welcome!"); 
        } else {
            // db('salah');
            return redirect('/login')->with('loginFail', "Email-Address And Password Are Wrong.");
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
            'role' => 'user',
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

//============================================ function user role ===============================================//

    public function user()
    {
        $libraries = Library::all();
        $category = Category::all(); //untuk mengambil data category yang ada di model Category semuanya 
        return view('dashboardUser.user', compact('libraries', 'category'));
    }


    public function readbook($id)
    {
        $category = Category::all(); //untuk mengambil data category yang ada di model Category semuanya 
        $libraries = Library::all();
        $libraries = Library::Where('id', $id)->first();
        return view('dashboardUser.readbook', compact('libraries', 'category'));
    }

    public function readbookprint($id)
    {
        $category = Category::all(); //untuk mengambil data category yang ada di model Category semuanya 
        $libraries = Library::all();
        $libraries = Library::Where('id', $id)->first();
        return view('dashboardUser.readbookprint', compact('libraries', 'category'));
    }



//============================================ function admin role ===============================================//
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

    public function userAdminprint()
    {
        $users = User::all();
        return view('dashboardAdmin.cetakuser', compact('users'));
    }


    public function edit($id)
    {
        //menampilkan form edit data
        //ambil data dari db yang idnya sama dengan id yang dikirim dari routenya
        $user = User::Where('id', $id)->first();
        // lalu tampilkan halaman dari view edit dengan mengirim data yang ada di variable todo
        return view('dashboardAdmin.edit', compact('user'));

    }

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
        return redirect()->route('wikbook.userAdmin')->with('successUpdate', 'Berhasil Mengupdate data akun!'); //mereturn / lewat / , bukan lewat name yang diberikan 

    }

    public function userdestroy($id)
    {
        User::where('id', '=', $id)->delete(); 
        return redirect()->route('wikbook.userAdmin')->with('successDelete', 'Berhasil menghapus data account'); 

    }


    

    public function book() 
    {
        $category = Category::all(); //untuk mengambil data category yang ada di model Category semuanya 
        $libraries = Library::all();
        return view('dashboardAdmin.book', compact('libraries', 'category'))->with('no');
    }

    public function inputBook(Request $request)
    {

        $request->validate([
            'title' => 'required|min:5',
            'writer' => 'required|min:5',
            'publisher' => 'required|min:5',
            'isbn' => 'required|min:10|max:17',
            'categoryBook' => 'required',
            'synopsis' => 'required|max:2000',
            'image' => 'required|image|mimes:jpg,png,jpeg|max:5048', 
        ]);

        //============================ Fungsi upload image move public  =======================================//
        // $image_file = $request->file('image'); //image file yang di upload akan tersimpan di dalam folder "image" 
        // $image_ekstensi = $image_file->extension(); //nama foto digabungkan dengan extensi nya 
        // $image_nama = date('ymdhis').'.'.$image_ekstensi; //nama image di ubah menjadi tanggal untuk meminimalisir kesalahan 
        // // $image_file->move(public_path('image'), $image_nama); 
        // $image_file->move(public_path('image'), $image_nama); 


    //============================ Fungsi upload image storage =======================================//
        $image_name = time().'.'.$request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('image', $image_name, 'public');
        
        // tambah data ke db bagian table Library 
        Library::create([
            'title' => $request->title,
            'writer' => $request->writer,
            'publisher' => $request->publisher,
            'isbn' => $request->isbn,
            'categoryBook' => $request->categoryBook,
            'synopsis' => $request->synopsis,
            // 'image' => $image_nama,
            'image' => $image_name,
            'status' => 0, 
            // 'password' => Hash::make($request->password), //request password itu adalah password  
        ]);


        // $name = $request->file('image')->getSize();
        // $name = $request->file('image')->getClientOriginalName();
        // $request->file('image')->storeAs('public/image/', $name);
        // $image = new Library();
        // $image->name = $name;
        // $image->save();

        
        return redirect('/wikbook/dashboardAdmin/book')->with('successAdd', 'Berhasil membuat Buku Baru!'); //mereturn / lewat / , bukan lewat name yang diberikan 
    }


    public function editbook($id)
    {
        // $libraries = Library::find($id);

        $category = Category::all(); //untuk mengambil data category yang ada di model Category semuanya 
        // $libraries = Library::all();

        //menampilkan form edit data
        //ambil data dari db yang idnya sama dengan id yang dikirim dari routenya
        $libraries = Library::Where('id', $id)->first();
        // lalu tampilkan halaman dari view edit dengan mengirim data yang ada di variable todo
        return view('dashboardAdmin.editbook', compact('libraries', 'category'));
    }

    public function updatebook(Request $request, $id)
    {
        // $libraries = Library::find($id);

        $request->validate([
            'title' => 'required|min:5',
            'writer' => 'required|min:5',
            'publisher' => 'required|min:5',
            'isbn' => 'required|min:10|max:17',
            'categoryBook' => 'required',
            'synopsis' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg|max:5048', 
        ]);
        // tambah data ke db bagian table Librarys
        $image_name = time().'.'.$request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('image', $image_name, 'public');
        
        Library::where('id', $id)->update([
            'title' => $request->title,
            'writer' => $request->writer,
            'publisher' => $request->publisher,
            'isbn' => $request->isbn,
            'categoryBook' => $request->categoryBook,
            'synopsis' => $request->synopsis,
            'image' => $image_name,
            'status' => 0, 
            // 'password' => Hash::make($request->password), //request password itu adalah password  
        ]);

        return redirect()->route('wikbook.book')->with('successUpdate', 'Berhasil Mengupdate data buku!'); //mereturn / lewat / , bukan lewat name yang diberikan 
    }


    public function bookDestroy($id)
    {
        // $file = File::find($id);
        // $file_name = $file->file;
        // $file_path = public_path('image/' .$file_name);
        // unlink($file_path);
        // $file->delete();

        Library::where('id', '=', $id)->delete(); 
        return redirect()->route('wikbook.book')->with('successDelete', 'Berhasil menghapus data buku'); 

    }

    public function store(Request $request)
    {
        //
    }



    public function category(Request $request)
    {
        // if($request){
        //     $category = Category::where('category', 'LIKE','%'.$request->search.'%')->get(); 
        // }else{
        //     $category = Category::all(); 
        // }

        $category = Category::all(); 
        return view('dashboardAdmin.category', compact('category'))->with('no');
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
        ]);
        return redirect('/wikbook/dashboardAdmin/category')->with('successAdd', 'berhasil membuat category!'); //mereturn / lewat / , bukan lewat name yang diberikan 
    }

    public function categoryDestroy($id)
    {
        Category::where('id', '=', $id)->delete(); 
        return redirect()->route('wikbook.category')->with('successDelete', 'Berhasil menghapus data account'); 
    }

    // public function categorysearch(Request $request) 
    // {
    //     if($request->has('search')){
    //         $category = Category::where('category', 'LIKE', '%' . $request->search.'%')->get();
    //     }else{
    //         $category = Category::all(); 
    //     }
    //     return view('dashboardAdmin.category', ['category' => $category]);

    // }


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


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Library  $library
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Library  $library
     * @return \Illuminate\Http\Response
     */
   

}

