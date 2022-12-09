<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class LeadController extends Controller
{
    //
    public function index(){
        return view('lead');
    }
    public function register(){
        return view('register');
    }
    public function storeAccount(Request $request){
        $request->validate([
            'firstname' => ['required', 'string', 'max:60', 'min:3'],
            'lastname' => ['required', 'string', 'max:60', 'min:3'],
            'zipcode' => ['required', 'string', 'max:60', 'min:3'],
            'country' => ['required', 'string', 'max:60', 'min:3'],
            'state' => ['required', 'string', 'max:60', 'min:3'],
            'username' => ['required', 'string', 'max:25', 'min:3', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'min:8', 'max:21', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'zipcode' => $request->zipcode,
            'country' => $request->country,
            'state' => $request->state,
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        return back()->with('success', 'account created');
    }
    public function viewAccounts(){
        $users = User::all();

        return view('users',[
            'users' => $users
        ]);
    }
}
