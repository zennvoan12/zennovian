<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="post-dashboard"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Post Dashboard"></x-navbars.navs.auth>

        <div class="container-fluid py-4">
            <div class="row">
                <!-- End Navbar -->

                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Authors table</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <a href="{{ route('post-create') }}" class="btn btn-primary mx-4">Create New Post</a>
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                No</th>
                                            <th <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Title</th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Category</th>

                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Publish At</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7  ">
                                                Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($posts as $post)
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
                                                            <h6 class="mb-0 text-sm">{{ $post->title }}</h6>

                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">{{ $post->category->name }}
                                                    </p>

                                                </td>

                                                <td class="align-middle text-center">
                                                    <span
                                                        class="text-secondary text-xs font-weight-bold">{{ $post->created_at->diffForHumans() }}</span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <a href="{{ route('post-show', ['post' => $post]) }}"
                                                        class="badge bg-info">
                                                        <i class="material-icons opacity-10">visibility</i>
                                                    </a>
                                                    {{-- @dd($post-slug) --}}
                                                    <a href="{{ route('post-show', $post->slug) }}/edit"
                                                        class="badge bg-warning">
                                                        <i class="material-icons opacity-10">edit</i>
                                                    </a>
                                                    <form action="{{ route('post-delete', $post->slug) }}"
                                                        method="POST" class="d-inline" id="deleteForm">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="badge bg-danger border-0"
                                                            onclick=" confirmDelete('{{ $post->slug }}')"
                                                            data-slug="{{ $post->slug }}"><i
                                                                class="material-icons opacity-10">cancel</i></button>
                                                    </form>

                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                <div class=" d-lg-flex justify-content-center mt-5">

                                    {{ $posts->links() }}
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
        function confirmDelete(slug) {
            swal.fire({
                title: "Delete ?",
                text: "Are you Sure ?",
                showCancelButton: true,
                confirmButtonText: "Yes, Do it",
                cancelButtonText: "No ! ",
                reverseButtons: true,
                timer: 5000
            }).then(function(result) {
                if (result.value) {
                    axios.delete('{{ route('post-delete', $post->slug) }}')
                        .then(response => {
                            // Berhasil menghapus data, tampilkan notifikasi dan refresh halaman
                            swal.fire("Done!", "Data has been Deleted", "success");
                            setTimeout(() => {
                                location.reload();
                            }, 1000);
                        })
                        .catch(error => {
                            // Gagal menghapus data, tampilkan pesan error
                            swal.fire("Error!", error.response.data.message, "error");
                        });
                }
            });
        }
    </script>
</x-layout>
