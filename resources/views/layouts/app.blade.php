<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'FitHub') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('styles')
</head>
<body>
    <div class="header">
        <h1>{{ __('messages.header') }}</h1>
        <div class="language-switcher">
            <a href="{{ url('lang/en') }}" class="button">English</a>
            <a href="{{ url('lang/ru') }}" class="button">Русский</a>
        </div>
    </div>

    @yield('content')

    <div class="footer">
        <p>&copy; 2024 FitHub. {{ __('messages.footer') }}</p>
    </div>

    @yield('scripts')
</body>
</html>
