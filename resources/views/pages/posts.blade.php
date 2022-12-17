@extends('layouts.master')

@section('container')
    <main class="blog-standard">
        <div class="container">
            <h1 class="oleez-page-title wow fadeInUp">{{ $title }}</h1>
            <div class="row">
                <div class="col-md-8">
                    @if (is_iterable($posts))
                        @foreach ($posts as $post)
                            <article class="blog-post wow fadeInUp">
                                <a href="/posts/{{ $post->slug }}">
                                    <img src="assets/images/Standard_list_blog/Standard_1@2x.jpg" alt="blog post"
                                        class="post-thumbnail">
                                </a>
                                <h6>By : <a href="/authors/{{ $post->author->username }}"
                                        class="text-decoration-none">{{ $post->author->name }}</a> in
                                    <a class="text-decoration-none"
                                        href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}
                                    </a>
                                </h6>
                                <p class="post-date">January 29, 2020</p>
                                <a href="/posts/{{ $post->slug }}">
                                    <h4 class="post-title">{{ $post->title }}</h4>
                                </a>
                                <p class="post-excerpt">{{ $post->excerpt }}</p>
                                <a href="/posts/{{ $post->slug }}" class="post-permalink">READ MORE</a>
                            </article>
                        @endforeach
                    @endif



                    <nav class="oleez-pagination wow fadeInUp">
                        <a href="#!" class="active">01</a>
                        <a href="#!">02</a>
                        <a href="#!">03</a>
                        <a href="#!" class="next">&rarr;</a>
                    </nav>
                </div>
                <div class="col-md-4">
                    <div class="sidebar-widget wow fadeInUp">
                        <h5 class="widget-title">Share</h5>
                        <div class="widget-content">
                            <nav class="social-links">
                                <a href="#!">Fb</a>
                                <a href="#!">Tw</a>
                                <a href="#!">In</a>
                                <a href="#!">Be</a>
                            </nav>
                        </div>
                    </div>
                    <div class="sidebar-widget wow fadeInUp">
                        <h5 class="widget-title">Gallery</h5>
                        <div class="widget-content">
                            <div class="gallery">
                                <a href="assets/images/Blogstandard/Blogstandard_@2x.jpg" class="gallery-grid-item"
                                    data-fancybox="widget-gallery">
                                    <img src="assets/images/Blogstandard/Blogstandard_@2x.jpg" alt="gallery item">
                                </a>
                                <a href="assets/images/Blogstandard/Blogstandard_@2x.jpg" class="gallery-grid-item"
                                    data-fancybox="widget-gallery">
                                    <img src="assets/images/Blogstandard/Blogstandard_@2x.jpg" alt="gallery item">
                                </a>
                                <a href="assets/images/Blogstandard/Blogstandard_@2x.jpg" class="gallery-grid-item"
                                    data-fancybox="widget-gallery">
                                    <img src="assets/images/Blogstandard/Blogstandard_@2x.jpg" alt="gallery item">
                                </a>
                                <a href="assets/images/Blogstandard/Blogstandard_@2x.jpg" class="gallery-grid-item"
                                    data-fancybox="widget-gallery">
                                    <img src="assets/images/Blogstandard/Blogstandard_@2x.jpg" alt="gallery item">
                                </a>
                                <a href="assets/images/Blogstandard/Blogstandard_@2x.jpg" class="gallery-grid-item"
                                    data-fancybox="widget-gallery">
                                    <img src="assets/images/Blogstandard/Blogstandard_@2x.jpg" alt="gallery item">
                                </a>
                                <a href="assets/images/Blogstandard/Blogstandard_@2x.jpg" class="gallery-grid-item"
                                    data-fancybox="widget-gallery">
                                    <img src="assets/images/Blogstandard/Blogstandard_@2x.jpg" alt="gallery item">
                                </a>
                                <a href="assets/images/Blogstandard/Blogstandard_@2x.jpg" class="gallery-grid-item"
                                    data-fancybox="widget-gallery">
                                    <img src="assets/images/Blogstandard/Blogstandard_@2x.jpg" alt="gallery item">
                                </a>
                                <a href="assets/images/Blogstandard/Blogstandard_@2x.jpg" class="gallery-grid-item"
                                    data-fancybox="widget-gallery">
                                    <img src="assets/images/Blogstandard/Blogstandard_@2x.jpg" alt="gallery item">
                                </a>
                                <a href="assets/images/Blogstandard/Blogstandard_@2x.jpg" class="gallery-grid-item"
                                    data-fancybox="widget-gallery">
                                    <img src="assets/images/Blogstandard/Blogstandard_@2x.jpg" alt="gallery item">
                                </a>
                                <a href="assets/images/Blogstandard/Blogstandard_@2x.jpg" class="gallery-grid-item"
                                    data-fancybox="widget-gallery">
                                    <img src="assets/images/Blogstandard/Blogstandard_@2x.jpg" alt="gallery item">
                                </a>
                                <a href="assets/images/Blogstandard/Blogstandard_@2x.jpg" class="gallery-grid-item"
                                    data-fancybox="widget-gallery">
                                    <img src="assets/images/Blogstandard/Blogstandard_@2x.jpg" alt="gallery item">
                                </a>
                                <a href="assets/images/Blogstandard/Blogstandard_@2x.jpg" class="gallery-grid-item"
                                    data-fancybox="widget-gallery">
                                    <img src="assets/images/Blogstandard/Blogstandard_@2x.jpg" alt="gallery item">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-widget wow fadeInUp">

                        <h5 class="widget-title">{!! $categories !!}</h5>
                        @foreach ($posts->take(4) as $post)
                            <div class="widget-content">
                                <ul class="category-list">
                                    <li><a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                                    </li>
                                </ul>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
@endsection
