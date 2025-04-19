<?php

namespace App\Http\Controllers\espace_responsable\authentification;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthResponsableController extends Controller
{
    //fonction pour afficher la page de connexion
    public function ViewPage()
    {
        return view('espace_responsable.authentification.auth_resp');
    }
}
