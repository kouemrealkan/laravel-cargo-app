@extends('layouts.app')
@section('content')
    <!doctype html>
<html xmlns:th="http://www.thymeleaf.org" lang="en">

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
    <link rel="stylesheet" th:href="@{/assets/css/style-starter.css}">
</head>

<body>
<!--header-->
<header th:insert="header :: head"></header>
<!--//header-->

<!-- inner banner -->
<div class="map mt-4 pt-5">
    <iframe class="map-w3layouts"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48219.39357139915!2d29.120524173170292!3d40.94397658566915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac4336e39827f%3A0x608e0ae971e8ddc2!2sMaltepe%2F%C4%B0stanbul!5e0!3m2!1str!2str!4v1648753594770!5m2!1str!2str"
            width="100%" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
</div>
<!-- //inner banner -->

<!-- contact section -->
<section class="w3l-contact-11 py-5" id="contact">
    <div class="container py-md-5 py-4">
        <div class="title-heading-w3 mx-auto text-center mb-5 pb-xl-4">
            <h3 class="title-main">Bizimle İletişime Geçin</h3>
        </div>
        <div class="row text-center">
            <div class="col-lg-3 col-sm-6 contact-info">
                <i class="fas fa-map-marked-alt"></i>
                <h4>Adres</h4>
                <p>Maltepe/İstanbul</p>
            </div>
            <div class="col-lg-3 col-sm-6 contact-info mt-md-0 mt-4">
                <i class="fas fa-headset"></i>
                <h4>İletişim No</h4>
                <p><a href="tel:+44 987 654 321">0212-111-11-11</a></p>
            </div>
            <div class="col-lg-3 col-sm-6 contact-info mt-lg-0 mt-4">
                <i class="fas fa-envelope-open-text"></i>
                <h4>Mail</h4>
                <p><a href="mailto:mail@example.com" class="email">tytz@info.com</a></p>
            </div>
            <div class="col-lg-3 col-sm-6 contact-info mt-lg-0 mt-4">
                <i class="fas fa-user-clock"></i>
                <h4>Çalışma Saatleri</h4>
                <p>9:00 - 21:00</p>
            </div>
        </div>




        <div class="row justify-content-center">
            <div class="form-content ml-sm-left mx-auto">
                <h3 class="title-main-2 mb-4">
                    İstek veya şikayetleriniz için bu formu doldurabilirsiniz</h3>
                <form action="{{route('contact')}}" method="post">
                    @csrf

                    <label class="col-form-label">Kargo Seçimi</label>
                    <select class="form-control" name="cargo_id">
                        @foreach($cargo_list as $item)
                        <option  value="{{$item->id}}">{{$item->cargo_track_number}}</option>
                        @endforeach
                    </select> <br>


                    @if(auth()->check())
                        <input type="hidden" name="user_id" readonly value="{{auth()->user()->id}}">
                    <input type="text" readonly  id="ad" placeholder="{{auth()->user()->name}}">
                    <input type="text" readonly value="" id="soyad" placeholder="{{auth()->user()->last_name}}" required="">
                    <input type="text" readonly value="{{auth()->user()->email}}" name="email" id="email" placeholder="Email" required="">
                    <input type="text" readonly   id="gsm" placeholder="{{auth()->user()->phone_number}}" required="">
                    <textarea name="message" id="message" placeholder="Mesajınız"
                    ></textarea>
                    @else
                        <input type="text" name="name" id="ad" placeholder="Adınız">
                        <input type="text" name="last_name" id="soyad" placeholder="Soyadınız" required="">
                        <input type="text" name="email" id="email" placeholder="Email" required="">
                        <input type="text" name="phone_number" id="gsm" placeholder="Telefon Numarası" required="">
                        <textarea name="message" id="message" placeholder="Mesajınız"
                        ></textarea>
                    @endif
                    <button type="submit" class="btn btn-style mt-sm-3">Formu Kaydet</button>
                </form>
            </div>
        </div>



    </div>
</section>




<!-- //contact section -->

<!-- footer -->
<footer th:insert="footer :: foot"></footer>
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


