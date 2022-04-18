@extends('layouts.app')
@section('content')
    <!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tam Yeri Tam Zamanı Taşımacılık A.Ş</title>
    <!-- google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&display=swap"
          rel="stylesheet">
    <!-- //google-fonts -->
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="{{asset('/assets/css/style-starter.css')}}">
</head>

<body>
<!--header-->

<!--//header-->

<!-- inner banner -->
<section class="inner-banner">
    <div class="w3l-breadcrumb py-5">
        <div class="container py-xl-5 py-md-4 mt-5">
            <h4 class="inner-text-title font-weight-bold mb-sm-2 pt-5">Hakkımızda</h4>
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{route('index')}}">Anasayfa</a></li>
                <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Hakkımızda</li>
            </ul>
        </div>
    </div>
</section>
<!-- //inner banner -->

<!-- about2 section -->
<section class="w3l-about2 py-5">
    <div class="container py-md-5 py-4">
        <div class="row align-items-center">
            <div class="col-lg-6 about-2-secs-right">
                <img src="assets/images/about1.jpg" alt="" class="img-fluid img-responsive" />
            </div>
            <div class="col-lg-6 about-2-secs pl-lg-5 mb-lg-0 mb-sm-5 mb-4">
                <h3 class="title-main-2">Sizlerle <span class="font-weight-bold">40+</span> çalışmaktan gurur duyuyoruz.
                </h3>
                <p class="mt-3">Amus a ligula quam tesque et libero ut justo, ultrices in. Ut eu leo non. Duis sed
                    dolor et amet.
                    Sed ut perspiciatis unde omnis iste natus error sit doloremque laudantium, totam rem aperiam,
                    eritatis et quasi.</p>
                <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sit amet efficitur
                    tortor
                </p>
                <div class="row mt-4">
                    <div class="col-6">
                        <ul>
                            <li><span class="fas fa-check-circle icon-color"></span>Ut enim ad minim</li>
                            <li><span class="fas fa-check-circle icon-color"></span>Quis nostrud labos</li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul>
                            <li><span class="fas fa-check-circle  icon-color"></span>Nisi ut aliqu cons</li>
                            <li><span class="fas fa-check-circle icon-color"></span>In et augue ssa in</li>
                        </ul>
                    </div>
                </div>
                <div class="content-top-ab pt-4 mt-lg-5 mt-4">
                    <h3>Sorularınız İçin</h3>
                    <a class="call-style-ab" href="tel:+1(23) 456 789 0000">+90 456 789 0000</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //about2 section -->

<!-- stats -->
<section class="w3_stats py-5" id="stats">
    <div class="container py-md-5 py-4">
        <div class="w3-stats text-center py-md-4">
            <div class="row mt-4">
                <div class="col-md-3 col-6">
                    <div class="counter">
                        <i class="fas fa-users"></i>
                        <div class="timer count-title count-number mt-3" data-to="1286" data-speed="1500">5000+</div>
                        <p class="count-text">Çalışan</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="counter">
                        <i class="far fa-smile"></i>
                        <div class="timer count-title count-number mt-3" data-to="36076" data-speed="1500">1000000+
                        </div>
                        <p class="count-text">Mutlu Müşteri</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 mt-md-0 mt-5">
                    <div class="counter">
                        <i class="fas fa-box-open"></i>
                        <div class="timer count-title count-number mt-3" data-to="16300" data-speed="1500">1000000+
                        </div>
                        <p class="count-text">Paket Teslimatı</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 mt-md-0 mt-5">
                    <div class="counter">
                        <i class="fas fa-trophy"></i>
                        <div class="timer count-title count-number mt-3" data-to="10630" data-speed="1500">500+
                        </div>
                        <p class="count-text">En iyi Kargo Şirketi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //stats -->

<!-- middle content section -->
<section class="w3l-counter-top-6 py-5">
    <div class="container py-md-5 py-4">
        <div class="row align-counter-6-inf-cols align-items-center">
            <div class="col-lg-6 counter-6-inf-left second">
                <img class="img-fluid" src="assets/images/about2.jpg" alt=" ">
            </div>
            <div class="col-lg-6 counter-6-inf-right pl-lg-5 mt-lg-0 mt-5">
                <div class="row">
                    <div class="col-6 specification">
                        <i class="fas fa-thumbs-up"></i>
                        <h6><a href="#features">Kusursuz Destek</a></h6>
                        <p>Lorem ante ipsum primis in faucibus orci luctus.</p>
                    </div>
                    <div class="col-6 specification">
                        <i class="fas fa-shipping-fast"></i>
                        <h6><a href="#features">Tam Zamanında Teslim</a></h6>
                        <p>Lorem ante ipsum primis in faucibus orci luctus.</p>
                    </div>
                    <div class="col-6 specification mt-5">
                        <i class="fas fa-people-carry"></i>
                        <h6><a href="#features">Güvenli Teslimat</a></h6>
                        <p>Lorem ante ipsum primis in faucibus orci luctus.</p>
                    </div>
                    <div class="col-6 specification mt-5">
                        <i class="fas fa-hand-holding-heart"></i>
                        <h6><a href="#features">Kapıdan Gönderi Teslim</a></h6>
                        <p>Lorem ante ipsum primis in faucibus orci luctus.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //middle content section -->

<!-- bg with video icon -->
<section class="w3l-covers-14 py-5">
    <div class="container py-md-5 py-4">
        <div class="banner-play-w3 covers14-text text-center mx-auto py-lg-5" style="max-width:780px">
            <h4>Kaliteli Kargo Hizmeti İçin 40 yıldır
                <a target=_blank href="https://goo.gl/maps/ww5fJYVFGCfDNVzf7">Buradayız</a>
            </h4>
        </div>
    </div>
</section>
<!-- //bg with video icon -->

<!-- customers section -->
<section class="w3l-customer-block py-5">
    <div class="container py-md-5 py-4">
        <div class="title-heading-w3 mx-auto text-center mb-5 pb-xl-4">
            <h3 class="title-main">Müşterilerimizin Yorumları</h3>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="customer-single pr-lg-4">
                    <blockquote>Lorem ipsum dolor sit amet, consectetur adip iscing elit sed. orci urna. In et augue
                        ornare, tempor
                        massa
                        in,
                        luctus sapien. Proin a diam et dui fermentum dolor molestie vel id neque euismod massa a
                        quam viverra
                        et.
                    </blockquote>
                    <div class="customer-img d-flex align-items-center mt-4">
                        <img src="assets/images/testi1.jpg" class="img-fluid mr-3" alt="" />
                        <div class="customer-info">
                            <h6>Fatih Ateş</h6>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-md-0 mt-5">
                <div class="customer-single pr-lg-4">
                    <blockquote>Lorem ipsum dolor sit amet, consectetur adip iscing elit sed. orci urna. In et augue
                        ornare, tempor
                        massa
                        in,
                        luctus sapien. Proin a diam et dui fermentum dolor molestie vel id neque euismod massa a
                        quam viverra
                        et.
                    </blockquote>
                    <div class="customer-img d-flex align-items-center mt-4">
                        <img src="assets/images/testi2.jpg" class="img-fluid mr-3" alt="" />
                        <div class="customer-info">
                            <h6>Murat Çelik</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-md-0 mt-5">
                <div class="customer-single pr-lg-4">
                    <blockquote>Lorem ipsum dolor sit amet, consectetur adip iscing elit sed. orci urna. In et augue
                        ornare, tempor
                        massa
                        in,
                        luctus sapien. Proin a diam et dui fermentum dolor molestie vel id neque euismod massa a
                        quam viverra
                        et.
                    </blockquote>
                    <div class="customer-img d-flex align-items-center mt-4">
                        <img src="assets/images/testi3.jpg" class="img-fluid mr-3" alt="" />
                        <div class="customer-info">
                            <h6>Kemal Türker</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //customers section -->

<!-- footer -->
<!-- //footer -->

<!-- Js scripts -->
<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fas fa-level-up-alt" aria-hidden="true"></span>
</button>
<script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("movetop").style.display = "block";
        } else {
            document.getElementById("movetop").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
<!-- //move top -->

<!-- common jquery plugin -->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- //common jquery plugin -->

<!-- theme switch js (light and dark)-->
<script src="assets/js/theme-change.js"></script>
<script>
    function autoType(elementClass, typingSpeed) {
        var thhis = $(elementClass);
        thhis.css({
            "position": "relative",
            "display": "inline-block"
        });
        thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
        thhis = thhis.find(".text-js");
        var text = thhis.text().trim().split('');
        var amntOfChars = text.length;
        var newString = "";
        thhis.text("|");
        setTimeout(function () {
            thhis.css("opacity", 1);
            thhis.prev().removeAttr("style");
            thhis.text("");
            for (var i = 0; i < amntOfChars; i++) {
                (function (i, char) {
                    setTimeout(function () {
                        newString += char;
                        thhis.text(newString);
                    }, i * typingSpeed);
                })(i + 1, text[i]);
            }
        }, 1500);
    }

    $(document).ready(function () {
        // Now to start autoTyping just call the autoType function with the
        // class of outer div
        // The second paramter is the speed between each letter is typed.
        autoType(".type-js", 200);
    });
</script>
<!-- //theme switch js (light and dark)-->

<!-- MENU-JS -->
<script>
    $(window).on("scroll", function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 80) {
            $("#site-header").addClass("nav-fixed");
        } else {
            $("#site-header").removeClass("nav-fixed");
        }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
        $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
        if ($(window).width() > 991) {
            $("header").removeClass("active");
        }
        $(window).on("resize", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
        });
    });
</script>
<!-- //MENU-JS -->

<!-- disable body scroll which navbar is in active -->
<script>
    $(function () {
        $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
        })
    });
</script>
<!-- //disable body scroll which navbar is in active -->

<!--bootstrap-->
<script src="assets/js/bootstrap.min.js"></script>
<!-- //bootstrap-->
<!-- //Js scripts -->
</body>

</html>

@endsection
