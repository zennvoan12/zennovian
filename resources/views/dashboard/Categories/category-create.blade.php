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
                                <h6 class="text-white text-center text-capitalize ps-3">Create Post</h6>
                            </div>
                        </div>

                        <div class="p-4 ">
                            <form method="POST" action="{{ route('category-dashboard') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="input-group input-group-dynamic my-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                required autofocus value="{{ old('name') }}">
                                            @error('category')
                                                <div class="alert alert-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="input-group input-group-text my-3">
                                            <label for="slug" class="form-label d-none">Slug</label>
                                            <input type="text"
                                                class="form-control @error('slug') is-invalid @enderror" id="slug"
                                                name="slug" value="{{ old('slug') }}" readonly>
                                            @error('slug')
                                                <div class="alert alert-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>


                                        <button type="submit" class="btn btn-success">Create</button>

                                    </div>

                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <x-footers.auth></x-footers.auth>
        </div>
    </main>
    <x-plugins></x-plugins>

    <script>
        const title = document.querySelector("#name");
        const slug = document.querySelector("#slug");

        title.addEventListener("keyup", () => {
            const preslug = `${title.value}`.replace(/ /g, "-");
            slug.value = preslug.toLowerCase();
        });



        // function previewImage() {

        //     const image = document.querySelector('#image');
        //     const imgPreview = document.querySelector('.img-preview');

        //     imgPreview.style.display = 'block';

        //     const oFReader = new FileReader();
        //     oFReader.readAsDataURL(image.files[0]);

        //     oFReader.onload = function(oFREader) {
        //         imgPreview.src = oFREader.target.result;

        //     }
        // }
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
