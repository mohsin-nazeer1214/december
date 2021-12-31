<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Doctor;


class DLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function show_login_form()
    {
        return view('login');
    }
    public function process_login(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->except(['_token']);

        $user = Doctor::where('name',$request->name)->first();

        if (auth()->attempt($credentials)) {

            return redirect()->route('doctor.dashbord');

        }else{
            session()->flash('message', 'Invalid credentials');
            return redirect()->back();
        }
    }
    public function logout()
    {
        \Auth::logout();

        return redirect()->route('login');
    }
}


