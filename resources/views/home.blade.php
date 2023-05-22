<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Felipe Genuino</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')

    </head>
    <body class="antialiased">
        <div>
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <nav>
            <ul>
                <li><a href="#hero">Home</a></li>
                <li><a href="#about">Sobre</a></li>
                <li><a href="#projects">Projetos</a></li>
                <li><a href="#contact">Contato</a></li>
            </ul>
        </nav>

        <section id="hero">
            Olá, sou <strong>Felipe Genuino</strong> <strong>designer de interfaces</strong>, <strong>frontend designer</strong> e apaixonado por acessibilidade.
         </section>

        <section id="about">
           <h2> Meus últimos trabalhos</h2>
            <p>A seguir meus últimos trabalhos WebApps, hotsites, folders, flyers e Cartões de visitas, mais de 10 anos de carreira como designer and frontend, trabalhei em grandes empresas e projetos como AltoQi, Softplan, RTA, Myfid e muitos outros.</p>
        </section>

        <section id="projects">
            <h2>Projects</h2>
        </section>


    </body>
</html>
