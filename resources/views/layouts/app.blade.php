<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <a href="{{ route('home') }}">Главная</a>
        <a href="{{ route('about') }}">О техникуме</a>
        <a href="{{ route('contacts') }}">Контакты</a>
        <a class="login-ref" href="{{ route('login') }}">Вход</a>
    </header>

    <main>
        <div class="main-content">
            @yield('content')   
        </div>
    </main>

    <footer>
        &copy; 2024 Ангарский Политехнический Техникум. Все права защищены.
    </footer>
</body>
</html>



