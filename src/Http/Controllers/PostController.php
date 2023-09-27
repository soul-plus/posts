<?php

namespace Soulplus\Posts\Http\Controllers;
use Illuminate\Http\Request;
use Soulplus\Posts\Models\Posts;

class PostController extends Controller
{
    public function index()
    {
        $posts = Posts::all();

        return view(
            'posts::index',
            ['posts' => $posts,]
        );
    }
}
