@extends('layouts.master')
@section('container')
    <main class="blog-standard">
        <div class="container">
            <h1 class="oleez-page-title wow fadeInUp">{{ $title }}</h1>

            @if ($posts->count())
                <div class="card mb-3">
                    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
                        alt="...">
                    <div class="card-body text-center">
                        <h2 class="card-title"><a href="/posts/{{ $posts[0]->slug }}"
                                class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h2>
                        <small class="text-muted">
                            <h6>By : <a class="text-secondary text-decoration-none"
                                    href="/authors/{{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in
                                <a class="text-decoration-none text-dark"
                                    href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}
                                </a>
                            </h6>
                            <p class="card-text">{{ $posts[0]->created_at->diffForHumans() }}
                            </p>
                        </small>
                        <p class="card-text">{{ $posts[0]->excerpt }}</p>
                        <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-dark">READ MORE</a>
                    </div>
                </div>
            @else
                <p class="text-center fs-4">Not Found</p>
            @endif


            <div class="container">
                <div class="row">
                    @if (is_iterable($posts))
                        @foreach ($posts->skip(1) as $post)
                            <div class="col-md-4 mb-2">
                                <article class="blog-post wow fadeInUp">
                                    <div class="card">
                                        <div class="position-absolute px-3 py-2"
                                            style="background-color: rgba(0, 0, 0, 0.7)">
                                            <a class="text-decoration-none text-white"
                                                href="/categories/{{ $post->category->slug }}">
                                                {{ $post->category->name }}</a>
                                        </div>
                                        <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                                            class="card-img-top" alt="{{ $post->category->name }}">
                                        <div class="card-body">
                                            <h4 class="post-title">{{ $post->title }}</h4>
                                            <h6>By : <a href="/authors/{{ $post->author->username }}"
                                                    class="text-decoration-none text-dark">{{ $post->author->name }}</a>

                                            </h6>
                                            <p class="post-excerpt">{{ $post->excerpt }}</p>
                                            <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>



        </div>
        </div>
    </main>
@endsection
