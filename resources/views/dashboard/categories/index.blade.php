@include('layouts.dashboard.head')
@include('layouts.dashboard.menu-bar', ['page' => 'kategori'])


<div class="page-wrapper">
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Overview
                    </div>
                    <h2 class="page-title">
                        {{ $title }}
                    </h2>
                </div>
                <!-- Page title actions -->
                @if (is_admin())
                    <div class="col-auto ms-auto d-print-none">
                        <div class="btn-list">
                            <a href="{{ route('kategori.create') }}" class="btn btn-primary d-none d-sm-inline-block">
                                <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 5l0 14" />
                                    <path d="M5 12l14 0" />
                                </svg>
                                Tambah Data
                            </a>
                            <a href="{{ route('kategori.create') }}" class="btn btn-primary d-sm-none btn-icon"
                                aria-label="Create new report">
                                <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 5l0 14" />
                                    <path d="M5 12l14 0" />
                                </svg>
                            </a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-12">
                    <div class="row row-cards">
                        <div class="kartu">
                            <table id="myTable" class="display">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>Nama</th>
                                        <th>Slug</th>
                                        <th>Berita</th>
                                        @if (is_admin())
                                            <th>Aksi</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datas as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $data->nama }}</td>
                                            <td>{{ $data->slug }}</td>
                                            <td>{{ $data->berita->count() }}</td>
                                            {{-- <td>10</td> --}}
                                            @if (is_admin())
                                                <td><a href="{{ route('kategori.edit', ['id' => enkripsi($data->id)]) }}"
                                                        class="btn btn-primary btn-sm"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="#FFF" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path
                                                                d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                                            <path
                                                                d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                                            <path d="M16 5l3 3" />
                                                        </svg> Edit</a> <a href="#" data-bs-toggle="modal"
                                                        data-bs-target="#modal-small"
                                                        data-id="{{ enkripsi($data->id) }}"
                                                        class="btn btn-danger btn-sm"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="#FFF" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="icon icon-tabler icons-tabler-outline icon-tabler-trash">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path d="M4 7l16 0" />
                                                            <path d="M10 11l0 6" />
                                                            <path d="M14 11l0 6" />
                                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                        </svg> Hapus</a></td>
                                                <div class="modal modal-blur fade" id="modal-small" tabindex="-1"
                                                    role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-sm modal-dialog-centered"
                                                        role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <div class="modal-title">Anda yakin
                                                                    menghapus
                                                                    data ini?
                                                                </div>
                                                                <p> Tindakan ini akan
                                                                    menghapus data secara <b
                                                                        class="text-danger">permanen</b>
                                                                    dan
                                                                    <b class="text-danger">tidak
                                                                        dapat dipulihkan</b>.
                                                                </p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button"
                                                                    class="btn btn-link link-secondary me-auto"
                                                                    data-bs-dismiss="modal">Batal</button>
                                                                <form action="{{ route('kategori.destroy') }}"
                                                                    method="post">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <input type="hidden" id="deleteValue"
                                                                        name="id_delete">
                                                                    <button type="submit" class="btn btn-danger"
                                                                        data-bs-dismiss="modal">Ya,
                                                                        hapus data</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        </tr>
                                    @endforeach
                                    @if (Session::has('delete-status-success'))
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
                                                            stroke="currentColor" fill="none"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                                            <path d="M9 12l2 2l4 -4" />
                                                        </svg>
                                                        <h3>{{ Session::get('delete-status-success') }}</h3>
                                                        {{-- <div class="text-secondary">Your payment of $290 has been successfully submitted. Your invoice has been sent to support@tabler.io.</div> --}}
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="w-100">
                                                            <div class="row">
                                                                <div class="col"><a href="#"
                                                                        class="btn w-100" data-bs-dismiss="modal">
                                                                        Close
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
                                    @if (Session::has('data-not-null'))
                                        <div class="modal modal-blur fade" id="modal-danger" tabindex="-1"
                                            role="dialog" aria-hidden="true">
                                            <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                    <div class="modal-status bg-danger"></div>
                                                    <div class="modal-body text-center py-4">
                                                        <!-- Download SVG icon from http://tabler-icons.io/i/alert-triangle -->
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="icon mb-2 text-danger icon-lg" width="24"
                                                            height="24" viewBox="0 0 24 24" stroke-width="2"
                                                            stroke="currentColor" fill="none"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path
                                                                d="M10.24 3.957l-8.422 14.06a1.989 1.989 0 0 0 1.7 2.983h16.845a1.989 1.989 0 0 0 1.7 -2.983l-8.423 -14.06a1.989 1.989 0 0 0 -3.4 0z" />
                                                            <path d="M12 9v4" />
                                                            <path d="M12 17h.01" />
                                                        </svg>
                                                        <h3>Anda yakin?</h3>
                                                        <div class="text-secondary">
                                                            {{ Session::get('data-not-null') }}</div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="w-100">
                                                            <div class="row">
                                                                <div class="col"><a href="#"
                                                                        class="btn w-100" data-bs-dismiss="modal">
                                                                        Cancel
                                                                    </a></div>
                                                                <div class="col"><a
                                                                        href="{{ route('kategori.forceDestroy', ['id' => enkripsi(Session::get('id_kategori'))]) }}"
                                                                        class="btn btn-danger w-100">
                                                                        Hapus
                                                                    </a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <script>
                                            document.addEventListener('DOMContentLoaded', function() {
                                                var myModal = new bootstrap.Modal(document.getElementById('modal-danger'));
                                                myModal.show();
                                            });
                                        </script>
                                    @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var myModal = new bootstrap.Modal(document.getElementById('modal-small'));

            // Menangkap event klik pada tombol hapus
            document.querySelectorAll('a[data-bs-toggle="modal"]').forEach(function(link) {
                link.addEventListener('click', function(event) {
                    event.preventDefault(); // Mencegah link membuka halaman baru

                    var deleteId = link.getAttribute('data-id');
                    var modalFooter = myModal._element.querySelector('.modal-footer');

                    // Memperbarui href pada tombol hapus di footer modal
                    var deleteBtn = modalFooter.querySelector('#deleteValue');
                    deleteBtn.setAttribute('value', deleteId);

                    myModal.show(); // Menampilkan modal
                });
            });
        });
    </script>
    @include('layouts.dashboard.footer')
