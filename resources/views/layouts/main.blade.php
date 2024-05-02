<!DOCTYPE html>
<html lang="ua">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="/img/favicon.png">
    <title>GameCrash</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset("css/main/bootstrap.min.css") }}" type="text/css">
    <link rel="stylesheet" href="{{ asset("css/main/font-awesome.min.css") }}" type="text/css">
    <link rel="stylesheet" href="{{ asset("css/main/elegant-icons.css") }}" type="text/css">
    <link rel="stylesheet" href="{{ asset("css/main/plyr.css") }}" type="text/css">
    <link rel="stylesheet" href="{{ asset("css/main/nice-select.css") }}" type="text/css">
    <link rel="stylesheet" href="{{ asset("css/main/owl.carousel.min.css") }}" type="text/css">
    <link rel="stylesheet" href="{{ asset("css/main/slicknav.min.css") }}" type="text/css">
    <link rel="stylesheet" href="{{ asset("css/main/style.css") }}" type="text/css">
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>


@yield('body')

<!-- Js Plugins -->
<script src="{{ asset('js/main/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/main/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/main/player.js') }}"></script>
<script src="{{ asset('js/main/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('js/main/mixitup.min.js') }}"></script>
<script src="{{ asset('js/main/jquery.slicknav.js') }}"></script>
<script src="{{ asset('js/main/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/main/main.js') }}"></script>

</body>
</html>
