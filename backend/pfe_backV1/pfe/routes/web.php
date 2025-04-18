<?php

use Illuminate\Support\Facades\Route;

// Responsable routes use
use App\Http\Controllers\espace_responsable\create_account\CreatAccountController;
use App\Http\Controllers\espace_responsable\create_account\CreatAccountResponsableController;
use App\Http\Controllers\espace_responsable\create_account\CreatAccountTechnicienController;
use App\Http\Controllers\espace_responsable\updaye_account\UpdateAccountResponsableController;
use App\Http\Controllers\espace_responsable\updaye_account\UpdateAccountTechnicienController;
use App\Http\Controllers\espace_responsable\updaye_account\UpdateAccountController;

Route::get('/', function () {
    return view('welcome');
});

/*****************************************************************************************************************ROUTES RESPONSABLES */

/*****ROUTES POUR CREER UN COMPTE RESPONSABLE */

/* Affichage de page creation compte */
Route::get('/espace_responsable/creation_compte', [CreatAccountController::class, 'ViewPage']);

/* Affichage de page creation compte responsable */
Route::get('/espace_responsable/creation_compte/creation_compte_pour_responsable', [CreatAccountResponsableController::class, 'ViewPage']);
Route::post('/espace_responsable/creation_compte/creation_compte_pour_responsable', [CreatAccountResponsableController::class, 'CreateResponsable'])->name('createResponsable');

/* Affichage de page creation compte technicien */
Route::get('/espace_responsable/creation_compte/creation_compte_pour_technicien', [CreatAccountTechnicienController::class, 'ViewPage']);
Route::post('/espace_responsable/creation_compte/creation_compte_pour_technicien', [CreatAccountTechnicienController::class, 'CreateTechnicien'])->name('createTechnicien');

/*Update users account*/
Route::get('/espace_responsable/modifier_compte', [UpdateAccountController::class, 'ViewPage']);
//respoansable
Route::get('/espace_responsable/modifier_compte/modifier_compte_responsable', [ UpdateAccountResponsableController::class, 'ViewPage'])->name('updateResponsable');
Route::post('/espace_responsable/modifier_compte/modifier_compte_responsable', [UpdateAccountResponsableController::class, 'UpdateResponsable'])->name('updateResponsable');
//technicien
Route::get('/espace_responsable/modifier_compte/modifier_compte_technicien', [UpdateAccountTechnicienController::class, 'ViewPage'])->name('updateTechnicien');
Route::post('/espace_responsable/modifier_compte/modifier_compte_technicien', [UpdateAccountTechnicienController::class, 'UpdateTechnicien'])->name('updateTechnicien');


