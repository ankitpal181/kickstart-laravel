@extends('master')
@section('content')
    <!-- Blog Posts Section -->
    <div class = "container my-5">
        <div class = "row">
            <div class = "col-lg-12">
                <form>
                    @csrf
                    <div class = "form-group">
                        <label for = "blogTitle">Blog Title</label>
                        <input name = "blogTitle" type = "text" class = "form-control" id = "blogTitle"
                               placeholder = "Title Of The Blog Post">
                    </div>

                    <div class = "form-group">
                        <label for = "blogContent">Post Content</label>
                        <textarea name = "blogContent" class = "form-control" id = "blogContent" rows = "10"></textarea>
                    </div>
                    <input class="btn-primary btn" type="submit">
                </form>
            </div>
        </div>
    </div>
    <!-- /Blog Posts Section -->
@endsection
