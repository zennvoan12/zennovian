<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="Post"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Post"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3 text-center">Edit Post</h6>
                            </div>
                        </div>
                        <div class="card-body ">

                            <div class="col-lg-8">
                                <div class="card-body">

                                    {{-- <form method="POST" action="{{ route('post-show', ['post' => $post]) }}"
                                        class="form-">
                                        @method('put')
                                        @csrf
                                        <div class="mb-3">
                                            <label for="title" class="form-label">Title</label>
                                            <input type="text"
                                                class="form-control @error('title') is-invalid @enderror" id="title"
                                                name="title" required autofocus
                                                value="{{ old('title', $post->title) }}">
                                            @error('title')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="slug" class="form-label">Slug</label>
                                            <input type="text" class="form-control" id="slug" name="slug"
                                                value="{{ old('slug', $post->slug) }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="category" class="form-label">Category</label>
                                            <select class="form-select text-center" name="category_id">
                                                @foreach ($categories as $category)
                                                    @if (old('category_id', $post->category->id) == $category->id)
                                                        <option value="{{ $category->id }}" selected>
                                                            {{ $category->name }}
                                                        </option>
                                                    @else
                                                        <option value="{{ $category->id }}">{{ $category->name }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>

                                        </div>
                                        <div class="mb-3">
                                            <label for="body" class="form-label">Body</label>
                                            @error('body')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                            <input id="body" type="hidden" name="body"
                                                value="{{ old('body', $post->body) }}">
                                            <trix-editor input="body"></trix-editor>

                                        </div>

                                        <button type="submit" class="btn btn-primary">Update </button>
                                    </form> --}}

                                    <div class="p-4">
                                        <a href="{{ route('post-dashboard', ['post' => $post]) }}"
                                            class="btn btn-success">
                                            <i class="material-icons opacity-10">arrow_back</i>
                                            Back To My Post</a>
                                        <form method="POST" action="{{ route('post-show', ['post' => $post]) }}"
                                            enctype="multipart/form-data">
                                            @method('put')
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="input-group input-group-outline my-3">
                                                        <label for="title" class="form-label">Title</label>
                                                        <input type="text"
                                                            class="form-control @error('title') is-invalid @enderror"
                                                            id="title" name="title" required
                                                            value="{{ old('title', $post->title) }}" required>
                                                        @error('title')
                                                            <div class="alert alert-danger" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="input-group input-group-outline my-3">
                                                        <label for="slug" class="form-label d-none">Slug</label>
                                                        <input type="text" class="form-control" id="slug"
                                                            name="slug" value="{{ old('slug', $post->slug) }}">
                                                        @error('slug')
                                                            <div class="alert alert-danger" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="input-group input-group-outline my-3">
                                                        <label for="category" class="form-label">Category</label>
                                                        <select class="form-select text-center" name="category_id">
                                                            @foreach ($categories as $category)
                                                                @if (old('category_id', $post->category->id) == $category->id)
                                                                    <option value="{{ $category->id }}" selected>
                                                                        {{ $category->name }}
                                                                    </option>
                                                                @else
                                                                    <option value="{{ $category->id }}">
                                                                        {{ $category->name }}
                                                                    </option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="input-group input-group-outline my-3">
                                                        <div class="mb-3">
                                                            <label for="image">Upload Image</label>
                                                            <input type="hidden" name="oldImage"
                                                                value="{{ $post->image }}">
                                                            @if ($post->image)
                                                                <img src="{{ asset('storage/' . $post->image) }}"
                                                                    class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                                            @else
                                                                <img src="https://source.unsplash.com/80x60?user"
                                                                    class="img-preview img-fluid mb-3 col-sm-5">
                                                            @endif
                                                            <input
                                                                class="form-control @error('image') is-invalid @enderror"
                                                                type="file" id="image" name="image"
                                                                onchange="previewImage()">
                                                            @error('image')
                                                                <div class="alert alert-danger" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="body" class="form-label">Body</label>
                                                        @error('body')
                                                            <div class="alert alert-danger text-white" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </div>
                                                        @enderror
                                                        <input id="body" type="hidden" name="body"
                                                            value="{{ old('body', $post->body) }}">
                                                        <trix-editor input="body"></trix-editor>

                                                    </div>
                                                    <button type="submit" class="btn btn-success">Create</button>

                                                </div>

                                            </div>

                                        </form>
                                    </div>


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
        const title = document.querySelector("#title");
        const slug = document.querySelector("#slug");

        title.addEventListener("keyup", () => {
            const preslug = `${title.value}`.replace(/ /g, "-");
            slug.value = preslug.toLowerCase();
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })
        const previewImage = () => {
            const {
                files
            } = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(files[0]);

            oFReader.onload = ({
                target: {
                    result
                }
            }) => {
                imgPreview.src = `${result}`;
            }
        }
    </script>
</x-layout>
