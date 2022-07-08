<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Assets -->
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])

    @stack('head')
</head>
<body class="antialiased">
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 {{ isset($center) ? 'sm:items-center' : '' }} py-4 sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block space-x-4">
            @auth
                <a href="{{ url('/') }}" class="text-sm text-primary-light font-bold hover:text-primary">Home</a>

                @if (Route::has('tokens.index'))
                    <a href="{{ route('tokens.index') }}" class="text-sm text-primary-light font-bold hover:text-primary">Tokens</a>
                @endif

                <a href="{{ route('logout') }}" class="text-sm text-primary-light font-bold hover:text-primary">Logout</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-primary-light font-bold hover:text-primary">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="text-sm text-primary-light font-bold hover:text-primary">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="container">
        @yield('content')
    </div>
</div>
@stack('body')
</body>
</html>
