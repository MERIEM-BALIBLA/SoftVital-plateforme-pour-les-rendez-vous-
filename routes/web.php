<?php

use App\Http\Controllers\admin\compteController;
use App\Http\Controllers\Authentification\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\medecin\calandrier\EventController;
use App\Http\Controllers\medecin\calandrier\ListeController;
use App\Http\Controllers\medecin\dashboard\PostController;
use App\Http\Controllers\medecin\dashboard\ProfileController;
use App\Http\Controllers\medecin\reservation\ReservationController;
use App\Http\Controllers\medecin\singlePage\SinglePageController;
use App\Http\Controllers\ReserveController;
use Illuminate\Support\Facades\Route;

Route::resource('/', HomeController::class)->names([
    'index' => '/'
]);

Route::resource('/Authentification',AuthController::class);

Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/auth', [AuthController::class, 'login'])->name('login');

Route::get('/forget_password', function () {
    return view('Authentification.resset_form');
})->name('forget_password');

Route::post('/resset_form',[AuthController::class,'ForgetPassword'])->name('resetPassword');

Route::post('/forget_password_form', [AuthController::class, 'ForgetPassword'])->name('Reset.password.form');

Route::get('/reset-password/{token}', function ($token) {
    return view('Authentification.new_password', compact('token'));
})->name('new_pass');

Route::post('/new_password',[AuthController::class, 'resetPassword'])->name('pass_form');



// Medecin Route 

Route::get('dash',function(){
    return view('medecin/index');
});

// 

// post
Route::resource('post', PostController::class)->names([
    'index' => 'dashboard_medecin',
    'create' => 'create',
    'store' => 'store',
    'edit' => 'edit',
    'update' => 'update',
    'destroy' => 'destroy',
]);

// profil--------------------------------------------
Route::get('/dashboard/profile', [ProfileController::class, 'index'])->name('dash.profile');
Route::put('/modifier_mes_informations_personnelles', [ProfileController::class, 'update_InfoPersonnelle'])->name('update_InfoPersonnelle');
Route::put('/modifier_mes_informations_professionnel', [ProfileController::class, 'update_Proffesionnel'])->name('updateProffesionInfo');
// Route::match(['put', 'post'], '/modifier_image', [ProfileController::class, 'uploadProfileImage'])->name('uploadProfileImage');
Route::put('/modifier_ma_photo_de_profile', [ProfileController::class, 'uploadProfileImage'])->name('uploadProfileImage');
// --------------------------------------------------

// single page---------------------------------------
Route::get('/single_page/{id}', [SinglePageController::class, 'show']);
Route::post('/faire un rendze-vous', [SinglePageController::class, 'reserve'])->name('rendez-vous');

// --------------------------------------------------

// calandrier 
Route::get('getevents', [EventController::class, 'getevents'])->name('getevents');
Route::post('/calendar/mycalendar/editevent', [EventController::class, 'updateevent'])->name('mycalendar.editevent');

Route::resource('event', EventController::class)->names([
    'index' =>'calandrier',
    // 'create' => 'mycalendar.addevent',
    'destroy' => 'event.destroy',
    'update' => 'event.update'
]);
Route::post('event', [EventController::class, 'create'])->name('mycalendar.addevent');
// afficher infor
Route::post('event_id', [EventController::class, 'handleEvent'])->name('event_id');

// edit avec popup
Route::put('event-edit', [EventController::class, 'updateevent'])->name('mycalender.updateevent');

// edit avec translation
Route::put('event-edit-translate', [EventController::class, 'translateUpdate'])->name('translateevent');

// admin----------------------------------------------
Route::get('/dashboard', [compteController::class, 'index']);
Route::get('/liste_des_rendez-vous', [ListeController::class, 'index']);
Route::put('/medecin/{id}/edit', [compteController::class, 'edit'])->name('medecin.edit');
// compte active 
Route::get('/liste_des_comptes_actives', [compteController::class, 'compteActive']);
// compte inactive
Route::get('/liste_des_comptes_inactives', [compteController::class, 'compteInactive']);


// ---------------------------------------------------
// reservation page ou il y a une liste pour les docteurs
Route::get('/docteur-profil', [ReserveController::class, 'index']);

// pages des reservation Medecin
Route::get('/liste-des-reservations', [ReservationController::class, 'index'])->name('Mes-rendez-vous');
Route::put('/reservation/{id}/statut', [ReservationController::class, 'updateReservation'])->name('reservation_statut');
