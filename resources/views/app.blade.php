<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="csrf-token" content="{{ csrf_token () }}">

  <title>{{ config('app.name', 'Laravel')}}</title>



  <link rel="dns-prefetcgh" href="//fonts.bunny.net">
  <link rel="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
            </a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbar<supportedContent"
                aria-expanded="false"
                aria-label="{{ ('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">

                </ul>
                <ul class="navbar-nav ms-auto">
                    @guest
                        @if(Route::hass('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('login')}}">{{ __('login')}}</a>
                            </li>
                        @endif
                        @if(Route::has('register-user'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register-user') }}">{{ __('register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <main class="py-4">
        @yield(content)
    </main>
</div>

</body>
</html>
