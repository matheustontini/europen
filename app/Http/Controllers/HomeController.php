<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function home()
    {
        return view('pages.home');
    }

    public function howitworks()
    {
        return view('pages.howitworks');
    }
    public function logout()
    {
        Auth::logout();
        return view('pages.home');
    }
    public function edit($id)
    {
        $user = User::find($id);
        return view('pages.edit_profile', compact('user'));
    }
    public function update(Request $request)
    {
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->city = $request->city;
        $user->country = $request->country;
        $user->phone = $request->phone;
        $user->save();
        
        return redirect(action('HomeController@edit', [$user->id]));
    }
}
