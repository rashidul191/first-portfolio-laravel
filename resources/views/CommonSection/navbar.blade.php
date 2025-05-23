<section>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="{{route('home')}}">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('projects.index')}}">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('projects.create')}}">P-Create</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('resume')}}">Resume</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
                    </li>
                    <li class="nav-item btn btn-success">
                        <a class="nav-link " href="{{route('userLogin')}}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>
