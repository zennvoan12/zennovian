<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="tables"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Tables"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Create New Post</h6>
                            </div>
                        </div>
                        <div class="card-body ">

                            <div class="col-lg-8">
                                <div class="card-body">

                                    <form method="POST" action="{{ route('post-dashboard') }}" class="form-">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="title" class="form-label">Title</label>
                                            <input type="text" class="form-control" id="title" name="title">

                                        </div>
                                        <div class="mb-3">
                                            <label for="slug" class="form-label">Slug</label>
                                            <input type="text" class="form-control" id="slug" name="slug"
                                                disabled readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label for="category" class="form-label">Category</label>
                                            <select class="form-select text-center" name="category_id">
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                        <div class="mb-3">
                                            <label for="body" class="form-label">Body</label>

                                            <input id="body" type="hidden" name="body">
                                            <trix-editor input="body"></trix-editor>

                                        </div>

                                        <button type="submit" class="btn btn-primary">Create Post</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <x-footers.auth></x-footers.auth>
        </div>
    </main>
    <x-plugins></x-plugins>

    <script>
        // const title = document.querySelector("#title");
        // const slug = document.querySelector("#slug");

        // title.addEventListener("change", function() {
        //     fetch('/dashboard/post-dashboard/createSlug?title' + title.value)
        //         .then(response => response.json())
        //         .then(data => slug.value = data.slug)
        // });
        // const title = document.querySelector('#title');
        // const slugs = document.querySelector('#slug');

        // title.addEventListener('change', function() {
        //     fetch('post/checkSlug?title=' + title.value + '')
        //         .then(response => response.json())
        //         .then(data => slugs.value = data.slug)
        //     console.log(data.slug);
        // });
        const title = document.querySelector("#title");
        const slug = document.querySelector("#slug");

        title.addEventListener("change", function() {
            let preslug = title.value;
            preslug = preslug.replace(/ /g, "-");
            slug.value = preslug.toLowerCase();
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })
    </script>
</x-layout>
