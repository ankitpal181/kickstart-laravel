<!-- Navbar -->
<div class = "container-fluid navbar-bg">
    <div class = "container">
        <div class = "row">
            <nav class = "navbar navbar-expand-lg navbar-light w-100">
                <a class = "navbar-brand" href = "{{ route('index') }}">Kickstart Laravel</a>
                <button class = "navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#navbarNav"
                        aria-controls = "navbarNav" aria-expanded = "false" aria-label = "Toggle navigation">
                    <span class = "navbar-toggler-icon"></span>
                </button>
                <div class = "collapse navbar-collapse" id = "navbarNav">
                    <ul class = "navbar-nav d-flex w-100 justify-content-end">
                        <li class = "nav-item active">
                            <a class = "nav-link" href = "{{ route('index') }}">Home</a>
                        </li>
                        @if (Route::has('login'))
                            @auth
                                <li class = "nav-item active">
                                    <a class = "nav-link" href = "{{ route('blog.submit') }}">Add Blog Post</a>
                                </li>
                                <li class = "nav-item active">
                                    <a class = "nav-link" href = "{{ url('/home') }}">My Account</a>
                                </li>
                                <li class = "nav-item active">
                                    <a class = "nav-link" href = "{{ route('logout') }}">Logout</a>
                                </li>

                            @else
                                <li class = "nav-item active">
                                    <a class = "nav-link" href = "{{ route('login') }}">Login</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class = "nav-item active">
                                        <a class = "nav-link" href = "{{ route('register') }}">Register</a>
                                    </li>
                                @endif
                            @endauth
                        @endif
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- /Navbar -->
