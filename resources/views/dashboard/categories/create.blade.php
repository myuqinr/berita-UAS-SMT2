@include('layouts.dashboard.head', ['summernote' => true])
@include('layouts.dashboard.menu-bar', ['page' => 'kategori'])


<div class="page-wrapper">
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-12">
                    <div class="row row-cards">
                        <div class="col-lg-8=12">
                            <div class="row row-cards">
                                <div class="col-12">
                                    <form class="card" action="{{ route('kategori.store') }}" method="post">
                                        @csrf
                                        <div class="card-body">
                                            <h3 class="card-title">{{ $title }}</h3>
                                            <div class="row row-cards">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Nama Kategori</label>
                                                        <input type="text" class="form-control" name="nama">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mb-3 mb-0">
                                                        <label class="form-label">Deskripsi</label>
                                                        <textarea id="summernote" name="deskripsi"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-end">
                                            <a href="{{ route('kategori.index') }}" class="btn">Kembali</a>
                                            <button type="submit" class="btn btn-primary"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon icon-tabler icons-tabler-outline icon-tabler-device-floppy">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                    <path
                                                        d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
                                                    <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                                    <path d="M14 4l0 4l-6 0l0 -4" />
                                                </svg> Simpan Data</button>
                                        </div>
                                    </form>
                                    @if (Session::has('status-success'))
                                        <div class="modal modal-blur fade" id="modal-success" tabindex="-1"
                                            role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                    <div class="modal-status bg-success"></div>
                                                    <div class="modal-body text-center py-4">
                                                        <!-- Download SVG icon from http://tabler-icons.io/i/circle-check -->
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon mb-2 text-green icon-lg" width="24"
                                                            height="24" viewBox="0 0 24 24" stroke-width="2"
                                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                                            stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                                            <path d="M9 12l2 2l4 -4" />
                                                        </svg>
                                                        <h3>{{ Session::get('status-success') }}</h3>
                                                        {{-- <div class="text-secondary">Your payment of $290 has been successfully submitted. Your invoice has been sent to support@tabler.io.</div> --}}
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="w-100">
                                                            <div class="row">
                                                                <div class="col"><a href="#" class="btn w-100"
                                                                        data-bs-dismiss="modal">
                                                                        Close
                                                                    </a></div>
                                                                <div class="col"><a
                                                                        href="{{ route('kategori.index') }}"
                                                                        class="btn btn-success w-100">
                                                                        Kembali
                                                                    </a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <script>
                                            document.addEventListener('DOMContentLoaded', function() {
                                                var myModal = new bootstrap.Modal(document.getElementById('modal-success'));
                                                myModal.show();
                                            });
                                        </script>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.dashboard.footer', ['summernote' => true])
