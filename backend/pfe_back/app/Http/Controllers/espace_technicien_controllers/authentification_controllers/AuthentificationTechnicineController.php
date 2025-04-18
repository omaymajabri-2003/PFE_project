<?php

namespace App\Http\Controllers\espace_technicien_controllers\authentification_controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Technicien;


class AuthentificationTechnicineController extends Controller
{
    /**
     * Affiche la vue d'authentification.
     */
    public function view()
    {
        return view('espace_technicien.auth.authentification');
    }

    /**
     * Gère l'authentification du technicien.
     */
    public function Authentification_tech(Request $request)
    {
        $request->validate([
            'Matricule' => 'required|string',
            'Mot_passe' => 'required|string|min:6',
        ]);

        // Recherche de l'utilisateur (administrateur) avec le matricule
        $tech = Technicien::where('matricule', $request->Matricule)->first();

        // Vérification du mot de passe
        if ($tech && Hash::check($request->Mot_passe, $tech->Mot_de_passe_tech)) {
            Auth::login($tech);
            return redirect()->route('profile_admin', ['matricule' => $tech->Matricule_tech]);
        } else {
            // Message d'erreur si l'authentification échoue
            $messageError_matricule = "Erreur : matricule ou mot de passe incorrect.";
            // Retour à la page d'authentification avec le message d'erreur
            return view('espace_technicien\auth\authentification', compact('messageError_matricule'));

        }
    }
    }

