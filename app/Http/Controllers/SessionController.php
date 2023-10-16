<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function index()
    {
        return view('sesi/index');
    }
    function login(Request $request)
    {
        Session::flash('email', $request->email);
       $request->validate([
       'email' =>'required',
       'password' =>'required'
       ],[
        'email' =>'email wajib diisi',
        'password' =>'password wajib diisi'
       ]);

       $infologin = [
        'email' => $request->email,
        'password' => $request->password
       ];

       if(Auth::attempt($infologin)) {
        
        return redirect('homepage')->with('success', 'Login Success');
       }else {

        return redirect('sesi')->withErrors('User dan password tidak valid');
       }

    }

    function logout() {
        Auth::logout();
        return redirect('sesi')->with('success', 'Logout Success');
    }

}
