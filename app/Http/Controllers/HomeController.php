<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     * */

    public function adminHome()
    {
        return view('adminHome');
    }

    public function managerHome()
    {
        return view('managerHome');
    }
    // public function manager()
    // {
    //     return view('auth.registerman');
    // }
    // public function simpan(Request $request)
    // {
    //     $data = User::Create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => bcrypt($request->password),
    //         'type' => '2',
    //     ]);
    //     // $data = User::create([
    //     //     'name' => $data['name'],
    //     //     'email' => $data['email'],
    //     //     'password' => Hash::make($data['password']),
    //     //     'type' => 2,
    //     // ]);
    //     return redirect('/login');
    // }

    public function index()
    {
        return view('home');
    }
}
