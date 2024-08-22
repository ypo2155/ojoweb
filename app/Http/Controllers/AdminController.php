<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */



     public function login()
    {
        if(Auth::check()){
            return redirect(route('adminindex'));
        }
        return view('AdminAuth.login');
    }


    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)) {
            return redirect()->intended(route('adminindex'))->with('successlogin','Login Success');
        }
        return redirect('/ojoadmin/login')->with("errorlogin", "Login details are not valid");
    

    }


    public function register()
    {
        return view('AdminAuth.register');
    }

    public function registerPost(Request $request)
    {

       
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);
        
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        if(!$user) {
            return redirect(route('adminregister'))->with('errorregister','Registration failed, try again.');
        }
        return redirect('/ojoadmin/login')->with('successregister','registeration Success, Login to access the admin panel');
   

    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect(route('adminlogin'))->with('successlogout','logout Success');;
    }




    public function index()
    {
        $portfolios = Portfolio::all();
        $services = Service::all();
        $news = Blog::all();
        return view('admin.index', compact('portfolios', 'services','news'));
    }

    public function profile()
    {
        return view('Admin.profile');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
