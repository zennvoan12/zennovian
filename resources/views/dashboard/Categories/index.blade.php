<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="category"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Category"></x-navbars.navs.auth>

        <div class="container-fluid py-4">
            <div class="row">
                <!-- End Navbar -->
                @if (session()->has('success'))
                    <div class="alert alert-success col-12 text-white center" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Creator </h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <a href="{{ route('category-create') }}" class="btn btn-primary mx-4">Create New
                                    Category</a>
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                No</th>

                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Category Name</th>


                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7  ">
                                                Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($categories as $category)
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">

                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">{{ $loop->iteration }}</h6>

                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex px-2 py-1">

                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">{{ $category->name }}</h6>

                                                        </div>
                                                    </div>
                                                </td>



                                                {{-- <td class="align-middle text-center">
                                                    <a href="{{ route('category-show', ['category' => $category]) }}"
                                                        class="badge bg-info">
                                                        <i class="material-icons opacity-10">visibility</i>
                                                    </a>
                                                    <a href="{{ route('category-show', ['category' => $category]) }}/edit"
                                                        class="badge bg-warning">
                                                        <i class="material-icons opacity-10">edit</i>
                                                    </a>
                                                    <form action="posts/{{ $post->slug }}" method="POST"
                                                        class="d-inline">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="badge bg-danger border-0"><i
                                                                class="material-icons opacity-10"
                                                                onclick="return confirm('Are You Sure ?')">cancel</i></button>
                                                    </form>

                                                </td> --}}
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <x-footers.auth></x-footers.auth>
        </div>
    </main>
    <x-plugins></x-plugins>

</x-layout>
