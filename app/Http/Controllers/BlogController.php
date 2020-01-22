<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    // Method to display all blog posts
    public function display(){
        $blogs = Blog::paginate(9);

        return view('welcome', [
           'blogs' => $blogs,
        ]);
    }

    // Method to display a single post
    public function displayPost($slug){
        // Find the post in the database
        $blog = Blog::where('slug', '=', $slug)->first();

        // Return view along with post
        return view('blog-single', [
            'blog' => $blog,
        ]);
    }
}
