<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class ReqisterUserController extends Controller
{
    public function create () {
//        dd('hello ');
        return view('auth.reqister');
    }

    public function store ( )
    {

        //    validate
       $attributes =  request()->validate([
            'name' => 'required',
            'email' => ['required' , 'email'],
            'password' => ['required' , Password::min(6) , 'confirmed'],
        ]);
//      dd($attributes);

//    create user
       $user =  User::create($attributes);
//
//        log in
        Auth::login($user);
        return redirect('/jobs');
    }

}
