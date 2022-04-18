<!DOCTYPE html>
<html  lang="en">
<head>
    <meta charset="UTF-8">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- google-fonts -->
        <link href="//fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&display=swap"
              rel="stylesheet">
        <!-- //google-fonts -->
        <!-- Template CSS Style link -->
        <link rel="stylesheet" href="{{asset('/assets/css/style-starter.css')}}">
    </head>
</head>
<body>

<header id="site-header"  class="fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg stroke">
            <h1>
                <a class="navbar-brand" href="{{route('index')}}">
                    <i class="fas fa-shipping-fast mr-1"></i>Tam Yeri Tam Zamanı <span>Kargo & Nakliye Hizmetleri</span>
                </a>
            </h1>
            <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-lg-auto">

                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('index')}}">Anasayfa <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about')}}">Hakkımızda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('services')}}">Hizmetlerimiz</a>
                    </li>

                    @auth()
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">İletişim</a>
                    </li>
                    @endauth
                </ul>
            </div>


            <!-- toggle switch for light and dark theme -->
            <div class="cont-ser-position">
                <nav class="navigation">
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox">
                            <div class="mode-container">
                                <i class="gg-sun"></i>
                                <i class="gg-moon"></i>
                            </div>
                        </label>
                    </div>
                </nav>
            </div>
            <!-- //toggle switch for light and dark theme -->
        </nav>
    </div>
</header>

</body>
</html>
