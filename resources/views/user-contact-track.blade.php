@extends('layouts.app')
@section('content')
    <section class="w3l-contact-11 py-5">

        <div class="container py-md-5 py-4">

            <div class="row justify-content-center">

                <div class="form-content ml-sm-left mx-auto">
                    <h3 class="title-main-2 mb-4">
                        Kargo Takip Alanı</h3>
                    <form action="{{route('user-contact-track')}}" method="get">
                        @csrf
                        <input name="track_code" placeholder="Talep Takip No">
                        <button class="btn btn-style mt-sm-3">Sorgula</button>
                    </form> <br><br>
                    @if($contact_track_code !=null)

                        <span class="alert alert-primary" style="display: inline-block">
                            Şikayet Takip No : {{$contact_track_code->track_code}} <br>
                            Kargo Takip No : {{$contact_track_code->cargo_transit->cargo_track_number}}<br>
                            Ad : {{$contact_track_code->user->name}} {{$contact_track_code->user->last_name}} <br>
                            Şikayet İçeriği : {{$contact_track_code->message}}<br>
                            Şikayet Durumu : {{$contact_track_code->status}}<br>
                            Şikayet Cevabı : @if($contact_track_code->admin_response == null)
                                   Henüz Yanıt Yok
                            <br>
                            @endif
                            Şikayet Oluşturulma Tarihi : {{$contact_track_code->created_at}}
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
