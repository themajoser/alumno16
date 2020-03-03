<?php

namespace App\Http\Controllers\Admin;

use App\Photo;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhotosController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $this->validate($request, [
            'photo' => 'required | image | max:2048'
        ]);

        $post->photos()->create([
            'url'       => $request->file('photo')->store('posts','public')
        ]);
    }

    public function destroy(Photo $photo)
    {
        $photo->delete();

        return back()->with('flash', 'Foto eliminada');
    }
}
