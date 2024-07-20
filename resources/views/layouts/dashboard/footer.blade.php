<footer class="footer footer-transparent d-print-none">
    <div class="container-xl">
        <div class="row text-center align-items-center flex-row-reverse">
            <div class="col-lg-auto ms-lg-auto">
                <ul class="list-inline list-inline-dots mb-0">
                    <li class="list-inline-item"><a href="https://tabler.io/docs" target="_blank" class="link-secondary"
                            rel="noopener">Documentation</a></li>
                    <li class="list-inline-item"><a href="./license.html" class="link-secondary">License</a></li>
                    <li class="list-inline-item"><a href="https://github.com/tabler/tabler" target="_blank"
                            class="link-secondary" rel="noopener">Source code</a></li>
                    <li class="list-inline-item">
                        <a href="https://github.com/sponsors/codecalm" target="_blank" class="link-secondary"
                            rel="noopener">
                            <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink icon-filled icon-inline"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                            </svg>
                            Sponsor
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                <ul class="list-inline list-inline-dots mb-0">
                    <li class="list-inline-item">
                        Copyright &copy; 2023
                        <a href="." class="link-secondary">Tabler</a>.
                        All rights reserved.
                    </li>
                    <li class="list-inline-item">
                        <a href="./changelog.html" class="link-secondary" rel="noopener">
                            v1.0.0-beta20
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
<!-- Libs JS -->
<script>
    $(document).ready(function() {
        $('#myTable').DataTable({
            // Menambahkan opsi-opsi seperti pencarian dan paging
            searching: true,
            paging: true,
            sorting: true,
            scrolling: true,
            info: true,
            language: {
                paginate: {
                    next: 'Selanjutnya',
                    previous: 'Sebelumnya'
                },
                search: 'Cari:',
                lengthMenu: 'Tampilkan _MENU_ entri',
                info: 'Menampilkan _START_ sampai _END_ dari _TOTAL_ entri',
                infoEmpty: 'Tidak ada data yang tersedia',
                loadingRecords: 'Memuat...',
                zeroRecords: 'Tidak ada data yang cocok ditemukan',
                emptyTable: 'Tidak ada data yang tersedia dalam tabel',
                infoFiltered: '(disaring dari total _MAX_ entri)'
            },

        });
    });
</script>

@isset($summernote)
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- Include Popper.js (required for Bootstrap) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Include Bootstrap JS (required for Summernote) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Include Summernote JS from CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
    <!-- Include Highlight.js JS from CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js"></script>
@endisset

<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 300, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: true, // set focus to editable area after initializing summernote
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear', 'strikethrough', 'superscript',
                    'subscript'
                ]],
                ['fontname', ['fontname']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['insert', ['link', 'table']], // Menambahkan 'table' ke toolbar
                ['view', ['fullscreen', 'help']],
                ['misc', ['undo', 'redo']]
            ]
        });
    });
</script>
<script src="{{ asset('storage/dashboard') }}/dist/libs/apexcharts/dist/apexcharts.min.js?1692870487" defer></script>
<script src="{{ asset('storage/dashboard') }}/dist/libs/jsvectormap/dist/js/jsvectormap.min.js?1692870487" defer>
</script>
<script src="{{ asset('storage/dashboard') }}/dist/libs/jsvectormap/dist/maps/world.js?1692870487" defer></script>
<script src="{{ asset('storage/dashboard') }}/dist/libs/jsvectormap/dist/maps/world-merc.js?1692870487" defer></script>
<!-- Tabler Core -->
<script src="{{ asset('storage/dashboard') }}/dist/js/tabler.min.js?1692870487" defer></script>
<script src="{{ asset('storage/dashboard') }}/dist/js/demo.min.js?1692870487" defer></script>
</body>

</html>
