<!-- Section to display notifications -->
<div class = "container my-4">
    <div class = "row">

        @if ($message = Session::get('success'))
            <div class = "alert alert-success alert-block col-lg-12 text-center">
                <button type = "button" class = "close" data-dismiss = "alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif


        @if ($errors->any())

            <div class = "col-lg-12 ">
                <ul style="list-style: none;">
                    @foreach ($errors->all() as $error)
                        <li class = "alert my-2 alert-danger">
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div>
</div>
