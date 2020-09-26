<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('public.publicMaster');
    }

    public function blog($id)
    {
        $blog = Post::find($id);
        return response()->json([
            'blog' => $blog
        ]);
    }
    public function relatePost($id)
    {

        $post = Post::find($id);
        $related= Post::where('cat_id',  $post->category->id)->where('id', '!=', $id)->get();
        return response()->json([
            'relatedBlog' => $related
        ]);
    }


}
