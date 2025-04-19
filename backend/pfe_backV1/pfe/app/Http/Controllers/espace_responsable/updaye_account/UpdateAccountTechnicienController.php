<?php

namespace App\Http\Controllers\espace_responsable\updaye_account;

use App\Http\Controllers\Controller;
use App\Models\Technicien;
use Illuminate\Http\Request;

class UpdateAccountTechnicienController extends Controller
{
    //fonction pour afficher la page de mise à jour de compte
    public function ViewPage()
    {
        return view('espace_responsable.update_user_information.update_tech');
    }

    public function UpdateTechnicien(Request $request)
{
    // 1. Valider le champ obligatoire
    $request->validate([
        'matricule_tech_obligatoire' => 'required|string',
        'password_tech' => 'nullable|min:6',
    ], [
        'matricule_tech_obligatoire.required' => '⚠️ Le champ Matricule est obligatoire.',
        'password_tech.min' => '❌ Le mot de passe doit contenir au moins 6 caractères.',
    ]);

    // 2. Rechercher le technicien
    $technicien = Technicien::where('Matricule_tech', $request->matricule_tech_obligatoire)->first();

    if (!$technicien) {
        return redirect()->back()->with('error', '❌ Aucun technicien trouvé avec ce matricule.');
    }

    // 3. Préparer les données à mettre à jour (seulement si elles sont présentes)
    $data = [];

    if ($request->filled('Prenom_tech')) {
        $data['Prenom_tech'] = $request->Prenom_tech;
    }

    if ($request->filled('Nom_tech')) {
        $data['Nom_tech'] = $request->Nom_tech;
    }

    if ($request->filled('email_tech')) {
        $data['Email_tech'] = $request->email_tech;
    }

    if ($request->filled('cin_tech')) {
        $data['CIN_tech'] = $request->cin_tech;
    }

    if ($request->filled('password_tech')) {
        $data['Mot_de_passe_tech'] = bcrypt($request->password_tech); // hash sécurisé
    }

    if ($request->filled('password_tech')) {
        $data['Matricule_tech'] =$request->matricule_tech;
    }

    // 4. Vérifier s’il y a des données à modifier
    if (empty($data)) {
        return redirect()->back()->with('error', '⚠️ Aucun champ à modifier. Veuillez remplir au moins un champ.');
    }

    // 5. Mise à jour
    try {
        $technicien->update($data);
        return redirect()->back()->with('success', '✅ Compte technicien mis à jour avec succès.');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', '❌ Une erreur est survenue : ' . $e->getMessage());
    }
}
}
