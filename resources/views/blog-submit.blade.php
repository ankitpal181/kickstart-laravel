@extends('master')
@section('content')
    <!-- Blog Posts Section -->
    <div class = "container my-5">
        <div class = "row">
            <div class = "col-lg-12">
                <form method="post" action="{{ route('blog.create') }}">
                    @csrf
                    <div class = "form-group">
                        <label for = "title">Blog Title</label>
                        <input name = "title" type = "text" class = "form-control" id = "title"
                               placeholder = "Title Of The Blog Post">
                    </div>

                    <div class = "form-group">
                        <label for = "slug">Slug</label>
                        <input name = "slug" type = "text" class = "form-control" id = "slug"
                               placeholder = "example-slug">
                    </div>

                    <div class = "form-group">
                        <label for = "excerpt">Excerpt</label>
                        <textarea name = "excerpt" class = "form-control" id = "excerpt" rows = "3"></textarea>
                    </div>

                    <div class = "form-group">
                        <label for = "content">Post Content</label>
                        <textarea name = "content" class = "form-control" id = "content" rows = "10"></textarea>
                    </div>
                    <input class = "btn-primary btn" type = "submit">
                </form>
            </div>
        </div>
    </div>
    <!-- /Blog Posts Section -->
@endsection
