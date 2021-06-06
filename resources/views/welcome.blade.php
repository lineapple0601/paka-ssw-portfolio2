<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Vue Laravel SPA') }}</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c" rel="stylesheet">
    <link href="https://fonts.googleapis.com/earlyaccess/kokoro.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sawarabi+Mincho" rel="stylesheet">
    <link href="https://fonts.googleapis.com/earlyaccess/nicomoji.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=M+PLUS+1p" rel="stylesheet">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app" class="wf-roundedmplus1c">
    <basic-navbar></basic-navbar>
    <main-contents></main-contents>
</div>
<style>
    .wf-roundedmplus1c { font-family: "M PLUS Rounded 1c !important;" }
    .wf-kokoro { font-family: "Kokoro"; }
    .wf-sawarabimincho { font-family: "Sawarabi Mincho"; }
    .wf-nicomoji { font-family: "Nico Moji"; }
    .wf-mplus1p { font-family: "M PLUS 1p"; }
    .wf-alphabet {
        font-family: "Montserrat", "-apple-system", "BlinkMacSystemFont", 
            "Segoe UI", "Roboto", "Helvetica Neue", Arial, "Noto Sans", sans-serif, 
            "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        font-weight: bold;
    }
</style>
<!-- Scripts -->
<script src="{{ mix('/js/app.js') }}?210606v2" defer></script>
</body>
</html>
