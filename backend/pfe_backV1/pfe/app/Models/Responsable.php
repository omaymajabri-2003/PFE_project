<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Responsable extends Model
{
    use HasFactory;
    public $timestamps = false;
    // Définir le nom de la table si nécessaire
    protected $table = 'Responsable';

    // Définir les attributs pouvant être mass-assignés
    protected $fillable = [
        'Matricule_resp',
        'Nom_resp',
        'Email_resp',
        'Mot_de_passe',
        'CIN_resp',
        'Prenom_resp',
    ];

    // Assurez-vous que ces attributs sont des chaînes et non des dates
    protected $casts = [
        'Mot_de_passe' => 'string',
    ];


}
