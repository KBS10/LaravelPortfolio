<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>김범수 - 포트폴리오</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- On the page head -->
        <link rel="stylesheet" href="https://unpkg.com/fullpage.js/dist/fullpage.min.css">
        <!-- Include after Vue (before closing body) -->
        <script src="https://unpkg.com/vue-fullpage.js/dist/vue-fullpage.min.js"></script>

    </head>
    <body>
        <div id='app'>
            <full-component></full-component>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
