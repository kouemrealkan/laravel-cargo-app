<?php

namespace App\Http\Controllers;

use App\Models\CargoTransit;
use App\Models\ContactForm;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function loginPage(){
        return view('admin.login');
    }

    public function indexPage(){
        return view('admin.index');
    }

    public function adminLogin(){
        if(auth()->attempt(['email'=>\request('email'),'password'=>\request('password'),'is_admin'=>1])){
            \request()->session()->regenerate();
            return redirect()->route('admin.index');
        }else{
            $errors = ['email'=>'Login Error !'];
            return back()->withErrors($errors);
        }
    }

    public function adminLogout(){
        auth()->logout();
        \request()->session()->flush();
        \request()->session()->regenerate();

        return redirect()->route('admin.login');
    }

    public function cargoCallList(){
        $cargo_list = CargoTransit::all();
//        $cargo_list = User::find(6)->cargo_transits;
//        $cargo_list = User::select('users.*')
//            ->join('cargo_transits','cargo_transits.user_id','users.id')
//            ->get();
        return view('admin.cargo-call-list',compact('cargo_list'));
    }

    public function contactList(){
        $contact_list = ContactForm::all();
        return view('admin.contact-list',compact('contact_list'));
    }

    public function cargoStatusUpdatePage($id){
        $update_cargo = CargoTransit::find($id);
        return view('admin.cargo-status-update',compact('update_cargo'));
    }


    public function updateCargoStatus(Request $request,$id){

        $update_cargo = CargoTransit::find($id);
        $update_cargo->update(['transit_status'=>$request->input('transit_status')]);
        return redirect()->route('admin.index');
    }

    public function contactStatusUpdatePage($id){
        $update_contact = ContactForm::find($id);
        return view('admin.contact-status-update',compact('update_contact'));
    }

    public function updateContactStatus(Request $request,$id){
        $update_contact = ContactForm::find($id);
        $update_contact->update(['admin_response'=>$request->input('admin_response'),'status'=>"Müşteri Şikayeti Yanıtlandı"]);
        return redirect()->route('admin.index');
    }
}
