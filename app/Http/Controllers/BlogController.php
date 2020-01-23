<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller {

    // Method to display all blog posts
    public function display() {
        $blogs = Blog::paginate( 9 );

        return view( 'welcome', [
            'blogs' => $blogs,
        ] );
    }

    // Method to display a single post
    public function displayPost( $slug ) {
        // Find the post in the database
        $blog = Blog::where( 'slug', '=', $slug )->first();

        // Return view along with post
        return view( 'blog-single', [
            'blog' => $blog,
        ] );
    }

    // Method to create a blog post
    public function createPost( Request $request ) {

        // Validate the incoming request
        $request->validate( [
            'title'   => 'required|max:512|regex:/[A-Za-z1-9 ]/',
            'slug'    => 'required|max:256|regex:/^[a-z0-9]+(?:-[a-z0-9]+)*$/|unique:blogs,slug',
            'excerpt' => 'nullable',
            'content' => 'nullable',
        ] );

        // Insert Blog Into the Database
        $blog          = New Blog;
        $blog->title   = $request->title;
        $blog->slug    = $request->slug;
        $blog->excerpt = $request->excerpt;
        $blog->content = $request->content;
        $blog->save();

        //Return Back With A Confirmation
        return back()->with( 'success', 'Your Post Has Been Created Successfully' );
    }
}
