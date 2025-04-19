<?php

namespace App\Http\Controllers\espace_responsable\updaye_account;

use App\Http\Controllers\Controller;
use App\Models\Responsable;
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
        // 1. Validation
        $request->validate([
            'matricule_resp_obligatoire' => 'required|string',
            'password_resp' => 'nullable|min:6',
        ], [
            'matricule_resp_obligatoire.required' => '⚠️ Le champ Matricule est obligatoire.',
            'password_resp.min' => '❌ Le mot de passe doit contenir au moins 6 caractères.',
        ]);

        // 2. Recherche du responsable
        $responsable = Responsable::where('Matricule_resp', $request->matricule_resp_obligatoire)->first();

        if (!$responsable) {
            return redirect()->back()->with('error', '❌ Aucun responsable trouvé avec ce matricule.');
        }

        // 3. Préparation des données à mettre à jour
        $data = [];

        if ($request->filled('Prenom_resp')) {
            $data['Prenom_resp'] = $request->Prenom_resp;
        }

        if ($request->filled('Nom_resp')) {
            $data['Nom_resp'] = $request->Nom_resp;
        }

        if ($request->filled('email_resp')) {
            $data['Email_resp'] = $request->email_resp;
        }

        if ($request->filled('cin_resp')) {
            $data['CIN_resp'] = $request->cin_resp;
        }

        if ($request->filled('password_resp')) {
            $data['Mot_de_passe'] = bcrypt($request->password_resp);
        }

        // 4. Vérification
        if (empty($data)) {
            return redirect()->back()->with('error', '⚠️ Aucun champ à modifier. Veuillez remplir au moins un champ.');
        }

        // 5. Mise à jour
        try {
            $responsable->update($data);
            return redirect()->back()->with('success', '✅ Compte responsable mis à jour avec succès.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', '❌ Une erreur est survenue : ' . $e->getMessage());
        }
    }
}
