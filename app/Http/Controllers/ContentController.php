<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Notifications\CreateContent;
use App\Notifications\DeleteContent;
use App\Notifications\UpdateContent;
use Illuminate\Support\Facades\Storage;

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

    public function teachercontrolpane()
    {
        $contents = Content::all();

        return view ('teacherControlPane', [
            'contents' => $contents,
        ]);
    }
    public function admincontrolpanecont()
    {
        $contents = Content::all();
        return view ('adminControlPaneCont', [
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
        $user = User::find(Auth::id());
        if($user->userType == 1){
            return abort(403, 'Ação não permitida');
        }
        $content = new Content;
        if($request->id){
            $content->id = $request->id;
        }
        $content->user_id = Auth::id();
        $content->title = $request->title;
        $content->text = $request->text;

        $extension = $request->file('photo')->getClientOriginalExtension();
        $filename = 'content'.$content->id.'.'.$extension;
        $file = $request->file('photo')->storeAs('contents', $filename);
        $content->photo = $file;

        $content->save();

        //Auth::user()->notify (new CreateContent($content, Auth::user()));

        return redirect(url('/contents'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $content = Content::find ($id);

        $path = $content->photo;
        $full_path = Storage::path($path);
        $base64 = base64_encode(Storage::get($path));
        $image_data = 'data:'.mime_content_type($full_path) . ';base64,' . $base64;

        return view('content.show', [
            'content' => $content,
            'photo' => $image_data,
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
        $user = User::find(Auth::id());
        if($user->userType == 1){
            return abort(403, 'Ação não permitida');
        }
        $content = Content::find($id);
        $content->user_id = Auth::id();
        $content->title = $request->input('title');
        $content->text = $request->input('text');
        $content->save();

        // Auth::user()->notify (new UpdateContent($content, Auth::user()));

        return redirect(url('/contents'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find(Auth::id());
        if($user->userType == 1){
            return abort(403, 'Ação não permitida');
        }
        $content = Content::find($id);
        // Auth::user()->notify (new DeleteContent($content, Auth::user()));
        if (!$content) {
            return abort(404);
        }
        $content->delete();
        return redirect(url('/contents'));
    }
}
