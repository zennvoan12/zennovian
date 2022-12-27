<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="post"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="post"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <main class="blog-post-single">
                <div class="container">
                    <h1 class="post-title wow fadeInUp">

                        <div class="row">
                            <div class="col-lg-8 blog-post-wrapper">
                                <div class="post-header wow fadeInUp">
                                    @if ($post->image)
                                        <div style="max-height: 350px; overflow: hidden;">

                                            <img src="{{ asset('storage/' . $post->image) }}" alt="blog post"
                                                class="post-featured-image img-fluid mb-4">
                                        </div>
                                    @else
                                        <img src="https://source.unsplash.com/1200x600?{{ $post->category->name }}"
                                            alt="blog post" class="post-featured-image img-fluid mb-4">
                                    @endif
                                </div>
                                <div class="post-content wow fadeInUp">
                                    <a href="{{ route('post-dashboard', ['post' => $post]) }}" class="btn btn-success">
                                        <i class="material-icons opacity-10">arrow_back</i>
                                        Back To My Post</a>
                                    <a href="{{ route('post-show', ['post' => $post]) }}/edit" class="btn btn-warning">
                                        <i class="material-icons opacity-10">edit</i> Edit</a>
                                    <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger "><i class="material-icons opacity-10"
                                                onclick="return confirm('Are You Sure ?')">cancel</i> Delete</button>
                                    </form>

                                    <p class="post-date">{{ $post->created_at->diffForHumans() }}</p>
                                    <article class=" text-normal my-3 text-capitalize text-small opacity-7"
                                        style="color: black; font-style:normal; font-size: 20px; font-weight: lighter;">


                                        {!! $post->body !!}
                                    </article>

                                </div>



                            </div>

                        </div>
                </div>
            </main>

            <x-footers.auth></x-footers.auth>
        </div>
    </main>
    <x-plugins></x-plugins>

</x-layout>
