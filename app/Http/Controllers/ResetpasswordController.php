<?php

namespace App\Http\Controllers;

use App\Resetpassword;
use Illuminate\Http\Request;
use Auth;
use Hash;
use App\User;

class ResetpasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function reset_password()
    {
        return view('auth.passwords.resetpassword');
    }

    public function PasswordUpdate(Request $request)
    {
         $this->validate($request, [
            'old_password'     => 'required',
            'new_password'     => 'required|min:6',
            'confirm_password' => 'required|same:new_password',
        ]);

        $user = User::find(Auth::user()->id);

        if(!Hash::check($request->old_password, $user->password)){
            return back()->with('message','The specified password does not match the old password');
        }else{
           $user->password = bcrypt($request->new_password);
           $user->save();
           return back()->with('message','Password Updated Saccessfully!');
        }
    }

    public function index()
    {
        //
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
     * @param  \App\Resetpassword  $resetpassword
     * @return \Illuminate\Http\Response
     */
    public function show(Resetpassword $resetpassword)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Resetpassword  $resetpassword
     * @return \Illuminate\Http\Response
     */
    public function edit(Resetpassword $resetpassword)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Resetpassword  $resetpassword
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resetpassword $resetpassword)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Resetpassword  $resetpassword
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resetpassword $resetpassword)
    {
        //
    }
}
