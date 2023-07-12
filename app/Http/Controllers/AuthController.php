<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreregisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function register()
    {
        return view('register');
    }


    public function registerPost(StoreregisterRequest $request){
 
        $user = new User();
        $user ->name =$request->name;
        $user ->email =$request->email;
        $user ->password = Hash::make($request->password);
        $user->save();

        return redirect('/login')->with('success', 'register successfully');
    }

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
