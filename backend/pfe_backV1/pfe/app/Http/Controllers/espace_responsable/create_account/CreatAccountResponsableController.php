<?php

namespace App\Http\Controllers\espace_responsable\create_account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Responsable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class CreatAccountResponsableController extends Controller
{
    //fonction pour afficher la page de création de compte
    public function ViewPage()
    {
        return view('espace_responsable.create_account.create_resp');
    }

    //fonction pour créer un compte responsable
    public function CreateResponsable(Request $request)
    {
        // Valider les données
        $request->validate([
            'Matricule_resp' => 'required|string|max:50|unique:Responsable',
            'Nom_resp' => 'required|string|max:100',
            'Email_resp' => 'nullable|email|max:100',
            'Mot_de_passe' => 'required|string|min:8',
            'CIN_resp' => 'required|string|max:20',
            'Prenom_resp' => 'required|string|max:100',
        ]);

        // Créer le responsable
        $responsable = Responsable::create([
            'Matricule_resp' => $request->Matricule_resp,
            'Nom_resp' => $request->Nom_resp,
            'Email_resp' => $request->Email_resp,
            'Mot_de_passe' => Hash::make($request->Mot_de_passe), // Hachage du mot de passe
            'CIN_resp' => $request->CIN_resp,
            'Prenom_resp' => $request->Prenom_resp,
        ]);

        // Ajouter un message flash de succès
        session()->flash('success', 'Compte responsable créé avec succès');

        // Retourner une réponse
        return redirect()->back();
    }
}

