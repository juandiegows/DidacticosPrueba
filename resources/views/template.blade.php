<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto web</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


</head>

<body>
    <header class="header">
        <nav class="header__links">
            <a href="{{ route('home') }}">Blog</a>
        </nav>
        <a class="header__login" href="">Iniciar seccion</a>
    </header>

    @yield('content')
</body>

</html>
