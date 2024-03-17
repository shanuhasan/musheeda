<div class="wrap">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 col-md d-flex align-items-center">
                <p class="mb-0 phone"><span class="mailus">Phone no:</span> <a href="javascript:void(0);">+91
                        7533825583</a>
                    or <span class="mailus">Email us:</span> <a href="javascript:void(0);">info@musheeda.com</a></p>
            </div>
            <div class="col-12 col-md d-flex justify-content-md-end">
                <div class="social-media">
                    <p class="mb-0 d-flex">
                        <a href="https://www.facebook.com/profile.php?id=100092385110895" target="_blank"
                            class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i
                                    class="sr-only">Facebook</i></span></a>
                        <a href="https://twitter.com/musheeda9" target="_blank"
                            class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i
                                    class="sr-only">Twitter</i></span></a>
                        <a href="https://www.instagram.com/musheeda9/" target="_blank"
                            class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i
                                    class="sr-only">Instagram</i></span></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">MUSHEEDA<span> Solutions</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item @yield('home')"><a href="{{ route('home.index') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item @yield('about')"><a href="{{ route('home.about') }}" class="nav-link">About Us</a>
                </li>
                <li class="nav-item @yield('services')"><a href="{{ route('home.services') }}"
                        class="nav-link">Services</a></li>
                <li class="nav-item @yield('blogs')"><a href="{{ route('home.blogs') }}" class="nav-link">Blog</a>
                </li>
                <li class="nav-item @yield('contact')"><a href="{{ route('home.contact') }}" class="nav-link">Contact
                        Us</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->


{{-- <div id="nav" class="nav-sticky">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a href="{{ route('home.index') }}" class="navbar-brand">
                <strong>MUSHEEDA SOLUTIONS</strong>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto">
                    <a href="{{ route('home.index') }}" class="nav-item nav-link @yield('home')">Home</a>
                    @if (getStaticPages()->isNotEmpty())
                        @foreach (getStaticPages() as $item)
                            <a href="{{ route('home.page', $item->slug) }}"
                                class="nav-item nav-link @yield($item->name)">{{ $item->name }}</a>
                        @endforeach
                    @endif

                </div>
            </div>
        </nav>
    </div>
</div> --}}
