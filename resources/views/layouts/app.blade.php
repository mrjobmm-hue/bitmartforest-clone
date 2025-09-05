<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BitMartForest | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Crypto Theme CSS -->
    <link href="{{ asset('css/crypto-theme.css') }}" rel="stylesheet">
</head>
<body class="bg-dark text-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-gradient-primary mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">BitMartForest</a>
            <div>
                @guest
                    <a href="{{ route('login') }}" class="btn btn-outline-light">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-warning">Register</a>
                @else
                    <a href="{{ route('dashboard') }}" class="btn btn-outline-light">Dashboard</a>
                    <form method="POST" action="{{ route('logout') }}" class="d-inline">
                        @csrf
                        <button class="btn btn-danger">Logout</button>
                    </form>
                @endguest
            </div>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
    <footer class="text-center p-3 mt-4 bg-dark border-top border-secondary">
        <small>&copy; {{ date('Y') }} BitMartForest. All rights reserved.</small>
    </footer>
    <!-- Bootstrap JS + jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>