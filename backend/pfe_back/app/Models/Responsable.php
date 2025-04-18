<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Responsable extends Authenticatable
{
    protected $table = 'Responsable';
    protected $primaryKey = 'Matricule_resp';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['Nom_resp', 'Email_resp', 'Mot_de_passe'];
    protected $hidden = ['Mot_de_passe'];

    public function getAuthPassword()
    {
        return $this->Mot_de_passe;
    }
}
