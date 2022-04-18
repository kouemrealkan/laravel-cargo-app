<?php

namespace App\Http\Controllers;

use App\Mail\UserActivateMail;
use App\Mail\UserCargoTrackNumber;
use App\Mail\UserContactTrackNumber;
use App\Models\CargoTransit;
use App\Models\ContactForm;
use App\Models\OurServices;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class PageController extends Controller
{
    //


    public function indexPage(){
        return view('index');
    }

    public function contactPage(){
        $cargo_list = CargoTransit::where('cargo_transits.user_id',auth()->user()->id)->get();
        return view('contact',compact('cargo_list'));
    }


    // user id => user -> contact form one - to many
    public function sendContactForm(Request $request){
        $contact_form = new ContactForm;
        $contact_form->cargo_id = $request->input('cargo_id');
        $contact_form->user_id = auth()->user()->id;
        $contact_form->email = auth()->user()->email;
        $contact_form->message = $request->input('message');
        $contact_form->track_code = str::random(15);
        $contact_form->save();

        Mail::to($request->input('email'))->send(new UserContactTrackNumber($contact_form));

        return redirect()->route('index');
    }

    public function servicesPage(){
        $our_services = OurServices::all();
        return view('services',compact('our_services'));
    }

    public function aboutPage(){
        return view('about');
    }

    public function priceDetailPage(){
        return view('price-detail');
    }

    public function loginPage(){
        return view('login');
    }

    public function userLogin(){
        if(auth()->attempt(['email'=>\request('email'),'password'=>\request('password')])){
            \request()->session()->regenerate();
            return redirect()->route('index');
        }else{
            $errors = ['email'=>'Login Error !'];
            return back()->withErrors($errors);
        }
    }

    public function userLogout(){
        auth()->logout();
        \request()->session()->flush();
        \request()->session()->regenerate();

        return redirect()->route('login');
    }

    public function registrationPage(){
        return view('registration');
    }

    public function userRegistration(Request $request)
    {
        $user = new User;
        $user->name = $request->input('name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->phone_number = $request->input('phone_number');
        $user->password =Hash::make($request->input('password'));
        $user->activation_key = str::random(60);
        $user->save();

        Mail::to($request->input('email'))->send(new UserActivateMail($user));

        auth()->login($user);
        return redirect()->route('login');
    }

    public function activateUserAccount($key){
       $user = User::where('activation_key',$key)->first();
       if(!is_null($user)){
           $user->activation_key = null;
           $user->is_active = 1;
           $user->save();
           return redirect()->to('/');
       }else{
           return redirect()->to('/')
               ->withErrors('Error when activate account');
       }
    }

    public function cargoTransitForm(){
        return view('cargo-call');
    }

    public function registerCargoTransitForm(Request $request){
        $cargo_transit = new CargoTransit;
        $cargo_transit->service_type = $request->input('service_type');
        $cargo_transit->user_id  = $request->input('user_id');
        $cargo_transit->email = $request->input('email');
        $cargo_transit->move_from = $request->input('move_from');
        $cargo_transit->move_to  = $request->input('move_to');
        $cargo_transit->move_to_address  = $request->input('move_to_address');
        $cargo_transit->ship_to  = $request->input('ship_to');
        $cargo_transit->ship_to_phone_number  = $request->input('ship_to_phone_number');
        $cargo_transit->ship_address  = $request->input('ship_address');
        $cargo_transit->cargo_track_number = random_int(100000, 999999);
        $cargo_transit->save();

        Mail::to($request->input('email'))->send(new UserCargoTrackNumber($cargo_transit));

        return redirect()->route('index');

    }

    public function userTrackContactWithCode(Request $request){
        $track_code = $request->input('track_code');
        $contact_track_code = ContactForm::where('track_code',$track_code)->first();
        return view('user-contact-track',compact('contact_track_code'));
    }


    public function userTrackCargoWithNumber(Request $request){
//        $errors = ['cargo_track_number'=>' Kayıt Bulunamadı !'];
        $track_number = $request->input('cargo_track_number');
        $cargo_track_number = CargoTransit::where('cargo_track_number',$track_number)->first();
        return view('user-cargo-track',compact('cargo_track_number'));
    }
}
