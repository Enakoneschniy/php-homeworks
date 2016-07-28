<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class HomeController extends Controller
{
    /**
     * @param array $middleware
     */
    public function index()
    {
        $posts = Post::get();
       // die(print_r($posts));
        return View('index')->with('posts',$posts);
    }
}
