<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <!-- Aggiungi qui eventuali tag meta, fogli di stile CSS, script JavaScript, ecc. -->
</head>
<body>

    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('tasks.index') }}">Attività</a></li>
                <!-- Aggiungi ulteriori voci del menu a seconda delle tue esigenze -->
            </ul>
        </nav>
    </header>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer>
        <!-- Contenuto del footer -->
        <p>&copy; {{ date('Y') }} My Laravel App</p>
    </footer>

    <!-- Aggiungi qui eventuali script JavaScript -->

</body>
</html>