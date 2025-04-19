<?php

namespace App\Http\Controllers\espace_technicien\authentification;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthTechnicienController extends Controller
{
     //fonction pour afficher la page de connexion
     public function ViewPage()
     {
         return view('espace_technicien.authentification.auth_tech');
     }
}
