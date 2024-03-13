<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Note App') }}</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
          rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">
<div class="container">
    @session('success')
    <div class="wrapper">
        <div class="toast">
            <div class="content">
                <div class="icon">
                    <i class="bi bi-check-circle-fill"></i>
                </div>
                <div class="details">
                    {{ session('success') }}
                </div>
                <div class="close-icon">
                    <i class="bi bi-x"></i>
                </div>
            </div>
        </div>
    </div>
    @endsession
    {{ $slot }}
</div>
</body>
</html>

