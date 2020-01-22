@extends('master')
@section('content')
    <!-- Blog Posts Section -->
    <div class = "container my-5">
        <div class = "row">
            @if ($blog == null)
                <div class = "col-lg-12 text-center">
                    <h1>Sorry the blog post you are looking for does not exist</h1>
                </div>
            @else
                <div class = "col-lg-12">
                    <h1 class = "display-4 mb-5">{{ $blog->title }}</h1>
                    <p> {{ $blog->content }} </p>
                </div>
            @endif
        </div>
    </div>
    <!-- /Blog Posts Section -->
@endsection
