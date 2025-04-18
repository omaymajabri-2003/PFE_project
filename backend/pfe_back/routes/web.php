<?php

use Illuminate\Support\Facades\Route;

/*espace responsable*/
use App\Http\Controllers\espace_technicien_controllers\authentification_controllers\AuthentificationTechnicineController;



/*use technicien*/
// Removed unnecessary use directive

Route::get('/', fn() => view('welcome'));

/***************************************************  LES ROUTES POUR ESPACE  RESPONSABLE */





/***************************************************  LES ROUTES POUR ESPACE  TECHNICIEN */

/*retourne une vue*/
Route::get('/espace_technicien', [AuthentificationTechnicineController::class, 'View']);

/*route d'authentification*/
Route::post('/espace_technicien', [AuthentificationTechnicineController::class, 'Authentification_tech'])->name('Auth_tech');
