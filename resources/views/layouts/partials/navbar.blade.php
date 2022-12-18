<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand " href="/"><img src="{{ asset('assets/images/logo.svg') }}" style="
        height: 30%"
            alt="Oleez"></a>
    <ul class="nav nav-actions d-lg-none ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="#!" data-toggle="searchModal">
                <img src="{{ asset('assets/images/search.svg') }}" alt="search">
            </a>
        </li>

        <li class="nav-item ">
            <a class="nav-link " href="/login">Join</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#!" data-toggle="offCanvasMenu">
                <img src="{{ asset('assets/images/social icon@2x.svg') }}" alt="social-nav-toggle">
            </a>
        </li>
    </ul>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#oleezMainNav"
        aria-controls="oleezMainNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="oleezMainNav">
        <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
            <li class="nav-item {{ Request::url() == url('/') ? 'active' : '' }}">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item  {{ Request::url() == url('/about') ? 'active' : '' }}">
                <a class="nav-link" href="/about">About<span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item {{ Request::url() == url('/categories') ? 'active' : '' }}">
                <a class="nav-link" href="/categories">Categories</a>
            </li>
            <li class="nav-item {{ Request::url() == url('/blog') ? 'active' : '' }}">
                <a class="nav-link" href="/posts">Blog</a>
            </li>
        </ul>
        <ul class="navbar-nav d-none d-lg-flex">
            <li class="nav-item ">
                <a class="nav-link nav-link-btn" href="#!" data-toggle="searchModal">
                    <img src="{{ asset('assets/images/search.svg') }}" alt="search">
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/login">Join</a>
            </li>
            <li class="nav-item ml-5">
                <a class="nav-link pr-0 nav-link-btn" href="#!" data-toggle="offCanvasMenu">
                    <img src="{{ asset('assets/images/social icon@2x.svg') }}" alt="social-nav-toggle">
                </a>
            </li>
        </ul>
    </div>
</nav>
