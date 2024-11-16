<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function blog_post(){
        return view("blog_post.index");
    }
}
