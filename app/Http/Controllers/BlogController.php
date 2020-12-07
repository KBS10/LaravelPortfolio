<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portfolio;

class BlogController extends Controller
{

    public function create(){
        return view("blogs.create");
    }

    public function store(Request $request){
        $path = $request->file('image')->store('images', 'public');
        $photo = Photo::create([
            'url'=> Storage::url($path),
            'hashname'=>$request->file('image')->hashName(),
            'originalname'=>$request->file('image')->getClientOriginalName(),
        ]);
        $blog = new Blog;
        $blog->user_id = $request->user_id;
        $blog->title = $request->title;
        $blog->body = $request->body;
        $blog->save();

        return redirect("/blog/".$blog->id);
    }

    public function destroy(Blog $id)
    {
        $id->delete();
    }
}
