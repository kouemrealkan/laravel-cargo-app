@extends('layouts.app')
@section('content')

@endsection
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
                <h4 class="inner-text-title font-weight-bold mb-sm-2 pt-5">Hizmetlerimiz</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{route('index')}}">Anasayfa</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>Hizmetlerimiz</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //inner banner -->

    <!-- services -->
    <section class="w3l-features-7 py-5">
        <div class="container py-md-5 py-4">
            <div class="title-heading-w3 mx-auto text-center mb-5 pb-xl-4">
                <h3 class="title-main">Hizmetlerimiz</h3>
            </div>
            <div class="row features-top">
                <div class="col-lg-4 col-sm-6">
                    <div class="features-top-left">
                        <i class="fas fa-home"></i>
                        <h4><a href="#services-single">Paket&Koli Teslimatı</a></h4>
                        <p>Türkiye'nin 81 ilinden paketlerinizi özenle alıcısına teslim ediyoruz
                            Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
                            Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt-sm-0 mt-4">
                    <div class="features-top-left">
                        <i class="fas fa-box-open"></i>
                        <h4><a href="#services-single">Nakliye Hizmeti</a></h4>
                        <p>Ev ya da işyeri mi taşınacak ? Merak etmeyin sizin için uygun fiyatlarla tecrübeli ekibimizle teknolojik imkanlarla taşıma işlemini gerçekleştiriyoruz
                            Lorem Ipsum Lorem Ipsum Lorem Lorem Lorem Ipsum Lorem Ipsum
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt-lg-0 mt-sm-5 mt-4">
                    <div class="features-top-left">
                        <i class="fas fa-archive"></i>
                        <h4><a href="#services-single">Standart Dosya-Evrak Teslimatı</a></h4>
                        <p>Acele teslim edilmesi gereken evraklarınız var biliyoruz. Tecrübeli motokuryelerimiz ile gün içinde(Sadece İstanbul,Ankara,İzmir illerinde geçerlidir) belgelerinizi alıcısına teslim ediyoruz</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //services -->

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
    <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
    <!-- //common jquery plugin -->

    <!-- magnific popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

            $('.popup-with-move-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-slide-bottom'
            });
        });
    </script>
    <!-- //magnific popup -->

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
