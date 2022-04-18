@extends('layouts.app')
@section('content')
    <!DOCTYPE html>
<html  lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kayıt Formu</title>
    <link href="//fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&display=swap"
          rel="stylesheet">
    <!-- //google-fonts -->
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="@{/assets/css/style-starter.css}">
</head>
<body>
<!--header-->

<!--//header-->

<!-- inner banner -->

<!-- //inner banner -->

<!-- contact section -->
<section class="w3l-contact-11 py-5" id="contact">
    <div class="container py-md-5 py-4">
        <div class="title-heading-w3 mx-auto text-center mb-5 pb-xl-4">
            <h3 class="title-main">Kayıt Olup Fırsatlardan Yararlanın !</h3>
        </div>



        <div class="row justify-content-center">
            <div class="form-content ml-sm-left mx-auto">
                <h3 class="title-main-2 mb-4">
                    Kayıt Formu</h3>
                <form method="post" action="{{route('registration')}}">
                    @csrf
                    <input type="text" name="name"  placeholder="Adınız" required="">
                    <input type="text" name="last_name"  placeholder="Soyadınız" required="">
                    <input type="email" name="email"  placeholder="Email" required="">
                    <input type="text" name="phone_number"  placeholder="Telefon Numaranız" required="">
                    <input type="password" name="password" id="parola" placeholder="Şifre" required="">
                    <button type="submit" class="btn btn-style mt-sm-3">Kayıt Ol</button>
                </form>
            </div>
        </div>


    </div>
</section>




<!-- //contact section -->

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
