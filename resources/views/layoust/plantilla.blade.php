<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>


    <style>
        .active{
            color:blue;
            font-weight: bold;
        }

        </style>


</head>
<body>
    
    @yield('content')


    <header>
        <nav>
            <u>
                <li><a href="{{ route('welcome')}}" class="{{ request()->routeIs('welcome') ? 'active' : ''}}">Inicio</a></li>
                <li><a href="{{ route('curso.index')}}" class="{{ request()->routeIs('curso.*') ? 'active' : ''}}">Curso</a></li>
                <li><a href="{{ route('nosotros')}}" class="{{ request()->routeIs('nosotros') ? 'active' : ''}}">Nosotros</a></li>

            </u>
        </nav>
    </header>
</body>
</html>