<h1>{{config('app.name')}}</h1>
<p>Merhaba {{$user->name}} {{$user->last_name}}, Hesap Kaydı yapıldı !</p>
<p>Kayıt aktivasyonu için <a href="{{config('app.url')}}/activate/{{$user->activation_key}}">Tıklayın.</a>
    veya aşağıdaki bağlantıyı tarayıcınızda açın></p>
</p>{{config('app.url')}}/activate/{{$user->aktivasyon_key}}</p>
