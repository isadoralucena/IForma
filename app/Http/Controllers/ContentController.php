<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use Illuminate\Support\Facades\Auth;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $contents = Content::all();
        return view ('dashboard', [
            'contents' => $contents,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('content.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $content = new Content;
        $content->user_id = Auth::id();
        $content->title = $request->title;
        $content->text = $request->text;
        $content->save();
        return redirect(url('/contents'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)//TERMINAR DAQUI
    {
        $content = Content::find ($id);
        return view('content.show', [
            'content' => $content,
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
        $content = Content::find ($id);
        return view ('content.edit', [
            'content' => $content,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)//FALTA TERMINAR AQUI
    { 
        $content = Content::find($id);
        $content->user_id = Auth::id();
        $content->title = $request->input('title');
        $content->text = $request->input('text');
        $content->save();
        return redirect()->to(route('contents.show', [
            'content' => $content->id,
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
        $content = Content::find($id);
        $content->delete();
        return redirect(url('/contents'));
    }
}
