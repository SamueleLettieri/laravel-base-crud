<header>
    <nav class="navbar navbar-expand-lg bg-light ">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('admin.home')}}">COMICS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav w-100">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('comics.index')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('comics.index')}}">Comics</a>
                    </li>
                    <li class="nav-item text-end w-100">
                        <a class="nav-link active" href="{{route('comics.create')}}">Form</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>