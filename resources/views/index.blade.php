@extends('layouts.master')
@section('container')
    <section>
        <div class="container wow fadeIn fixed">
            <div id="oleezLandingCarousel" class="oleez-landing-carousel carousel slide" data-ride="carousel">

                <div class="carousel-inner">

                    @if ($posts->count())
                        <div class="carousel-item active">
                            <img src="https://source.unsplash.com/1800x800?{{ $posts[0]->category->name }}" alt="First slide"
                                class="w-100">
                            <div class="carousel-caption">
                                <h2 data-animation="animated fadeInRight"><span>
                                        <p style="font-size: 20px">{{ $posts[0]->title }} </p>
                                    </span></h2>


                                <a href="/posts/{{ $posts[0]->slug }}" class="carousel-item-link"
                                    data-animation="animated fadeInRight">Visit</a>

                            </div>
                        </div>
                        <div class="carousel-item ">
                            <img src="https://source.unsplash.com/1800x800??{{ $posts[1]->category->name }}"
                                alt="First slide" class="w-100">
                            <div class="carousel-caption">
                                <h2 data-animation="animated fadeInRight"><span>
                                        <p style="font-size: 20px">{{ $posts[1]->title }} </p>
                                    </span></h2>


                                <a href="/posts/{{ $posts[1]->slug }}" class="carousel-item-link"
                                    data-animation="animated fadeInRight">EXPLORE</a>

                            </div>
                        </div>

                </div>
                <div class="carousel-item ">
                    <img src="https://source.unsplash.com/1800x800?{{ $posts[2]->category->name }}" alt="First slide"
                        class="w-100">
                    <div class="carousel-caption">
                        <h2 data-animation="animated fadeInRight"><span>
                                <p style="font-size: 20px">{{ $posts[2]->title }} </p>
                            </span></h2>

                        <a href="/posts/{{ $posts[2]->slug }}" class="carousel-item-link"
                            data-animation="animated fadeInRight">EXPLORE</a>

                    </div>
                </div>

            </div>
            <div class="carousel-item ">
                <img src="https://source.unsplash.com/1200x600?{{ $posts[3]->category->name }}" alt="First slide"
                    class="w-100">
                <div class="carousel-caption">
                    <h2 data-animation="animated fadeInRight"><span>
                            <p style="font-size: 20px">{{ $posts[3]->title }} </p>
                        </span></h2>


                    <a href="/posts/{{ $posts[3]->slug }}" class="carousel-item-link"
                        data-animation="animated fadeInRight">EXPLORE</a>

                </div>
            </div>
            @endif

        </div>
        </div>
        </div>
    </section>

    {{-- <section class="oleez-landing-section oleez-landing-section-projects">
        <div class="container">
            <div class="oleez-landing-section-content">
                <div class="oleez-landing-section-verticals wow fadeIn">
                    <span class="number">02</span> <img src="assets/images/Logo_2.svg" alt="oleez" height="12px">
                </div>
                <h2 class="section-title wow fadeInUp">Latest Projects <a href="#!" class="all-projects-link">View
                        All</a></h2>
                <div class="landing-projects-carousel wow fadeIn">
                    <div class="card landing-project-card">
                        <img src="assets/images/Project_1@2x.jpg" class="card-img" alt="Project 1">
                        <div class="card-img-overlay">
                            <h6 class="project-category">Branding</h6>
                            <h5 class="project-title">BootstrapDash</h5>
                        </div>
                    </div>
                    <div class="card landing-project-card">
                        <img src="assets/images/Project_2@2x.jpg" class="card-img" alt="Project 1">
                        <div class="card-img-overlay">
                            <h6 class="project-category">Branding</h6>
                            <h5 class="project-title">BootstrapDash</h5>
                        </div>
                    </div>
                    <div class="card landing-project-card">
                        <img src="assets/images/Project_3@2x.jpg" class="card-img" alt="Project 1">
                        <div class="card-img-overlay">
                            <h6 class="project-category">Branding</h6>
                            <h5 class="project-title">BootstrapDash</h5>
                        </div>
                    </div>
                    <div class="card landing-project-card">
                        <img src="assets/images/Project_4@2x.jpg" class="card-img" alt="Project 1">
                        <div class="card-img-overlay">
                            <h6 class="project-category">Branding</h6>
                            <h5 class="project-title">BootstrapDash</h5>
                        </div>
                    </div>
                </div>
                <div class="slick-navbtn-wrapper"></div>
            </div>
        </div>
    </section> --}}
    <section id="posts" class="posts  border-1 mt-5">
        <div class="container" data-aos="fade-up">
            <div class="row g-5">
                <div class="col-lg-4">
                    @if ($posts->count())
                        <div class="post-entry-1 lg">

                            <a href="/posts/{{ $posts[4]->slug }}"><img
                                    src="https://source.unsplash.com/800x600?{{ $posts[4]->category->name }}"
                                    alt="" class="img-fluid"></a>
                            <div class="post-meta"><span class="date">{{ $posts[4]->category->name }}</span> <span
                                    class="mx-1">&bullet;</span>
                                <span>{{ $posts[4]->created_at->diffForHumans() }}</span>
                            </div>
                            <h2><a href="/posts/{{ $posts[4]->slug }}">{{ $posts[4]->title }}</a></h2>
                            <p class="mb-4 d-block">{{ $posts[4]->excerpt }}</p>

                            <div class="d-flex align-items-center author">
                                <div class="photo"><img src="assets/img/person-1.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="name">
                                    @if ($posts[0]->author !== null)
                                        <h3>

                                            <a
                                                href="/posts?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a>
                                    @endif
                                    </h3>
                                </div>
                            </div>
                        </div>

                </div>
                @endif
                <div class="col-lg-8">
                    <div class="row g-5">
                        <div class="col-lg-4 border-start custom-border">
                            @foreach ($posts->take(3) as $post)
                                <div class="post-entry-1">
                                    <a href="single-post.html"><img
                                            src="https://source.unsplash.com/1200x600?{{ $post->category->name }}"
                                            alt="" class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">{{ $post->category->name }}</span> <span
                                            class="mx-1">&bullet;</span>
                                        <span>{{ $post->created_at->diffForHumans() }}</span>
                                    </div>
                                    <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
                                </div>
                            @endforeach

                        </div>

                        <div class="col-lg-4 border-start custom-border">
                            @foreach ($posts->take(3) as $post)
                                <div class="post-entry-1">
                                    <a href="/posts/{{ $post->slug }}"><img
                                            src="https://source.unsplash.com/1200x600?{{ $post->category->name }}"
                                            alt="" class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">{{ $post->category->name }}</span> <span
                                            class="mx-1">&bullet;</span>
                                        <span>{{ $post->created_at->diffForHumans() }}</span>
                                    </div>
                                    <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
                                </div>
                            @endforeach

                        </div>

                        <!-- Trending Section -->
                        <div class="col-lg-4">

                            <div class="trending">
                                <h3>Trending</h3>
                                <ul class="trending-post">
                                    @foreach ($posts->take(5) as $post)
                                        <li>
                                            <a href="/posts/{{ $post->slug }}">
                                                <span class="number">{{ $loop->iteration }}</span>
                                                <h3>{{ $post->title }}</h3>
                                                @if ($post->author !== null)
                                                    <span class="author">{{ $post->author->name }}</span>
                                                @endif
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div> <!-- End Trending Section -->
                    </div>
                </div>

            </div> <!-- End .row -->
        </div>
    </section>


    <section class="category-section">
        <div class="container" data-aos="fade-up">

            @if ($posts->count())
                <div class="section-header d-flex justify-content-between align-items-center mb-5">
                    <h2>{{ $posts->first()->category->name }}</h2>
                    <div><a href="/posts?category={{ $posts[0]->category->slug }}" class="more link-dark">
                            <p class="text-dark">See All</p>
                        </a></div>
                </div>


                <div class="row">
                    <div class="col-md-9">

                        <div class="d-lg-flex post-entry-2">
                            <a href="/posts/{{ $hacks[0]->slug }}" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
                                <img src="https://source.unsplash.com/520x300?{{ $hacks[0]->category->name }}"
                                    alt="" class="img-fluid">
                            </a>
                            <div>
                                <div class="post-meta"><span class="date">{{ $hacks[0]->category->name }}</span>
                                    <span class="mx-1">&bullet;</span>
                                    <span>{{ $hacks[0]->created_at->diffForHumans() }}</span>
                                </div>
                                <h3><a href="/posts/{{ $hacks[0]->slug }}" class="text-dark">{{ $hacks[0]->title }}</a>
                                </h3>
                                <p>{{ $posts->first()->excerpt }}</p>
                                <div class="d-flex align-items-center author">
                                    <div class="photo"><img src="assets/img/person-2.jpg" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div class="name">
                                        <h3 class="m-0 p-0">{{ $hacks[0]->author->name }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">

                                <div class="post-entry-1 border-bottom">
                                    <a href="/posts/{{ $hacks[1]->slug }}"><img
                                            src="https://source.unsplash.com/1000x300?{{ $hacks[1]->category->name }}"
                                            alt="" class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">{{ $hacks[1]->category->name }}</span>
                                        <span class="mx-1">&bullet;</span>
                                        <span>{{ $hacks[1]->created_at->diffForHumans() }}</span>
                                    </div>
                                    <h2 class="mb-2"><a href="single-post.html">{{ $hacks[1]->title }}</a></h2>
                                    <span class="author mb-3 d-block">{{ $hacks[1]->author->name }}</span>
                                    <p class="mb-4 d-block">{{ $hacks[1]->excerpt }}</p>
                                </div>

                                <div class="post-entry-1">
                                    <div class="post-meta"><span class="date">{{ $hacks[2]->category->name }}</span>
                                        <span class="mx-1">&bullet;</span>
                                        <span>{{ $hacks[2]->created_at->diffForHumans() }}</span>
                                    </div>
                                    <h2 class="mb-2"><a href="/posts/{{ $hacks[2]->slug }}">{{ $hacks[2]->title }}</a>
                                    </h2>
                                    <span class="author mb-3 d-block">{{ $hacks[2]->author->name }}</span>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="post-entry-1">
                                    <a href="/posts/{{ $hacks[3]->slug }}"><img
                                            src="https://source.unsplash.com/520x300?{{ $hacks[3]->category->name }}"
                                            alt="" class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">{{ $hacks[3]->category->name }}</span>
                                        <span class="mx-1">&bullet;</span>
                                        <span>{{ $hacks[3]->created_at->diffForHumans() }}</span>
                                    </div>
                                    <h2 class="mb-2"><a href="/posts/{{ $hacks[3]->slug }}">{{ $hacks[3]->title }}</a>
                                    </h2>
                                    <span class="author mb-3 d-block">{{ $hacks[3]->author->name }}</span>
                                    <p class="mb-4 d-block">{{ $hacks[3]->excerpt }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
            @endif
            <div class="col-md-3">
                @foreach ($hacks->skip(4)->take(6) as $hack)
                    <div class="post-entry-1 border-bottom">
                        <div class="post-meta"><span class="date">{{ $hack->category->name }}</span> <span
                                class="mx-1">&bullet;</span>
                            <span>{{ $hack->created_at->diffForHumans() }}</span>
                        </div>
                        <h2 class="mb-2"><a href="/posts/{{ $hack->slug }}">{{ $hack->title }}</a></h2>
                        <span class="author mb-3 d-block">{{ $hack->author->name }}</span>
                    </div>
                @endforeach


            </div>
        </div>
        </div>
    </section>

    <section class="category-section">
        <div class="container" data-aos="fade-up">
            @if ($posts->count())
                <div class="section-header d-flex justify-content-between align-items-center mb-5">
                    <h2>{{ $posts[1]->category->name }}</h2>
                    <div><a href="category.html" class="more text-dark">See All</a></div>
                </div>

                <div class="row">
                    <div class="col-md-9 order-md-2">

                        <div class="d-lg-flex post-entry-2">
                            <a href="/posts/{{ $webs[0]->slug }}" class="me-4 thumbnail d-inline-block mb-4 mb-lg-0">
                                <img src="https://source.unsplash.com/520x380?{{ $webs[0]->category->name }}"
                                    alt="" class="img-fluid">
                            </a>
                            <div>
                                <div class="post-meta"><span class="date">{{ $webs[0]->category->name }}</span>
                                    <span class="mx-1">&bullet;</span>
                                    <span>{{ $webs[0]->created_at->diffForHumans() }}</span>
                                </div>
                                <h3><a href="/posts/{{ $webs[0]->slug }}" class="text-dark">{{ $webs[0]->title }}</a>
                                </h3>
                                <p>{{ $webs[0]->excerpt }}</p>
                                <div class="d-flex align-items-center author">
                                    <div class="photo"><img src="assets/img/person-4.jpg" alt=""
                                            class="img-fluid">
                                    </div>
                                    <div class="name">
                                        <h3 class="m-0 p-0">{{ $webs[0]->author->name }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                @foreach ($webs->skip(1)->take(2) as $web)
                                    <div class="post-entry-1 border-bottom">
                                        <a href="/posts/{{ $web->slug }}"><img
                                                src="https://source.unsplash.com/520x300?{{ $web->category->name }}"
                                                alt="" class="img-fluid"></a>
                                        <div class="post-meta"><span class="date">{{ $web->category->name }}</span>
                                            <span class="mx-1">&bullet;</span>
                                            <span>{{ $web->created_at->diffForHumans() }}</span>
                                        </div>
                                        <h2 class="mb-2"><a href="single-post.html">{{ $web->title }}</a></h2>
                                        <span class="author mb-3 d-block">{{ $web->author->name }}</span>
                                        <p class="mb-4 d-block">{{ $web->excerpt }}</p>
                                    </div>
                                @endforeach


                            </div>
                            <div class="col-lg-8">
                                <div class="post-entry-1">
                                    <a href="/posts/{{ $webs[3]->slug }}"><img
                                            src="https://source.unsplash.com/800x600?{{ $webs[3]->category->name }}"
                                            alt="" class="img-fluid"></a>
                                    <div class="post-meta"><span class="date">{{ $webs[3]->category->name }}</span>
                                        <span class="mx-1">&bullet;</span>
                                        <span>{{ $webs[3]->created_at->diffForHumans() }}</span>
                                    </div>
                                    <h2 class="mb-2"><a href="/posts/{{ $webs[3]->slug }}">{{ $webs[3]->title }}</a>
                                    </h2>
                                    <span class="author mb-3 d-block">{{ $webs[3]->author->name }}</span>
                                    <p class="mb-4 d-block">{{ $webs[3]->excerpt }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
            @endif
            <div class="col-md-3">
                @foreach ($webs->skip(4)->take(6) as $web)
                    <div class="post-entry-1 border-bottom">
                        <div class="post-meta"><span class="date">{{ $web->category->name }}</span> <span
                                class="mx-1">&bullet;</span>
                            <span>{{ $web->created_at->diffForHumans() }}</span>
                        </div>
                        <h2 class="mb-2"><a href="/posts/{{ $web->slug }}">{{ $web->title }}</a></h2>
                        <span class="author mb-3 d-block">{{ $web->author->name }}</span>
                    </div>
                @endforeach

            </div>
        </div>
        </div>
    </section>

@endsection
