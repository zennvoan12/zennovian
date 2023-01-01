@extends('layouts.master')


@section('container')
    <main class="blog-post-single">
        <div class="container">
            <h1 class="post-title wow fadeInUp">
                <h1>{{ $post->$title }}</h1>
                <div class="row">
                    <div class="col-lg-14 blog-post-wrapper">
                        <div class="post-header wow fadeInUp">
                            @if ($post->image)
                                <div style="max-height: 350px; overflow: hidden;">

                                    <img src="{{ asset('storage/' . $post->image) }}" alt="blog post"
                                        class="post-featured-image img-fluid mb-4">
                                </div>
                            @else
                                <img src="https://source.unsplash.com/1200x600?{{ $post->category->name }}" alt="blog post"
                                    class="post-featured-image img-fluid">
                            @endif

                        </div>
                        <div class="post-content wow fadeInUp mt-3">
                            <h6>By : @if ($post->author !== null)
                                    <a href="/posts?author={{ $post->author->username }}">{{ $post->author->name }} </a>
                                @endif In
                                <a class="text-decoration-none text-dark"
                                    href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}
                                </a>
                            </h6>
                            <p class="post-date">{{ $post->created_at->diffForHumans() }}</p>
                            <article class="post-content my-3">

                                {!! $post->body !!}
                            </article>

                        </div>


                        <div class="post-navigation wow fadeInUp">
                            <button class="btn prev-post"> Prev Post</button>
                            <button class="btn next-post"> Next Post</button>
                        </div>
                        <div class="comment-section wow fadeInUp">
                            <h5 class="section-title">Leave a Reply</h5>
                            <form action="POST" class="oleez-comment-form">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="oleez-input" id="fullName" name="fullName" required>
                                        <label for="fullName">*Full name</label>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="email" class="oleez-input" id="fullName" name="email" required>
                                        <label for="email">*Email</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="message">*Message</label>
                                        <textarea name="message" id="message" rows="10" class="oleez-textarea" required></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-submit">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
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

                    </div>
                </div>
        </div>
    </main>
@endsection
