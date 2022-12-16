@extends('layouts.master')

@section('container')
    <main class="blog-grid-page">
        <div class="container">
            <h1 class="oleez-page-title wow fadeInUp">{{ $title }}</h1>
            <div class="row">
                @foreach ($categories as $category)
                    <div class="col-md-4">
                        <a href="/categories/{{ $category->slug }}" class="text-decoration-none">

                            <div class="blog-post-card wow fadeInUp">
                                <div class="blog-post-thumbnail-wrapper">
                                    <img src="assets/images/Bloggrid/Bloggrid_2@2x.jpg" alt="blog">
                                </div>

                                <h5 class="blog-post-title text-center">{{ $category->name }}</h5>
                            </div>
                    </div>
                    </a>
                @endforeach

            </div>

        </div>
    </main>
@endsection
