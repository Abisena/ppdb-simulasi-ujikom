<?php

namespace App\Http\Controllers;

use App\Models\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('layouts.landing.landing');
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
    public function store(Request $request) {
        $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required',
        ],
        [
            //costom massage
            'email.exists' => 'usersame ini belum tersedia',
            'email.required' => 'username harus diisi',
            'password.required' => 'password harus diisi'
        ],
     );

     $user = $request->only('email', 'password');

     if(Auth::attempt($user)){
        return redirect()->route('/landing');
     }else{
        return redirect()->back()->with('error', "Gagal login, silahkan cek dan coba lagi!");
     }
    }
    /**
     * Display the specified resource.
     */
    public function show(Auth $auth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Auth $auth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Auth $auth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Auth $auth)
    {
        //
    }
}
