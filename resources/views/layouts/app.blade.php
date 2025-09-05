<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BitMartForest</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/crypto-theme.css') }}" rel="stylesheet">
</head>
<body class="bg-dark text-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">BitMartForest</a>
            <div>
                @guest
                    <a href="{{ route('login') }}" class="btn btn-outline-light">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-warning ms-2">Sign Up</a>
                @else
                    <a href="{{ route('dashboard') }}" class="btn btn-success">Dashboard</a>
                    <span class="ms-3">Hello, {{ Auth::user()->name }}</span>
                    <a href="{{ route('logout') }}" class="btn btn-danger ms-2"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endguest
            </div>
        </div>
    </nav>
    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>
