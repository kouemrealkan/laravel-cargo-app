<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',function (){
   return view('index');
});

Route::get('/services',[PageController::class,'servicesPage'])->name('services');

Route::get('/contact',[PageController::class,'contactPage'])->name('contact');
Route::post('/contact',[PageController::class,'sendContactForm'])->name('contact');

Route::get('/',[PageController::class,'indexPage'])->name('index');
Route::get('/about',[PageController::class,'aboutPage'])->name('about');
Route::get('/price-detail',[PageController::class,'priceDetailPage'])->name('price-detail');

Route::get('/registration',[PageController::class,'registrationPage'])->name('registration');
Route::post('/registration',[PageController::class,'userRegistration'])->name('registration');

Route::get('/activate/{key}',[PageController::class,'activateUserAccount'])->name('activate');

Route::get('/login',[PageController::class,'loginPage'])->name('login');
Route::post('/login',[PageController::class,'userLogin'])->name('login');

Route::get('/index',[PageController::class,'indexPage'])->name('index');
Route::post('/index',[PageController::class,'userLogout'])->name('index');

Route::get('/cargo-call',[PageController::class,'cargoTransitForm'])->name('cargo-call');
Route::post('/cargo-call',[PageController::class,'registerCargoTransitForm'])->name('cargo-call');


Route::get('/user-cargo-track',[PageController::class,'userTrackCargoWithNumber'])->name('user-cargo-track');
Route::get('/user-contact-track',[PageController::class,'userTrackContactWithCode'])->name('user-contact-track');

//Route::post('/index',[PageController::class,'registerCargoTransitForm']);

Route::get('/test/mail',function (){
    return new App\Mail\UserActivateMail();
});



// ADMIN ROUTE

Route::get('/admin-login',[AdminController::class,'loginPage'])->name('admin.login');
Route::post('/admin-login',[AdminController::class,'adminLogin'])->name('admin.login');

Route::get('/admin-index',[AdminController::class,'indexPage'])->name('admin.index');
Route::post('/admin-index',[AdminController::class,'adminLogout'])->name('admin.index');

Route::get('/cargo-call-list',[AdminController::class,'cargoCallList'])->name('admin.cargo-call-list');
Route::get('/contact-list',[AdminController::class,'contactList'])->name('admin.contact-list');


Route::get('/cargo-status-update/{id}',[AdminController::class,'cargoStatusUpdatePage'])->name('admin.cargo-status-update');
Route::put('/cargo-status-update/{id}',[AdminController::class,'updateCargoStatus'])->name('admin.cargo-status-update');

Route::get('/contact-status-update/{id}',[AdminController::class,'contactStatusUpdatePage'])->name('admin.contact-status-update');
Route::put('/contact-status-update/{id}',[AdminController::class,'updateContactStatus'])->name('admin.contact-status-update');
