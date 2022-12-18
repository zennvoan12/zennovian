@extends('layouts.master')

@section('container')
    1 <main class="blog-grid-page mb-5">
        <div class="container">
            <h1 class="oleez-page-title wow fadeInUp text-center">{{ $title }}</h1>
            <div class="row">
                @foreach ($categories as $category)
                    <div class="col-md-4">
                        <a href="/posts?category={{ $category->slug }}">
                            <div class="card text-bg-dark">
                                <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img"
                                    alt="...">
                                <div class="card-img-overlay d-flex align-items-center p-0">
                                    <h5 class="card-title text-center text-white flex-fill p-4 fs-3"
                                        style="background-color: rgba(0,0,0,0.7)">
                                        {{ $category->name }}</h5>


                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>

        </div>
    </main>
@endsection
