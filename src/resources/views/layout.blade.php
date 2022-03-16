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
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    @yield('scripts')
</body>
</html>