@extends('master')
@section('content')
    <!-- Blog Posts Section -->
    <div class = "container my-5">
        <div class = "row">
            @if ($blogs->count() == 0)
                <div class = "col-lg-12 text-center">
                    <h1> There are no blog posts to display</h1>
                </div>
            @else
                <div class = "card-columns">
                @foreach($blogs as $blog)
                    <!-- Individual Post -->
                        <div class = "card">
                            <div class = "card-body">
                                <h5 class = "card-title">{{ $blog->title }}</h5>
                                <p class = "card-text">{{ $blog->excerpt }}</p>
                                <p class = "card-text">
                                    <a href = "{{ route('blog.single', ['slug' => $blog->slug ]) }}"
                                       class = "btn btn-primary btn-sm text-white">Read More</a>
                                </p>
                            </div>
                        </div>
                        <!-- /Individual Post -->
                    @endforeach
                </div>
            @endif

            <div class = "col-lg-4 offset-lg-8 mt-4">
                {{ $blogs->links() }}
            </div>

        </div>
    </div>
    <!-- /Blog Posts Section -->
@endsection

