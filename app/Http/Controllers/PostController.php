<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = Post::latest()->get();
        $posts = Post::orderBy('id', 'desc')->get();
        return view('guests.posts.index', compact('posts'));
    }
}
