<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
{{--        <meta name="csrf-token" content="{{ csrf_token() }}">--}}

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
            $(document).ready(function(){
                new Swiper('.swiper-container', {

                    slidesPerView : 3, // 동시에 보여줄 슬라이드 갯수
                    spaceBetween : 30, // 슬라이드간 간격
                    slidesPerGroup : 3, // 그룹으로 묶을 수, slidesPerView 와 같은 값을 지정하는게 좋음

                    // 그룹수가 맞지 않을 경우 빈칸으로 메우기
                    // 3개가 나와야 되는데 1개만 있다면 2개는 빈칸으로 채워서 3개를 만듬
                    loopFillGroupWithBlank : true,

                    loop : true, // 무한 반복

                    pagination : { // 페이징
                        el : '.swiper-pagination',
                        clickable : true, // 페이징을 클릭하면 해당 영역으로 이동, 필요시 지정해 줘야 기능 작동
                    },
                    navigation : { // 네비게이션
                        nextEl : '.swiper-button-next', // 다음 버튼 클래스명
                        prevEl : '.swiper-button-prev', // 이번 버튼 클래스명
                    },
                });
            });


        </script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/sakura.js') }}"></script>

    </body>
</html>
