<!DOCTYPE html>
<html  lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&display=swap"
          rel="stylesheet">
    <!-- //google-fonts -->
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="{{asset('/assets/css/style-starter.css')}}">
</head>
<body>

<footer class="w3l-footer-22 py-5">
    <div class="container py-md-5 py-4">
        <div class="row sub-columns pt-lg-2">
            <div class="col-lg-4 col-sm-6 sub-one-left">
                <h6>Hakkımızda </h6>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                    doloremque
                    laudantium, totam rem aperiam, eaque ipsa quae ab.</p>
                <div class="columns-2">
                    <ul class="social">
                        <li><a href="#facebook" title="facebook"><span class="fab fa-facebook-f"
                                                                       aria-hidden="true"></span></a>
                        </li>
                        <li><a href="#linkedin" title="linkedin"><span class="fab fa-linkedin-in"
                                                                       aria-hidden="true"></span></a>
                        </li>
                        <li><a href="#twitter" title="twitter"><span class="fab fa-twitter"
                                                                     aria-hidden="true"></span></a>
                        </li>
                        <li><a href="#google" title="google"><span class="fab fa-google-plus-g"
                                                                   aria-hidden="true"></span></a>
                        </li>
                        <li><a href="#instagram" title="instagram"><span class="fab fa-instagram"
                                                                         aria-hidden="true"></span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 sub-two-right pl-lg-5 mt-sm-0 mt-5">
                <h6>Hizmetlerimiz</h6>
                <ul>
                    <li><a href="{{route('services')}}"><span class="fas fa-angle-right mr-2"></span>Nakliye Hizmeti</a>
                    </li>
                    <li><a href="services.html"><span class="fas fa-angle-right mr-2"></span>Standart Dosya Teslimatı
                            </a>
                    </li>
                    <li><a href="services.html"><span class="fas fa-angle-right mr-2"></span>Paket&Koli Teslimatı</a>
                    </li>
                    <li><a href="services.html"><span class="fas fa-angle-right mr-2"></span>Depo Kiralama</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-2 col-sm-6 sub-two-right mt-lg-0 mt-sm-5 mt-4">
                <h6>Hızlı Erişim</h6>
                <ul>
                    <li><a href="{{route('index')}}"><span class="fas fa-angle-right mr-2"></span>Anasayfa</a></li>
                    <li><a href="{{route('about')}}"><span class="fas fa-angle-right mr-2"></span>Hakkımızda</a>
                    </li>
                    <li><a href="{{route('services')}}"><span class="fas fa-angle-right mr-2"></span>Hizmetlerimiz</a>
                    </li>
                    <li><a href="https://goo.gl/maps/ww5fJYVFGCfDNVzf7" target="_blank"><span class="fas fa-angle-right mr-2"></span>İletişim</a></li>
                </ul>
            </div>

        </div>
    </div>
    <!-- copyright -->
    <div class="copyright-footer text-center mt-4">
        <div class="container">
            <div class="columns">
                <p>&copy; 2022 KOU
                    <a href="http://bilisim.kocaeli.edu.tr/" target="_blank">KOU BSM</a>
                </p>
            </div>
        </div>
    </div>
    <!-- //copyright -->
</footer>

</body>
</html>
