<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App</title>
    @yield('styles')
    <link rel="stylesheet" href="/css/styles.css"> 
</head>
<body>
    <header>
        <nav class="my-navbar">
            <a href="/" class="my-navbar-brand">Todo App</a>
            <div class="my-navbar-control">
                @if(Auth::check())
                    <span class="my-navbar-item">Hello, {{ Auth::user()->name }}</span>
                    |
                    <a href="#" id="logout" class="my-navbar-item">Logout</a>
                    <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                    @csrf
                    </form>
                @else
                    <a href="{{ route('login') }}" class="my-navbar-item">Login</a>
                    |
                    <a href="{{ route('register') }}" class="my-navbar-item">Register</a>
                @endif
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    @if(Auth::check())
        <script>
            document.getElementById('logout').addEventListener('click', function(event) {
                event.preventDefault();
                document.getElementById('logout-form').submit();
            });
        </script>
    @endif
    @yield('scripts')
</body>
</html>