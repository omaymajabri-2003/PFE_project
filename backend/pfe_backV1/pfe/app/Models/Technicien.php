<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Technicien extends Model
{
    use HasFactory;
    public $timestamps = false;

    // Définir le nom de la table si nécessaire
    protected $table = 'Technicien';

    // Définir les attributs pouvant être mass-assignés
    protected $fillable = [
        'Matricule_tech',
        'Nom_tech',
        'Email_tech',
        'Mot_de_passe_tech',
        'CIN_tech',
        'Prenom_tech',
    ];

    // Assurez-vous que ces attributs sont des chaînes et non des dates
    protected $casts = [
        'Mot_de_passe_tech' => 'string',
    ];

    // Vous pouvez ajouter d'autres méthodes Eloquent selon vos besoins
}
