<?php

namespace App\Http\Controllers\espace_responsable\create_account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreatAccountController extends Controller
{
    //fonction pour afficher la page de création de compte
    public function ViewPage()
    {
        return view('espace_responsable.create_account.create_account');
    }

}
