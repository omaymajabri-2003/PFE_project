<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Technicien extends Authenticatable
{
    protected $table = 'Technicien'; // Respecte bien la casse exacte

    protected $primaryKey = 'Matricule_tech';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['Email_tech', 'Mot_de_passe_tech'];
    protected $hidden = ['Mot_de_passe_tech'];

    // Remplacer les champs par défaut par les tiens
    public function getAuthPassword()
    {
        return $this->Mot_de_passe_tech;
    }

    public function getAuthIdentifierName()
    {
        return 'Matricule_tech';
    }
}
