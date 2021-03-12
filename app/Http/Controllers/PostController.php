<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Show all the posts
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('post.index', [
            'posts' => Post::all()
        ]);
    }

    /**
     * Show the detail page of the given post.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        return view('post.show', [
            'post' => Post::findOrFail($id)
        ]);
    }
}