<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Wonderful Journey</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="non-footer">
            <header>
                <div class="hero d-flex align-items-center justify-content-center">
                    Wonderful Journey
                </div>
            </header>
            <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <b>Wonderful Journey</b>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                            <li class="nav-item">
                                <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'active' : '' }}" href="{{ route('home') }}">
                                    {{ __('Home') }}
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle {{ Route::currentRouteName() === 'article.index-by-category' ? 'active' : '' }}" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Category
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @foreach(App\Category::all() as $category)
                                    <a class="dropdown-item" href="{{ route('article.index-by-category', ['category_id' => $category->id]) }}">{{$category->name}}</a>
                                    @endforeach
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link {{ Route::currentRouteName() === 'about' ? 'active' : '' }}" href="{{ route('about') }}">
                                    {{ __('About') }}
                                </a>
                            </li>

                            @if(Auth::user() && Auth::user()->role == App\User::USER_ROLE)
                            <li class="nav-item">
                                <a class="nav-link {{ Route::currentRouteName() === 'user.article.index' ? 'active' : '' }}" href="{{ route('user.article.index') }}">
                                    {{ __('My Blogs') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Route::currentRouteName() === 'user.user.edit' ? 'active' : '' }}" href="{{ route('user.user.edit') }}">
                                    {{ __('Profile') }}
                                </a>
                            </li>
                            @endif

                            @if(Auth::user() && Auth::user()->role == App\User::ADMIN_ROLE)
                            <li class="nav-item">
                                <a class="nav-link {{ Route::currentRouteName() === 'admin.user.index' ? 'active' : '' }}" href="{{ route('admin.user.index') }}">
                                    {{ __('Users') }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Route::currentRouteName() === 'admin.article.index' ? 'active' : '' }}" href="{{ route('admin.article.index') }}">
                                    {{ __('Blogs') }}
                                </a>
                            </li>
                            @endif

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                            <li class="nav-item">
                                <a class="nav-link {{ Route::currentRouteName() === 'login' ? 'active' : '' }}" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Route::currentRouteName() === 'register' ? 'active' : '' }}" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @if(Auth::user() && Auth::user()->role == App\User::USER_ROLE)
                                    <a class="dropdown-item" href="{{ route('user.user.edit') }}">
                                        {{ __('Edit Profile') }}
                                    </a>
                                    @endif

                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

            <main class="py-4">
                @yield('content')
            </main>
        </div>

        <footer>
            <div class="text-center footer">
                &copy; 2201731106 - Jeremy Leonardo
            </div>
        </footer>
    </div>
</body>
</html>
