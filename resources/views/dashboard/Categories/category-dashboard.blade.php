<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="category"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Category"></x-navbars.navs.auth>

        <div class="container-fluid py-4">
            <div class="row">
                <!-- End Navbar -->

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



                                                <td class="align-middle text-center">

                                                    <a href="{{ route('category-edit', ['category' => $category]) }}"
                                                        class="badge bg-warning">
                                                        <i class="material-icons opacity-10">edit</i>
                                                    </a>
                                                    <form
                                                        action="{{ route('category-delete', ['category' => $category]) }}"
                                                        method="POST" class="d-inline" id="deleteForm">
                                                        @method('DELETE')
                                                        {{ csrf_field() }}
                                                        @csrf
                                                        <button type="submit" class="badge bg-danger border-0"
                                                            onclick=" confirmDelete('{{ $category->slug }}')"
                                                            data-slug="{{ $category->slug }}"><i
                                                                class="material-icons opacity-10">cancel</i></button>
                                                    </form>

                                                </td>
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
                    axios.delete('{{ route('category-delete', $category->slug) }}')
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
        // function confirmDelete() {
        //     Swal.fire({
        //         title: 'Are you sure you want to delete this data?',
        //         text: "You won't be able to revert this!",
        //         icon: 'warning',
        //         showCancelButton: true,

        //         confirmButtonText: 'Yes, delete it!'
        //     }).then((result) => {
        //         if (result.value) {
        //             Swal.fire({
        //                 title: 'Deleting data...',
        //                 text: 'Please wait',
        //                 timer: 2000,
        //                 onBeforeOpen: () => {
        //                     Swal.showLoading()
        //                     timerInterval = setInterval(() => {
        //                         Swal.getContent().querySelector('strong')
        //                             .textContent = Swal.getTimerLeft()
        //                     }, 100)
        //                 },
        //                 onClose: () => {
        //                     clearInterval(timerInterval)
        //                 }
        //             }).then((result) => {
        //                 if (result.dismiss === Swal.DismissReason.timer) {
        //                     Swal.fire(
        //                         'Deleted!',
        //                         'Your data has been deleted.',
        //                         'success'
        //                     )
        //                     document.getElementById('deleteForm').submit();
        //                 }
        //             });
        //         }
        //     });
        // }
    </script>
</x-layout>
