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
    <title>Register</title>
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

<body class=" d-flex flex-column">
    <script src="{{ asset('storage/dashboard') }}/dist/js/demo-theme.min.js?1692870487"></script>
    <div class="page page-center">
        <div class="container container-tight py-4">
            <div class="text-center mb-4">
                <a href="." class="navbar-brand navbar-brand-autodark">
                    <img src="./static/logo.svg" width="110" height="32" alt="Tabler"
                        class="navbar-brand-image">
                </a>
            </div>
            <form class="card card-md" action="{{ route('register.action') }}" method="post" autocomplete="off">
                @csrf
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Daftar Akun</h2>
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        @error('name')
                            <p class="error-validation">{{ $message }}</p>
                        @enderror
                        <input type="text" class="form-control" placeholder="Username" name="name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat Email</label>
                        @error('email')
                            <p class="error-validation">{{ $message }}</p>
                        @enderror
                        <input type="email" class="form-control" placeholder="Email Aktif" name="email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        @error('password')
                            <p class="error-validation">{{ $message }}</p>
                        @enderror
                        <div class="input-group input-group-flat">
                            <input type="password" class="form-control" placeholder="Password" autocomplete="off"
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
                    {{-- <div class="mb-3">
                        <label class="form-check">
                            <input type="checkbox" class="form-check-input" />
                            <span class="form-check-label">Agree the <a href="./terms-of-service.html"
                                    tabindex="-1">terms and policy</a>.</span>
                        </label>
                    </div> --}}
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">Daftar</button>
                    </div>
                </div>
            </form>
            <div class="text-center text-secondary mt-3">
                Sudah memiliki akun? <a href="{{ route('login') }}" tabindex="-1">Masuk</a>
            </div>
        </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{ asset('storage/dashboard') }}/dist/js/tabler.min.js?1692870487" defer></script>
    <script src="{{ asset('storage/dashboard') }}/dist/js/demo.min.js?1692870487" defer></script>
</body>

</html>
