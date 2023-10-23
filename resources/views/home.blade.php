<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converted Pug to HTML</title>
    <style>
        html, body {
            height: 100vh;
            width: 100vw;
            box-sizing: border-box;
        }

        body {
            background: #1f1f1f;
            font-family: "Open Sans Condensed", sans-serif;
        }

        h1, h2, h3, h4 {
            font-family: "Abril Fatface", serif;
        }

        #container {
            position: relative;
            display: flex;
            align-items: center;
            height: 100%;
            width: 100%;
        }

        .slide {
            position: relative;
            flex: 1;
            height: 100%;
            overflow: hidden;
            cursor: pointer;
            transition: all 1.0s;
        }

        .slide.last-viewed .btn-close:after {
            transition-delay: 0s;
        }

        .slide.last-viewed .btn-close:before {
            transition-delay: 0.1s;
        }

        .slide.last-viewed .content .city-info {
            transition-delay: 0s;
        }

        .slide.last-viewed .content .city-info li:nth-of-type(1) {
            transition-delay: 0.2s;
        }

        .slide.last-viewed .content .city-info li:nth-of-type(2) {
            transition-delay: 0.4s;
        }

        .slide.last-viewed .content .city-info li:nth-of-type(3) {
            transition-delay: 0.6s;
        }

        .slide.last-viewed .content .emblem {
            transition: all 0.5s;
            transition-delay: 0s;
        }

        .slide.last-viewed .image, .slide.active .image {
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
        }

        .slide.active {
            cursor: default;
        }

        .slide.active .overlay {
            width: 25%;
            background-size: 100% 100%;
            transition: all 1.25s;
            transition-delay: 1.75s;
        }

        .slide.active .content {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
        }

        .slide.active .content .title {
            width: 25%;
            opacity: 1;
            transform: translateY(30px);
            transition: all 1s;
            transition-delay: 1.25s;
        }

        .slide.active .content .title:after {
            height: 100%;
            color: white;
            overflow: initial;
        }

        .slide.active .content .title:before {
            transform: scaleX(1);
            transition-delay: 2s;
        }

        .slide.active .content .city-info {
            opacity: 1;
        }

        .slide.active .content .city-info li {
            opacity: 1;
            transform: translateX(0);
        }

        .slide.active .content .emblem {
            opacity: 0.8;
            transform: translateY(100px);
        }

        .slide.active .btn-close {
            cursor: pointer;
            pointer-events: auto;
        }

        .slide.active .btn-close:before,
        .slide.active .btn-close:after {
            opacity: 1;
        }

        .slide.active .btn-close:after {
            transform: rotate(45deg) translateX(0px);
        }

        .slide.active .btn-close:before {
            transform: rotate(-45deg) translateX(0px);
        }

        .slide.anim-in {
            transition-delay: 0.5s;
        }

        .slide.anim-in .image {
            top: -20%;
            left: -140%;
            height: 140%;
            width: 140%;
            animation: img-anim-in 1.2s forwards;
        }

        .slide.anim-out {
            flex: 0;
            cursor: default;
            transition-delay: 0.5s;
        }

        .slide.anim-out .image {
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            animation: img-anim-out 1.2s forwards;
        }

        .slide:nth-of-type(1).anim-in .image, .slide:nth-of-type(2).anim-in .image,
        .slide:nth-of-type(3).anim-in .image, .slide:nth-of-type(4).anim-in .image {
            animation-delay: 0.2s, 0.4s, 0.6s, 0.8s;
        }

        .slide:nth-of-type(1).anim-out .image, .slide:nth-of-type(2).anim-out .image,
        .slide:nth-of-type(3).anim-out .image, .slide:nth-of-type(4).anim-out .image {
            animation-delay: 0.2s, 0.4s, 0.6s, 0.8s;
        }

        .slide .image {
            position: absolute;
            background-size: cover;
            background-position: center center;
            pointer-events: none;
            transition: all 1s;
        }

        .slide .overlay {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-image: linear-gradient(rgba(20, 20, 20, 0.7), rgba(20, 20, 20, 0));
            background-position: 0 0;
            background-size: 100% 200%;
            opacity: 1;
            pointer-events: none;
            transition: all 0.5s;
        }

        .slide .content {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            pointer-events: none;
        }

        .slide .content .title {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            height: 65px;
            width: 100%;
            box-sizing: border-box;
            font-size: 3em;
            text-align: center;
            text-shadow: 0 2px 2px #2f2f2f;
            color: white;
            opacity: 1;
            pointer-events: none;
            transition: all 0.5s;
        }


        .slide .content .title:after {
            position: absolute;
            top: 0;
            height: 0;
            width: 100%;
            display: block;
            content: attr(data-title);
            overflow: hidden;
            color: #fff59d;
            transition: all 0.85s;
        }

        .slide .content .title:before {
            position: absolute;
            bottom: 15px;
            display: block;
            content: "";
            height: 2px;
            width: 85%;
            background: white;
            box-shadow: 0 2px 6px #2f2f2f;
            transform-origin: left center;
            transform: scaleX(0);
            transition: transform 1.25s;
        }

        .slide .content .emblem {
            position: absolute;
            height: 200px;
            width: 25%;
            opacity: 0;
            transform: translateY(120px);
            transition: all 1s;
            transition-delay: 1.75s;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: auto 100%;
        }

        .slide .content .city-info {
            position: absolute;
            bottom: 30px;
            right: 30px;
            padding: 30px 30px 30px 120px;
            font-size: 1.25em;
            color: white;
            text-shadow: 0 1px 4px #0f0f0f;
            background-image: linear-gradient(90deg, rgba(20, 20, 20, 0), rgba(20, 20, 20, 0.7));
            opacity: 0;
            transition: all 1s;
            transition-delay: 2s;
        }

        .slide .content .city-info li {
            position: relative;
            margin-bottom: 5px;
            text-align: justify;
            opacity: 0;
            transform: translateX(-30px);
            transition: all 0.75s;
        }

        .slide .content .city-info li:nth-of-type(1) {
            transition-delay: 2.5s;
        }

        .slide .content .city-info li:nth-of-type(2) {
            transition-delay: 2.7s;
        }

        .slide .content .city-info li:nth-of-type(3) {
            transition-delay: 2.9s;
        }

        .slide .btn-close {
            position: absolute;
            z-index: 100;
            top: 20px;
            right: 20px;
            height: 24px;
            width: 24px;
            pointer-events: none;
        }

        .slide .btn-close:before, .slide .btn-close:after {
            position: absolute;
            top: 12px;
            display: block;
            content: "";
            width: 100%;
            height: 4px;
            background-color: white;
            opacity: 0;
            cursor: pointer;
            transition: all 0.5s;
        }

        .slide .btn-close:after {
            transform: rotate(45deg) translateX(-12px);
            transition-delay: 3s;
        }

        .slide .btn-close:before {
            transform: rotate(-45deg) translateX(12px);
            transition-delay: 3.2s;
        }

        .slide:hover:not(.active):not(.anim-out) .image {
            transform: scale(1.1);
        }

        .slide:hover:not(.active):not(.anim-out) .overlay {
            opacity: 0.6;
        }

        #codepen-link {
            position: absolute;
            right: 15px;
            bottom: 15px;
            height: 40px;
            width: 40px;
            z-index: 10;
            border-radius: 50%;
            background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/544318/logo.jpg");
            background-position: center center;
            background-size: cover;
            opacity: 0.7;
            transition: all 0.25s;
        }

        #codepen-link:hover {
            opacity: 1;
            box-shadow: 0 2px 6px #0f0f0f;
        }

        @keyframes img-anim-in {
            to {
                top: 0;
                left: 0;
                height: 100%;
                width: 100%;
            }
        }

        @keyframes img-anim-out {
            to {
                left: -100%;
            }
        }

    </style>
</head>
<body>
    <div id="container">
        <div class="slide anim-in">
            <div class="image" style="background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/544318/venice.jpg');"></div>
            <div class="overlay"></div>
            <div class="content">
                <h1 class="title" data-title="Venice">Venice</h1>
                <div class="emblem" style="background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/544318/italian-emblem.svg');"></div>
                <ul class="city-info">
                    <li class="country">Country: Italy</li>
                    <li class="founded">Founded: 697</li>
                    <li class="population">Population: 260,060</li>
                </ul>
            </div>
            <div class="btn-close"></div>
        </div>
        <div class="slide anim-in">
            <div class="image" style="background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/544318/paris.jpg');"></div>
            <div class="overlay"></div>
            <div class="content">
                <h1 class="title" data-title="Paris">Paris</h1>
                <div class="emblem" style="background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/544318/french-emblem.svg');"></div>
                <ul class="city-info">
                    <li class="country">Country: France</li>
                    <li class="founded">Founded: ~250BC</li>
                    <li class="population">Population: 2.2 Million</li>
                </ul>
            </div>
            <div class="btn-close"></div>
        </div>
        <div class="slide anim-in">
            <div class="image" style="background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/544318/salzburg.jpg');"></div>
            <div class="overlay"></div>
            <div class="content">
                <h1 class="title" data-title="Salzburg">Salzburg</h1>
                <div class="emblem" style="background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/544318/austrian-emblem.svg');"></div>
                <ul class="city-info">
                    <li class="country">Country: Austria</li>
                    <li class="founded">Founded: 1622</li>
                    <li class="population">Population: 145,871</li>
                </ul>
            </div>
            <div class="btn-close"></div>
        </div>
        <div class="slide anim-in">
            <div class="image" style="background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/544318/prague.jpg');"></div>
            <div class="overlay"></div>
            <div class="content">
                <h1 class="title" data-title="Prague">Prague</h1>
                <div class="emblem" style="background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/544318/czech-emblem.svg');"></div>
                <ul class="city-info">
                    <li class="country">Country: Czech Republic</li>
                    <li class="founded">Founded: 870</li>
                    <li class="population">Population: 1.2 Million</li>
                </ul>
            </div>
            <div class="btn-close"></div>
        </div>
    </div>
    <a id="codepen-link" href="https://www.codepen.io/seanfree" target="_blank"></a>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        (function(window, document, $, undefined) {
            var $slides, $btnArr;

            function onClick(e) {
                var $target = $(e.target);
                if ($target.hasClass('slide') && !$target.hasClass('active') && !$target.siblings().hasClass('active')) {
                    $target.removeClass('anim-in last-viewed').addClass('active');
                    $target.siblings().removeClass('anim-in last-viewed').addClass('anim-out');
                }
            }

            function closeSlide(e) {
                var $slide = $(e.target).parent();
                $slide.removeClass('active anim-in').addClass('last-viewed');
                $slide.siblings().removeClass('anim-out').addClass('anim-in');
            }

            $(function() {
                $slides = $('.slide');
                $btnArr = $slides.find('.btn-close');
                $slides.on('click', onClick);
                $btnArr.on('click', closeSlide);
            });
        })(this, document, jQuery);
    </script>
</body>
</html>
