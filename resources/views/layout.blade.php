<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'ahmed.dev - Full Stack Developer' }}</title>
        <meta name="description"
            content="{{ $description ?? 'Full stack developer portfolio showcasing projects and skills' }}">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    </head>

    <body class="theme-light">

        @yield('content')

        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="{{ asset('js/main.js') }}"></script>
    </body>

</html>
