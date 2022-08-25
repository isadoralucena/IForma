<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        
        return view('');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function store(Request $request){
        $user = new User;

        $user->name = $request->name;
        $user->date = $request->date;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->userType = $request->userType;

        $user->save();
        return redirect('/');
    }
}