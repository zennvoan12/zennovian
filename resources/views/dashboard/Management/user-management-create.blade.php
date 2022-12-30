<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="user-management"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="User Management"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-center text-capitalize ps-3">Create User</h6>
                            </div>
                        </div>

                        <div class="p-4 ">
                            <form method="POST" action="{{ route('index') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-8">
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

                                        <div class="col-md-12">
                                            <div class="input-group input-group-dynamic my-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="email" name="email"
                                                    value="{{ old('email') }}">
                                                @error('email')
                                                    <div class="alert alert-danger" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="col-md-12">
                                                <div class="input-group input-group-dynamic my-3">
                                                    <label for="username" class="form-label">Username</label>
                                                    <input type="text" class="form-control" id="username"
                                                        name="username" value="{{ old('username') }}">
                                                    @error('username')
                                                        <div class="alert alert-danger" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </div>
                                                    @enderror
                                                </div>


                                                <div class="col-md-12">
                                                    <div class="input-group input-group-dynamic my-3">
                                                        <label for="phone" class="form-label">phone</label>
                                                        <input type="tel" class="form-control" id="phone"
                                                            name="phone" value="{{ old('phone') }}">
                                                        @error('phone')
                                                            <div class="alert alert-danger" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="input-group input-group-dynamic my-3">
                                                            <label for="location" class="form-label">location</label>
                                                            <input type="text" class="form-control" id="location"
                                                                name="location" value="{{ old('location') }}">
                                                            @error('location')
                                                                <div class="alert alert-danger" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </div>
                                                            @enderror
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="input-group input-group-dynamic my-3">
                                                                <label for="password"
                                                                    class="form-label">Password</label>
                                                                <input type="password" class="form-control"
                                                                    id="password" name="password">
                                                                @error('password')
                                                                    <div class="alert alert-danger" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </div>
                                                                @enderror
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="input-group input-group-static my-3">
                                                                    <label for="role">Role</label>
                                                                    {{-- <select class="form-control text-center " name="category_id">
                                                    @foreach ($users as $user)
                                                        @if (old('role') == $user->role)
                                                            <option value="{{ $user->id }}" selected>
                                                                {{ $user->name }}
                                                            </option>
                                                        @else
                                                            <option value="{{ $user->role }}">{{ $user->role }}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </select> --}}
                                                                    <select class="form-control text-center"
                                                                        name="role">
                                                                        @foreach (['admin', 'author'] as $role)
                                                                            @if (old('role') == $role)
                                                                                <option value="{{ $role }}"
                                                                                    selected>
                                                                                    {{ ucfirst($role) }}</option>
                                                                            @else
                                                                                <option value="{{ $role }}">
                                                                                    {{ ucfirst($role) }}
                                                                                </option>
                                                                            @endif
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="input-group input-group-outline my-3">
                                                                <div class="mb-3">
                                                                    <label for="photo">Upload Photo</label>
                                                                    <img class="img-preview img-fluid mb-3 col-sm-5">
                                                                    <input
                                                                        class="form-control @error('photo') is-invalid @enderror"
                                                                        type="file" id="photo" name="photo"
                                                                        onchange="previewImage()">
                                                                    @error('photo')
                                                                        <div class="alert alert-danger" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </div>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <button type="submit"
                                                                class="btn btn-success">Create</button>

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
            } = document.querySelector('#photo');
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
