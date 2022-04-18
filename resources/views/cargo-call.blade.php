@extends('layouts.app')
@section('content')
    <section class="w3l-contact-11 py-5">

        <div class="container py-md-5 py-4">

            <div class="row justify-content-center">

                <div class="form-content ml-sm-left mx-auto">
                    <h3 class="title-main-2 mb-4">
                        Gönderi Çağrı Formu</h3>
                    <form action="{{route('cargo-call')}}" method="post">
                        @csrf
                        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                        <label class="col-form-label">Hizmet Seçimi</label>
                        <select class="form-control" name="service_type">
                            <option value="Paket & Koli Transferi">Paket & Koli Transferi</option>
                            <option value="Dosya Transferi">Standart Dosya Transferi</option>
                        </select> <br>
                        <input type="text" name="name" readonly value="{{auth()->user()->name}}" id="w3lName3" placeholder="Adınız" required="">
                        <input type="text" name="last_name" readonly value="{{auth()->user()->last_name}}" id="w3lName3" placeholder="Soyadınız" required="">
                        <input type="text" name="email" id="w3lName3" readonly value="{{auth()->user()->email}}" placeholder="Email" required="">
                        <input type="text" name="move_from" id="w3lName4" placeholder="Gönderi İli" required="">
                        <input type="text" name="move_to" id="w3lName6" placeholder="Teslimat İli" required="">
                        <input type="text" name="move_to_address" id="w3lName6" placeholder="Teslimat İlçesi" required="">
                        <input type="text" name="ship_to" id="w3lName6" placeholder="Alıcı Ad-Soyad" required="">
                        <input type="text" name="ship_to_phone_number" id="w3lName6" placeholder="Alıcı Telefon Numarası" minlength="11" maxlength="11" required="">
                        <input type="text" name="ship_address" id="w3lName6" placeholder="Teslimat Adresi" required="">
                        <button class="btn btn-style mt-sm-3">Gönder</button>
                    </form>
                </div>


            </div>

        </div>

    </section>

@endsection
