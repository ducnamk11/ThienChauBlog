<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Image;
use Auth;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::orderByDesc('id')->with('user', 'category')->get();
        $post= Post::orderByDesc('id')->get();
        $countPost= $post->count();

        return response()->json([
            'posts' => $posts,
            'countPost'=>$countPost
        ], 200);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:2|max:400',
            'description' => 'required|min:2'
        ]);
        $strpos = strpos($request->photo, ';');
        $sub = substr($request->photo, 0, $strpos);
        $ex = explode('/', $sub)[1];
        $name = time() . "." . $ex;
        $img = Image::make($request->photo)->resize(720, 521);
        $upload_path = public_path() . "/uploadimage/";
        $img->save($upload_path . $name);
        $post = new Post();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->cat_id = $request->cat_id;
        $post->user_id = Auth::user()->id;
        $post->photo = $name;
        $post->save();
    }


    public function edit($id)
    {
        $post = Post::find($id);
        return response()->json([
            'post' => $post,
        ], 200);

    }


    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $this->validate($request, [
            'title' => 'required|min:2|max:450',
            'description' => 'required|min:2'
        ]);

        if ($request->photo != $post->photo) {

            $strpos = strpos($request->photo, ';');
            $sub = substr($request->photo, 0, $strpos);
            $ex = explode('/', $sub)[1];
            $name = time() . "." . $ex;
            $img = Image::make($request->photo)->resize(200, 200);
            $upload_path = public_path() . "/uploadimage/";
            $image = $upload_path . $post->photo;
            $img->save($upload_path . $name);
            if (file_exists($image)) {
                @unlink($image);
            };
        } else {
            $name = $post->photo;
        }
        $post->title = $request->title;
        $post->description = $request->description;
        $post->cat_id = $request->cat_id;
        $post->user_id = Auth::user()->id;
        $post->photo = $name;
        $post->save();
    }

    public function delete($id)
    {
        $post = Post::find($id);
        $image_path = public_path() . '/uploadimage/';
        $image = $image_path . $post->photo;
        if (file_exists($image)) {
            @unlink($image);
        };
        $post->delete();
    }
}
