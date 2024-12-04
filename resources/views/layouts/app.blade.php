<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="images/icons/icon.png" type="image/x-icon">
    <style>
        /* Configurações padrão para light/dark */
        html {
            color-scheme: light dark;
        }

        :root {
            --body-bg: #ffffff;
            --body-text-color: #080710;
        }

        @media (prefers-color-scheme: dark) {
            :root {
                --body-bg: #080710;
                --body-text-color: #ffffff;
            }
        }

        body {
            background-color: var(--body-bg);
            color: var(--body-text-color);
        }

        h1, h2, h3, h4, h5, h6, p, a {
            color: inherit;
        }

        .form-label {
            background-color: var(--body-bg);
            color: var(--body-text-color);
        }

        footer {
            background-color: var(--body-bg);
            color: var(--body-text-color);
        }
    </style>
</head>
<body>
    @include('includes.header')

    <div class="container-fluid">
        @yield('content')
    </div>

    @include('includes.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    @livewireScripts
</body>
</html>
