<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller
{
    /**
     * @param $slug
     * @return $this
     */
    public function getPost($slug){
        $post = Post::where('slug', '=', $slug)->firstOrFail();
        return view('posts.show')->with('post', $post);
    }
}
