<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta20
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login
    </title>
    <!-- CSS files -->
    <link href="{{ asset('storage/dashboard') }}/dist/css/tabler.min.css?1692870487" rel="stylesheet" />
    <link href="{{ asset('storage/dashboard') }}/dist/css/tabler-flags.min.css?1692870487" rel="stylesheet" />
    <link href="{{ asset('storage/dashboard') }}/dist/css/tabler-payments.min.css?1692870487" rel="stylesheet" />
    <link href="{{ asset('storage/dashboard') }}/dist/css/tabler-vendors.min.css?1692870487" rel="stylesheet" />
    <link href="{{ asset('storage/dashboard') }}/dist/css/demo.min.css?1692870487" rel="stylesheet" />
    <link href="{{ asset('storage/dashboard') }}/dist/css/custom.css" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>

<body class=" d-flex flex-column bg-white">
    <script src="{{ asset('storage/dashboard') }}/dist/js/demo-theme.min.js?1692870487"></script>
    <div class="row g-0 flex-fill">
        <div class="col-12 col-lg-6 col-xl-4 border-top-wide border-primary d-flex flex-column justify-content-center">
            <div class="container container-tight my-5 px-lg-5">
                @if (Session::has('status-success'))
                    <div class="alert alert-important alert-success alert-dismissible" role="alert">
                        <div class="d-flex">
                            <div>
                                <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24"
                                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M5 12l5 5l10 -10" />
                                </svg>
                            </div>
                            <div>
                                {{ Session::get('status-success') }}
                            </div>
                        </div>
                        <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
                    </div>
                @endif
                @if (Session::has('status-failed'))
                    <div class="alert alert-important alert-danger alert-dismissible" role="alert">
                        <div class="d-flex">
                            <div>
                                <!-- Download SVG icon from http://tabler-icons.io/i/alert-circle -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24"
                                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                    <path d="M12 8v4" />
                                    <path d="M12 16h.01" />
                                </svg>
                            </div>

                            <div>
                                {{ Session::get('status-failed') }}
                            </div>
                        </div>
                        <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
                    </div>
                @endif
                <div class="text-center mb-4">
                    <a href="." class="navbar-brand navbar-brand-autodark"><img src="./static/logo.svg"
                            height="36" alt=""></a>
                </div>
                <h2 class="h3 text-center mb-3">
                    Login
                </h2>
                <form action="{{ route('login.action') }}" method="post" autocomplete="off">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        @error('email')
                            <p class="error-validation">{{ $message }}</p>
                        @enderror
                        <input type="email" class="form-control" placeholder="your@email.com" autocomplete="off"
                            name="email">
                    </div>
                    <div class="mb-2">
                        <label class="form-label">
                            Password
                        </label>
                        @error('password')
                            <p class="error-validation">{{ $message }}</p>
                        @enderror
                        <div class="input-group input-group-flat">
                            <input type="password" class="form-control" placeholder="Your password" autocomplete="off"
                                name="password">
                            <span class="input-group-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-lock">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z" />
                                    <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                                    <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">Masuk</button>
                    </div>
                </form>
                <div class="text-center text-secondary mt-3">
                    Belum memiliki akun? <a href="{{ route('register.page') }}" tabindex="-1">Daftar</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-6 col-xl-8 d-none d-lg-block">
            <!-- Photo -->
            <div class="bg-cover h-100 min-vh-100"
                style="background-image: url({{ asset('storage/dashboard/dist/img/tumpukan-koran.jpg') }})">
            </div>
        </div>

    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{ asset('storage/dashboard') }}/dist/js/tabler.min.js?1692870487" defer></script>
    <script src="{{ asset('storage/dashboard') }}/dist/js/demo.min.js?1692870487" defer></script>
</body>

</html>
