@extends('layouts.app')
@section('content')
    <section class="w3l-contact-11 py-5">

        <div class="container py-md-5 py-4">

            <div class="row justify-content-center">

                <div class="form-content ml-sm-left mx-auto">
                    <h3 class="title-main-2 mb-4">
                        Kargo Takip Alanı</h3>
                    <form action="{{route('user-cargo-track')}}" method="get">
                        @csrf
                        <input name="cargo_track_number" placeholder="Kargo Takip No">
                        <button class="btn btn-style mt-sm-3">Sorgula</button>
                    </form> <br><br>
                    @if($cargo_track_number !=null)

                        <span class="alert alert-primary" style="display: inline-block">
                            Takip No : {{$cargo_track_number->cargo_track_number}} <br>
                            Gönderici Ad-Soyad : {{auth()->user()->name}} {{auth()->user()->last_name}}  <br>
                            Gönderici Email : {{auth()->user()->email}} <br>
                            Hizmet : {{$cargo_track_number->service_type}} <br>
                            Çağrı Tarihi : {{$cargo_track_number->created_at}} <br>
                            Gönderi İli : {{$cargo_track_number->move_from}} <br>
                            Teslimat İli : {{$cargo_track_number->move_to}}<br>
                            Teslimat İlçesi : {{$cargo_track_number->move_to_address}}<br>
                            Alıcı Ad-Soyad : {{$cargo_track_number->ship_to}}<br>
                            Alıcı Telefon Numarası : {{$cargo_track_number->ship_to_phone_number}}<br>
                            Teslimat Adresi : {{$cargo_track_number->ship_address}}<br>
                            Son Durum : {{$cargo_track_number->transit_status}} <br>
                        </span>
                    @else
                        <span class="alert alert-danger" style="display: inline-block">
                            Kayıt Bulunamadı !
                        </span>
                    @endif
                </div>



            </div>

        </div>

    </section>
@endsection
