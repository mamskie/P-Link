<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="Pelindo, URL Shortener, Link Management, Tracking, Short Links">
    <meta name="author" content="M.Khotibul Umam">
    <title>{{ config('app.name') }} - Smart & Efficient Link Management</title>
    <meta name="description"
        content="Shorten, share, and track your links efficiently with {{ config('app.name') }} - the smart URL shortener for Pelindo." />
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    @livewireStyles
    @filamentStyles
    @vite(['resources/css/main.css', 'resources/js/app.js'])
</head>

<body class="@yield('css_class')">
    @include('partials.header')

    @yield('content')

    @livewireScripts
    @filamentScripts
</body>

</html>
