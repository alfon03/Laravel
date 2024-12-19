<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm navigation">
    <div class="container">
        <a class="navbar-brand fs-4 fw-bold" href="{{route('home')}}">Laravel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('letter')}}"><span class="material-symbols-outlined">
                        mail
                        </span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('blog')}}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('gift')}}"><span class="material-symbols-outlined">
                        featured_seasonal_and_gifts
                        </span></a>
                </li>

                
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('about')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('contact')}}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

