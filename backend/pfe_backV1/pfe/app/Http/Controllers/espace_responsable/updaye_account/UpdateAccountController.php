<?php

namespace App\Http\Controllers\espace_responsable\updaye_account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UpdateAccountController extends Controller
{
    //fonction pour afficher la page de mise à jour de compte
    public function ViewPage()
    {
        return view('espace_responsable.update_user_information.update_choice_user');
    }
}
