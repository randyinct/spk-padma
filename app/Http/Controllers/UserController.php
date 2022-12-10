<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Contracts\Support\ValidatedData;
use \Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
// use Dotenv\Exception\ValidationException;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

        public function passwordIndex()
    {
        return view('dashboard.user.editPassword');
    }


    /**
     * UPDATE PASSWORD USER
     */
        public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:5|max:32|confirmed'
        ]);
        
        if (!Hash::check($request->current_password, Auth()->user()->password))
        {  
            throw ValidationException::withMessages([
                'current_password' => 'Your Current Password does not match with our record',
            ]);
        }
        
        auth()->user()->update([
            'password' => Hash::make($request->password)]);
        
        return back()->with('success', 'Password has been updated!');
    }


    /**
     * UPDATE PROFILE USER
     */
            public function profileIndex()
    {
        return view('dashboard.user.editProfile');
    }

            public function updateProfile(Request $request)
    {
        $rules =[
            'name' => 'required|min:5|max:64',
            'email' => 'required|email',
        ];

        if($request->username != auth()->user()->username){
            $rules['username'] = 'required|unique:users';
        }
        
        $validatedData = $request->validate($rules);

        auth()->user()->update($validatedData);

        return back()->with('success', 'Your profile has been updated!');
        // dd($validatedData);
    }


}
