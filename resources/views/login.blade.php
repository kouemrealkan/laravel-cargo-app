@extends('layouts.app')
@section('content')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tam Yeri Tam Zamanı Taşımacılık A.Ş Giriş Ekranı</title>
    <link href="//fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="@{/assets/css/style-starter.css}">
</head>
<body>




<section class="w3l-contact-11 py-5" id="contact">
    <div class="container py-md-5 py-4">
        <div class="title-heading-w3 mx-auto text-center mb-5 pb-xl-4">
            <h3 class="title-main">Giriş Ekranı !</h3>
        </div>

        <div class="row justify-content-center">
            <div class="form-content ml-sm-left mx-auto">
                <h3 class="title-main-2 mb-4">
                    Giriş Formu</h3>
                @if(count($errors)>0)
                    <span class="alert alert-danger">Hatalı Giriş</span>
                @endif
                <br><br>
                <form  method="post" action="{{route('login')}}">
                    @csrf

{{--                    <div th:if="${param.error}">--}}
{{--                        <div class="alert alert-danger">Geçersiz Şifre veya Kullanıcı !--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div th:if="${param.logout}">--}}
{{--                        <div class="alert alert-info">Çıkış İşlemi Başarılı</div>--}}
{{--                    </div>--}}

                    <input type="text" name="email" id="ad" placeholder="E-Posta" required="">
                    <input type="password" name="password" id="parola" placeholder="Şifre" required="">
                    <button type="submit" class="btn btn-style mt-sm-3">GİRİŞ YAP</button>
                </form>
            </div>
        </div>


    </div>
</section>



<section class="w3l-contact-11 py-5">
    <div class="container py-md-5 py-4">
        <h3 class="title-main">Hesabınız Yok mu ?</h3>
        <span class="font-weight-bold">
                 <a>Kayıt Olun</a>
             </span>
    </div>
</section>

</body>
</html>
@endsection
