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
    <title>{{ $title }}</title>
    <!-- CSS files -->
    <link href="{{ asset('storage/dashboard') }}/dist/css/tabler.min.css?1692870487" rel="stylesheet" />
    <link href="{{ asset('storage/dashboard') }}/dist/css/tabler-flags.min.css?1692870487" rel="stylesheet" />
    <link href="{{ asset('storage/dashboard') }}/dist/css/tabler-payments.min.css?1692870487" rel="stylesheet" />
    <link href="{{ asset('storage/dashboard') }}/dist/css/tabler-vendors.min.css?1692870487" rel="stylesheet" />
    <link href="{{ asset('storage/dashboard') }}/dist/css/demo.min.css?1692870487" rel="stylesheet" />
    <link href="{{ asset('storage/dashboard') }}/dist/css/custom.css" rel="stylesheet" />

    <!-- Memuat jQuery dari CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Memuat DataTables dari CDN -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>

    @isset($summernote)
        <!-- Include Summernote CSS from CDN -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">
        <!-- Include Bootstrap CSS (required for Summernote) -->
        {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"> --}}
        <!-- Include Highlight.js CSS from CDN -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/styles/default.min.css" rel="stylesheet">
    @endisset
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
