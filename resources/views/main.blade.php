<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>김범수 - 포트폴리오</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

        <!-- On the page head -->
        <link rel="stylesheet" href="https://unpkg.com/fullpage.js/dist/fullpage.min.css">
        <!-- Include after Vue (before closing body) -->
        <script src="https://unpkg.com/vue-fullpage.js/dist/vue-fullpage.min.js"></script>
        <link href="{{ asset('css/sakura.css') }}" type="text/css" rel="stylesheet" >
{{--        Link Swiper's CSS--}}
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    </head>
    <body>
        <div id='app'>
            <full-component></full-component>
        </div>
        <script>
            $(window).load(function () {
                $('body').sakura();
            });
        </script>
        <script>
            var swiper = new Swiper('.swiper-container', {
                slidesPerView: 3,
                spaceBetween: 30,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
        </script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/sakura.js') }}"></script>

    </body>
</html>
