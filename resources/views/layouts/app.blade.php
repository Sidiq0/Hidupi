<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="icon" href="{{ Vite::asset('resources/img/icon/favicon.png') }}">
        <link rel="apple-touch-icon" href="{{ Vite::asset('resources/img/icon/apple-touch-icon.png') }}">
        <meta name="theme-color" content="#ffffff">
        <!-- Vendors styles-->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <div>
            <!-- Page Sidebar-->
            @include('layouts.sidebar')
            <!-- Page nav-->
            @include('layouts.nav')
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
