<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        //poderia ir para dashboard, mas fica conflitando com o controller de contents
        //return view ('dashboard', [
        return view ('adminControlPaneUser', [
            'users' => $users,
        ]);
    }
    public function admincontrolpaneuser()
    {
        $user = User::all();
        return view ('adminControlPaneUser', [
            'users' => $user,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->id = Auth::id();
        $user->name = $request->name;
        $user->userType = $request->userType;
        $user->email = $request->email;
        $user->date = $request->date;
        $user->save();
        return redirect(url('/users'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find ($id);
        return view('user.show', [
            'user' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find ($id);
        return view ('user.edit', [
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->id = Auth::id();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->userType = $request->input('userType');
        $user->date = $request->input('date');
        $user->save();
        return redirect()->to(route('users.show', [
            'user' => $user->id,
        ]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect(url('/users'));
    }
}
