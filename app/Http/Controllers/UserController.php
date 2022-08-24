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
    public function store(Request $request){
        $user = new User;

        $user->nome = $request->nome;
        $user->date = $request->date;
        $user->email = $request->email;
        $user->pass = $request->pass;
        $user->tipoUsuario = $request->tipoUsuario;

        $user->save();
        return redirect('/');
    }
}