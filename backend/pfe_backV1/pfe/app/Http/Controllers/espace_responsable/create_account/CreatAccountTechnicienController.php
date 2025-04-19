<?php

namespace App\Http\Controllers\espace_responsable\create_account;

use App\Http\Controllers\Controller;
use App\Models\Technicien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class CreatAccountTechnicienController extends Controller
{
    //fonction pour afficher la page de création de compte
    public function ViewPage()
    {
        return view('espace_responsable.create_account.create_tech');
    }

    public function CreateTechnicien(Request $request)
    {
        // Valider les données
        $request->validate([
            'Matricule_tech' => 'required|string|max:50|unique:Technicien',
            'Nom_tech' => 'required|string|max:100',
            'Email_tech' => 'nullable|email|max:100',
            'Mot_de_passe' => 'required|string|min:8',
            'CIN_tech' => 'required|string|max:20',
            'Prenom_tech' => 'required|string|max:100',
        ]);

        // Créer le technicien
        $technicien = Technicien::create([
            'Matricule_tech' => $request->Matricule_tech,
            'Nom_tech' => $request->Nom_tech,
            'Email_tech' => $request->Email_tech,
            'Mot_de_passe_tech' => Hash::make($request->Mot_de_passe), // Hachage du mot de passe
            'CIN_tech' => $request->CIN_tech,
            'Prenom_tech' => $request->Prenom_tech,
        ]);

        // Ajouter un message flash de succès
        session()->flash('success', 'Compte technicien créé avec succès');

        // Retourner une réponse
        return redirect()->back();
    }
}
