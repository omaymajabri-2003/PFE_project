<?php

namespace App\Http\Controllers\espace_responsable\updaye_account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UpdateAccountResponsableController extends Controller
{
    //fonction pour afficher la page de mise à jour de compte
    public function ViewPage()
    {
        return view('espace_responsable.update_user_information.update_resp');
    }

    public function UpdateResponsable(Request $request)
    {
        //dd($request->all());
        //dd($request->input('nom'));
        //dd($request->input('prenom'));
        //dd($request->input('email'));
        //dd($request->input('password'));
        //dd($request->input('confirm_password'));
        //dd($request->input('telephone'));
        //dd($request->input('adresse'));
        //dd($request->input('role'));

        return redirect()->back()->with('success', 'Compte mis à jour avec succès');
    }
}
