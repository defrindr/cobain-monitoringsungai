<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gayatri Apps - Blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=B612+Mono|Cabin:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset("public/blog/fonts/icomoon/style.css")}}">

    <link rel="stylesheet" href="{{asset("public/blog/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("public/blog/css/jquery-ui.css")}}">
    <link rel="stylesheet" href="{{asset("public/blog/css/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("public/blog/css/owl.theme.default.min.css")}}">
    <link rel="stylesheet" href="{{asset("public/blog/css/owl.theme.default.min.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css">
    <link rel="stylesheet" href="{{asset("public/blog/css/jquery.fancybox.min.css")}}">

    <link rel="stylesheet" href="{{asset("public/blog/css/bootstrap-datepicker.css")}}">

    <link rel="stylesheet" href="{{asset("public/blog/fonts/flaticon/font/flaticon.css")}}">

    <link rel="stylesheet" href="{{asset("public/blog/css/aos.css")}}">
    <link href="{{asset("public/blog/css/jquery.mb.YTPlayer.min.css")}}" media="all" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{asset("public/blog/css/style.css")}}">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <style>
        svg {
            overflow: hidden;
            vertical-align: middle;
            width: 35px;
            height: auto;
        }

        #contentContainer {
            padding-top: 1rem !important;
        }

        ::-webkit-scrollbar {
            width: 5px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #f1f1f1;
        }

        h1 {
            font-size: 1.5rem;
            color: #fff;
        }

        .box {
            background: rgba(255, 255, 255, 0.25);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
            border-radius: 10px;
            padding: .5rem;
            border: 1px solid rgba(255, 255, 255, 0.18);
        }

        #blurredBackgroundContainer {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: block;
            overflow: hidden
        }

        #blurredBackground {
            position: absolute;
            top: -5%;
            left: -5%;
            display: block;
            min-width: 110%;
            min-height: 110%;
            filter: blur(50px);
            -webkit-filter: blur(50px)
        }

        #contentContainer {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: block;
            overflow: scroll
        }

        .color-blur {
            width: 200%;
            height: 150%;
            display: block;
            position: absolute;
            border-radius: 50%
        }

    </style>
    @yield('css')
    <script type="text/javascript">
        window.onload = function () {
            var contentContainer = document.createElement("div");
            var blurredBackgroundContainer = document.createElement("div");
            var blurredBackground = document.createElement("div");
            var colorBlur1 = document.createElement("div");
            var colorBlur2 = document.createElement("div");
            var colorBlur3 = document.createElement("div");

            contentContainer.setAttribute("id", "contentContainer");
            blurredBackground.setAttribute("id", "blurredBackground");
            blurredBackgroundContainer.setAttribute("id", "blurredBackgroundContainer");
            colorBlur1.setAttribute("class", "colorBlur1 color-blur");
            colorBlur2.setAttribute("class", "colorBlur1 color-blur");
            colorBlur3.setAttribute("class", "colorBlur1 color-blur");
            document.body.appendChild(contentContainer);
            while (document.body.firstChild !== contentContainer) {
                contentContainer.appendChild(document.body.firstChild);
            }
            document.body.insertBefore(blurredBackgroundContainer, document.body.firstChild);
            blurredBackgroundContainer.appendChild(blurredBackground);
            blurredBackground.appendChild(colorBlur1);
            blurredBackground.appendChild(colorBlur2);
            blurredBackground.appendChild(colorBlur3);

            blurredBackground.setAttribute("style",
                "background: linear-gradient(63deg, rgb(142, 218, 154) 0%, rgb(255, 255, 255) 100%);");
            colorBlur1.setAttribute("style",
                "top: -7%; left: -57%; background: radial-gradient(at 50% 50%, rgb(111, 98, 187) 0%, rgb(128, 113, 215) 100%);"
                );
            colorBlur2.setAttribute("style", "top: 66%; left: -95%; background: rgba(99, 255, 118, 0.4);");
            colorBlur3.setAttribute("style", "top: 59%; left: -15%; background: rgba(49, 169, 225, 0.4);");
        }

    </script>
</head>

<body id="blurredBackgroundContainer" data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    @yield('content')
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#ff5e15" /></svg></div>

    <script src="{{asset("public/blog/js/jquery-3.3.1.min.js")}}"></script>
    <script src="{{asset("public/blog/js/jquery-migrate-3.0.1.min.js")}}"></script>
    <script src="{{asset("public/blog/js/jquery-ui.js")}}"></script>
    <script src="{{asset("public/blog/js/popper.min.js")}}"></script>
    <script src="{{asset("public/blog/js/bootstrap.min.js")}}"></script>
    <script src="{{asset("public/blog/js/owl.carousel.min.js")}}"></script>
    <script src="{{asset("public/blog/js/jquery.stellar.min.js")}}"></script>
    <script src="{{asset("public/blog/js/jquery.countdown.min.js")}}"></script>
    <script src="{{asset("public/blog/js/bootstrap-datepicker.min.js")}}"></script>
    <script src="{{asset("public/blog/js/jquery.easing.1.3.js")}}"></script>
    <script src="{{asset("public/blog/js/aos.js")}}"></script>

    <script src="{{asset("public/blog/js/main.js")}}"></script>
    @yield('js')

</body>

</html>
