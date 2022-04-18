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
{{--    <link rel="stylesheet" href="{{asset('/assets/css/style-starter.css')}}">--}}
</head>

<body>
<!--header-->
<header id="site-header" class="fixed-top">

    <div class="container">
        <nav class="navbar navbar-expand-lg stroke">
            <h1>
                <a class="navbar-brand">
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
                    @auth()
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('cargo-call')}}">Gönderi Çağrı</a>
                    </li>
                    @endauth

                    @guest()
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('registration')}}">Kayıt Ol</a>
                    </li>
                    @endguest

                    </ul>
            </div>

            <div class="btn-group">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Hesap
                </button>
                <div class="dropdown-menu">
                    @guest()
                    <a class="nav-link" href="{{route('login')}}">Giriş Yap</a>
                    @endguest
                    @auth()
                            @if(auth()->user()->is_active)
                            <a class="dropdown-item">Üyelik : Aktif</a>
                            @else
                                <a class="dropdown-item">Üyelik : Pasif</a>
                            @endif
                    <a class="dropdown-item">Ad-Soyad: {{auth()->user()->name}} {{auth()->user()->last_name}} </a>
                    <a class="dropdown-item">Email: {{auth()->user()->email}}</a>
                    <a class="dropdown-item">GSM: {{auth()->user()->phone_number}}</a>

                        @endauth
                    <div class="dropdown-divider"></div>
                    @auth()
                            <a class="dropdown-item" href="{{route('user-cargo-track')}}">Kargo Takip</a>
                            <a class="dropdown-item" href="{{route('user-contact-track')}}">İstek/Şikayet Takip</a>
                    <form method="post" action="{{route('index')}}">
                        @csrf
                        <button class="dropdown-item" type="submit">Çıkış Yap</button>
                    </form>
                    @endauth

                </div>
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
<!--//header-->


<!-- banner section -->
<section class="w3l-main-slider position-relative" id="home">
    <div class="banner-view">
        <div class="banner-info">
            <div class="container">
                <div class="banner-info-bg">
                    <h5>En iyi <span class="font-weight-bold">Nakliye ve Kargo</span> Hizmeti</h5>
                    <p class="mt-2">Her koşulda müşteri memnuniyetini ve bağlılığı en büyük ilkemiz !</p>
                    <a class="btn btn-style btn-style-white mt-sm-5 mt-4" href="{{route('services')}}">
                        DİĞER HİZMETLERİMİZ</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //banner section -->

<!-- 3grids section -->
<section class="about-section py-5">
    <div class="container py-lg-5 py-4">
        <div class="title-heading-w3 mx-auto text-center mb-5 pb-xl-4">
            <h3 class="title-main">Türkiye'nin en iyi taşıyıcı firması seçilmekten <span>gurur duyuyoruz</span></h3>
        </div>
        <div class="row justify-content-center">
            <!--              Buraya foreach koyup hizmetleri db den çekilebilir  <>-->
            <div class="col-lg-4 col-md-6">
                <div class="about-single p-3">
                    <div class="about-icon mb-4">
                        <i class="fas fa-people-carry"></i>
                    </div>
                    <div class="about-content">
                        <h5 class="mb-3"><a href="about.blade.php">Uzman Saha Elemanları</a></h5>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit accusa ntium dolor emque
                            laudan.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-md-0 mt-3">
                <div class="about-single p-3">
                    <div class="about-icon mb-4">
                        <i class="fas fa-dolly"></i>
                    </div>
                    <div class="about-content">
                        <h5 class="mb-3"><a href="about.blade.php">Lojistik Destek</a></h5>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit accusa ntium dolor emque
                            laudan.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-lg-0 mt-3">
                <div class="about-single p-3">
                    <div class="about-icon mb-4">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <div class="about-content">
                        <h5 class="mb-3"><a href="about.blade.php">Karayolu Taşımacılığı</a></h5>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit accusa ntium dolor emque
                            laudan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //3grids section -->

<!-- about section -->
<section class="w3l-aboutblock pb-5">
    <div class="container py-md-5 py-sm-4">
        <div class="row align-items-center">
            <div class="col-lg-6 left-wthree-img mb-lg-0 mb-5">
                <img class="img-fluid img-responsive" src="assets/images/about.png" alt=" ">
            </div>
            <div class="col-lg-6 about-right-faq align-self pl-lg-5">
                <h3 class="title-main-2">Şirketimizin <span>25+</span> yıllık tecrübesini siz değerli müşterilerizle paylaşmaktan gurur duyuyoruz!</h3>
                <p class="mt-2">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                    ultrices in ligula. Semper at tempufddfel.</p>
                <div class="mt-5">
                    <div class="about-info-m d-flex">
                        <div class="icon-style-ab mr-4">
                            <i class="fas fa-box-open"></i>
                        </div>
                        <div class="about-detail">
                            <h4>Güvenlik Bizim İçin Önemli</h4>
                            <p>Kargom güvende mi ya çalındıya gibi endişelere son!</p>
                        </div>
                    </div>
                    <div class="about-info-m d-flex mt-4">
                        <div class="icon-style-ab mr-4">
                            <i class="fas fa-forward"></i>
                        </div>
                        <div class="about-detail">
                            <h4>Müşteri Memnuniyeti</h4>
                            <p>Sizin için 7/24 müşteri hizmetlerimiz aktif olur</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //about section -->

<!-- form & play icon section -->
<section class="w3l-content-sec py-5">
    <div class="container py-md-5 py-4">
        <div class="row align-items-center">
            <!--                <div class="col-lg-6 col-sm-4 banner-play-w3 text-center">-->
            <!--                </div>-->
            <div class="col-lg-6 col-sm-8 top-content-w3l mt-sm-0 mt-5 pt-sm-0 pt-4">
                <div class="form-content ml-sm-left mx-auto">
                    <h3 class="title-main-2 mb-4">
                        Ücret Hesaplama</h3>
                    <span class="font-weight-bold">Fiyatlar standart dosya gönderim ücreti içindir. Paket/Koli Teslimatı ve Nakliye Hizmeti İçin <a style="color: red" href="{{route('price-detail')}}">İncele</a>  </span><br>
                    <label class="col-form-label">Nereden</label>
                    <select class="form-control" name="move_from_field" id="move_from_field">
                        <option value="adana">Adana</option>
                        <option value="adıyaman">Adıyaman</option>
                        <option value="afyonkarahisar">Afyonkarahisar</option>
                        <option value="ağrı">Ağrı</option>
                        <option value="amasya">Amasya</option>
                        <option value="ankara">Ankara</option>
                        <option value="antalya">Antalya</option>
                        <option value="artvin">Artvin</option>
                        <option value="aydın">Aydın</option>
                        <option value="balıkesir">Balıkesir</option>
                        <option value="bilecik">Bilecik</option>
                        <option value="bingöl">Bingöl</option>
                        <option value="bitlis">Bitlis</option>
                        <option value="bolu">Bolu</option>
                        <option value="burdur">Burdur</option>
                        <option value="bursa">Bursa</option>
                        <option value="çanakkale">Çanakkale</option>
                        <option value="çnkırı">Çankırı</option>
                        <option value="çorum">Çorum</option>
                        <option value="denizli">Denizli</option>
                        <option value="diyarbakır">Diyarbakır</option>
                        <option value="edirne">Edirne</option>
                        <option value="elazığ">Elazığ</option>
                        <option value="erzincan">Erzincan</option>
                        <option value="erzurum">Erzurum</option>
                        <option value="eskişehir">Eskişehir</option>
                        <option value="gaziantep">Gaziantep</option>
                        <option value="giresun">Giresun</option>
                        <option value="gümüşhane">Gümüşhane</option>
                        <option value="hakkâri">Hakkâri</option>
                        <option value="hatay">Hatay</option>
                        <option value="ısparta">Isparta</option>
                        <option value="mersin">Mersin</option>
                        <option value="istanbul">İstanbul</option>
                        <option value="izmir">İzmir</option>
                        <option value="kars">Kars</option>
                        <option value="kastamonu">Kastamonu</option>
                        <option value="kayseri">Kayseri</option>
                        <option value="kırklareli">Kırklareli</option>
                        <option value="kırşehir">Kırşehir</option>
                        <option value="kocaeli">Kocaeli</option>
                        <option value="konya">Konya</option>
                        <option value="kütahya">Kütahya</option>
                        <option value="malatya">Malatya</option>
                        <option value="manisa">Manisa</option>
                        <option value="kahramanmaraş">Kahramanmaraş</option>
                        <option value="mardin">Mardin</option>
                        <option value="muğla">Muğla</option>
                        <option value="muş">Muş</option>
                        <option value="nevşehir">Nevşehir</option>
                        <option value="niğde">Niğde</option>
                        <option value="ordu">Ordu</option>
                        <option value="rize">Rize</option>
                        <option value="sakarya">Sakarya</option>
                        <option value="samsun">Samsun</option>
                        <option value="siirt">Siirt</option>
                        <option value="sinop">Sinop</option>
                        <option value="sivas">Sivas</option>
                        <option value="tekirdağ">Tekirdağ</option>
                        <option value="tokat">Tokat</option>
                        <option value="trabzon">Trabzon</option>
                        <option value="tunceli">Tunceli</option>
                        <option value="şanlıurfa">Şanlıurfa</option>
                        <option value="uşak">Uşak</option>
                        <option value="van">Van</option>
                        <option value="yozgat">Yozgat</option>
                        <option value="zonguldak">Zonguldak</option>
                        <option value="aksaray">Aksaray</option>
                        <option value="bayburt">Bayburt</option>
                        <option value="karaman">Karaman</option>
                        <option value="kırıkkale">Kırıkkale</option>
                        <option value="batman">Batman</option>
                        <option value="şırnak">Şırnak</option>
                        <option value="bartın">Bartın</option>
                        <option value="ardahan">Ardahan</option>
                        <option value="ığdır">Iğdır</option>
                        <option value="yalova">Yalova</option>
                        <option value="karabük">Karabük</option>
                        <option value="kilis">Kilis</option>
                        <option value="osmaniye">Osmaniye</option>
                        <option value="düzce">Düzce</option>
                    </select>

                    <label class="col-form-label">Nereye</label>
                    <select class="form-control" name="move_to_field" id="move_to_field">
                        <option value="adana">Adana</option>
                        <option value="adıyaman">Adıyaman</option>
                        <option value="afyonkarahisar">Afyonkarahisar</option>
                        <option value="ağrı">Ağrı</option>
                        <option value="amasya">Amasya</option>
                        <option value="ankara">Ankara</option>
                        <option value="antalya">Antalya</option>
                        <option value="ARTVİN">ARTVİN</option>
                        <option value="aydın">Aydın</option>
                        <option value="balıkesir">Balıkesir</option>
                        <option value="BİLECİK">Bilecik</option>
                        <option value="bingöl">Bingöl</option>
                        <option value="bitlis">Bitlis</option>
                        <option value="bolu">Bolu</option>
                        <option value="burdur">Burdur</option>
                        <option value="bursa">Bursa</option>
                        <option value="çanakkale">Çanakkale</option>
                        <option value="çankırı">Çankırı</option>
                        <option value="çorum">Çorum</option>
                        <option value="denizli">Denizli</option>
                        <option value="diyarbakır">Diyarbakır</option>
                        <option value="edirne">Edirne</option>
                        <option value="elazığ">Elazığ</option>
                        <option value="erzincan">Erzincan</option>
                        <option value="erzurum">Erzurum</option>
                        <option value="eskişehir">Eskişehir</option>
                        <option value="gaziantep">Gaziantep</option>
                        <option value="giresun">Giresun</option>
                        <option value="gümüşhane">Gümüşhane</option>
                        <option value="hakkâri">Hakkâri</option>
                        <option value="hatay">Hatay</option>
                        <option value="ısparta">Isparta</option>
                        <option value="mersin">Mersin</option>
                        <option value="istanbul">İstanbul</option>
                        <option value="izmir">İzmir</option>
                        <option value="kars">Kars</option>
                        <option value="kastamonu">Kastamonu</option>
                        <option value="kayseri">Kayseri</option>
                        <option value="kırklareli">Kırklareli</option>
                        <option value="kırşehir">Kırşehir</option>
                        <option value="kocaeli">Kocaeli</option>
                        <option value="konya">Konya</option>
                        <option value="kütahya">Kütahya</option>
                        <option value="malatya">Malatya</option>
                        <option value="manisa">Manisa</option>
                        <option value="kahramanmaraş">Kahramanmaraş</option>
                        <option value="mardin">Mardin</option>
                        <option value="muğla">Muğla</option>
                        <option value="muş">Muş</option>
                        <option value="nevşehir">Nevşehir</option>
                        <option value="niğde">Niğde</option>
                        <option value="ordu">Ordu</option>
                        <option value="rize">Rize</option>
                        <option value="sakarya">Sakarya</option>
                        <option value="samsun">Samsun</option>
                        <option value="siirt">Siirt</option>
                        <option value="sinop">Sinop</option>
                        <option value="sivas">Sivas</option>
                        <option value="tekirdağ">Tekirdağ</option>
                        <option value="tokat">Tokat</option>
                        <option value="trabzon">Trabzon</option>
                        <option value="tunceli">Tunceli</option>
                        <option value="şanlıurfa">Şanlıurfa</option>
                        <option value="uşak">Uşak</option>
                        <option value="van">Van</option>
                        <option value="yozgat">Yozgat</option>
                        <option value="zonguldak">Zonguldak</option>
                        <option value="aksaray">Aksaray</option>
                        <option value="bayburt">Bayburt</option>
                        <option value="karaman">Karaman</option>
                        <option value="kırıkkale">Kırıkkale</option>
                        <option value="batman">Batman</option>
                        <option value="şırnak">Şırnak</option>
                        <option value="bartın">Bartın</option>
                        <option value="ardahan">Ardahan</option>
                        <option value="ığdır">Iğdır</option>
                        <option value="yalova">Yalova</option>
                        <option value="karabük">Karabük</option>
                        <option value="kilis">Kilis</option>
                        <option value="osmaniye">Osmaniye</option>
                        <option value="düzce">Düzce</option>
                    </select>

                    <button onclick="mesafeHesapla()" class="btn btn-style mt-sm-3">ÜCRET HESAPLA</button>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- //form & play icon section -->

<!-- services section -->
<section class="w3l-feature-8 py-5">
    <div class="container py-md-5 py-4">
        <div class="title-heading-w3 mx-auto text-center mb-5 pb-xl-4">
            <h3 class="title-main">Kalite Odaklı Çalışma Anlayışı</h3>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6 feature-body border-right-0 border-rgt-res">
                <div class="feature-info">
                    <h3 class="feature-titel mb-3"> <a href="about.blade.php">Kapıdan Gönderi Alma</a></h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit accus antium dolor emque lauda ntium.
                    </p>
                </div>
                <div class="feature-icon">
                    <i class="fas fa-door-open"></i>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 feature-body border-right-0 border-right-res border-top-r">
                <div class="feature-info">
                    <h3 class="feature-titel mb-3"> <a href="about.blade.php">Depo Kiralama Hizmeti</a></h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit accus antium dolor emque lauda ntium.
                    </p>
                </div>
                <div class="feature-icon">
                    <i class="fas fa-house-user"></i>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 feature-body border-right-0 border-top-res border-rgt-res">
                <div class="feature-info">
                    <h3 class="feature-titel mb-3"> <a href="about.blade.php">Nakliye Hizmetleri</a></h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit accus antium dolor emque lauda ntium.
                    </p>
                </div>
                <div class="feature-icon">
                    <i class="fas fa-people-carry"></i>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 feature-body border-top-res">
                <div class="feature-info">
                    <h3 class="feature-titel mb-3"> <a href="about.blade.php">Ulaşım Hizmetleri</a></h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit accus antium dolor emque lauda ntium.
                    </p>
                </div>
                <div class="feature-icon">
                    <i class="fas fa-shipping-fast"></i>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- //services section -->

<!-- call section -->
<section class="w3l-call-to-action-6">
    <div class="call-sec-style pb-5">
        <div class="container pb-md-5 pb-4">
            <div class="row align-items-center">
                <div class="col-md-5 col-float-lt">
                    @guest
                    <h3 class="title-big">Şimdi Kayıt Ol !</h3>
                    <p>Kayıt Olursan Avantajlı Paket Teslimatları Fırsatını Yakalayabilirsin !</p>
                </div>
                <div class="col-md-7 float-rt text-md-right align-items-center mt-md-0 mt-sm-5 mt-4">
                    <ul class="buttons">
                        <li class="phone-sec"><span class="fa fa-volume-control-phone mr-1"
                                                    aria-hidden="true"></span>
                            <a class="call-style-w3" href="tel:+1(23) 456 789 0000">+(90) 456 789 0000</a>
                        </li>
                        <li class="green">Ya da</li>

                        <li><a href="{{route('registration')}}" class="btn btn-style">Kayıt Ol</a> </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //call section -->

<!-- footer -->
<footer></footer>
<!-- //footer -->

<!-- Js scripts -->
<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fas fa-level-up-alt" aria-hidden="true"></span>
</button>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


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

<!-- theme switch js (light and dark)-->
<script src="{{asset('assets/js/theme-change.js')}}"></script>

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
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- //bootstrap-->
<!-- //Js scripts -->


<script>

    function mesafeHesapla() {
        s1 = document.getElementById("move_from_field").selectedIndex;
        s2 = document.getElementById("move_to_field").selectedIndex;
        // mesafe = document.getElementById("mesafe");
        // mesafe.value = aMesafe[s1][s2];
        let service_amount = (aMesafe[s1][s2])/20;
        let kdv_amount = (service_amount)*0.18;
        let total_amount = (service_amount + kdv_amount).toFixed(2) ;
        swal("Seçilen Rota İçin Hizmet Tutarı :","Hizmet Ücreti:"+ " " + service_amount + " TL" + "\n" + "KDV %18 :" + " " + kdv_amount + " TL" + "\n" + "Toplam Tutar :" + " " + total_amount + "TL" ,"success")
    }

    var aMesafe = new Array(
        new Array(0,351,573,978,640,489,553,1038,891,892,763,655,735,677,670,831,1101,594,571,766,526,1166,511,748,831,683,207,895,872,1073,190,622,69,939,898,1037,705,331,1147,375,828,356,670,410,880,187,530,889,766,282,205,892,1048,791,745,718,878,501,1070,608,972,644,345,687,905,486,753,265,881,291,486,659,706,778,1126,1116,891,701,246,87,722), //Adana
        new Array(351,0,924,652,635,766,904,731,1242,1243,1078,344,409,958,1021,1146,1416,802,699,1117,200,1447,286,549,524,998,149,808,693,747,339,973,420,1220,1249,730,913,450,1428,583,1109,707,1021,185,1231,164,292,1240,459,552,556,805,869,1072,752,392,898,414,1351,521,793,419,109,1038,579,638,1034,616,648,642,694,333,470,1059,890,880,1163,971,216,246,992), //Adiyaman
        new Array(573,924,0,1322,592,257,287,1255,344,319,207,1139,1308,423,165,275,528,388,500,219,1099,684,995,945,1137,168,780,883,1038,1641,763,165,565,457,325,1343,499,540,665,440,346,223,97,894,307,760,1103,372,1250,438,472,839,1096,309,674,1291,691,698,588,656,1020,1075,918,114,1473,474,494,363,1047,331,333,1232,1279,519,1432,1422,332,449,819,660,377), //Afyon
        new Array(978,652,1322,0,743,1065,1531,386,1666,1574,1368,365,243,1152,1455,1424,1694,991,835,1541,452,1641,505,377,185,1297,771,615,385,433,966,1407,1047,1414,1647,221,1010,818,1622,951,1303,1141,1375,606,1629,816,525,1694,254,920,944,659,537,1266,821,340,979,624,1545,682,485,431,633,1436,230,848,1228,995,309,1134,989,381,436,1253,310,142,1360,1099,831,885,1189), //Agri
        new Array(640,635,592,743,0,335,879,711,936,831,625,641,833,409,757,681,951,248,92,811,701,898,550,366,558,567,697,339,446,1143,805,757,633,671,917,764,281,344,879,308,560,579,645,468,899,630,797,964,752,358,435,295,552,523,130,893,263,221,802,114,476,496,718,706,973,197,485,433,455,625,259,834,989,430,853,843,625,364,669,630,454), //Amasya
        new Array(489,766,257,1065,335,0,544,998,601,530,312,914,1106,192,422,380,650,131,243,476,921,681,770,688,880,232,682,626,781,1416,679,422,482,454,582,1086,242,316,662,183,343,258,310,670,564,602,1005,629,1025,276,345,582,839,306,417,1113,434,441,585,399,763,818,820,371,1248,217,268,224,790,364,76,1054,1181,293,1175,1165,407,215,732,577,236), //Ankara
        new Array(553,904,287,1531,879,544,0,1542,360,518,474,1208,1288,690,122,542,727,675,787,238,1079,950,1064,1177,1369,442,760,1170,1301,1626,743,147,484,724,469,1575,786,736,932,727,613,413,364,963,451,740,1083,336,1319,634,668,1126,1383,576,961,1271,978,930,855,943,1307,1197,898,293,1458,761,761,559,1310,518,620,1212,1259,786,1665,1655,600,737,802,643,645), //Antalya
        new Array(1038,731,1255,386,711,998,1542,0,1599,1474,1268,387,545,1052,1420,1324,1594,911,755,1474,531,1541,527,399,207,1230,850,372,335,819,1026,1420,1107,1314,1580,207,891,840,1522,971,1203,1163,1308,628,1562,851,627,1627,464,942,966,416,159,1166,581,642,749,646,1445,676,235,453,712,1369,616,860,1128,1017,331,1156,922,614,738,1153,114,344,1271,1003,913,929,1100), //Artvin
        new Array(891,1242,344,1666,936,601,360,1599,0,298,527,1457,1626,720,293,448,442,732,844,125,1417,665,1313,1289,1481,495,1098,1227,1382,1959,1081,293,844,691,126,1687,843,858,700,784,580,540,417,1212,162,1078,1421,100,1568,756,790,1183,1440,606,1018,1609,1035,1042,686,1000,1364,1419,1236,277,1791,818,791,681,1391,645,677,1550,1597,816,1778,1768,511,796,1139,980,669), //Aydin
        new Array(892,1243,319,1574,831,530,518,1474,298,0,244,1444,1627,422,396,150,209,656,770,294,1418,432,1300,1197,1389,298,1099,1102,1277,1946,1082,396,888,393,172,1595,666,846,467,713,282,542,222,1200,136,1079,1422,398,1556,757,791,1058,1315,308,893,1610,858,971,403,929,1239,1327,1237,225,1778,747,493,682,1286,650,606,1551,1598,518,1684,1674,220,557,1142,983,378), //Baliskesir
        new Array(763,1078,207,1368,625,312,474,1268,527,244,0,1226,1418,216,352,94,364,443,555,402,1233,477,1082,991,1183,80,970,896,1071,1728,953,352,755,250,416,1389,460,628,458,495,139,413,110,982,380,914,1293,555,1337,588,647,852,1109,102,687,1425,652,753,381,711,1033,1121,1108,254,1560,529,287,526,1080,521,388,1366,1469,312,1478,1468,126,350,1014,855,171), //Bile?ik
        new Array(655,344,1139,365,641,914,1208,387,1457,1444,1226,0,196,1050,1236,1294,1564,889,733,1332,144,1539,144,275,180,1146,463,574,380,506,643,1188,724,1312,1464,386,908,599,1520,732,1201,922,1224,245,1446,468,240,1485,115,701,725,598,538,1164,719,286,877,473,1443,580,480,145,325,1253,338,697,1126,776,304,915,838,227,382,1151,475,465,1266,1005,530,550,1095), //Bingol
        new Array(735,409,1308,243,833,1106,1288,545,1626,1627,1418,196,0,1242,1405,1486,1756,1081,925,1501,209,1731,336,467,344,1338,528,766,544,338,723,1357,804,1504,1633,430,1100,791,1712,924,1393,1091,1405,437,1615,573,282,1624,85,893,917,790,696,1356,911,97,1069,665,1635,772,644,337,390,1422,170,889,1318,968,468,1026,1030,138,193,1343,519,384,1459,1198,595,649,1288), //Bitlis
        new Array(677,958,423,1152,409,192,690,1052,720,422,216,1050,1242,0,568,272,542,234,348,618,1110,489,959,775,967,296,874,680,855,1552,867,568,670,262,594,1173,1244,508,470,375,151,446,326,862,558,794,1197,771,1161,468,533,636,893,114,471,1302,436,630,393,523,817,905,1012,470,1382,409,160,412,864,552,268,1243,1373,185,1262,1252,216,134,923,764,45), //Bolu
        new Array(670,1021,165,1455,757,422,122,1420,293,396,352,1236,1405,568,0,420,605,553,665,168,1196,828,1092,1078,1270,320,877,1048,1202,1738,860,50,606,602,382,1476,664,637,810,605,491,316,242,991,364,857,1200,321,1347,535,569,1004,1261,454,839,1388,856,831,733,821,1185,1208,1015,171,1570,639,639,460,1211,421,498,1329,1376,664,1576,1557,478,615,917,758,523), //Burdur
        new Array(831,1146,275,1424,681,380,542,1324,448,150,94,1294,1486,272,420,0,270,506,620,444,1301,470,1150,1047,1239,148,1038,952,1127,1796,1021,420,823,243,322,1445,516,696,451,563,132,481,178,1050,286,982,1361,548,1405,656,715,908,1165,158,743,1493,708,821,374,779,1089,1177,1176,322,1628,597,343,594,1136,589,456,1434,1537,368,1534,1524,69,406,1083,924,227), //Bursa
        new Array(1101,1416,528,1694,951,650,727,1594,442,209,364,1564,1756,542,605,270,0,776,890,503,1571,223,1420,1317,1509,418,1308,1222,1397,2066,1291,605,1093,325,316,1715,786,966,258,833,402,751,431,1320,327,1252,1631,542,1675,926,985,1178,1435,428,1013,1763,978,1091,194,1049,1359,1447,1446,434,1898,867,613,864,1406,859,726,1704,1807,638,1804,1794,340,677,1352,1193,498), //Canakkale
        new Array(594,802,388,991,248,131,675,911,732,656,443,889,1081,234,553,506,776,0,156,607,921,723,770,614,806,363,718,539,694,1391,784,553,587,496,713,1012,111,352,704,219,385,389,441,688,695,638,1017,760,1000,312,389,495,752,348,330,1113,303,441,627,334,676,744,856,502,1221,253,310,355,703,495,112,1054,1209,335,1101,1091,451,195,761,663,280), //Cankiri
        new Array(571,699,500,835,92,243,787,755,844,770,555,733,925,348,665,620,890,156,0,719,765,837,614,458,650,475,641,383,538,1235,736,665,564,610,825,856,225,275,818,216,499,503,553,532,807,561,861,872,846,289,366,339,596,462,174,957,307,285,742,178,520,580,775,614,1065,105,424,364,542,556,167,898,1053,449,942,935,568,307,690,651,397), //Corum
        new Array(766,1117,219,1541,811,476,238,1474,125,294,402,1332,1501,618,168,444,503,607,719,0,1292,726,1188,1164,1356,370,973,1102,1257,1834,958,168,722,652,231,1562,718,733,761,659,541,415,292,1087,213,953,1296,153,1443,631,665,1058,1315,504,893,1484,910,917,697,875,1239,1294,1111,152,1666,693,689,556,1266,520,552,1425,1472,714,1653,1643,506,670,1013,854,570), //Denizli
        new Array(526,200,1099,452,701,921,1079,531,1417,1418,1233,144,209,1110,1196,1301,1571,921,765,1292,0,1599,151,406,324,1153,319,705,524,547,514,1148,595,1372,1424,530,982,606,1580,739,1261,882,1196,252,1406,364,96,1415,259,708,731,729,682,1224,818,192,964,480,1503,587,624,276,181,1213,379,704,1186,783,448,817,845,133,268,1211,619,593,1319,1066,386,440,1148), //Diyarbakir
        new Array(1166,1447,684,1641,898,681,950,1541,665,432,477,1539,1731,489,828,470,223,723,837,726,1599,0,1448,1264,1456,557,1363,1169,1344,2041,1356,828,1159,227,539,1662,733,997,62,864,338,890,587,1351,550,1283,1686,765,1650,957,1022,1125,1382,375,960,1791,925,1119,141,1012,1306,1394,1501,657,1871,898,560,901,1353,998,757,1732,1862,585,1751,1741,404,624,1413,1254,445), //Edirne
        new Array(511,286,995,505,550,770,1064,527,1313,1300,1082,144,336,959,1092,1150,1420,770,614,1188,151,1448,0,263,320,1002,348,562,407,646,499,1044,580,1221,1320,526,831,455,1429,588,1110,778,1080,101,1302,324,247,1341,255,557,581,586,583,1073,667,343,813,329,1352,436,507,133,332,1109,478,553,1035,632,391,771,694,284,439,1060,615,605,1168,915,408,406,997), //Elazig
        new Array(748,549,945,377,366,688,1177,399,1289,1197,991,275,467,775,1078,1047,1317,614,458,1164,406,1264,263,0,192,920,611,299,144,777,762,1030,765,1037,1270,398,633,441,1245,574,926,764,998,364,1252,587,502,1317,386,543,567,323,320,889,444,561,602,247,1168,305,244,130,587,1059,607,471,851,618,153,757,612,502,657,876,487,477,991,730,671,669,820), //Erzin?an
        new Array(831,524,1137,185,558,880,1369,207,1481,1389,1183,180,344,967,1270,1239,1509,806,650,1306,324,1456,320,192,0,1112,643,430,200,618,819,1222,900,1229,1462,206,825,633,1437,766,1118,956,1190,421,1444,644,420,1509,263,735,759,474,358,1081,636,441,794,439,1360,497,300,246,505,1251,415,663,1043,810,124,949,804,407,537,1068,295,285,1179,918,710,726,1008), //Erzurum
        new Array(683,998,168,1297,567,232,442,1230,495,298,80,1146,1338,296,320,148,418,363,475,370,1153,557,1002,920,1112,0,890,858,1013,1648,873,320,675,330,412,1318,474,548,538,415,219,333,78,902,394,834,1213,523,1257,508,567,814,1071,182,649,1345,666,673,461,631,995,1050,1028,222,1480,449,367,446,1022,441,308,1286,1389,392,1407,1397,206,425,934,775,251), //Eskisehir
        new Array(207,149,780,771,697,682,760,850,1098,1099,970,463,528,874,877,1038,1308,718,64,973,319,1363,348,611,643,890,0,870,755,866,195,829,276,1136,1105,849,829,366,1344,499,1025,563,877,247,1087,80,323,1096,578,468,412,867,931,988,814,511,948,476,1267,583,855,481,138,894,698,560,950,472,739,498,610,452,499,975,939,929,1079,887,68,122,908), //Gaziantep
        new Array(895,808,883,615,339,626,1170,372,1227,1102,896,574,766,680,1048,952,1222,539,383,1102,705,1169,562,299,430,858,870,0,237,1048,987,1048,912,942,1208,571,519,588,1150,599,831,871,936,641,1190,812,801,1255,685,650,714,44,213,794,209,860,377,394,1073,316,137,429,886,997,845,488,756,725,306,904,550,801,956,781,486,717,900,632,832,793,729), //Giresun
        new Array(872,693,1038,385,446,781,1301,335,1382,1277,1071,380,544,855,1202,1127,1397,694,538,1257,524,1344,407,144,200,1013,755,237,0,818,906,1154,889,1117,1363,406,713,565,1325,698,1006,888,1091,508,1345,731,620,1410,463,667,691,281,176,969,446,641,614,371,1248,385,100,274,705,1152,615,591,931,742,76,881,705,607,737,956,449,485,1062,794,816,814,891), //Gumushane
        new Array(1073,747,1641,433,1143,1416,1626,819,1959,1946,1728,506,339,1552,1738,1796,2066,1391,1235,1834,547,2041,646,777,618,1648,866,1048,818,0,1061,1690,1142,1814,1966,654,1410,1101,2022,1234,1703,1424,1726,747,1948,911,620,1962,395,1203,1227,1092,970,1666,1221,435,1379,975,1945,1082,918,647,728,1755,203,1199,1628,1278,742,1364,1340,476,531,1653,748,426,1772,1511,762,816,1601), //Hakkari
        new Array(190,339,763,966,805,679,743,1026,1081,1082,953,643,723,867,860,1021,1291,784,736,956,514,1356,499,752,819,873,195,987,906,1051,0,812,259,1129,1088,1025,895,461,1337,565,1018,546,860,398,1070,175,518,1079,754,472,395,984,1082,981,910,706,1043,593,1260,700,1006,632,333,877,893,655,943,455,890,481,676,647,694,968,1115,1105,1085,893,148,128,914), //Hatay
        new Array(622,973,165,1407,757,422,147,1420,293,396,352,1188,1357,568,50,420,605,553,665,168,1148,828,1044,1030,1222,320,829,1048,1154,1690,812,0,605,602,382,1428,664,589,810,580,491,266,242,943,364,809,1152,321,1299,487,521,1004,1261,454,839,1340,856,783,733,821,1185,1160,967,171,1522,639,639,412,1163,371,498,1281,1328,664,1518,1508,477,614,866,707,522), //Isparta
        new Array(69,420,565,1047,633,482,484,1107,844,888,755,724,804,670,606,823,1093,587,562,722,595,1159,580,765,900,675,276,912,889,1142,259,605,0,932,890,1106,698,324,1140,368,821,348,662,479,872,256,599,820,835,275,198,893,1065,784,738,787,871,518,1063,609,989,713,414,679,974,479,746,258,898,234,479,728,775,771,1195,1185,886,694,315,156,715), //i?el
        new Array(939,1220,457,1414,671,454,724,1314,691,393,250,1312,1504,262,602,243,325,496,610,652,1372,227,1221,1037,1229,330,1136,942,1117,1814,1129,602,932,0,565,1435,506,770,208,637,111,663,360,1124,529,1056,1459,791,1423,730,795,898,1155,148,733,1564,698,892,131,785,1079,1167,1274,504,1644,671,333,674,1126,771,530,1505,1635,358,1524,1514,176,396,1185,1026,217), //istanbul
        new Array(898,1249,325,1647,917,582,469,1580,126,172,416,1464,1633,594,382,322,316,713,825,231,1424,539,1320,1270,1462,412,1105,1208,1363,1966,1088,382,890,565,0,1668,824,865,574,765,454,548,334,1219,36,1085,1428,226,1575,763,797,1164,1421,480,999,1616,1016,1023,510,981,1345,1400,1243,211,1798,799,665,688,1372,656,658,1557,1604,690,1757,1747,391,728,1142,983,549), //izmir
        new Array(1037,730,1343,221,764,1086,1575,207,1687,1595,1389,386,430,1173,1476,1445,1715,1012,856,1562,530,1662,526,398,206,1318,849,571,406,654,1025,1428,1106,1435,1668,0,1031,839,1643,972,1324,1162,1396,627,1650,850,626,1715,349,941,965,615,358,1287,780,527,948,645,1566,703,434,452,711,1457,451,869,1249,1016,330,1155,1010,568,623,1274,89,139,1380,1119,913,929,1209), //Kars
        new Array(705,913,499,1010,281,242,786,891,843,666,460,908,1100,244,664,516,786,111,225,718,982,733,831,633,825,474,829,519,713,1410,895,664,698,506,824,1031,0,463,716,330,395,500,552,749,802,749,1078,871,1019,423,500,475,732,358,310,1174,192,502,637,395,656,763,967,613,1240,326,265,466,722,606,223,1115,1270,181,1005,1110,461,111,875,777,290), //Kastamonu
        new Array(331,450,540,818,344,316,736,840,858,846,628,599,791,508,637,696,966,352,275,733,606,997,455,441,633,548,366,588,565,1101,461,589,324,770,865,839,463,0,978,133,659,323,626,354,847,286,689,886,710,102,126,585,741,622,449,798,582,194,901,301,665,571,504,654,933,194,584,177,574,316,244,739,865,609,928,918,726,534,413,374,555), //Kayseri
        new Array(1147,1428,665,1622,879,662,932,1522,700,467,458,1520,1712,470,810,451,258,704,818,761,1580,62,1429,1245,1437,538,1344,1150,1325,2022,1337,810,1140,208,574,1643,716,978,0,845,319,871,568,1332,585,1264,1667,800,1631,938,1003,1106,1363,356,941,1772,906,1100,122,993,1287,1375,1482,692,1852,879,541,882,1334,979,738,1713,1843,566,1637,1722,385,605,1394,1235,426), //Kirklareli
        new Array(375,583,440,951,308,183,727,971,784,713,495,732,924,375,605,563,833,219,216,659,739,864,588,574,766,415,499,599,698,1234,565,580,368,637,765,972,330,133,845,0,526,314,493,487,747,419,822,812,843,93,170,555,812,489,390,931,522,327,768,317,736,704,637,554,1066,111,451,109,707,360,111,872,998,476,1063,1053,592,400,547,461,421), //Kirsehir
        new Array(828,1109,346,1303,560,343,613,1203,580,282,139,1201,1393,151,491,132,402,285,499,541,1261,338,1110,926,1118,219,1025,831,1006,1703,1018,491,821,111,454,1324,395,659,319,526,0,552,249,1013,418,945,1348,680,1312,619,684,787,1044,37,622,1453,587,781,242,674,968,1056,1163,393,1533,560,222,563,1015,660,419,1394,1524,247,1413,1403,65,285,1074,915,106), //Ko?aeli
        new Array(356,707,223,1141,579,258,413,1163,540,542,413,922,1091,446,316,481,751,389,501,415,882,890,778,764,956,333,563,871,888,1424,546,266,348,663,548,1162,500,323,871,314,552,0,320,677,530,543,886,568,1033,221,255,839,1064,515,675,1074,692,517,794,555,988,894,701,337,1256,425,522,146,897,114,334,1015,1062,547,1251,1241,544,469,602,443,490), //Konya
        new Array(670,1021,97,1375,645,310,364,1308,417,222,110,1224,1405,326,242,178,431,441,553,292,1196,587,1080,998,1190,78,877,936,1091,1726,860,242,662,360,334,1396,552,626,568,493,249,320,0,980,316,857,1200,445,1335,535,569,892,1149,212,727,1388,744,751,491,709,1073,1128,1015,144,1558,527,397,460,1100,428,386,1329,1376,422,1484,1474,236,460,915,756,281), //Kutahya
        new Array(410,185,894,606,468,670,963,628,1212,1200,982,245,437,862,991,1050,1320,688,532,1087,252,1351,101,364,421,902,247,641,508,747,398,943,479,1124,1219,627,749,354,1332,487,1013,677,980,0,1201,223,348,1240,356,456,480,638,684,976,585,444,731,247,1255,354,608,234,268,1008,579,471,938,531,492,670,598,385,540,963,716,706,1067,833,307,305,896), //Malatya
        new Array(880,1231,307,1629,899,564,451,1562,162,136,380,1446,1615,558,364,286,327,695,807,213,1406,550,1302,1252,1444,394,1087,1190,1345,1948,1070,364,872,529,36,1650,802,847,585,747,418,530,316,1201,0,1067,1410,262,1557,745,779,1146,1403,444,981,1598,994,1005,521,963,1327,1382,1225,193,1780,781,629,670,1354,638,640,1539,1586,654,1739,1729,355,692,1124,965,513), //Manisa
        new Array(187,164,760,816,630,602,740,851,1078,1079,914,468,573,794,857,982,1252,638,563,953,364,1283,324,587,644,834,80,812,731,911,175,809,256,1056,1085,850,749,286,1264,419,945,543,857,223,1067,0,403,1076,579,388,392,809,907,908,735,556,868,418,1187,525,831,457,218,874,743,480,870,452,715,478,530,497,579,895,939,929,999,807,140,101,828), //Kahramanmaras
        new Array(530,292,1103,525,797,1005,1083,627,1421,1422,1293,240,282,1197,1200,1361,1631,1017,861,1296,96,1686,247,502,420,1213,323,801,620,620,518,1152,599,1459,1428,626,1078,689,1667,822,1348,886,1200,348,1410,403,0,1419,355,791,735,825,778,1311,914,225,1060,576,1590,683,720,372,185,1217,452,800,1273,795,544,821,933,144,202,1298,715,673,1404,1161,393,447,1233), //Mardin
        new Array(889,1240,372,1694,964,629,336,1627,100,398,555,1485,1624,771,321,548,542,760,872,153,1415,765,1341,1317,1509,523,1096,1255,1410,1962,1079,321,820,791,226,1715,871,886,800,812,680,568,445,1240,262,1076,1419,0,1596,784,818,1211,1468,657,1046,1607,1063,1070,736,1028,1392,1447,1234,305,1794,846,842,709,1419,673,705,1548,1595,867,1806,1796,610,816,1115,956,716), //Mugla
        new Array(766,459,1250,254,752,1025,1319,464,1568,1555,1337,115,85,1161,1347,1405,1675,1000,844,1443,259,1650,255,386,263,1257,578,685,463,395,754,1299,835,1423,1575,349,1019,710,1631,843,1312,1033,1335,356,1557,579,355,1596,0,812,836,709,615,1275,830,182,988,584,1554,691,563,256,440,1364,227,808,1237,887,387,1026,949,223,278,1262,437,547,1376,1115,644,660,1205), //Mus
        new Array(282,552,438,920,358,276,634,942,756,757,588,701,893,468,535,656,926,312,284,631,708,957,557,543,735,508,468,650,667,1203,472,487,275,730,763,941,423,102,938,93,619,221,535,456,745,388,791,784,812,0,77,618,843,582,463,900,596,296,861,334,767,673,606,552,1035,204,544,75,676,267,204,841,967,569,1030,1020,683,491,517,372,512,683,491,517,372,512), //Nevsehir
        new Array(205,556,472,944,435,345,668,966,790,791,647,725,917,533,569,715,985,389,366,665,731,1022,581,567,759,567,412,714,691,1227,395,521,198,795,797,965,500,126,1003170,684,255,569,480,779,392,735,818,836,77,0,695,867,647,540,923,673,320,926,411,791,697,550,586,1059,281,609,121,700,190,281,864,911,634,1055,1045,749,557,451,292,578,749,557,451,292,578), //Nigde
        new Array(892,805,839,659,295,582,1126,416,1183,1058,852,598,790,636,1004,908,1178,495,339,1058,729,1125,586,323,474,814,867,44,281,1092,984,1004,893,898,1164,615,475,585,1108,555,787,839,892,638,1146,809,825,1211,709,618,695,0,257,750,165,884,333,391,1029,284,181,453,888,953,889,444,712,693,350,885,506,825,980,737,430,761,856,588,788,749,685), //Ordu
        new Array(1048,869,1096,537,552,839,1383,159,1440,1315,1109,538,696,893,1261,1165,1435,752,596,1315,682,1382,583,320,358,1071,931,213,176,970,1082,1261,1065,1155,1421,358,732,741,1363,812,1044,1064,1149,684,1403,907,778,1468,615,843,867,257,0,1007,422,793,590,547,1286,517,76,450,863,1210,767,701,969,918,252,1057,763,765,889,994,273,495,1112,844,991,989,641), //Rize
        new Array(791,1072,309,1266,523,306,576,1166,606,308,102,1164,1356,114,454,158,428,348,462,504,1224,375,1073,889,1081,182,988,794,969,1066,981,454,784,148,480,1287,358,622,356,489,37,515,212,976,444,908,1311,657,1275,562,647,750,1007,0,585,1416,550,744,279,637,931,1019,1226,356,1496,523,185,526,978,623,382,1357,1487,210,1376,1366,102,248,1037,878,69), //Sakarya
        new Array(745,752,674,821,130,417,961,581,1018,893,687,719,911,471,839,743,1013,330,174,893,818,960,667,444,636,649,814,209,446,1221,910,839,738,733,999,780,310,449,941,390,622,675,727,585,981,735,914,1046,830,463,540,165,422,585,0,1005,168,338,864,231,346,574,835,788,1051,279,547,538,515,730,341,946,1101,572,695,922,691,423,787,748,520), //Samsun
        new Array(718,392,1291,340,893,1113,1271,642,1609,1610,1425,286,97,1302,1388,1493,1763,1113,957,1484,192,1791,343,561,441,1345,511,860,641,435,706,1340,787,1564,1616,527,1174,796,1772,931,1453,1074,1388,444,1598,556,225,1607,182,900,923,884,793,1416,1005,0,1156,672,1695,779,741,431,373,1405,267,896,1378,975,565,1009,1037,89,96,1403,616,488,1505,1252,568,622,1334), //Siirt
        new Array(878,898,691,979,263,434,978,749,1035,858,652,877,1069,436,856,708,978,303,307,910,964,925,813,602,794,666,948,377,614,1379,1043,856,871,698,1016,948,192,582,906,522,587,692,744,731,994,868,1060,1063,988,596,673,333,590,550,168,1156,0,484,829,377,514,732,981,805,1209,412,457,658,683,798,415,1097,1252,346,863,1080,655,305,937,898,484), //Sinop
        new Array(501,414,698,624,221,441,930,646,1042,971,753,473,665,630,831,821,1091,441,285,917,480,1119,329,247,439,673,476,394,371,975,593,783,518,892,1023,645,502,194,1100,327,781,517,751,247,1005,418,576,1070,584,296,320,391,547,744,338,672,484,0,1023,107,471,377,497,812,807,224,706,371,380,510,365,613,768,731,733,723,847,586,485,446,676), //Sivas
        new Array(1070,1351,588,1545,802,585,855,1445,686,403,381,1443,1635,393,733,374,194,627,741,697,1503,141,1352,1168,1360,461,1267,1073,1248,1945,1260,733,1063,131,510,1566,637,901,122,768,242,794,491,1255,521,1187,1590,736,1554,861,926,1029,1286,279,864,1695,839,1023,0,916,1210,1298,1405,628,1775,802,464,805,1257,902,661,1636,1766,489,1655,1645,308,528,1317,1158,349), //Tekirdag
        new Array(608,521,656,682,114,399,343,676,1000,929,711,580,772,523,821,779,1049,334,178,875,587,1012,436,305,497,631,583,316,385,1082,700,821,609,785,981,703,395,301,993,317,674,555,709,354,963,525,683,1028,691,334,411,284,517,637,231,779,377,107,916,0,441,435,604,770,912,206,599,409,394,601,323,720,875,624,792,782,739,478,555,516,568), //Tokat
        new Array(972,793,1020,485,476,763,1307,235,1364,1239,1033,480,644,817,1185,1089,1359,676,520,1239,624,1305,507,244,300,995,855,137,100,918,1006,1185,989,1079,1345,434,656,665,1287,736,968,988,1073,608,1327,831,720,1392,563,767,791,181,76,931,346,741,514,471,1210,441,0,374,805,1134,715,625,893,842,176,981,687,707,837,918,349,585,1037,769,916,914,866), //Trabzon
        new Array(644,419,1075,431,496,818,1197,453,1419,1327,1121,145,337,905,1208,1177,1447,744,588,1294,276,1394,133,130,246,1050,481,429,274,647,632,1160,713,1167,1400,452,763,571,1375,704,1056,894,1128,234,1382,457,372,1447,256,673,897,453,450,1019,574,431,732,377,1298,435,374,0,457,1189,479,601,981,748,258,887,742,372,527,1006,541,531,1121,860,541,539,950), //Tun?eli
        new Array(345,109,918,633,718,820,898,712,1236,1237,1108,325,390,1012,1015,1176,1446,856,781,1111,1181,1501,332,587,505,1028,138,856,705,728,333,967,414,1274,1243,711,967,504,1484,637,1163,701,1015,268,1225,218,185,1234,440,606,560,888,963,1128,835,373,961,497,1405,604,805,457,0,1032,560,698,1088,610,629,636,748,314,361,1113,801,791,1216,1024,205,259,1045), //Sanliurfa
        new Array(687,1038,114,1436,706,371,293,1369,277,225,254,1253,1422,470,171,322,434,502,614,152,1213,657,1109,1059,1251,222,894,997,1152,1756,877,171,679,504,211,1457,613,654,692,554,393,337,144,1008,193,874,1217,305,1364,552,586,953,1210,356,788,1405,805,812,628,770,1134,1189,1032,0,1587,588,541,477,1161,445,447,1346,1393,566,1546,1536,377,561,931,772,422), //Usak
        new Array(905,579,1473,230,973,1248,1458,616,1791,1778,1560,338,170,1382,1570,1628,1898,1221,1065,1666,379,1871,478,607,415,1480,698,845,615,203,893,1522,974,1644,1798,451,1240,933,1852,1066,1533,1256,1558,579,1780,743,452,1794,227,1035,1059,889,767,1496,1051,267,1209,807,1775,912,715,479,560,1587,0,1031,1458,1110,539,1196,1172,308,363,1483,543,221,1594,1333,763,817,1423), //Van
        new Array(486,638,474,848,197,217,761,860,818,747,529,697,889,409,639,597,867,253,105,693,704,898,553,471,663,449,560,488,591,1199,655,639,479,671,799,869,326,194,879,111,560,425,527,471,781,480,800,846,808,204,281,444,701,523,279,896,412,224,802,206,625,601,698,588,1031,0,485,279,600,471,141,837,992,510,957,947,626,407,588,549,455), //Yozgat
        new Array(753,1034,494,1228,485,268,761,1128,791,493,287,1126,1318,160,639,343,613,310,424,689,1186,580,1035,851,1043,367,950,756,931,1628,943,639,746,333,665,1249,285,584,541,451,222,522,397,938,629,870,1273,842,1237,544,609,712,969,185,547,1378,457,708,464,599,893,981,1088,541,1458,485,0,488,940,628,344,1319,1449,89,1243,1328,285,173,1000,841,114), //Zonguldak
        new Array(265,616,363,995,433,224,559,1017,681,682,526,776,968,412,460,594,864,355,364,556,783,901,632,618,810,446,472,725,742,1278,455,412,258,674,688,1016,466,171,882,109,563,146,460,531,670,452,795,709,887,75,121,693,918,556,538,975,658,371,805,409,842,748,610,477,1110,279,488,0,751,212,279,916,971,513,1105,1095,628,436,511,352,457), //Aksaray
        new Array(881,648,1047,309,455,790,1310,331,1391,1286,1080,304,468,864,1211,1136,1406,703,547,1266,448,1353,391,153,124,1022,739,306,76,742,890,1163,898,1126,1372,330,722,574,1334,707,1015,897,1100,492,1354,715,544,1419,387,676,700,350,252,978,515,585,683,380,1257,394,176,258,629,1161,539,600,940,751,0,890,714,531,661,965,419,409,1086,825,801,799,915), //Bayburt
        new Array(291,642,331,1134,625,364,518,1156,645,650,521,915,1026,552,421,589,859,495,556,520,817,998,771,757,949,441,498,904,881,1364,481,371,234,771,656,1156,606,316,979,360,660,114,428,670,638,478,821,673,1026,267,190,885,1057,623,730,1009,798,510,902,601,961,887,636,446,1196,471,628,212,890,0,440,950,997,653,1243,1233,657,580,536,377,601), //Karaman
        new Array(486,694,333,989,259,76,620,922,677,605,388,838,1030,268,498,456,726,112,167,552,845,757,694,612,804,308,610,550,705,1340,676,498,479,530,658,1010,223,244,738,111,419,334,386,598,640,530,933,705,949,204,281,506,763,382,341,1037,415,365,661,323,687,742,748,447,1172,141,344,279,714,440,0,978,1109,369,1099,1089,484,292,659,561,313), //Kirikkale
        new Array(659,333,1232,381,834,1054,1212,614,1550,1551,1366,227,138,1243,1329,1434,1704,1054,898,1425,133,1732,284,502,407,1286,452,801,607,476,647,1281,728,1505,1557,568,1115,739,1713,872,1394,1015,1329,385,1539,497,144,1548,223,841,864,825,765,1357,946,89,1097,613,1636,720,707,372,314,1346,308,837,1319,916,531,950,978,0,185,1344,657,529,1418,1165,481,535,1247), //Batman
        new Array(706,470,1279,436,989,1181,1259,738,1597,1598,1469,382,193,1373,1376,1537,1807,1209,1053,1472,288,1862,439,657,537,1389,499,956,737,531,694,1328,775,1635,1604,623,1270,865,1643,998,1524,1062,1376,540,1586,579,202,1595,278,967,911,980,889,1487,1101,96,1252,768,1776,875,837,527,361,1393,363,992,1449,971,661,997,1109,185,0,1474,712,584,1582,1349,571,625,1411), //Sirnak
        new Array(778,1059,519,1253,430,293,786,1153,816,518,312,1551,1343,185,664,368,638,335,449,714,1211,585,1060,876,1068,382,975,781,956,1653,968,664,171,358,690,1274,181,609,566,476,247,547,422,963,654,895,1298,867,1262,569,634,737,994,210,572,1403,346,731,489,624,918,1006,1113,566,1483,510,89,513,965,653,369,1344,1474,0,1184,1289,374,84,1015,856,203), //Bartin
        new Array(1126,890,1432,310,853,1175,1665,114,1778,1684,1478,475,519,1262,1576,1534,1804,1101,943,1653,619,1751,615,487,295,1407,939,486,449,748,1115,1518,1195,1524,1757,89,1005,928,1637,1063,1413,1251,1484,716,1739,839,715,1806,437,1030,1056,430,273,1376,695,616,863,733,1655,792,349,541,801,1546,543,957,1243,1105,419,1243,1099,657,712,1184,0,228,1377,1109,953,969,1206), //Ardahan
        new Array(1116,880,1422,142,843,1165,1655,344,1768,1674,1468,465,384,1252,1557,1524,1794,1091,935,1643,593,1741,605,477,285,1397,929,717,485,426,1105,1508,1185,1514,1747,139,1110,918,1722,1053,1403,1241,1474,706,1729,929,673,1796,547,1020,1045,761,495,1366,922,488,1080,723,1645,782,585,531,791,1536,221,947,1328,1095,409,1233,1089,529,584,1289,228,0,1471,1210,932,986,1300), //Igdir
        new Array(891,1163,332,1360,625,407,600,1271,511,220,126,1266,1459,216,478,69,340,451,568,670,1319,404,1168,671,1179,206,1079,832,1062,1511,1085,477,886,396,391,1119,111,726,385,592,65,544,236,1067,355,999,1404,610,1376,683,557,856,1112,102,691,1505,655,847,308,739,1037,1121,1216,377,1594,626,285,628,1086,657,484,1418,1582,374,1377,1471,0,350,1139,980,171), //Yalova
        new Array(701,971,449,1099,364,215,737,1003,796,557,350,1005,1198,134,615,406,677,195,307,1013,1066,624,915,669,918,425,887,793,794,762,893,614,694,1185,728,913,875,534,605,400,285,469,460,833,692,807,1161,816,1115,491,451,588,844,248,423,1252,305,586,528,478,769,860,1024,561,1333,407,173,436,825,580,292,1165,1349,84,1109,1210,350,0,947,788,179), //Karabuk
        new Array(246,216,819,831,669,732,802,913,1139,1142,1014,530,595,923,917,1083,1352,761,690,854,386,1413,408,820,710,934,68,729,816,816,148,866,35,1026,1142,929,777,413,1394,547,1074,602,915,307,1124,140,393,1115,644,517,292,788,991,1037,787,568,937,485,1317,555,916,541,205,931,763,588,1000,511,801,536,659,481,571,1015,953,932,1139,947,0,159,968), //Kilis
        new Array(87,246,660,885,630,577,643,929,980,983,855,550,469,764,758,924,1193,663,651,570,440,1254,406,669,726,775,122,793,814,1061,128,707,156,217,983,1209,290,374,1235,461,915,443,756,305,965,101,447,956,660,372,578,749,989,878,748,622,898,446,1158,516,914,539,259,772,817,549,841,352,799,377,561,535,625,856,969,986,980,788,159,0,809), //Osmaniye
        new Array(722,992,377,1189,454,236,645,1100,669,378,171,1095,1288,45,523,227,498,280,397,570,1148,445,997,820,1008,251,908,729,891,1601,914,522,715,217,549,1209,290,555,426,421,106,490,281,896,513,828,1233,716,1205,512,749,685,641,69,520,1334,484,676,349,568,866,950,1045,422,1423,455,114,457,915,601,313,1247,1411,203,1206,1300,171,179,968,809,0)//Duz?e
    );

</script>






<!--    <script type="text/javascript">-->
<!--        function ucretHesapla() {-->
<!--            let move_from_val = document.getElementById("move_from_field").value;-->
<!--            let move_from_to_val = document.getElementById("move_to_field").value;-->
<!--            //let total_amount = move_from_val*move_from_to_val;-->
<!--            swal("Hesaplanan Ücret :",move_from_val.toUpperCase());-->
<!--        }-->
<!--    </script>-->


</body>

</html>

@endsection
